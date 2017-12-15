<?php
session_start();
$db=new MYSQLi("localhost","root","","cvusers");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$allowed=array('jpg','jpeg','png');
echo $_FILES['image']['name'];
$profilepic=$_FILES['image']['name'];

$username=$_SESSION['username'];
$ext=strtolower(end(explode('.',$profilepic)));
if(in_array($ext,$allowed)===true)
{
  $target="pics/".basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'],$target);
  }
  else
   { 
    if($profilepic!="")
      {echo "<script>alert('Invalid image');window.location('member.php');</script>";
 die();}}
 $ins_query="INSERT INTO userdetails (profilepic) VALUES ('$profilepic') WHERE username='$username'";
 mysqli_query($db,$ins_query);}
 // header('location:profile.php');
?>