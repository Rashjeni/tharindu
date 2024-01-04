<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup Page</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/Logo.png" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Admin/assets/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="Admin/assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Admin/assets/css/adminlte.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./Admin/dist/css/adminlte.min.css">
<style>
.btnlog {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 25px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 4px;
  color: black;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #68A4C4;
}

.btnlog:hover {
  background: green;
  color: #fff;
  text-decoration: none;
}
</style>
</head>



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header">
    <div class="container">
    <div class="logo float-left">
    <img src="assets/img/Logo.png">
    </div>
      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>REM</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li class="drop-down"><a href="">Services</a>
            <ul>
                  <li><a href="#">Wedding</a></li>
                  <li><a href="#">Birthdays & Parties</a></li>
                  <li><a href="#">Meetings & conference</a></li>
            </ul>
          </li>
          <li><a href="contactus.php">Contact Us</a></li>
          <button class="btnlog" onclick="window.location.href='login.php';">Login</a></button>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<body class="hold-transition register-page">
<br><br><br>
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="signup.php" class="h1"><b>Signup</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Create an Account</p>

      <form action="" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Mobile Number" name="mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <!--<label for="image">Select image:</label>-->
          <input type="file" class="form-control" id="image" name="image">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4.5">
            <input type="submit" name="Register" value="Register" class="btn btn-primary btn-block">
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.php" class="text-center">I already have an Account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box 
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">-->
<footer>
    <br><b><center><strong>Copyright &copy; 2021 <i>Royal Event Management</i></strong>
    All rights reserved.</center></b>
</footer><!-- End Footer -->
<!-- jQuery -->
<script src="Admin/assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Admin/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Admin/assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Admin/assets/js/demo.js"></script>

</body>
</html>
     
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
 
  $query = "INSERT INTO user (name,mobile,email,password,image) VALUES ('$name','$mobile','$email','$password','$image') ";
  $query_run = mysqli_query($con,$query); 

    if($query_run)
    {
      echo '<script type="text/javascript"> alert ("Your Data Added Succesfully") </script>';
    }
    else
    {
      echo '<script type="text/javascript"> alert ("Your Data Not Added") </script>';
    }

}
?>
