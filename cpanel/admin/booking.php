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
        <a href="index3.html" class="nav-link">Administrator</a>
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
            <h1 class="m-0">Booking Page</h1>
          </div><!-- /.col --><br><br>
          <div class="col-sm-6">
          <a href="#addnewp" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
          </div>
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
              <div class="box">
            <!-- <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div> -->
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Book No.</th>
                  <th>Customer Name</th>
                          
                  <th>Booking Status</th>
                  <th>Service</th>
                  <th>Category</th>
                  <th>Book Date</th>
                  <th>Actions</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM booking ORDER BY id DESC ");
                      $stmt->execute();
                      foreach($stmt as $row){
                        //$image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                        $status = ($row['status']) ? '<span class="label label-success">Approved</span>' : '<span class="label label-danger">Rejected</span>';
                        $active = (!$row['status']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '';
                        echo "
                          <tr>
                            <td>".$row['book_no']."</td>
                            <td>".$row['user_name']."</td>
                            <td>
                              ".$status."
                              ".$active."
                            </td>
                            <td>".$row['service_and_rate']."</td>
                            <td>".$row['category_name']."</td>
                            <td>".date('M d, Y', strtotime($row['date_book']))."</td>
                            <td>
                            <a href='#instruct' data-toggle='modal' class='btn btn-info btn-sm btn-flat inst' data-id='".$row['id']."'><i class='fa fa-search'></i> Details</a>
                            <!--  <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button> -->
                              <!-- <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button> -->
                            </td>
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
  <footer class="main-footer">
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
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.inst', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getBook(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getBook(id){
  $.ajax({
    type: 'POST',
    url: 'booking_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.userid').val(response.id);
      $('#email').html(response.email);
      $('#address').html(response.address);
      $('#instructions').html(response.special_instructions);
     
    }
  });
}

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'users_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.userid').val(response.id);
      $('#edit_email').val(response.email);
      $('#edit_password').val(response.password);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#edit_contact').val(response.contact_info);
      $('#instructions').html(response.special_instructions);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>


<!-- jQuery -->
<script src="./../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./../../dist/js/adminlte.min.js"></script>
</body>
</html>
