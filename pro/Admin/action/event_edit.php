<?php
	    include '../db.php';
        session_start();

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$event = $_POST['event'];
		
		$sql = "UPDATE events SET event = '$event' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event Details successfully updated';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select Event edit first';
	}

	header('location: ../events.php');
?>