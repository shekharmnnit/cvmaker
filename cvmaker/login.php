<?php
session_start();
$db=new MYSQLi("localhost","root","","cvusers");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$sql=" SElECT * FROM userdetails WHERE username='$username' AND password='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1)
	{
	
		$_SESSION['message']="You are now logged in";
		$_SESSION['username']=$username;
			
		header("location:member.php");
		}
		else{
			echo "<script>alert('Incorrect username/password');window.location='index.php';</script>";
		}

}
?>