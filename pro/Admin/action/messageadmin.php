<?php
	include '../db.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$message = $_POST['message'];
	
		$sql = "UPDATE message SET reply = '$message',status =1 WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Message Details updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select District  edit first';
	}

	header('location: ../messageview.php');
?>