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
    <!-- daterange picker -->
    <link rel="stylesheet" href="./../../bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- jQuery 3 -->
    <script src="./../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./../../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="./../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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
            <h1 class="m-0">Provider Page</h1>
          </div><!-- /.col --><br><br>
          <div class="col-sm-6">
          <a href="#addnewp" data-toggle="modal" id="loadcategory" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>

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
               <div class="box-header text-right with-border pull-right">
                Search  <input type="text" id="myInput" onkeyup="providerSearch()" placeholder="type keyword.." >
              </div>
              <div class="box">
            <div class="box-body">
              <table id="myTable" class="table table-bordered">
                <thead>
                  <!-- <th>Email</th> -->
                  <th>Photo</th>
                  <th>Service Photo</th>
                  <th>Certificate Photo</th>
                  <th>Gov ID Photo</th>
           
                  <th>Name</th>
                  <th>Application Status</th>
                  <!-- <th>Date Added</th> -->
                  <th>Actions</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM users WHERE type=:type");
                      $stmt->execute(['type'=>2]);
                      foreach($stmt as $row){
                        $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                        $image1 = (!empty($row['certificates_photo'])) ? '../images/'.$row['certificates_photo'] : '../images/profile.jpg';
                        $image2 = (!empty($row['govid_photo'])) ? '../images/'.$row['govid_photo'] : '../images/profile.jpg';
                        $image3 = (!empty($row['service_photo'])) ? '../images/'.$row['service_photo'] : '../images/profile.jpg';
                        $status = ($row['status']) ? '<span class="label label-success">Accepted</span>' : '<span class="label label-danger">Processing</span>';
                        
                        $active = (!$row['status']) ? '<span class="pull-right"><a href="#prostatus" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i><i class="fa fa-edit"></i></a></span>' : '<span class="pull-right"><a href="#prostatus" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i><i class="fa fa-edit"></i></a></span>';
                        echo "
                          <tr>
                           <!-- <td>".$row['email']."</td> -->
                            <td>
                              <img src='".$image."' height='30px' width='30px'>
                              <span class='pull-right'><a href='#edit_providerphoto' class='photoprovider' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>
                            </td>
                            <td>
                            <img src='".$image3."' height='30px' width='30px'>
                            <span class='pull-right'><a href='#edit_providerphotoservice' class='photoprovider' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>
                          </td>
                            <td>
                            <img src='".$image1."' height='30px' width='30px'>
                            <span class='pull-right'><a href='#edit_providerphotocert' class='photoprovider' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>
                          </td>
                          <td>
                          <img src='".$image2."' height='30px' width='30px'>
                          <span class='pull-right'><a href='#edit_providerphotogov' class='photoprovider' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>
                        </td>
                         
                            <td>".$row['firstname'].' '.$row['lastname']."</td>
                            <td>".$row['status'].' '.$active."</td>
                            <!-- <td>".date('M d, Y', strtotime($row['created_on']))."</td> -->
                            <td>
                            <a href='#service' data-toggle='modal' class='btn btn-info btn-sm btn-flat desc' data-id='".$row['id']."'><i class='fa fa-search'></i> View Service</a>
                              <button class='btn btn-success btn-sm editservice_cat btn-flat' data-id='".$row['id']."' id='editnewp'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm pdelete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
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

<?php include 'includes/users_modal.php'; ?>

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

  
  $(document).on('click', '.editservice_cat', function(e){
    e.preventDefault();
    $('#editservice_cats').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.pdelete', function(e){
    e.preventDefault();
    $('#prodelete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photoprovider', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.desc', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });


  $('#loadcategory').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getCategory(id);
  });

  $("#addnewp").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

  
  $('#editservice_cat').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    geteditCategory(id);
  });

  $("#editnewp").on("hidden.bs.modal", function () {
      $('.append_itemss').remove();
  });

});

function getCategory(id){
  $.ajax({
    type: 'POST',
    url: 'category_all.php',
    dataType: 'json',
    success: function(response){
      $('#service_category').append(response);
      $('.userid').val(id);
    }
  });
}

function geteditCategory(id){
  $.ajax({
    type: 'POST',
    url: 'category_editfetch.php',
    dataType: 'json',
    success: function(response){
   
      $('#service_catee').append(response);
      $('.userid').val(id);
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
      $('#serv').html(response.service);
      $('#desc').html(response.service_cat +' - '+response.rate);
      $('#service_category').val(response.service_cat);

      $('#email').html(response.email);
      $('#date').html(response.created_on);
    
      $('#rate').val(response.rate);
      $('.name').html(response.prodname);

      $('#editmail').val(response.email);
      $('#editpassword').val(response.password);
      $('#editfirstname').val(response.firstname);
      $('#editlastname').val(response.lastname);
      $('#editbrgy').val(response.brgy);
      $('#editstreet').val(response.street_name);
      $('#editcity').val(response.city);
      $('.editbirth').val(response.birthday);
      $('.editage').val(response.age);
      $('#editcontact').val(response.contact_info); 
      $('#appstat').val(response.reg_status);
      $('#editservice').val(response.service);
      $('#service_cate').val(response.service_cat);
      $('#editrate').val(response.rate);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}



</script>
<script>
  function providerSearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<!-- jQuery -->
<script src="./../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./../../dist/js/adminlte.min.js"></script>
<!-- <script src="./datatables.min.js"></script> -->
<!-- <link rel="stylesheet" href="./datatables.min.css"> -->
</body>
</html>
