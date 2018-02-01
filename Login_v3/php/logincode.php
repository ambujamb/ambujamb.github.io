<?php
$Username=$_POST['username'];
$Password=$_POST['pass'];

mysql_connect('localhost','root','');
mysql_select_db('student');

$query="select * from student_db where username='$Username' and password='$Password'";

$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	header("location:profile.php");
}
else
{
	header("location:login.php");
}


?>