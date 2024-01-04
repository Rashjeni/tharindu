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
  <title>User | Booking-Print</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="dist/img/Logo.png" rel="icon">
  <link href="dist/img/Logo.png" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="dist/img/Logo.png" height="10%" width="10%"> Royal Event Management.
                    <small class="float-right">Date: 10/21/2021</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
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
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Rifkhan</strong><br>
                    Oraliyadda<br>
                    Polgahawela<br>
                    Phone: +94 754043958<br>
                    Email: rifkan@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Order ID:</b> REM001<br>
                  <b>Payment Due:</b> 10/25/2021<br>
                  <b>Account No:</b> 207-2-002-9-5930364
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
                  <a href="booking-print.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit Payment</button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fas fa-download"></i> Generate PDF</button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->

<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
