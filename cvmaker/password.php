<?php
session_start();
$db=new MYSQLi("localhost","root","","cvusers");

if(!isset($_SESSION['username']))
	echo "<script>alert('Access denied');window.location('index.php');</script>";
$oldpass=$_POST['oldpassword'];
$newpass=$_POST['newpassword'];
$confirmnew=$_POST['confirmnewpassword'];
if($oldpass==""||$newpass==""||$confirmnew=="")
echo "<script>alert('Fill all the details');window.location('profile.php');</script>";
else
{
	$username=$_SESSION['username'];
$g=mysqli_query($db,"SELECT*FROM userdetails where username='$username'");
$row =mysqli_fetch_assoc($g);
$old=$row['password'];
if($old!=$oldpass)
echo "<script>alert('Old Password Does Not Match');window.location('profile.php');</script>";

else
{
	if($newpass!=$confirmnew)
		echo "<script>alert('Confirm Password Did Not Match');window.location('profile.php');</script>";
$username=$_SESSION['username'];
	 $ins_query="UPDATE userdetails SET password='$newpass' WHERE username='$username' ";
	  mysqli_query($db,$ins_query);
	 echo "<script>alert('Password Changed Successfully');window.location('logout.php');</script>";
}
}


?>