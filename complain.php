<?php 


include('connect.php');

session_start();

 $name=$_POST['name'];
 $message1=$_POST['message1'];

$sql="INSERT INTO complaint VALUES('','$name','$message1')";



if (mysqli_query($conn,$sql)) {
	header('location: farmer-login1.php');

	$_SESSION['message']="true";
}

 ?>