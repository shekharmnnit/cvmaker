<?php
session_start();
$db=new MYSQLi("localhost","root","","cvusers");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$allowed=array('jpg','jpeg','png');
// echo $_FILES['image']['name'];
$profilepic=$_FILES["image1"]["name"];



$username=$_SESSION['username'];
$ext=strtolower(end(explode('.',$profilepic)));
if(in_array($ext,$allowed)===true)
{
	echo "df";
  $target="pics/".basename($_FILES['image1']['name']);
  move_uploaded_file($_FILES['image1']['tmp_name'],$target);
  }
  else
   { 
    echo "<script>alert('Invalid image');window.location('profile.php');</script>";
}
 $ins_query="UPDATE userdetails SET profilepic='$profilepic' WHERE username='$username' ";
 mysqli_query($db,$ins_query);}
 header('location:profile.php');
?>