<?php

    include '../db.php';
	session_start();

	if(isset($_POST['book'])){
		$event_type = $_POST['event_type'];
		$event_name = $_POST['event_name'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$manage = $_POST['manage'];
		$catering = $_POST['catering'];
		$photography = $_POST['photography'];
		$vehicle = $_POST['vehicle'];
		$music = $_POST['music'];
        $total=$manage+$catering+$photography+$vehicle+$music;
        $advance = $_POST['advance'];
        $due = $total-$advance;
		
		$sql = "INSERT INTO booking (event_type,event_name,date,time,manage,catering,photography,vehicle,music,total,advance,due,status) VALUES ('$event_type','$event_name','$date','$time','$manage','$catering','$photography','$vehicle','$music','$total','$advance','$due','0')";
	
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event successfully booked';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up form first';
	}

		
	header('location: ../newbooking.php');

	
?>