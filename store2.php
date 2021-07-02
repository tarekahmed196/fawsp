<?php 


$conn=mysqli_connect('localhost','root','','fawsp');

session_start();

 $cropid=$_POST['cropid'];
 $cropname=$_POST['cropname'];
 $cropimage=$_POST['cropimage'];
 $quantity=$_POST['quantity'];

$sql="INSERT INTO user VALUES('','$cropid','$cropname','$cropimage','$quantity')";
// $valid="SELECT* FROM user WHERE email='$email'";

$result=mysqli_query($conn,$sql);
 
$row=mysqli_num_rows($result);

if ($row==1) {
    header('location: supp-login1.php');

    $_SESSION['error']="true";
}else{

$sql="INSERT INTO user VALUES('','$cropid','$cropname','$cropimage','$quantity')";


if (mysqli_query($conn,$sql)) {
    header('location: supp-login1.php');

    $_SESSION['message']="true";
}
}
 ?>