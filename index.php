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

  <link rel="stylesheet" href="css/animate.css">
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

    <div class="site-blocks-cover user_hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>On demand personal and households <br>
            same-day delivery services in Ormoc City.</h1>

          <!--  <ul class="service_catg">
            <li>Salon At Home</li>
            <li>Plumbing</li>
            <li>Electrical</li>
            <li>Carpentry</li>
          </ul> -->

            <div class="row hero_row">
                <!-- insert services category -->
                
           </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container hw_con">
        <h2>How HelpCare Works</h2>
        <div class="row">
            <div class="col-sm hw_col">
              <img src="images/num_1.jpg">
              <h5>Select service</h5>
              <p>Salon at home, plumbing,<br> electrical or carpentry</p>
            </div>

            <div class="col-sm hw_col">
              <img src="images/num_2.jpg">
              <h5>Select date and time</h5>
              <p>View real-time availability<br> of our service pro</p>
            </div>

            <div class="col-sm hw_col">
              <img src="images/num_3.jpg">
              <h5>Book appointment</h5>
              <p>Easy manage booking,<br> write reviews and rating</p>
            </div>

            <div class="col-sm hw_col">
              <img src="images/num_4.jpg">
              <h5>Time to relax</h5>
              <p>We'll be at your service</p>
            </div>
          </div>
        </div>
    </div> <!--end site section -->
    
    <div class="site-section user_satisfaction">
      <div class="container">

        <h3>Your Satisfaction Is Guaranteed!</h3>
        <p>We deliver as promised and want you to be happy with your booking.</p>

        <div class="row">

              <div class="col-sm col-guarantee">
                  <img src="images/icon_servicepro.png">
                  <h6>Verified Service Pro</h6>
                  <p>All our service providers are screened, background verified and rated by
                    <br>customers like you. </p>
              </div>

              <div class="col-sm col-guarantee">
                  <img src="images/icon_insurework.png">
                  <h6>Insured Work</h6>
                  <p>In the rare event of a damage, every<br> booking on the HelpCare platform is<br> Insured by up to PHP 10,000/-.</p>
              </div>

              <div class="col-sm col-guarantee">
                  <img src="images/icon_rework.png">
                  <h6>Re-work Assurance</h6>
                  <p>We strives to offer top quality services for you and your home every time. If you're not satisfied with the quality of the service, we'll get a rework done to your satisfaction at no extra charge.</p>
              </div>

        </div>
      </div>
    </div>

    <?php include "footer.php"?>

</div>

<!-- Login Modal --->
<?php include "login-popup.php"?>

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
</body>
</html>
