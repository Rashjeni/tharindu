<?php
include('db.php'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
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
        <a href="index.php" class="nav-link">Home</a>
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
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">REM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/Admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../login.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../signup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Signup</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="pages/calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
            <!--<span class="badge badge-info right">2</span>-->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
              Payment
                <i class="fas "></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="events.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Create Events
                <i class="fas "></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="managebooking.php" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
              Manage Booking
                <i class="fas "></i>
              </p>
            </a>
              </li>

          <li class="nav-item">
            <a href="contact_user.php" class="nav-link">
              <i class="nav-icon far fa-address-book"></i>
              <p>
                Contact
                <i class="fas "></i>
              </p>
            </a>
              </li>

              <li class="nav-item">
            <a href="messageview.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
              Messagebox
                <i class="fas "></i>
              </p>
            </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!--#####################################################################################################-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php
                      $sql = "SELECT * FROM events";
                      $query = $conn->query($sql);
                      echo "".$query->num_rows."";
                    ?></h3>

                <p>Total Events</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Registered Events</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                      $sql = "SELECT * FROM user";
                      $query = $conn->query($sql);
                      echo "".$query->num_rows."";
                    ?></h3>

                <p>Clients</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion fa-money"></i>
              </div>
            </div>
          </div>
          -->
        </div>
        <!-- /.row -->

<!--#####################################################################################################-->
    <div class="row">
        <section class="col-lg-10 connectedSortable">

                  <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
            </div>
                           
                            <div class="row">
                               
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

                                <!-- [ Hover-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Client Details</h5>
                                             <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="float:right;"><i class="fa fa-plus" ></i> Add User</a>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                       <tr>
                                                            <th>#</th>
                                                            <th>Photo</th>
                                                            <th>Name</th>
                                                            <th>Mobile No</th>
                                                            <th>Email</th>
                                                            <th>City</th>
                                                            <th>City</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                   // $sql = "  SELECT register.*,register.id AS rid,tbltown.*,tblcities.* FROM `register` left JOIN tbltown on register.town=tbltown.id left JOIN tblcities on register.area=tblcities.id ORDER by register.id DESC";
                        $sql = "SELECT * FROM user";
                        $query = $conn->query($sql);$cnt=1;
                        while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                         <td><?php echo htmlentities($cnt);?></td>
                         <td><?php echo '<img src="data:image;base64,' .base64_encode($row['image']).'" alt="Image" style="width: 50px; height:50px;" >';  ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['city']; ?></td>
                          <td><?php echo date('M d, Y', strtotime($row['created_on'])) ?></td>
                          <td>
                            <!--<button class="btn btn-info btn-sm" data-id="<?php //echo $row['id']; ?>"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm" data-id="<?php //echo $row['id']; ?>"><i class="fa fa-trash"></i> Delete</button>-->
                            <a href="#edit" data-toggle="modal" class="btn btn-info btn-sm" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#delete" data-toggle="modal" class="btn btn-danger btn-sm" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Delete</a>
                          </td>
                        </tr>
                      <?php  $cnt=$cnt+1;
                    }
                  ?>

                                                           
                                                        </tr>
                                                       
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
<!-- Model user add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog lg">
        <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="rid"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="action/user_add.php"  enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
               <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                      <div class="card-header">
                        <h5>New User Details</h5>
                      </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">
          
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
        <!--<label for="image">Select image:</label>-->
          <input type="file" class="form-control" id="image" name="image">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
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
<?php include 'include/user_modal.php' ?>
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
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'action/user_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
     $('.empid').val(response.rid);
      $('#name').val(response.name);
      $('#mobile').val(response.mobile);
      $('#city').val(response.city);
       $('#email').val(response.email);
      $('#password').val(response.password);
    }
  });
}
</script>
