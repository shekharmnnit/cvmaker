<?php
require('function.php');
session_start();
if((!isset($_POST["submit"])&&!isset($_POST["preview"]))&&(isset($_SESSION['username'])))
echo"<script>alert('Acess Denied');window.location='member.php'</script>";
else if ((!isset($_POST["submit"])&&!isset($_POST["preview"]))&&(!isset($_SESSION['username']))) {
  echo"<script>alert('Acess Denied');window.location='index.php'</script>";
}
$name=validate($_POST["name"]);
$email=validate($_POST["email"]);
$phoneno=validate($_POST["phoneno"]);
$address=validate($_POST["address"]);
$eductaion=validate($_POST["eductaion"]);
$professionskills=validate($_POST["professionalskills"]);
$profile=validate($_POST["profile"]);
$project=validate($_POST["projects"]);
$interests=validate($_POST["interests"]);
$font=validate($_POST["fonts"]);
$temp="temp1";

$allowed=array('jpg','jpeg','png');
  $image=$_FILES['image']['name'];
$ext=strtolower(end(explode('.',$image)));
if(in_array($ext,$allowed)===true)
{
  $target="pics/".basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'],$target);
  }
  else
   { 
    if($image!="")
      {echo "<script>alert('Invalid image');</script>";
 die();}}

if(isset($_SESSION['username'])&&isset($_POST["submit"]))
{
  if($name==""||$email==""||$phoneno==""||$address==""||$eductaion==""||$professionskills==""||$profile==""||$interests==""||$font=="")
    echo "<script>alert('Fill all the details');window.location='member.php';</script>";
  $username=$_SESSION['username'];
$db=new MYSQLi("localhost","root","","cvusers");
$ins_query= "INSERT INTO resumes (username,name,email,phoneno,profile,project,education,professionalskill,address,interests,font,templatetype,image) VALUES ('$username','$name','$email','$phoneno','$profile','$project','$eductaion','$professionskills','$address','$interests','$font','$temp','$image')";
mysqli_query($db,$ins_query);
}
else if(isset($_POST["submit"]))
{

  if($name==""||$email==""||$phoneno==""||$address==""||$eductaion==""||$professionskills==""||$profile==""||$interests==""||$font=="")
    echo "<script>alert('Fill all the details');window.location='index.php'</script>";
}
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
  <link rel="stylesheet" href="tempmain1css.php">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="print" href="print.css">
  <style type="text/css">
  body{
background-image: url("cvback2.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  color: white;
    font-family: <?php echo $font;?>
  }
  
  </style>
  </head>
  <body>
  	<div class="rows"  >
  	<div class="col-sm-2">
      
    </div>
  	
  	<div class="col-sm-8 cv" style="background-image: url('cvback1.jpg')" >
  		<div class="row1">
  			<div class="col-sm-3 col1">
     <div class=""><?php echo"<img class='img-circle profilepic' src='pics/".$image."'>"; ?>
     </div>
     <hr><h2><?php echo $name; ?></h2><hr>
     

     <center><h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1><h3>PROFILE</h3></center>
   <b><?php echo $profile; ?></b><br>
<center><h1><i class="material-icons" style="font-size:48px">&#xe0b0;</i></h1>
<h3>CONTACT</h3></center><br>
<b>Mob no.</b> <br><?php echo $phoneno; ?><br>
<b>Email:</b><br> <?php echo $email; ?><br>
<b>Address:</b><br> <?php echo $address; ?>
   </div>
     <div class="col-sm-9 col2">
      <center><h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span></h1><h3>EDUCATION</h3></center><hr>
      <b> <?php echo $eductaion; ?></b>
      <br>
      <hr>
      <center><h1><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></h1><h3>PROFESSIONAL SKILLS</h3></center>
      <hr>
      <b><?php echo $professionskills; ?></b><hr>
<center><h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></h1><h3>PROJECTS</h3></center>
      <hr>
      <b>
      <?php echo $project; ?></b>
     </div>
 </div>
  	</div>

  	<!-- <div class="col-sm-5 col2">
  		bhjvgcvytgvuhbgkjbjk
  	</div> -->
  
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