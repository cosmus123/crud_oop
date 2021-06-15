<?php require_once "connect.php"; ?>

<?php require_once "database.php"; ?>

<?php

// if($connected_db){
// 	echo "Databases CONNECTED";
// }else {
// 	echo "Database NOT CONNECTED DO SOMETHING";
// }
$id = $_GET['id'];
$query_update = $database->read_id($id);
$row = mysqli_fetch_assoc($query_update);

if(isset($_POST['update'])){
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$query_update_data = $database->update($id,$fname,$lname,$email,$gender,$age);

	if($query_update_data){
		$succesful_message = "Successfully updated data.";
	}else{
		$fail_message = "Data not updated, please try again later.";
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
	<title>OOP Simple CRUD Application - UPDATE Operation</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified Jquery -->

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>UPDATE Operation in CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname" value="<?php echo $row['first_name'] ?>" class="form-control" id="input1" placeholder="First Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname" value="<?php echo $row['last_name'] ?>" class="form-control" id="input1" placeholder="Last Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" value="<?php echo $row['email_id'] ?>" class="form-control" id="input1" placeholder="E-Mail" />
			    </div>
			</div>

			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
				<label>
					<input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($row['gender'] == 'male'){ echo "checked";} ?>> Male
				</label>
				<label>
					<input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($row['gender'] == 'female'){ echo "checked";} ?>> Female
				</label>
			</div>
			</div>

			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Age</label>
			<div class="col-sm-10">
			<select name="age" class="form-control">
				<option>Select Your Age</option>
				<option value="20" <?php if($row['age'] == '20'){ echo "selected";} ?>>20</option>
				<option value="21" <?php if($row['age'] == '21'){ echo "selected";} ?>>21</option>
				<option value="22" <?php if($row['age'] == '22'){ echo "selected";} ?>>22</option>
				<option value="23" <?php if($row['age'] == '23'){ echo "selected";} ?> >23</option>
				<option value="24" <?php if($row['age'] == '24'){ echo "selected";} ?>>24</option>
				<option value="25" <?php if($row['age'] == '25'){ echo "selected";} ?>>25</option>
			</select>
			</div>
			</div>
			<a type="button" class="btn btn-primary btn-md col-md-3 col-md-offset-1" value="Return" href="index.php">Return</a>
			<button type="submit" name="update" class="btn btn-default btn-md col-md-3">Update</button>
		</form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

	$('#myAlert').on('close.bs.alert', function () {
  // do something…
})

</script>
</body>
</html>