<?php 
$conn=mysqli_connect('localhost','root','','fawsp');

session_start();

// $suppid=$_POST['suppid'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if ($password==$cpassword) {
	$password=md5($password);

$sql="INSERT INTO users VALUES ('','$name','$email','$password')";

if (mysqli_query($conn,$sql)) {
	header('location: login.php');
	$_SESSION['signup']="true";
}

}else{
	header('location: signup.php');
	$_SESSION['er_signup']="true";
}

 ?>