<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Royal Event Management</title>
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
  <header id="header" class="fixed-top header-transparent">
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
          <li class="drop-down"><a href="services.php">Services</a>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to Royal Event Management</h2>
          <p class="animate__animated animate__fadeInUp">
            Whether you're looking to book a Wedding Event, Birthday party, conference, business
            meeting or private dining event our dedicated Royal Events Management team can create a 
            package that will meet your every need.</p>
            <p id="dateAndTime"></p>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>What we organize</h2>
       </div>


       <hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/Wedding.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Wedding</h3><br>
            <p class="font-italic">
                The most important day in a couple's life.
                Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                location for your special day.
            </p>
          </div>
        </div>
        <br><hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
<!--####################################################################################################################-->  
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/birthday.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Birthdays & Parties</h3><br>
            <p class="font-italic">
                Whether an all-day or the ultimate extravaganza that
                lasts well into the wee hours, our Royal Events team is here to make sure all your birthday
                party wishes come true so you can kick back, drink up and enjoy your special day!
            </p>
          </div>
        </div>
        <br><hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
<!--####################################################################################################################--> 
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/meeting.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Meetings & conference</h3><br>
            <p class="font-italic">
                From formal, to not-so-formal, our flexible event
                spaces can cater to your every need for meetings and conferences large or small, and our
                dedicated event team can assist with all aspects of your event planning.
            </p>
          </div>
        </div>


      </div>
    </section><!-- End Features Section -->

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
  <script>
      $(function() {
    myTimer();
    setInterval(function(){ myTimer() }, 1000);
    function myTimer()
    {
        var y = new Date();
        var time = y.toLocaleTimeString();
        var year = y.getFullYear();
        var month = y.getMonth() + 1;
        var day = y.getDate();
        document.getElementById("dateAndTime").innerHTML = "" + day + "/" + month + "/" + year + " " + time ;
    }
});
  </script>
</body>

</html>