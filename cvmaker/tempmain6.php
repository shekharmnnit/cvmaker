<?php
session_start();
if((!isset($_POST["submit"])&&!isset($_POST["preview"]))&&(isset($_SESSION['username'])))
echo"<script>alert('Acess Denied');window.location='member.php'</script>";
else if ((!isset($_POST["submit"])&&!isset($_POST["preview"]))&&(!isset($_SESSION['username']))) {
  echo"<script>alert('Acess Denied');window.location='index.php'</script>";
}
$name=$_POST["name"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$address=$_POST["address"];
$eductaion=$_POST["eductaion"];
$professionskills=$_POST["professionalskills"];
$profile=$_POST["profile"];
$project=$_POST["projects"];
$interests=$_POST["interests"];
$font=$_POST["fonts"];
$temp="temp6";
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
{   if($name==""||$email==""||$phoneno==""||$address==""||$eductaion==""||$professionskills==""||$profile==""||$interests==""||$font=="")
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
  <link rel="stylesheet" href="temp6.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  body{
  background-image: url("cvback2.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  font-family: <?php echo $font; ?>;
}
</style>
  </head>
  <body>
  <div class="rows">
      <div class="col-sm-2"></div>
    <div class="col-sm-8 cv">
      <div class="col-sm-4 col1">
        <?php echo"<img class='profileimg' src='pics/".$image."'>"; ?>
        <div class="sidebar">
          <h1><?php echo $name; ?></h1><hr>
          <b><h2 class="profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profile</h2></b><br>
          <?php echo $profile; ?>.<hr>
    <b><h2 ><i class="material-icons" style="font-size:36px">&#xe0b0;</i>  Contact</h2></b><br>
          <b>Mob no.</b> <br><?php echo $phoneno; ?><br>
<b>Email:</b><br> <?php echo $email; ?><br>
<b>Address:</b><br> <?php echo $address; ?>
        </div>
      </div>
      <div class="col-sm-8 col2">
        <div class="education">
         <b><h2><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Education </h2></b><br>
   <?php echo $eductaion; ?>
    </div><br>
        <div class="interests">
          <b><h2><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>  Interests</h2></b><br>
          <?php echo $interests; ?>
        </div><br>
        <div class="projects">

    <b><h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Projects </h2></b><br>
    <?php echo $project; ?></div>
        <br><div class="professionalskills">
        <b><h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Professional Skills </h2></b><br>
    <?php echo $professionskills; ?>
    </div></div>
    </div>
    <div class="col-sm-2"></div>
  </div>
  <button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
  </body>
  </html>