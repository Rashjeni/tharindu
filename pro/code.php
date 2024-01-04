<?php

include './Admin/db.php';

  session_start();

function adminLogin($email,$password,$conn)
{
  $result=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' AND password='$password'");
   if(mysqli_num_rows($result)>0)
    
    {
    $user1=mysqli_fetch_object($result);
   
    // $_SESSION['shopname']=$user->shopname;
      $_SESSION['email']=$user1->email;
      $_SESSION['name']=$user1->name;
      $_SESSION['id']=$user1->id;
     
       header('location: ./Admin/index.php');
      
    }
    else return false;
  
}
function userLogin($email,$password,$conn)
{
  $result=mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND password='$password'");
   if(mysqli_num_rows($result)>0)
    
    {
    $user=mysqli_fetch_object($result);
    $_SESSION['name']=$user->name;
    $_SESSION['image']=$user->image;
    $_SESSION['email']=$user->email;
    $_SESSION['id']=$user->id;
    $_SESSION['mobile']=$user->mobile;
    $_SESSION['username']=$user->username;
   
     header('location:./Admin/dashboard.php');
      
    }
    else return false;
  
}

if(isset($_POST["signin"]))
{
$email=$_POST["email"];
$password=$_POST["password"];

adminLogin($email,$password,$conn);
userLogin($email,$password,$conn);

echo "<center><p class=text-danger> email or Password is Incorrect</p></center>";
}  

?>