<?php 
include('connect.php');

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$password=md5($password);

$sql="SELECT* FROM users WHERE email='$email'";

$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {

$sql="UPDATE users SET password='$password' WHERE email='$email'";

if (mysqli_query($conn,$sql)) {
	header('location: login.php');

	$_SESSION['forget']="true";
}

}else{
	header('location: forget.php');

	$_SESSION['er_forget']="true";
}

 ?>