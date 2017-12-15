<?php
session_start();
$db=new MYSQLi("localhost","root","","cvusers");
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=validate($_POST["name"]);
	$username=mysql_real_escape_string($_POST["username"]);
	$email=validate($_POST["email"]);
	$password=mysql_real_escape_string($_POST["password"]);

	$confirmpassword=mysql_real_escape_string($_POST["confirmpassword"]);
	$allowed=array('jpg','jpeg','png');
	$profilepic=$_FILES['image']['name'];
	if($name==""||$username==""||$email==""||$password==""||$confirmpassword==""||$profilepic=="")
		echo "<script>alert('Please fill all the entries');window.location('index.php');</script>";
$ext=strtolower(end(explode('.',$profilepic)));
if(in_array($ext,$allowed)===true)
{
	$target="pics/".basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'],$target);
	}
	else
		echo "<script>alert('Please upload a valid picture');window.location('index.php');</script>";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<script>alert('Invalid email');window.location('index.php');</script>";
}
	// $profilepic=$_FILES['image']['name'];
	// $target="pics/".basename($_FILES['image']['name']);
	// move_uploaded_file($_FILES['image']['tmp_name'],$target);
	if($password!=$confirmpassword)
		{echo "<script>alert('password do not match');window.location('index.php');</script>";
	die();}
	$query="SELECT * FROM userdetails U WHERE U.email='$email'";
$result=$db->query($query);
if($result->num_rows>0){
	echo "<script>alert('User with email-id exists.');window.location='login.php';</script>";
	die();

}
$query="SELECT * FROM userdetails U WHERE U.username='$username'";
$result=$db->query($query);
if($result->num_rows>0){
	echo "<script>alert('Username already in use.');window.location='index.php';</script>";
	die();

}
// $password=md5($password);
$ins_query="INSERT INTO userdetails (name,username,email,password,profilepic) VALUES ('$name','$username','$email','$password','$profilepic')";
mysqli_query($db,$ins_query);
echo "<script>alert('Successfully signed up');window.location='index.php';</script>";


}

?>
<!DOCTYPE html>
<html>
<head><title></title>  <link rel="stylesheet" href="signup.css"></head>
<body></body>
</html>