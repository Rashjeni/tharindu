<?php
	include '../db.php';

	if(isset($_POST['edit'])){
		$rid = $_POST['id'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$city = $_POST['city'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "UPDATE user SET name = '$name', mobile = '$mobile', email = '$email', city = '$city', password = '$password' WHERE id = '$rid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User Details updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select User to edit first';
	}

	header('location: ../index.php');
?>