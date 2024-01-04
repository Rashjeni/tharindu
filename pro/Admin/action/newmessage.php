<?php
	include '../db.php';
    session_start();

	if(isset($_POST['add'])){
		
        $userid = $_POST['userid'];
		$title = $_POST['title'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO `message`(`user_id`,title,message) VALUES ('$userid','$title','$message')";
	
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Message Send successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill the form first';
	}

		
	header('location: ../message.php');

	
?>