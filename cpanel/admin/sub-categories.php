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
            <h1 class="m-0">Sub Category Page</h1>
          </div><!-- /.col --><br><br>
          <div class="col-sm-6">
          <a href="#sc_add" data-toggle="modal" id="addcategory" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
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
              <div class="box-header text-right with-border pull-right">
                Search  <input type="text" id="myInput" onkeyup="subcategoriesSearch()" placeholder="type keyword.." >
              </div>
            <div class="box-body">
            <table id="myTable" class="table table-bordered">
                <thead>
                  <th>Sub-Category Name</th>
                  <th>Category Name</th>
                  <th>Actions</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM sub_category");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                          <tr>
                            <td>".$row['subcat_name']."</td>
                            <td>".$row['category']."</td>
                            <td>
                              <button class='btn btn-success btn-sm subcat_edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm subcat_delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
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

<?php include 'includes/subcategory_modal.php'; ?>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

  $(document).on('click', '.subcat_edit', function(e){
    e.preventDefault();
    $('#sc_edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.subcat_delete', function(e){
    e.preventDefault();
    $('#sc_delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('#addcategory').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getCategory(id);
  });

  $("#sc_add").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

});

function getCategory(id){
  $.ajax({
    type: 'POST',
    url: 'category_all.php',
    dataType: 'json',
    success: function(response){
      $('#maincategory').append(response);
      $('.userid').val(id);
    }
  });
}

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'subcategory_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.subcatid').val(response.id);
      $('#cat_name').val(response.category);
      $('#subcat_name').val(response.subcat_name);
      $('#desc_subcat').val(response.desc_subcat);
      $('#sc_name').val(response.subcat_name);
    }
  });
}
</script>
<script>
  function subcategoriesSearch() {
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
<!-- 
<script src="./datatables.min.js"></script>
<link rel="stylesheet" href="./datatables.min.css"> -->
</body>
</html>
