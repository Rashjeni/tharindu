<?php

	$dbservername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbdatabase = "rem";
	// Create connection
	$con = new mysqli($dbservername, $dbusername, $dbpassword, $dbdatabase);

if(isset($_POST['Register']))
{
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
 
  $query = "INSERT INTO 'user' ('name','mobile','email','password','image') VALUES ($name,$mobile,$email,$password,$image) ";
  $query_run = mysqli_query($con,$query); 

    if($query_run)
    {
        //echo '<script type="text/javascript"> alert ("Your Picture Uploaded") </script>';
    }
    else
    {
       // echo '<script type="text/javascript"> alert ("Your Picture Not Uploaded") </script>';
    }

}
?>