<?php
header('Content-type: text/css');
$font=$_POST['fonts'];

?>
body
{
	background-image: url("cvback2.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
	background-attachment: fixed;
	color: white;
	font-family: <?php echo $font; ?>;
}
.col1{

	
	height: 1000px;
	padding-left: 5px;
	padding-right: 5px;
	padding-top: 5px;
	border-right: solid #A9A9A9;
}
.col2{
	
	height: 1000px;
	padding: 10px;
	
	

}
.profilepic
{
	height: 200px;
	width: 200px;
}
.rows
{
	margin-top: 100px;
	margin-bottom: 100px;

}
.row1{
	margin-bottom: 100px;
}
.cv
{
	border: solid #B0C4DE;
	margin-bottom: 100px;

}
hr{
	background-color: black;
	height: 1px;
	color: black;
}
<?php
location('tempmain1.php');
?>