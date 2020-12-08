<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Helpcare | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
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
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <!-- <a href="#" class="h1"><i class="fas fa-heartbeat" style="color: #3d9970;
    "></i><b style="color: #3d9970;
    "> Help</b>care</a> CPanel -->
    <img src="./images/logo_b.png" alt="Helpcare Logo" style="width: 230px;" >
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="verify.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" value="admin@admin.com" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Show password
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form><br>
      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="../index.php" class="btn btn-block btn-default">
          Go to public page
        </a>
        
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div><br>
2020 &copy; Helpcare CPanel v1 | Developers : 
<!-- /.login-box -->

<!-- jQuery -->
<script src="./../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./../dist/js/adminlte.min.js"></script>
</body>
</html>
