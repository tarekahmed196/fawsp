<?php 
include('connect.php');

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$password=md5($password);

$sql="SELECT* FROM users WHERE email='$email' AND password='$password'";

$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	header('location: admin.php');

	$_SESSION['login']="true";
}else{
	header('location: admin-login.php');

	$_SESSION['er_login']="true";
}

 ?>