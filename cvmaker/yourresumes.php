<?php
session_start();
if(!isset($_SESSION['username']))
  echo"<script>alert('Acess Denied');window.location='index.php'</script>";
?>
<!DOCTYPE html>
<html>
<head><title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="yourresumes.css">
<script>alert(bye);
$("#targetDIV").append("<div>hello world</div>");
function jsfunction()
{ hi
	$("#targetDIV").append("<div>hello world</div>");
	$(document).ready(function{
$("<div>Resume</a></div>").appendTo("#targetDIV")});
}
<?php echo "jsfunction();";?>
</script>
</head>
<body>
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
<div id="targetDIV">
<script >alert(bye);
$("#targetDIV").append("<div>hello world</div>");
function jsfunction()
{ hi
	$("#targetDIV").append("<div>hello world</div>");
	$(document).ready(function{
$("<div>Resume</a></div>").appendTo("#targetDIV")});
}
<?php echo "jsfunction();";?>
</script></div></body>
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
</html>
<?php


$db=new MYSQLi("localhost","root","","cvusers");
$username=$_SESSION['username'];
$a="SELECT * from resumes WHERE username='$username'";
$result=mysqli_query($db,$a);
while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
{
	
	$templatetype=$row['templatetype'];
	$ida=$row['ida'];
if($templatetype=='temp1'){

$_SESSION['ida']=$ida;
		echo '<script type="text/javascript">',
     '$("<div><br><a href=\"temppast1.php\"><button type=\"button\" class=\"btn btn-success sidebutton\">Resume</button></a><br></div>").appendTo("#targetDIV")',
     '</script>'
;}if($templatetype=='temp2'){
	$_SESSION['ida']=$ida;
		echo '<script type="text/javascript">',
     '$("<div><br><a href=\"temppast2.php\"><button type=\"button\" class=\"btn btn-success sidebutton\">Resume</button></a><br></div>").appendTo("#targetDIV")',
     '</script>'
;}if($templatetype=='temp3'){
	$_SESSION['ida']=$ida;
		echo '<script type="text/javascript">',
     '$("<div><br><a href=\"temppast3.php\"><button type=\"button\" class=\"btn btn-success sidebutton\">Resume</button></a><br></div>").appendTo("#targetDIV")',
     '</script>'
;}		
if($templatetype=='temp4'){
	$_SESSION['ida']=$ida;
		echo '<script type="text/javascript">',
     '$("<div><br><a href=\"temppast4.php\"><button type=\"button\" class=\"btn btn-success sidebutton\">Resume</button></a><br></div>").appendTo("#targetDIV")',
     '</script>'
;}if($templatetype=='temp5'){
	$_SESSION['ida']=$ida;
		echo '<script type="text/javascript">',
     '$("<div><br><a href=\"temppast5.php\"><button type=\"button\" class=\"btn btn-success sidebutton\">Resume</button></a><br></div>").appendTo("#targetDIV")',
     '</script>'
;}if($templatetype=='temp6'){
	$_SESSION['ida']=$ida;
		echo '<script type="text/javascript">',
     '$("<div><br><a href=\"temppast6.php\"><button type=\"button\" class=\"btn btn-success sidebutton\">Resume</button></a><br></div>").appendTo("#targetDIV")',
     '</script>'
;}

	
	// echo "jsfunction();";
// <form method=\"POST\" action=\"temppast1.php\"><input<input type=\"submit\" value=\"Resume\"></form>
}
?>