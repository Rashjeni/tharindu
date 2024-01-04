<?php

    include '../db.php';
	session_start();

	if(isset($_POST['add'])){
		$event = $_POST['event'];
		$coordinator = $_POST['coordinator'];
		
		$sql = "INSERT INTO `events`(`event`,cordinator) VALUES ('$event','$coordinator')";
	
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event Created successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up form first';
	}

		
	header('location: ../events.php');

	
?>