<?php 
	
    include '../db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT * from events WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>