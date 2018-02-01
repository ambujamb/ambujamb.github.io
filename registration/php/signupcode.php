<?php

session_start();
if(isset($_POST['submit'])){
	$code=$_SESSION['code'];
	if($_POST['code']==$code){
	echo 'MAtched';

$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Gender=$_POST['gender'];
// Create connection
$con = new mysqli('localhost', 'root', '','student');


$query="insert into student_db(username,email,password,gender) values('$Username','$Email','$Password','$Gender')";

mysqli_query($con,$query);

	}
	else
	{
	echo 'MISMATCHED';
	header("location: register.php");
	}
}
?>
