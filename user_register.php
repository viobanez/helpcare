<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HelpCare On-Demand Personal and Household Services</title>
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
</head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

      <?php include "nav.php"?>

    <div class="unit-5 overlay">
      <div class="container con-select">
        <h3>Create your HelpCare Account</h3>
        <p>Your new account is your portal all the services that HelpCare offer.</p>
        <p>HelpCare only provide service delivery in Ormoc City.</p>
      </div>
    </div>

    <div class="site-section bg-light reg-form">
      <div class="container-fluid">
        <div class="row">
          <div class="container col-md col-lg-6">
            <form  enctype="multipart/form-data" method="post" class="p-5 bg-white reg-form-pos">

              <div class="row form-group">
                <div class="col-md-6">
                  <label for="name">Your First Name *</label>
                  <input type="text" id="fname" name="first" class="form-control" placeholder="Enter your name">
                </div>
                <div class="col-md-6">
                  <label for="name">Your Last Name *</label>
                  <input type="text" id="lname" name="last" class="form-control" placeholder="Enter your last name">
                </div>
              </div>

      			  <div class="row form-group">
                <div class="col-md-12">
                  <label for="phone">Phone Number *</label>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="+63" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="email">Email Address *</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label for="password">Password *</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-md-6">
                  <label for="c_password">Confirm Password *</label>
                  <input type="password" id="password" name="c_password" class="form-control" placeholder="Password">
                </div>
              </div> 
            
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="email">Date of Birth *</label>
                  <input type="date" id="birthday" name="birth" class="form-control" placeholder="birthday">
                </div>
              </div>

			 <div class="row form-group">
                <div class="col-md-6">
                  <label for="address">Current Ormoc City Location (Delivery Address) *</label>
                  <input type="text" name="address" id="address" class="form-control" placeholder="Street Address">
                </div>
                <div class="col-md-6">
                  <label for="address">LandMark Near You</label>
                  <input type="text" name="address" id="address" class="form-control" placeholder="LandMark">
                </div>
              </div>
           

              <div class="row form-group">
                  <div class="col-md-12">
                    <label for="email">Upload Your Profile Picture</label>
                    <input type="file"  name="picture" class="form-control" >
                  </div>
              </div>

              <div class="row form-group">
              <input type="checkbox" class="form-check-input" id="terms_condition">
              <label class="form-check-label" for="terms_condition">Yes, I Agree - By create new account, you agree the <a href="#">Terms and Conditions</a></label>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="registration" value="Create My New Account" class="btn btn-primary pill px-4 py-2 new-btn pro-reg-btn">
                </div>
              </div>


            </form> <!-- end of form -->


          </div>
          </div> <!-- end of raw   -->
        </div>
      </div>
    </div>

    <?php include "footer.php" ?>

  </div> <!-- end of site wrap -->

 

  <!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>


  </body>
</html>
