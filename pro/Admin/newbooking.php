<?php
session_start();
include 'db.php';
$id= $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="dist/img/Logo.png" rel="icon">
  <link href="dist/img/Logo.png" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/Logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="nav-icon far fa-user"></i>&nbsp; 
             <!--  <img src="dist/img/Admin.png" class="user-image" alt="User Image">  -->
              <span class="hidden-xs"><?php echo htmlentities($_SESSION['name']);?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
    </ul>
  </nav>
  

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">REM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo htmlentities($_SESSION['name']);?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-coins"></i>
              <p>
              Payment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="newbooking.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
              New Booking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="booking.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              My Bookings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="message.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Contact Us
                <i class="fas "></i>
              </p>
            </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Booking</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Booking</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
<!--#####################################################################################################
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Click here to Book an Event
            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="float:right;"><i class="fa fa-plus" ></i> Book Event</a>
            </div>
  
            <div class="invoice p-3 mb-3">

              <div class="row">
                <div class="col-12">
                  <h4>
                     Booking Details.
                    <small class="float-right" id="date">
                    <script>
                        n =  new Date();
                        y = n.getFullYear();
                        m = n.getMonth() + 1;
                        d = n.getDate();
                        document.getElementById("date").innerHTML = y + "/" + m + "/" + d;
                    </script>
                    </small>

                  </h4>
                </div>

              </div>

              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">

                </div>

                <div class="col-sm-4 invoice-col">

                </div>

                <div class="col-sm-4 invoice-col">
 
                </div>

              </div>

              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Services</th>
                      <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Catering</td>
                      <td>Rs.250000.00</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Photography</td>
                      <td>Rs.30000.00</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Vehicle</td>
                      <td>Rs.35000.00</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>DG Music</td>
                      <td>Rs.25000.00</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
              -->
<!--#####################################################################################################-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Click here to Book an Event
            <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="float:right;"><i class="fa fa-plus" ></i> Book Event</a>
            </div>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                     Booking Details.
                    <small class="float-right" id="date">
                    <script>
                        n =  new Date();
                        y = n.getFullYear();
                        m = n.getMonth() + 1;
                        d = n.getDate();
                        document.getElementById("date").innerHTML = y + "/" + m + "/" + d;
                    </script>
                    </small>

                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Services</th>
                      <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?php $sql = "SELECT * FROM booking";
                        $query = $conn->query($sql);
                        while($row = $query->fetch_assoc()){
                      ?>
                      <td>1</td>
                      <td>Manage</td>
                      <td>Rs. <?php echo $row['manage']; ?></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Catering</td>
                      <td>Rs. <?php echo $row['catering']; ?></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Photography</td>
                      <td>Rs. <?php echo $row['photography']; ?></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Vehicle</td>
                      <td>Rs. <?php echo $row['vehicle']; ?></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>DG Music</td>
                      <td>Rs. <?php echo $row['music']; ?></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="dist/img/credit/visa.png" alt="Visa">
                  <img src="dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="dist/img/credit/american-express.png" alt="American Express">
                  <img src="dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    You Can Pay money any kind of payment method provided. You can aslo pay cash on time.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Due Date <?php echo $row['date']; ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Total:</th>
                        <td>Rs. <?php echo $row['Total']; ?></td>
                      </tr>
                      <tr>
                        <th>Advance Payment:</th>
                        <td>Rs. <?php echo $row['advance']; ?></td>
                      </tr>
                      <tr>
                        <th>Due:</th>
                        <td>Rs. <?php echo $row['due']; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <?php
                        }
                    ?>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="booking-print.php" rel="noopener" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <!--<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit Payment</button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" id="PDF"><i class="fas fa-download"></i> Generate PDF</button>-->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
            <!-- 
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="dist/img/Logo.png" height="10%" width="10%"> Royal Event Management.
                    <small class="float-right">Date: 10/21/2021</small>
                  </h4>
                </div>
                
              </div>
            
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Royal Event Management</strong><br>
                    Ibbagamuwa<br>
                    Kurunegala<br>
                    Phone: +94 773727303<br>
                    Email: admin@royalevent.com
                  </address>
                </div>
  
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                  </address> 
                </div>
 
                <div class="col-sm-4 invoice-col">
                  <b>Order ID:</b> REM001<br>
                  <b>Payment Due:</b> 10/25/2021<br>
                  <b>Account No:</b> 207-2-002-9-5930364
                </div>

              </div>
  
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Services</th>
                      <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Photography</td>
                      <td>Rs.25000.00</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Catering</td>
                      <td>Rs.150000.00</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Hotel</td>
                      <td>Rs.200000.00</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Vehicle</td>
                      <td>Rs.20000.00</td>
                    </tr>
                    </tbody>
                  </table>
                </div>

              </div>
 

              <div class="row">
              
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="dist/img/credit/visa.png" alt="Visa">
                  <img src="dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="dist/img/credit/american-express.png" alt="American Express">
                  <img src="dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    You Can Pay money any kind of payment method provided. You can aslo pay cash on time.
                  </p>
                </div>
          
                <div class="col-6">
                  <p class="lead">Amount Due 10/25/2021</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Total:</th>
                        <td>Rs.395000.00</td>
                      </tr>
                      <tr>
                        <th>Advance Payment:</th>
                        <td>Rs.195000.00</td>
                      </tr>
                      <tr>
                        <th>Due:</th>
                        <td>Rs.200000.00</td>
                      </tr>
                    </table>
                  </div>
                </div>
           
              </div>

              <div class="row no-print">
                <div class="col-12">
                  <a href="booking-print.php" rel="noopener" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit Payment</button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" id="PDF"><i class="fas fa-download"></i> Generate PDF</button>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div> 
    </section>-->
<!--#####################################################################################################-->
<!-- Model Book Event -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog lg">
        <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="rid"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="./action/booking_new.php"  enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
               <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                      <div class="card-header">
                        <h5>Book Event</h5>
                      </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">
          
        <div class="input-group mb-3">
          <label for="event_type">Select an Event : &nbsp;</label> 
            <select name="event_type" id="events" class="form-control"><br>
              <option value="0">Select</option>
              <option value="Wedding">Wedding</option>
              <option value="Meeting">Meeting</option>
              <option value="Parties">Parties</option>
              <option value="Birthdays">Birthdays</option>
            </select> 
        </div>
        
        <div class="input-group mb-3">
        <label for="event_name">Assign a name (Optinal) : &nbsp;</label> 
          <input type="text" class="form-control" placeholder="Type a name" name="event_name">
        </div>

        <div class="input-group mb-3">
          <label for="date">Select a Date : &nbsp;</label> 
          <input type="date" id="date" class="form-control" name="date">

        </div>
        <div class="input-group mb-3">
          <label for="time">Time : &nbsp;</label> 
            <select name="time" id="time" class="form-control" ><br>
              <option value="0">Select</option>
              <option value="Morning">Morning</option>
              <option value="Evening">Evening</option>
              <option value="Night">Night</option>
            </select> 
        </div>
        <input type="hidden" name="manage" value="59000">
        <div class="input-group mb-3">
          <label for="catering">Catering : &nbsp;</label> 
            <select name="catering" id="catering" class="form-control" ><br>
              <option value="0">None</option>
              <option value="50000">50 peoples</option>
              <option value="100000">50 - 100 peoples</option>
              <option value="200000">100 - 200 peoples</option>
              <option value="300000">200 - 300 peoples</option>
              <option value="400000">300 - 400 peoples</option>
              <option value="550000">Above 500 peoples</option>
            </select> 
        </div>
        <div class="input-group mb-3">
          <label for="photography">Photography : &nbsp;</label> 
            <select name="photography" id="photography" class="form-control" ><br>
              <option value="0">None</option>
              <option value="30000">One Day Photo Shoot</option>
              <option value="55000">Two Days Photo Shoot</option>
              <option value="80000">Three Days Photo Shoot</option>
            </select> 
        </div>
        <div class="input-group mb-3">
          <label for="vehicle">Vehicle : &nbsp;</label> 
            <select name="vehicle" id="vehicle" class="form-control"><br>
              <option value="0">None</option>
              <option value="35000">one Vehicle</option>
              <option value="60000">Two Vehicles</option>
              <option value="85000">Three Vehicles</option>
              <option value="100000">Four Vehicles</option>
            </select> 
        </div>
        <div class="input-group mb-3">
          <label for="music">DG Music : &nbsp;</label> 
            <select name="music" id="music" class="form-control" ><br>
              <option value="0">None</option>
              <option value="30000">Bands</option>
              <option value="25000">Classical</option>
              <option value="15000">Guitarist</option>
              <option value="15000">Pianists</option>
              <option value="45000">Wedding Bands</option>
              <option value="10000">Rock</option>
              <option value="10000">Jazz</option>
            </select> 
        </div>
        <div class="input-group mb-3">
        <label for="advance">Advance Payment : &nbsp;</label> 
          <input type="number" class="form-control" placeholder="Settle at least 50k" name="advance">
        </div>
       <!-- <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="City" name="city">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
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
          <input type="file" class="form-control" id="image" name="image">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>
           -->         
                  </div>
                  </div>
                </div>                       
       <div class="modal-footer">
          <button class="btn btn-danger" style="float:right;border-radius: 30px;" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
          <button class="btn btn-success " style="float:right;border-radius: 30px;" type="submit"  name="book"><i class="fas fa-check"></i> Submit</button>
        </div>
        </div>
      
            </div>
             </div>
            </form>
          </div>
        </div>
</div>
</div>
<!--#####################################################################################################-->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 Royal Event Management</strong>
    All rights reserved.

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
<script>
 // window.addEventListener("on_click", window.print());
</script>