<?php 


include('connect.php');

session_start();

 $name=$_POST['name'];
 $msg=$_POST['msg'];
 $date = date('y-m-d h:m:s');

$sql="INSERT INTO message(name,message,cr_date) VALUES('$name','$msg','$date')";



if (mysqli_query($conn,$sql)) {
    header('location: confirmation.php');

    $_SESSION['message']="true";
}

 ?>