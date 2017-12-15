<?php
session_start();
if(!isset($_SESSION['username']))
  echo"<script>alert('Acess Denied');window.location='index.php'</script>";


$db=mysqli_connect("localhost","root","","cvusers");
$username=$_SESSION['username'];
$g=mysqli_query($db,"SELECT*FROM userdetails where username='$username'");
$row =mysqli_fetch_assoc($g);
$name=$row['name'];
$email=$row['email'];
$profilepic=$row['profilepic'];
?>
<!DOCTYPE html>
<html>
<head>
<title>
Xyz
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="8/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="8/ninja-slider.js" type="text/javascript"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="form.css" type="text/css"> -->
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="animate.css">
 
  <script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              <script>
       


        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                var ninjaSldr = document.getElementById("ninja-slider");
                ninjaSldr.parentNode.style.display = "none";
            }
        }
    </script>
 



  </head>
  <body>
 





<div style="display:none;">
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
                    <li>
                        <a class="ns-img" href="resume1.jpg" style="height:900px;"></a>
                        <div class="caption">
                            <h3>Resume 1</h3>
                            
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="resume2.jpg" style="height:900px;"></a>
                        <div class="caption">
                            <h3>Resume 2</h3>
                            
                        </div>
                    </li>
                    <li>
                        <span class="ns-img" style="background-image:url(resume3.png); height:900px;" ></span>
                        <div class="caption">
                            <h3>Resume 3</h3>
                            
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="resume4.png" style="height:900px;"></a>
                        <div class="caption">
                            <h3>Resume 4</h3>
                            
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="resume5.gif" style="height:900px;"></a>
                        <div class="caption">
                            <h3>Resume 5</h3>
                            
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="resume6.jpg" style="height:900px;"></a>
                        <div class="caption">
                            <h3>Resume 6</h3>
                            
                        </div>
                    </li>
                </ul>
                <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
    </div>










  <header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand active" >XYZ</a>
    </div>
    <div class="colllapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li  ><a href="member.php">Home</a></li>
      <li class="active"><a   href="profile.php">Profile</a></li>
      
      <li ><a href="aboutus.php">About us</a></li>
      <li ><a href="#footer">Contact us</a></li>
      <li ><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

</nav>
<div class="topbar">
  <!-- <div class="col-sm-7 wow fadeInDown"> -->
<h1 class="h11">Design.Create.Get Hired.</h1>
<p class="fullstop">.</p>
<!-- </div> -->
<!-- <div class="col-sm-5"></div> -->
</div>
<div class="content">
  <div class="col-sm-3 col1">
   <?php echo"<img class='profilepic' src='pics/".$profilepic."'>"; ?> 
   <div class="sidebar">
    <h2><?php echo $name; ?><br><br>
    <?php echo $email; ?></h2><br><br>

      <button type="button" class="btn btn-info sidebutton" >Choose Profile Pic</button><br>

    <form method="POST" action="profilepic1.php" enctype="multipart/form-data" >
      <input type="file" name="image1" /><br>
      <input type="submit"  value="Change Profile Pic" style="color:black;" /><br>
     
    </form><br>
    <center><a href="yourresumes.php"><button type="button" class="btn btn-danger sidebutton" >YOUR RESUMES</button></a>
</center><br><br>
    <center><a href="member.php"><button type="button" class="btn btn-success sidebutton">BUILD UP NOW</button></a>
</center><br>
<br>
<center><a  data-toggle="modal" href="#myModal"><button type="button" class="btn btn-warning sidebutton">FEEDBACK</button></a>
</center><br><br>
<center><a  data-toggle="modal" href="#myModal1"><button type="button" class="btn btn-default sidebutton">CHANGE PASSWORD</button></a>
</center>
   </div>
  </div>
  <div class="col-sm-9 col2">

<div id="myCarousel" class="carousel slide start" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="temp1.png" alt="tmeplate1">
    </div>

    <div class="item">
      <img src="temp2.png" alt="template2">
    </div>

    <div class="item">
      <img src="temp3.png" alt="template3">
    </div>
    <div class="item">
      <img src="temp4.png" alt="template4">
    </div>
    <div class="item">
      <img src="temp5.png" alt="template5">
    </div>
    <div class="item">
      <img src="temp6.png" alt="template6">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br><br><br>
<div class="post1">
  <h1><b>6 Essential tips for writing a good resume</b></h1>
  Hiring managers and recruiters alike say they've seen more poorly written resumes cross their desks recently than ever before. Attract more interview offers and ensure your resume doesn't eliminate you from consideration by following these six key tips:

<h2><b>1.Format Your Resume Wisely "Do the Hiring Managers" Work for Them</b></h2>

No matter how well written, your resume won't get a thorough reading the first time through. Generally a resume gets scanned for 25 seconds. Scanning is more difficult if it is hard to read, poorly organized or exceeds two pages.
<ul>
<li>Use a logical format and wide margins, clean type and clear headings</li>
<li>Selectively apply bold and italic typeface that help guide the reader's eye</li>
<li>Use bullets to call attention to important points (i.e. accomplishments)</li>
</ul>
<h2><b>2.Identify Accomplishments not Just Job Descriptions</b></h2>

Hiring managers, especially in technical fields like engineering, seek candidates that can help them solve a problem or satisfy a need within their company. Consequently, you can't be a solution to their problems without stating how you solved similar problems in other companies and situations.
<ul>
<li>Focus on what you did in the job, NOT what your job was there's a difference</li>
<li>Include a one or two top line job description first, then list your accomplishments</li>
<li>For each point ask yourself, What was the benefit of having done what I did?</li>
<li>Accomplishments should be unique to you, not just a list of what someone else did</li>
<li>Avoid using the generic descriptions of the jobs you originally applied for or held</li>
</ul>
<h2><b>3.Quantify Your Accomplishments</b></h2>

Q: What's the most common resume mistake?
A: Making too many general claims and using too much industry jargon that does not market the candidate. A resume is a marketing document designed to sell your skills and strengths rather than just portray a bio of the candidate.
<ul>
<li>Include and highlight specific achievements that present a comprehensive picture of your marketability</li>
<li>Quantify your achievements to ensure greater confidence in the hiring manager and thereby generate interest percentages, dollars, number of employees, etc.</li>
<li>Work backwards to quantify your accomplishments by asking, If I had not done X, what could have happened?</li>
</ul>
<h2><b>4.Cater Your Resume for the Industry</b></h2>

Unlike advertising and design professionals who have greater creative license in designing their resume for those fields, the mechanical engineering industry won't be impressed and may be turned off by distinctive resume design.
<ul>
<li>Err on the side of being conservative stylistically</li>
<li>Your accomplishments, error-free writing, grammatically-correct, clean, crisp type and paper will make the impression for you</li>
</ul>
<h2><b>5.Replace your Objective" with a "Career Summary"</b></h2>

A Career Summary is designed to give a brief overview of who you are and what you do. Most Objectives sound similar: Seeking a challenging, interesting position in X where I can use my skills of X, Y, and Z to contribute to the bottom line. Not telling at all.
<ul>
<li>Grab a hiring manager's attention right from the beginning, remembering you</li>
<li>have only 25 few seconds to make a good impression</li>
<li>Spend time developing a summary that immediately gets their attention, and accurately and powerfully describes you as a solution to their problems</li>
</ul>
<h2><b>6.Network. Network. Network.</b></h2>

For unemployed candidates, handing out resumes should be a full-time job. The majority of mid- to senior-level positions are filled through networking, so contact absolutely everyone you know in addition to recruiters who are in a position to hire you or share insights. Networking can include
<ul>
<li>Personal business contacts, people you've worked for or who worked for you</li>
<li>Vendors and sales representatives you've dealt with in the past five years</li>
<li>People listed in the alumni directory of your alma mater</li>
<li>With a solid resume in hand you'll greatly increase your odds of earning a closer look and getting that interview.</li>
</ul>
</div><br><br><br><br>
<div class="post2">
  <h1><b>Some good resume examples</b></h1><br><br><br>
  <div class="col-sm-4"><img src="resume1.jpg" onclick="lightbox(0)" class="resumeeg" /><br><br><br><img src="resume2.jpg" onclick="lightbox(1)" class="resumeeg" /></div>
  <div class="col-sm-4"><img src="resume3.png" onclick="lightbox(2)" class="resumeeg" /><br><br><br><img src="resume4.png" onclick="lightbox(3)" class="resumeeg" /></div>
  <div class="col-sm-4"><img src="resume5.gif" onclick="lightbox(4)" class="resumeeg" /><br><br><br><img src="resume6.jpg" onclick="lightbox(5)" class="resumeeg" /></div>.
</div>
</div>
</div>
<div class="container" id="footer">

<h3>XYZ<span class="glyphicon glyphicon-copyright-mark"></span>All rights reserved.</h3><hr><br><br>

<div class="row">
  <div class="col-sm-4">
     <h3>Email:</h3><br>
     vaibhavraizada.28398@gmail.com<br>
     shekhark221@gmail.com    
  </div>
  <div class="col-sm-4">
    <h3>Mobile:</h3><br>
    7753846243<br>
    7388341343
  </div>
  <div class="col-sm-4">
    <h3>Contact us on facebook:</h3>
    <h3><a href="https://www.facebook.com/vaibhav.raizada.18" target="_">Vaibhav Raizada</a><br></h3>
    <h3><a href="https://www.facebook.com/profile.php?id=100006482882966" target="_">Shekhar Kumar</a></h3>
      
  </div>
</div><hr>

</div>
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content" style="background-color:black;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white">Change Password</h4>
        </div>
<div class="modal-body"> 
<div class="body-content"  >
  <div class="module" style="color:white; font-family:cursive">
  
    <form class="form" action="password.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="form-group">
      <input class="form-control" type="text" placeholder="Old Password" name="oldpassword" required />
      </div>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="New Password" name="newpassword" required />
      </div>
      <div class="form-group">
      <input class="form-control" type="password" placeholder="Confirm Password" name="confirmnewpassword" required />
      </div>
      
      <input type="submit" value="Change" name="register" class="btn btn-block btn-primary" />
        </form>
  </div>
</div>
  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" >
    
      <div class="modal-content" style="background-color:black;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white">Feedback</h4>
        </div>
<div class="modal-body"> 
<div class="body-content" >
  <div class="module" style="color:white; font-family:cursive">
    <div class="feedback"></div>
<center><h1>Feedback form</h1></center>

<form class="form" action="feedback.php" method="post">
      <p>Full Name</p>
      <div class="form-group">
      <input class="form-control" type="text" placeholder="User Name" name="username" style="background-color:white; "required />
      </div>
      <p>E-mail</p>
       <div class="form-group">
      <input class="form-control" type="email" placeholder="E-mail" name="email" style="background-color:white;" required />
      </div>
      <p>Phone no.</p>
      <div class="form-group">
      <input class="form-control" type="number" placeholder="Phone no." name="number" required />
      </div>
      <p>Appreciation</p>
      <p class="text">
        <textarea name="text1" class="validate[required,length[6,300]] feedback-input form-control" id="comment" placeholder="if any(max 50 word)"></textarea>
      </p>
      <p>Criticism</p>
      <p class="text">
        <textarea name="text2" class="validate[required,length[6,300]] feedback-input form-control" id="comment" placeholder="if any(max 50 word)"></textarea>
      </p>
      <p>Suggestions</p>
      <p class="text">
        <textarea name="text3" class="validate[required,length[6,300]] feedback-input form-control" id="comment" placeholder="Suggestions(max 50 word)"required></textarea>
      </p>
      
      <input type="submit" value="Submit" name="register" class="btn btn-block btn-primary" style="background-color:gray"/>
  
    </form>    
    </div>
    
  </div>
</div>
  </div>
</body>
</html>