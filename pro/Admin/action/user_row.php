<?php 
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "rem";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT * FROM user WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>