<?php
include ('./Admin/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us | REM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/Logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

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
<style>
.btn {
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
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #68A4C4;
}

.btn:hover {
  background: green;
  color: #fff;
  text-decoration: none;
}
</style>
</head>

<body>

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
          <button class="btn" onclick="window.location.href='login.php';">Login</a></button>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/party.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Royal Event Management</h3>
            <p align="justify">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; An event is something exciting, memorable and unique to the event owner & most of the time it’s a dream. Today, the ideas of people are very advanced through the time factor matters with their busy schedule. However, Success of a dream can become invaluable for the happiness of the dreamer. <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our company is a combination of four different minds who always gives unlimited care and extends a friendly hand to help and organize one’s dream event on a grand scale to the utmost satisfaction of the dreamer.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our company has involved in many types of events such as below and marked the unique Royal Events Management name on our Sri Lankan and overseas clients minds.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Wedding.</li>
              <li><i class="icofont-check-circled"></i> Birthdays & Parties.</li>
              <li><i class="icofont-check-circled"></i> Meetings & Conference.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">
              <?php
                $sql = "SELECT * FROM user";
                $query = $conn->query($sql);
                echo "".$query->num_rows."";
              ?>
            </span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">
            <?php
                $sql = "SELECT * FROM events";
                $query = $conn->query($sql);
                echo "".$query->num_rows."";
              ?>
            </span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">0</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">0</span>
            <p>Staff</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <br><b><center><strong>Copyright &copy; 2021 <i>Royal Event Management</i></strong>
    All rights reserved.</center></b>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>