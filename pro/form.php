<?php
		$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rem";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
  session_start();

	if(isset($_POST['send'])){
	
    $name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO user_messages (name,email,subject,message,status) VALUES ('$name','$email','$subject','$message',1)";
	
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Messages Send successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Messages Sending Failed';
	}

		
	header('location: contactus.php');

	
?>