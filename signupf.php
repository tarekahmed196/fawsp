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
</head>
<body>

	<div class="container">

		<?php 
			if (isset($_SESSION['er_signup'])) {?>
				<div class="alert alert-warning">
					Password & Confirm-password didn't Match!
				</div>
			
			<?php } ?>

			

		<div class="header-image">
			<img src="img/bg6.jpg" alt="">
			<div class="header-title">Farming Assistance Web Service</div>

		</div>
		
			<ul class="nav nav-tabs nav-justified">
				<li class="nav-item"><a id="link1" class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a id="link1" class="nav-link" href="">About Us</a></li>
				       <li class="nav-item"><a id="link1" class="nav-link" href="">Contact Us</a></li>
				       <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Login</a></li></ul>

				       <!-- form section -->
				       <div class="main-body2">
				       	<div class="form2">
							<h3 class="text-center text-white text-uppercase mt-4 mb-0 bg-primary">Registration</h3>

								<form action="confirm_signupf.php" method="post" >
									<!-- <label for="usr">Supplier ID:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="number" name="suppid" placeholder="ID" required=""> -->

									<label for="usr">Supplier Name:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="text" name="name" placeholder="Name" required="">

									<label for="usr">Email:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="email" name="email" placeholder="Email" required="">

									<!-- <label for="usr">Mobile No:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="number" name="number" placeholder="Mobile No"> -->

									<label class="mt-3-1" for="pwd">Password:</label>
									<input class="form-control mt-1 w-100 mx-auto bg-info" type="password" name="password" placeholder="Password" required="">

									<label class="mt-3-1" for="pwd">Confirm Password:</label>
									<input class="form-control mt-1 w-100 mx-auto bg-info" type="password" name="cpassword" placeholder="Confirm Password" required="">

										<div class="text-center">
											<input class="btn btn-success mt-3 mb-2 text-center" type="submit" value="Submit">
										</div>

										<div class="text-center mb-4">Signup complete??
											<a class="btn btn-warning mt-0" href="farmer-login.php">Back to Login</a>
										</div>
										
										
								</form>

								
				       	
				  		</div>
				 			      	
				       </div>
			

						
		</div>
	



	




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php 

unset($_SESSION['er_signup']);

 ?>

</body>
</html>