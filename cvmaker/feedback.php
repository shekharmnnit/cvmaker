<?php
session_start();
$db=new MYSQLi("localhost","root","","cvusers");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $appreciation=$_POST['text1'];
  $criticism=$_POST['text2'];
  $suggestion=$_POST['text3'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<script>alert('Invalid email');window.location('index.php');</script>";
}
  $ins_query="INSERT INTO feedback (name,email,number,appreciation,criticism,suggestion) VALUES ('$name','$email','$number','$appreciation','$criticism','$suggestion')";
mysqli_query($db,$ins_query);
echo "<script>alert('Successfully Recorded Your Valuable Feedback');window.location='profile.php';</script>";
}

?>