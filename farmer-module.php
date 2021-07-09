<?php
session_start();
include_once 'connect.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>farmer-module</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="custom.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<?php 
			if (isset($_SESSION['message'])) {?>
				<div class="alert alert-success">
					Data Inserted Successfully!!
				</div>
			
			<?php } ?>
		<div class="header-image">
			<img src="img/bg6.jpg" alt="">
			<div class="header-title">Farming Assistance Web Service</div>

		</div>
		<?php
		$sql_get = mysqli_query($conn,"SELECT * FROM message WHERE status=0");
		$count = mysqli_num_rows($sql_get);

		?>
		
			<ul class="nav nav-tabs nav-justified">
				<!-- <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Home</a></li> -->

						<li class="nav-item"><a id="link1" class="nav-link" href="farmer-login1.php">Complaint Page</a></li>

						<!-- <li class="nav-item"><a id="link1" class="nav-link" href="">View Complaint Status</a></li> -->

						<!-- <li class="nav-item"><a id="link1" class="nav-link" href="">Farming Tips</a></li> -->
						<li class="nav-item"><a id="link1" class="nav-link" href="cad.php">Crop Add Details</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link" href="sell.php">Sell Crop</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Logout</a></li>

				       <div class="btn-group">
					  <button type="button" class="btn btn-light"> <i class="far fa-envelope"></i><span id="count" class="badge badge-danger"><?php echo $count; ?></span></button>
					  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
					    <span class="caret"></span>
					  </button>
					  <div class="dropdown-menu">
					    <?php
							$sql_get1 = mysqli_query($conn,"SELECT * FROM message WHERE status=0");
							if(mysqli_num_rows($sql_get1)>0)
							{
								while($result = mysqli_fetch_assoc($sql_get1))
								{
									echo '<a class="dropdown-item text-dark table-hover" href="read_msg.php?id='.$result['id'].'">'.$result['message'].'</a>';
									echo '<div class="dropdown-divider"></div>';
								}
							}
								else 
							{
								echo '<a class="dropdown-item text-danger font-weight-bold" href="" title=""><i class="fas fa-frown"></i>Sorry! No Messages</a>';
							}


							?>
					    <!-- <a class="dropdown-item" href="#">Action</a> -->
 					 </div>
 					</ul>

				       <!-- form section -->
				       <!-- <div class="container"> -->
				       	<div class="main-body4">
				       	
				       		<img class="" src="img/bg12.jpg" alt="">
				       		<div class="header-title1"><marquee behavior="scroll" width="125%" direction="left" scrollamount="20">Welcome to Farmer's Module</marquee>
				       			<!-- <marquee behavior="scroll" width="130%" direction="left" height="100px">Welcome to Farmer's Module</marquee> -->
				       		</div>
							

								
				 			      	
				       </div>

				      <!--  </div> -->
				       
			

						
		</div>
	



	




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<?php 

unset($_SESSION['message']);

 ?>


</body>
</html>