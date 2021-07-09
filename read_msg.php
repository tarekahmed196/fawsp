<?php 
include_once 'connect.php';
?>
<?php 
if (isset($_GET['id'])) 
{
	$main_id = $_GET['id'];
	$sql_update = mysqli_query($conn,"UPDATE message SET status=1 WHERE id='$main_id'");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>read_msg</title>
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
	  <div class="main-body2">

						<h1 class="text-center text-info text-uppercase mt-4">Confirmation Status</h1>
						
 



						<table class="table table-bordered table-success table-hover w-75 mx-auto text-center">
								<tr>
									<th>SL No</th>
									<th>Name</th>
									<th>Message</th>
									<th>Date</th>
									<th>Delete</th>
									<!-- <<th>Reaction</th> -->
								</tr>
			
										<?php 
											$sr_no=1;
											$sql_get=mysqli_query($conn,"SELECT * FROM message WHERE status=1");
											while($main_result = mysqli_fetch_assoc($sql_get)):{?>

			
												<tr>
													<th scope="row"><?php echo $sr_no++ ?></th>
													<td> <?php echo $main_result['name']; ?></td>
													<td><?php echo $main_result['message']; ?></td>
													<td><?php echo $main_result['cr_date']; ?></td>
													<td><a class="text-danger" onclick="return confirm('Are you Sure ??')" href="delete1.php?id=<?php echo $main_result['id']?>"><i class="fas fa-trash"></i></a></td>
												</tr>
												
													<?php } endwhile ?>

												</table>
												<div class="text-center mb-3">
													<a class="btn btn-success" href="farmer-module.php">Back</a>
												</div>

												
		</div>
	</div>





	
</body>
</html>