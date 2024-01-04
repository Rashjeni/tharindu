<?php
	include '../db.php';
    session_start();

	if(isset($_POST['delete'])){
			$rid = $_POST['id'];
		$sql = "DELETE FROM user WHERE id = '$rid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select user to delete first';
	}

	header('location: ../index.php');
	
?>