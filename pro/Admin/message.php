<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Contact Us</title>
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
              New Bookings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="booking.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              My Booking
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
            <h1 class="m-0">Contact Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact Us</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!--#####################################################################################################-->
    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                      
                                    </div>
                                    <ul class="breadcrumb">
                                        
                                        <li class="breadcrumb-item"><a href="javascript:">Hello</a></li>&nbsp;&nbsp;
                                        <h5>&nbsp;&nbsp;<?php echo htmlentities($_SESSION['name']);?>!</h5>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->

              
            </div>
                     <?php
        
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
                            <div class="row">
                               
     

                                <!-- [ Hover-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="float:right;"><i class="fa fa-plus" ></i> New Message</a>
                                    </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                            <!-- <form action="" method="POST" enctype="multipart/form-data"> -->    
                                            <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Title</th>
                                                            <th>Your Message</th>
                                                            <th>Admin Message</th>
                                                            <th>Registered Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
<!--############################################################################################################-->                                                    
               <tr>

    <?php
                	$dbservername = "localhost";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbdatabase = "rem";
                    // Create connection
                    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbdatabase);

                $user=$_SESSION['id'];
                $sql = " SELECT * FROM `message` where user_id=$user ";
                $query = $conn->query($sql);$cnt=1;
                while($row = $query->fetch_assoc()){
    ?>
                <tr>
                <td><?php echo htmlentities($cnt);?></td>
                <td><?php if($row['status'] == 1){ ?>
                <span class="badge badge-success">Message Read</span>
                <?php }else if($row['status'] == 0){ ?>
                <span class="badge badge-primary ">Message Pending</span>
                <?php } ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['reply']; ?></td>
                <td><?php echo date('M d, Y', strtotime($row['created_on'])) ?></td>
                <td>


                </td>
                </tr>
                <?php  $cnt=$cnt+1;
                }
                ?>


                </tr>
<!--############################################################################################################-->                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Hover-table ] end -->

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
        </section>
  </div>
  <!--#####################################################################################################-->
<!-- Model -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog lg">
        <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="rid"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="action/newmessage.php" >
                <input type="hidden" class="empid" name="id">
               <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                      <div class="card-header">
                        <h5>New Message</h5>
                      </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">
                <div class="row">
                    <div class="input-group mb-3">
                        <div class="form-group" hidden="">
                            <label for="exampleInputPassword1">Title</label>
                            <input type="text" class="form-control" id="userid" placeholder="Enter Title" name="userid" value="<?php  
                                        echo htmlentities($_SESSION['id']);?>">
                        </div>  
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required="">
                </div>
                </div>
                <div class="input-group mb-6">                           
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea cols="" class="form-control" rows="5" placeholder="Type Message" name="message" required=""></textarea>
                </div>
                </div>
                    
                  </div>
                  </div>
                </div>                       
       <div class="modal-footer">
          <button class="btn btn-danger" style="float:right;border-radius: 30px;" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
          <button class="btn btn-success " style="float:right;border-radius: 30px;" type="submit"  name="add"><i class="fas fa-check"></i> Submit</button>
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
