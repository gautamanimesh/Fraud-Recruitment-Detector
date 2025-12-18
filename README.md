# Fraud Recruitment Detector 🕵️‍♂️

A machine learning-powered system to detect fraudulent job postings using natural language processing and advanced classification algorithms.

## 📋 Overview

The Fraud Recruitment Detector is designed to identify fake job postings by analyzing job descriptions, titles, requirements, and company profiles. The system uses text preprocessing, feature engineering, and ensemble machine learning models to classify job postings as legitimate or fraudulent with high accuracy.

## 🚀 Features

- **Advanced Text Processing**: Comprehensive preprocessing with lemmatization, stopword removal, and feature extraction
- **Multi-Model Approach**: 
  - Random Forest for interpretability and feature importance analysis
  - SVM with RBF kernel for optimal performance
- **Class Balancing**: SMOTE (Synthetic Minority Over-sampling Technique) to handle imbalanced datasets
- **Rich Visualizations**: 
  - Confusion matrices
  - ROC curves with AUC scores
  - Feature importance plots
- **Comprehensive Feature Engineering**: Combines multiple text fields (title, description, requirements, company profile) for better signal detection

## 🛠️ Technologies Used

- **Python 3.x**
- **Machine Learning**: scikit-learn, imbalanced-learn
- **Natural Language Processing**: NLTK
- **Data Analysis**: pandas, numpy
- **Visualization**: matplotlib, seaborn

## 📁 Project Structure

```
Fraud Recruitment Detector/
├── main.py                    # Main application script
├── README.md                  # Project documentation
├── requirements.txt           # Python dependencies
├── data/
│   └── emscad.csv
└── outputs/                   # Generated visualizations and results
```

## ⚙️ Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/gautamanimesh/Fraud-Recruitment-Detector.git
   cd Fraud-Recruitment-Detector
   ```

2. **Install dependencies**:
   ```bash
   pip install -r requirements.txt
   ```

3. **Download NLTK data** (automatic on first run):
   The script will automatically download required NLTK resources (punkt, stopwords, wordnet, omw-1.4)

## 📊 Dataset

The system expects a CSV file with the following columns:
- `title`: Job title
- `description`: Job description
- `requirements`: Job requirements
- `company_profile`: Company information
- `fraudulent`: Target label (0 = legitimate, 1 = fraudulent)

### Configuration
Update the `DATA_PATH` variable in `main.py` to point to your dataset:
```python
DATA_PATH = 'data/your_dataset.csv'
USE_DUMMY_DATA = False  # Set to True for testing without real data
```

## 🎯 Usage

Run the fraud detection system:

```bash
python main.py
```

### What the script does:

1. **Data Loading & Preprocessing**:
   - Loads and cleans the dataset
   - Combines multiple text fields for comprehensive analysis
   - Applies lemmatization and removes stopwords

2. **Feature Engineering**:
   - Creates TF-IDF vectors with unigrams and bigrams
   - Extracts up to 5,000 most important features

3. **Model Training**:
   - Applies SMOTE for class balancing
   - Trains Random Forest for interpretability
   - Trains SVM-RBF for optimal performance

4. **Evaluation & Visualization**:
   - Generates confusion matrices and ROC curves
   - Displays feature importance analysis
   - Outputs accuracy scores for both models

## 📈 Model Performance

The system employs two complementary models:

- **Random Forest**: Provides interpretability through feature importance analysis
- **SVM with RBF Kernel**: Optimized for maximum classification accuracy

Key metrics evaluated:
- Accuracy Score
- Confusion Matrix
- ROC-AUC Score
- Precision, Recall, and F1-Score

## 🔍 Key Features Detected

The model identifies fraudulent job postings by analyzing patterns in:
- **Urgency indicators**: "urgent", "immediate start"
- **Vague descriptions**: Lack of specific job requirements
- **Suspicious payment methods**: References to wire transfers, unusual payment terms
- **Company profile inconsistencies**: Missing or vague company information
- **Language patterns**: Grammar, writing style, and word choice anomalies

## 📊 Visualization Outputs

The system generates:
1. **Confusion Matrix**: Shows true vs. predicted classifications
2. **ROC Curve**: Displays model performance with AUC score
3. **Feature Importance Plot**: Top 15 most predictive words/phrases

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Gautam Animesh** - *Initial work* - [gautamanimesh](https://github.com/gautamanimesh)

## 🙏 Acknowledgments

- Dataset providers for fraudulent job posting data
- NLTK team for natural language processing tools
- scikit-learn contributors for machine learning algorithms
- Open source community for various Python libraries

## 📞 Support

If you encounter any issues or have questions, please [open an issue](https://github.com/gautamanimesh/Fraud-Recruitment-Detector/issues) on GitHub.

---

**⚠️ Disclaimer**: This tool is designed to assist in identifying potentially fraudulent job postings. Always verify job postings through multiple sources and use your judgment when making decisions about job opportunities.
