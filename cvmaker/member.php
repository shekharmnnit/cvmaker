<?php
session_start();
if(!isset($_SESSION['username']))
echo"<script>alert('You must login first to view this page');window.location='index.php'</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="8/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="8/ninja-slider.js" type="text/javascript"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="form.css" type="text/css">
  <link rel="stylesheet" href="style.css">
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
                        <a class="ns-img" href="temp1.png"></a>
                        <div class="caption">
                            <h3>Dummy Caption 1</h3>
                            
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="temp2.png"></a>
                        <div class="caption">
                            <h3>Dummy Caption 2</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                        </div>
                    </li>
                    <li>
                        <span class="ns-img" style="background-image:url(temp3.png);"></span>
                        <div class="caption">
                            <h3>Dummy Caption 3</h3>
                            <p>Duis fringilla arcu convallis urna commodo, et tempus velit posuere.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="temp4.png"></a>
                        <div class="caption">
                            <h3>Dummy Caption 4</h3>
                            <p>Quisque semper dolor sed neque consequat scelerisque at sed ex. Nam gravida massa.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="temp5.png"></a>
                        <div class="caption">
                            <h3>Dummy Caption 5</h3>
                            <p>Proin non dui at metus suscipit bibendum.</p>
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="temp6.png"></a>
                        <div class="caption">
                            <h3>Dummy Caption 6</h3>
                            <p>shekhar</p>
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
      <li class="active" ><a href="member.php">Home</a></li>
      <li ><a   href="profile.php">Profile</a></li>
      <li ><a href="aboutus_member.php">About us</a></li>
      <li ><a href="#footer">Contact us</a></li>
      <li ><a href="logout.php">Logout</a></li>
    
    </ul>
    
  </div>
</div>

</nav>
<div class="container topbar"  ><div class="wow fadeInDown">
  <p class="text-center"><h2><center> Welcome <?php echo $name;?></center><br>Got stuck in creating resume? Don't know how to make it dynamic? 
  Now leave all your worries behind and create your own proffessional resume in no time with us.So what are you waiting for? Go and sign up for free.</h2><br><br>

  <center><a href="#container"><button type="button" class="btn btn-success sidebutton">BUILD UP NOW</button></a>

</center></p></div>


</div>
<div class="conatiner templates" id="container" >
  <div class="row1 wow fadeInLeft">


    <div class="col-sm-5 "><img src="temp1.png" onclick="lightbox(0)" class="templateeg" /></div>
    


    <div class="col-sm-7 r1c2"><center><h1><a href="temp1.php" class="tempname" target="_blank"><b>GRACIA</b></a></h1></center>
      <h2>A uniquely designed template which will give a dynamic look to your cv. An eyecatching color code which is suitably chosen to fit in every category.</h2><br><br>
      <br><form action="resumeform.php" method="POST">
      <center><button type="submit" name="1" class="btn btn-danger">TRY IT NOW</button></a>
</center></form>
    </div>
  </div>
  <div class="row2 wow fadeInRight">
    <div class="col-sm-7 r2c1"><center><h1><a href="temp2.php" class="tempname" target="_blank"><b>DIGNOUS</b></a></h1></center>
      <h2> This design is focussed on giving your cv a magazine style look which makes it attractive.It's menace appearence is something which makes you choose this.</h2><br><br>
    <br><form action="resumeform.php" method="POST">
      <center><button type="submit" name="2" class="btn btn-danger">TRY IT NOW</button></a>
</center></form>
</div>


    <div class="col-sm-5"><img src="temp2.png" onclick="lightbox(1)" class="templateeg" /></div>


  </div>
  <div class="row3 wow fadeInLeft">


    
     <div class="col-sm-5"><img src="temp3.png" onclick="lightbox(2)" class="templateeg" /></div>
    



    <div class="col-sm-7 r3c2"><center><h1><a href="temp3.php" class="tempname" target="_blank"><b>FEMLION</b></a></h1></center>
      <h2>A simple yet beautiful design to make your cv sobar.Member elements in the form of rows makes it easy to read. With a clean background and simple color
        it comes out to be neat.</h2><br><br>
       <br> <form action="resumeform.php" method="POST">
      <center><button type="submit" name="3" class="btn btn-danger">TRY IT NOW</button></a>
</center></form>
    </div>
  </div>
  <div class="row4 wow fadeInRight">
    <div class="col-sm-7 r4c1"><center><h1><a href="temp4.php" class="tempname" target="_blank"><b>OGREUM</b></a></h1></center>
      <h2>Ogreum's artistic design gives your cv a creative look which makes you stand out.This was made keeping in mind especially fashion designers.So if you
        are one of them,give it a try.</h2><br><br>
       <br> <form action="resumeform.php" method="POST">
      <center><button type="submit" name="4" class="btn btn-danger">TRY IT NOW</button></a>
</center></form>
    </div>





     <div class="col-sm-5"><img src="temp4.png" onclick="lightbox(3)" class="templateeg" /></div>
  




  </div>
  <div class="row5 wow fadeInLeft">





    <div class="col-sm-5"><img src="temp5.png" onclick="lightbox(4)" class="templateeg" /></div>





    <div class="col-sm-7 r5c2"><center><h1><a href="temp5.php" class="tempname" target="_blank"><b>PATRONUM</b></a></h1></center>
      <h2>This eyecatching design comes in a minutely chosen color combination which gives it altogether a wonderful look.All in all it's a desirable design.</h2><br><br>
     <br> <form action="resumeform.php" method="POST">
      <center><button type="submit" name="5" class="btn btn-danger">TRY IT NOW</button></a>
</center></form>
    </div>
  </div>
  <div class="row6 wow fadeInRight">
    <div class="col-sm-7 r6c1"><center><h1><a href="temp6.php" class="tempname" target="_blank"><b>COLORIS</b></a></h1></center>
      <h2>Coloris is a multicolor block desgin.It comes with a wisely chosen color for each block which gives your cv a splendid look.</h2><br><br>
      <br><form action="resumeform.php" method="POST">
      <center><button type="submit" name="6" class="btn btn-danger">TRY IT NOW</button></a>
</center></form>
    </div>






    <div class="col-sm-5"><img src="temp6.png" onclick="lightbox(5)" class="templateeg" /></div>
  







  </div>
</div>


<div class="container wow fadeInUp" id="footer">

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
  </header>
  </body>
  </html>