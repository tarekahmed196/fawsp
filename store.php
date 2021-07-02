<?php 
session_start();


$conn=mysqli_connect('localhost','root','','fawsp');



 $email=$_POST['email'];
 $password=$_POST['password'];


$sql="INSERT INTO registration VALUES('','$email','$password')";



if (mysqli_query($conn,$sql)) {
	header('location: supp-login1.php');

	$_SESSION['message']="true";
}
 ?>