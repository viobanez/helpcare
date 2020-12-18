<?php include 'includes/session.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Helpcare | CPanel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../../dist/css/adminlte.min.css">
  <style>
  @media print{
   .noprint{
      display:none !important;
   }
   #myTable_length {
      display:none !important;
   }
   #myTable_filter{
      display:none !important;
   }
   .dataTables_info{
      display:none !important;
   }
   .dataTables_paginate {
      display:none !important;
   }
}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Administrator</a>
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Report Page</h1>
          </div><!-- /.col --><br><br>
      
        </div><!-- /.row -->
        <?php
          if(isset($_SESSION['error'])){
            echo "
              <div class='callout callout-danger text-center'>
                <p>".$_SESSION['error']."</p> 
              </div>
            ";
            unset($_SESSION['error']);
          }
          if(isset($_SESSION['success'])){
            echo "
              <div class='callout callout-success text-center'>
                <p>".$_SESSION['success']."</p> 
              </div>
            ";
            unset($_SESSION['success']);
          }
        ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <b><h5>Booking Reports</h5></b>
              <div class="box">
             
              <button class="btn btn-default noprint" id="btnExport" style="margin-bottom: 10px;"> Excel </button>
              <button  type="button"class="btn btn-default noprint"  style="margin-bottom: 10px;" onclick="window.print()"> PDF </button><br>
            <div class="box-body" id="tab">
              <table id="myTable" class="table table-bordered">
                <thead>
                  <th>Customer Name</th>
                  <th>Book No.</th>
                  <th>Book Date</th>
                </thead>
                <tbody>
                <?php
                    $conn = $pdo->open();
                    try{
                      $stmt = $conn->prepare("SELECT * FROM booking ORDER BY id DESC ");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                            <td>".$row['user_name']."</td>
                            <td>".$row['book_no']."</td>
                            
                            <td>".date('d/m/Y', strtotime($row['date_book']))."</td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer noprint">
    <strong>Copyright &copy; 2020 <a href="#">Helpcare CPanel</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1
    </div>
  </footer>
</div>

<?php include 'includes/booking_modal.php'; ?>

<!-- ./wrapper -->
<?php include 'includes/scripts.php'; ?>
<!-- REQUIRED SCRIPTS -->

<!-- Data Table Initialize -->
<script>
  // $(function () {
  
  //   $('#myTable').DataTable({
  //     'paging'      : true,
  //     'lengthChange': true,
  //     'searching'   : true,
  //     'ordering'    : true,
  //     'info'        : true,
  //     'autoWidth'   : true,
  //   })
  // })
$(document).ready(function() {
  var table = $('#myTable').dataTable({
    'lengthChange': true,
  });
    
    $("#btnExport").click(function(e) 
    {
    	e.preventDefault();
        window.open('data:application/vnd.ms-excel,' + 
        	encodeURIComponent(table[0].outerHTML));
    });

    
    // $("#btnPDF").click(function(e) 
    // {
    // 	e.preventDefault();
    //     window.open('data:application/.pdf,' + 
    //     escape(table[0].outerHTML));
    // });
});

</script>
<!-- jQuery -->
<script src="./../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./../../dist/js/adminlte.min.js"></script>
<script src="./datatables.min.js"></script>
<link rel="stylesheet" href="./datatables.min.css">
</body>
</html>
