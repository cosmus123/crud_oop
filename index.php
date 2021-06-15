<?php require_once "connect.php"; ?>

<?php require_once "database.php"; ?>

<?php

// if($connected_db){
// 	echo "Databases CONNECTED";
// }else {
// 	echo "Database NOT CONNECTED DO SOMETHING";
// }

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$query_insert_data = $database->create($fname,$lname,$email,$gender,$age);
	
	if($query_insert_data){
		$succesful_message = "Successfully inserted data, Add New data.";
	}else{
		$fail_message = "Data not inserted, please try again later.";
	}

}

?>

<?php if(isset($succesful_message)){ ?>
	<div class="alert alert-success alert-dismissible" role="alert"> 
		<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $succesful_message; ?> 
	 </div>
<?php } ?>

<?php if(isset($fail_message)){ ?>
	<div class="alert alert-danger alert-dismissible"> 
		<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $fail_message; ?> 
	</div>
<?php } ?>


<!DOCTYPE html>
<html>
<head>
	<title>OOP Simple CRUD Application in OOP PHP - Create</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<!-- Latest compiled and minified Jquery -->

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<h2>OOP Create Operation in CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" id="input1" placeholder="First Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Last Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" />
			    </div>
			</div>

			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="male" checked> Male
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="female"> Female
			  </label>
			</div>
			</div>

			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Age</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Select Your Age</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
				</select>
			</div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Create" name="submit">
		</form>
	</div>
</div>

<?php include "view.php"; ?>

<script>
	$('#myAlert').on('close.bs.alert', function () {
  // do something…
})

</script>

</body>
</html>