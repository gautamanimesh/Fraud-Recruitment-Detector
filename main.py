import pandas as pd
import numpy as np
import re
import nltk
import matplotlib.pyplot as plt
import seaborn as sns
from nltk.corpus import stopwords
from nltk.stem import WordNetLemmatizer
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score, roc_curve, auc
from imblearn.over_sampling import SMOTE

# --- CONFIGURATION ---
DATA_PATH = 'data/emscad.csv'
USE_DUMMY_DATA = False

# --- 1. SETUP & PREPROCESSING ---
def setup_nltk():
    resources = ['punkt', 'stopwords', 'wordnet', 'omw-1.4']
    for res in resources:
        try:
            nltk.data.find(f'tokenizers/{res}')
        except LookupError:
            nltk.download(res, quiet=True)

setup_nltk()
lemmatizer = WordNetLemmatizer()
stop_words = set(stopwords.words('english'))

def load_data(filepath):
    if not USE_DUMMY_DATA and filepath:
        try:
            df = pd.read_csv(filepath)
            
            # Instead of just 'description', we merge all text columns.
            # This captures signals like "urgent" in the title or "wire transfer" in requirements.
            df = df.fillna('')
            df['text_combined'] = (
                df['title'] + " " + 
                df['description'] + " " + 
                df['requirements'] + " " + 
                df['company_profile']
            )
            
            df['description'] = df['text_combined']
            return df[['description', 'fraudulent']]
            
        except FileNotFoundError:
            print(f"File not found at {filepath}. Switching to Dummy Data.")

def preprocess_text(text):
    text = re.sub(r'[^a-zA-Z]', ' ', str(text).lower())
    tokens = nltk.word_tokenize(text)
    return ' '.join([lemmatizer.lemmatize(w) for w in tokens if w not in stop_words and len(w)>2])

# --- 2. VISUALIZATION MODULES ---
def plot_confusion_roc(model, X_test, y_test, y_pred, model_name):
    fig, axes = plt.subplots(1, 2, figsize=(14, 6))
    
    # Confusion Matrix
    cm = confusion_matrix(y_test, y_pred)
    sns.heatmap(cm, annot=True, fmt='d', cmap='Blues', ax=axes[0], cbar=False)
    axes[0].set_title(f'Confusion Matrix ({model_name})')
    axes[0].set_xlabel('Predicted'); axes[0].set_ylabel('Actual')
    axes[0].set_xticklabels(['Legit', 'Fraud']); axes[0].set_yticklabels(['Legit', 'Fraud'])

    # ROC Curve
    y_prob = model.predict_proba(X_test)[:, 1]
    fpr, tpr, _ = roc_curve(y_test, y_prob)
    roc_auc = auc(fpr, tpr)
    axes[1].plot(fpr, tpr, color='darkorange', lw=2, label=f'AUC = {roc_auc:.2f}')
    axes[1].plot([0, 1], [0, 1], 'k--')
    axes[1].set_title(f'ROC Curve ({model_name})')
    axes[1].set_xlabel('False Positive Rate'); axes[1].set_ylabel('True Positive Rate')
    axes[1].legend()
    
    plt.tight_layout()
    plt.show()

def plot_top_features(vectorizer, model):
    feature_names = vectorizer.get_feature_names_out()
    importances = model.feature_importances_
    indices = np.argsort(importances)[::-1][:15] # Top 15
    
    plt.figure(figsize=(10, 6))
    sns.barplot(x=importances[indices], y=[feature_names[i] for i in indices], palette="viridis")
    plt.title('Top Predictive Words (Feature Importance)')
    plt.xlabel('Importance Score')
    plt.tight_layout()
    plt.show()

# --- 3. MAIN EXECUTION FLOW ---
def main():
    # A. Data Loading
    print(">>> Loading Data...")
    df = load_data(DATA_PATH)
    print(f"    Data Shape: {df.shape}")

    # B. Preprocessing
    print(">>> Preprocessing Text (Lemmatization)...")
    df['clean_text'] = df['description'].apply(preprocess_text)

    # C. Split (Stratified)
    X_train_raw, X_test_raw, y_train, y_test = train_test_split(
        df['clean_text'], df['fraudulent'], test_size=0.2, random_state=42, stratify=df['fraudulent']
    )

    # D. Vectorization (TF-IDF)
    print(">>> Vectorizing (TF-IDF)...")
    tfidf = TfidfVectorizer(max_features=5000, ngram_range=(1,2))
    X_train_vec = tfidf.fit_transform(X_train_raw)
    X_test_vec = tfidf.transform(X_test_raw)

    # E. Balancing (SMOTE)
    print(">>> Balancing Classes (SMOTE)...")
    smote = SMOTE(random_state=42)
    X_train_bal, y_train_bal = smote.fit_resample(X_train_vec, y_train)

    # F. Model 1: Random Forest (For Feature Importance)
    print("\n>>> Training Random Forest (for Interpretability)...")
    rf = RandomForestClassifier(n_estimators=100, random_state=42)
    rf.fit(X_train_bal, y_train_bal)
    rf_pred = rf.predict(X_test_vec)
    print(f"    RF Accuracy: {accuracy_score(y_test, rf_pred):.4f}")
    
    # G. Model 2: SVM RBF (For Performance)
    print("\n>>> Training SVM-RBF (for Performance)...")
    svm = SVC(kernel='rbf', probability=True, random_state=42)
    svm.fit(X_train_bal, y_train_bal)
    svm_pred = svm.predict(X_test_vec)
    print(f"    SVM Accuracy: {accuracy_score(y_test, svm_pred):.4f}")

    # H. Output & Visualization
    print("\n>>> Generating Visualizations...")
    print("    1. ROC/Confusion Matrix for SVM (Best Model)")
    plot_confusion_roc(svm, X_test_vec, y_test, svm_pred, "SVM-RBF")
    
    print("    2. Feature Importance from Random Forest (Interpretability)")
    plot_top_features(tfidf, rf)

if __name__ == "__main__":
    main()