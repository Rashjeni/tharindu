<?php
		    include '../db.php';
            session_start();

	if(isset($_POST['delete'])){
			$rid = $_POST['id'];
		$sql = "DELETE FROM events WHERE id = '$rid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event successfully deleted';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select event to delete first';
	}

	header('location: ../events.php');
	
?>