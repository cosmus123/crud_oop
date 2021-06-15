<?php require_once "connect.php"; ?>

<?php require_once "database.php"; ?>

<?php

$id = $_GET['id'];

$query_delete = $database->delete($id);
if($query_delete){
	header('location: index.php');
	$succesful_message = "Successfully deleted data.";
}else{
	echo "Failed to Delete Record";
}

?>