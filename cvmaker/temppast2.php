<?php
session_start();
$db=mysqli_connect("localhost","root","","cvusers");
if(!isset($_SESSION['username']))
  echo"<script>alert('Acess Denied');window.location='index.php'</script>";
$ida=$_SESSION['ida'];
$username=$_SESSION['username'];
$g=mysqli_query($db,"SELECT*FROM resumes where username='$username' AND templatetype='temp2'");
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
  <link rel="stylesheet" href="temp2.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  body{
  background-image: url("cvback2.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  font-family: <?php echo $font; ?>;
}
.color{
  background-color: <?php echo $color; ?>;
  height: 35px;
}
  </style>
  </head>
  <body>
    <div class="rows">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8 ">
        <div class="color">
        </div>
        <div class=" profilepic">
      <div class=" col-sm-4 ">
        <span class="profileimg">
        <?php echo"<img class='img-circle h' src='pics/".$image."'>"; ?></span></div><div class="col-sm-8 name"><h1 ><?php echo $name; ?></h1></div></div>
        <div class="col-sm-4 col1">
          <b><h2><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>  Interests</h2></b><br>
         <?php echo $interests; ?><br><hr>
          <b><h2 ><i class="material-icons" style="font-size:36px">&#xe0b0;</i>  Contact</h2></b><br>
          <b>Mob no.</b> <br><?php echo $phoneno; ?><br>
<b>Email:</b><br> <?php echo $email; ?><br>
<b>Address:</b><br> <?php echo $address; ?>
        </div>
        <div class="col-sm-8 col2">
          <b><h2 class="profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profile</h2></b><br>
         <?php echo $profile; ?>
         <hr>
    <b><h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Education </h2></b><br>
    <?php echo $eductaion; ?><hr>
    <b><h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Professional Skills </h2></b><br>
    <?php echo $professionskills; ?><hr>
    <b><h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Projects </h2></b><br>
    <?php echo $project;  ?> 
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

