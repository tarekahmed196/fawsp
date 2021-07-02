<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="style.css">
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
					Your post has been Submitted!!
				</div>
			
			<?php } ?>

			<?php 
			if(isset($_SESSION['error']))

			?>

		<div class="header-image">
			<img src="img/bg6.jpg" alt="">
			<div class="header-title">Farming Assistance Web Service</div>

		</div>
		
			<ul class="nav nav-tabs nav-justified">
				<!-- <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Home</a></li> -->
						<li class="nav-item"><a id="link1" class="nav-link" href="supp-login1.php">Post Advertisement</a></li>
				       <li class="nav-item"><a id="link1" class="nav-link" href="crop-received.php">Crop Received</a></li>
				       <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Logout</a></li></ul>

				       <!-- form section -->
				       <div class="main-body2">
				       	<div class="form2">
							<h3 class="text-center text-white text-uppercase mt-4 mb-0 bg-primary">Post Add</h3>

								<form action="finalstore.php" method="post" >
									<label for="usr">Crop ID:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="number" name="cropid" placeholder="ID">

									<label for="usr">Crop Name:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="text" name="cropname" placeholder="Name">

									<label for="usr">Crop Image:</label>
									<div class="custom-file">
    								<input type="file" name="cropimage" class="custom-file-input" id="customFile">
    								<label class="custom-file-label bg-info" for="customFile">Choose file</label>
  									</div>


									<label for="usr">Required Quantity(in KGs):</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="number" name="quantity" placeholder="quantity">

								
										<div class="text-center">
											<input class="btn btn-success mt-3 mb-4 text-center" type="submit" value="Submit">
										</div>
										
										
								</form>

				       	
				  		</div>
				 			      	
				       </div>
			

						
		</div>
	



	




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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