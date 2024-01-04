<?php
    
    session_start();

	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbdatabase = "rem";
	// Create connection
	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbdatabase);

if(isset($_POST['add']))
{
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
 
  $sql = "INSERT INTO user (name,mobile,email,city,password,image) VALUES ('$name','$mobile','$email','$city','$password','$image') ";

  if($conn->query($sql)){
    $_SESSION['success'] = 'User successfully Added';
}
else{
    $_SESSION['error'] = $conn->error;
}

}
else{
$_SESSION['error'] = 'Fill up form first';
}


header('location: ../index.php');
?>