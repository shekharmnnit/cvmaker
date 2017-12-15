<?php
session_start();
$db=mysqli_connect("localhost","root","","cvusers");
if(!isset($_SESSION['username']))
  echo"<script>alert('Acess Denied');window.location='index.php'</script>";
$ida=$_SESSION['ida'];
$username=$_SESSION['username'];
$g=mysqli_query($db,"SELECT*FROM resumes where username='$username' AND templatetype='temp3'");
$row =mysqli_fetch_array($g,MYSQL_ASSOC);
$name=$row['name'];
$email=$row['email'];
$phoneno=$row['phoneno'];
$profile=$row['profile'];
$project=$row['project'];
$professionskills=$row['professionalskill'];
$eductaion=$row['education'];
$address=$row['address'];
$interests=$row['interests'];
$font=$row['font'];
$color=$row['colorscheme'];
$image=$row['image'];
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="temp3.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">body{
  background-image: url("cvback2.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  font-family: <?php echo $font; ?>;
}
.profile
{
  height: 40px;
  padding: 0px;
  font-size: 30px;
  border: solid <?php echo $color; ?>;
}
.top{
  background-color: <?php echo $color; ?>;
  height: 35px;
}
</style>
  </head>
  <body>
  	<div class="rows">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
        <div class="top">
        </div><div class="main">
        <div class="name">
        <center><h1><?php echo $name; ?></h1></center>
        </div>
        <div class="contact">
          <hr>
        <div class="col-sm-4">
        <center><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php echo $email; ?></center></div>
        <div class="col-sm-4"><center><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <?php echo $address; ?></center>
        </div>
        <div class="col-sm-4"><center><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> <?php echo $phoneno; ?></center>
        </div><br><hr>
      </div>
      <div class="profile"><center><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</center></div>
      <div class="profile1">
        <div class="col-sm-4"><center><?php echo"<img class=' profileimg' src='pics/".$image."'>"; ?></center></div>
        <div class="col-sm-8">
        <?php echo $profile; ?></div>
      </div>
    
          <div class="profile"><center><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Education</center></div><br>
         <div class="education"> <?php echo $eductaion; ?></div><br>
     <div class="profile"><center><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Professional Skills</center></div><br>
     <div class="professional"><?php echo $professionalskills; ?></div><br>
          <div class="profile"><center><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Projects</center></div><br>
<div class="projects">  <?php echo $project; ?></div><br>
                <div class="profile"><center><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Interests</center></div><br>
                <div class="interests"><?php echo $interests; ?></div>

</div>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

  </body>
</html>



