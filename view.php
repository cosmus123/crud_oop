<?php require_once "connect.php"; ?>

<?php require_once "database.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP Simple CRUD Application - READ Operation</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Latest compiled and minified Jquery -->

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<div class="row">
	<h2>OOP Read Operation in CRUD Application</h2>
		<table class="table "> 
		<thead> 
			<?php 
			$query_id = $database->read();
			while($row = mysqli_fetch_assoc($query_id)){
				$id = $row['id'];
			}
			// $database->delete($id); 

			?>
			<tr> 
				<th>#</th> 
				<th>Full Name</th> 
				<th>E-Mail</th> 
				<th>Age</th> 
				<th>Gender</th> 
				<th>Update</th>
				<th>Delete</th>
			</tr> 
		</thead> 
		<tbody> 
			<tr> 
				<?php 

				$query_read = $database->read();

				while($row = mysqli_fetch_assoc($query_read)){ ?>
					<tr>
						<th th scope="row"><?php echo $row['id']; ?></th>
						<td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
						<td><?php echo $row['email_id']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td>
							<a href="update.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						</td>
						<td>
							<a name="delete" href="delete.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
						</td>
					</tr>
				<?php } ?>
			</tr> 
		</tbody> 
		</table>
	</div>
</div>
</body>
</html>