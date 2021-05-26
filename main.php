<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraud Recruitment Detector</title>
    <link rel = "icon" href="data:image/png;base64,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">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="logo">
    <a href="#"><img src="logo1.jpg"></a>
  </div>
  <div class="aboutus">
    <a href="aboutus.html"><button class="btn btn-primary" type="submit">About Us</button></a>
  </div>

    <div class="shadow">
  
  

    <div class="header">
    <h1 class="heading">FRAUD  RECRUITMENT  DETECTOR</h1>
    
</div>

<div class="recriutmentIntro">
  <p class="recIntro">
    "Online Recruitment Fraud is the main problem for any job seeker. It exposes loss of privacy, economic damage or harms the reputation of the stakeholders of ATS(Application Tracking System). Police departments don’t have the proper resources to trace the hacker who has posted these fake job postings, and it has to be multi million dollar fraud before federal authorities get involved, so the scammers just keep getting away with it."
  </p>
</div>
<form  action="" method="POST" >


<div id="body">

    <div class="telecommuting">
        <p class="teleheading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
          </svg><b>Telecommuting:</b></p> 
          <input type="radio" id="yes" name="tcommuting" value="yes">
  <label for="Yes">Yes</label>
  <input type="radio" id="no" name="tcommuting" value="no">
  <label for="no">No</label><br><br<br>
    </div>

    <br><br<br>

    <div class="clogo">
        <p class="comheading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
          </svg><b>Company Logo:</b></p>
        <input type="radio" id="yes" name="companylogo" value="Yes">
        <label for="Yes">Yes</label>
        <input type="radio" id="no" name="companylogo" value="no">
        <label for="no">No</label>

    </div>
    <br><br<br>

    <div class="takeinterview">
        <p class="pinterviewheading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
            <path d="M6.002 14a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm.195-12.01a1.81 1.81 0 1 1 3.602 0l-.701 7.015a1.105 1.105 0 0 1-2.2 0l-.7-7.015z"/>
          </svg><b>Take Interview:</b></p>
        <input type="radio" id = "yes" name="interview" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="interview" value="no">
        <label for="no">No</label>
    </div>
    <br><br<br>

   <div class="employmenttype">
       <p class="employmenttypeheading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z"/>
        <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z"/>
      </svg><b>Employment Type:</b></p>
       <!-- <label for="etype">Select:</label> -->

       <select name="etype" id="etype">
        <option value="select">Select</option>
         <option value="contract">Contract</option>
         <option value="ftime">Full-Time</option>
         <option value="ptime">Part-Time</option>
         <option value="temporary">Temporary</option>
         <option value="other">Other</option>
         <option value="notmentioned">Not mentioned</option>
       </select>
</div>
       <br><br<br>
    
       <div class="education">
           <p class="eduheading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg><b>Required Education:</b></p>
           <label for="edu"></label>

           <select name="edu" id="edu">
            <option value="select">Select</option>
             <option value="adegree">Associate Degree</option>
             <option value="bdegree">Bachelors Degree</option>
             <option value="certification">Certification</option>
             <option value="doctorate">Doctorate</option>
             <option value="highschool">High school or Equivalent</option>
             <option value="masterdegree">Master's Degree</option>
             <option value="collegeworkcompleted">Some College work completed</option>
             <option value="notmentioned">Not mentioned</option>
           </select>
    
       </div>
       <br><br><br>
       <!-- <button type="button" class="btn btn-primary btn-sm"><b>Submit </b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
      </svg>
       </button> -->
       <input type="submit" value="Submit" id="submit" name="submit">  
</div>
</div>
</div>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $t=$_POST["tcommuting"];
    $cl= $_POST["companylogo"];
    $ti=$_POST["interview"];
    $et=$_POST["etype"];
    $re=$_POST["edu"];
   $total=0;  
if($t=='yes')
$total+=2;
else
$total+=1;
if($cl=='no')
$total+=8;
else
$total+=1;
if($ti=='no')
$total+=3;
else
$total+=1;
if($et=='contract')
$total+=3;
else if($et=='ftime')
$total+=5;
else if($et=='ptime')
$total+=10;
else if($et=='temporary')
$total+=1;
else if($et=='other')
$total+=7;
else if($et=='notmentioned')
$total+=7;

if($re=='adegree')
$total+=1;
else if($re=='bdegree')
$total+=1;
else if($re=='certification')
$total+=2;
else if($re=='doctorate')
$total+=1.5;
else if($re=='highschool')
$total+=8;
else if($re=='masterdegree')
$total+=2;
else if($re=='collegeworkcompleted')
$total+=1;
else if($re=='notmentioned')
$total+=1.5;

$percent=$total/31;
$val=$percent*100;
$format=number_format($val, 2);
echo("<p style='color:red;font-size:30px ;text-align:center;'>The job ad is $format % probable to be a fraud.</p>");

}
?>
