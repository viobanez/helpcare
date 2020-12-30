
<html lang="en">
  <head>
    <title>Help Personal  and Household Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Client style -->
  <link rel="stylesheet" href="./dist/css/style.css">

  <link rel="stylesheet" href="css/animate.css">


    <style>
    .modal-body h4 {font-size: 26px; margin-bottom: 20px;}
    .form-group p { color:black; margin-bottom: 15px!important; }
    .new-btn {background-color: #3A86FF!important; padding: 20px 0; font-weight: bold; font-size: 18px!important; border: 1px solid ##2176FB;}
    </style>

  </head>

<body>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login to your account</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form action="new.php">
            <div class="form-group text-left">
              <p>Email Address</p>
              <input type="email" name="email" class="form-control" id="email1" placeholder="Enter your email address">
            </div>
            <div class="form-group text-left">
                <p>Password</p>
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter your passowrd">
            </div>
            <button type="submit" name="login" value="Login" class="btn btn-info btn-block btn-round new-btn">LOGIN</button>
          </form>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <p class=>Not yet a member?<a href="user_register.php"> Create new account</a></span></p>
      </div>
  </div>
</div>
</div> <!-- end of login form -->


<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>

<script>
$(document).ready(function() {
$('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
</script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
      async defer></script>

</body>
</html>
