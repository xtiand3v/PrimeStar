<?php
session_start();
include('inc/connection.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
  <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Prime Star Marketing</title>
  <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="https://primestarmktg.xtian.dev/theme-assets/images/logo/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
  <!-- END CHAMELEON  CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <!-- END Custom CSS-->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    body {
      font-family: 'Lato', sans-serif;
    }
    #validatePassword {
      display: none;
      color: red;
    }

    #checkMatch {
      display: none;
      color: red;
    }

    #matched {
      display: none;
      color: green;
    }
    fieldset p,h5{
      color: black;
    }
  </style>
</head>

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-orange-yellow" data-col="2-columns">

  <!-- fixed-top-->

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-body">
        <!-- Basic Inputs start -->


        <div class="col-xl-12 mx-auto col-lg-12 col-md-12 col-12 sol-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center">
                <center>
                  <img src="https://www.primestarmarketing.com/wp-content/uploads/2021/06/PrimeStarLogo-gradient-black.png" class="img-fluid" width="200">
                  <h1 class="mt-2 text-bold-600">Let’s begin your 7-day trial now</h1>
                  <h3 class="mt-2">Create your account</h3>
                </center>
              </h4>
            </div>
            <div class="card-block">
              <div class="card-body">
                <form id="regForm" method="POST">
                  <div class="container">
                  <div class="row">
                    <fieldset class="form-group col-12 col-lg-3 offset-lg-3 offset-0 offset-sm-0 offset-md-0 offset-xl-3 col-md-6 col-sm-12 col-xs-12">
                      <p>Name <code>*</code></p>
                      <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                      <p >Phone Number <code>*</code></p>
                      <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-3 offset-lg-3 offset-0 offset-sm-0 offset-md-0 offset-xl-3 col-md-6 col-sm-12 col-xs-12">
                      <p >Country</p>
                      <select class="form-control" name="country">
                        <?php include('inc/countryList.php'); ?>
                      </select>
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <p >Zip code</p>
                      <input type="text" class="form-control" id="zip" name="zip_code">
                    </fieldset>
                    <!-- <fieldset class="form-group col-12 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                      <p >Business Type</p>
                      <select name="company_type" class="form-control" required>
                        <option value="Startup" selected>Startup</option>
                        <option value="Individual">Individual</option>
                        <option value="Multi-location">Multi-location</option>
                        <option value="Agency Partnership">Agency Partnership</option>
                      </select>
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-4 offset-lg-2 offset-0 offset-sm-0 offset-md-0 offset-xl-2 col-md-6 col-sm-12 col-xs-12">
                      <p >Listing Platform</p>
                      <select name="listing_platform" class="form-control" required>
                        <option value="Google" selected>Google</option>
                        <option value="Tripadvisor">Tripadvisor</option>
                        <option value="Trustpilot">Trustpilot</option>
                      </select>
                    </fieldset> -->
                    <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12 offset-lg-3 offset-0 offset-sm-0 offset-md-0 offset-xl-3">
                      <p >Email Address <code>*</code></p>
                      <input type="email" class="form-control" id="email" name="email" required placeholder="john.doe@gmail.com">
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12 offset-lg-3 offset-0 offset-sm-0 offset-md-0 offset-xl-3">
                      <p >Password <code>*</code></p>
                      <input type="password" class="form-control" id="password" name="password" required placeholder="*********">
                      <small id="validatePassword">Password must be 8 characters long.</small>
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                      <p >Confirm Password <code>*</code></p>
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="*********">
                      <small id="checkMatch">Password did not match.</small>
                      <small id="matched">Password matched.</small>
                    </fieldset>
                  </div>
                  </div>
                  <div class="form-group text-center" id="progress">

                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-warning btn-min-width mr-1 mb-1" type="submit" disabled id="submit">Submit</button>
                  </div>
                  <div class="form-group text-center">
                    <p>Already have an account? <a href="login.php">Sign In</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2021 &copy; Copyright <a class="text-bold-800 grey darken-2 text-black-50" href="" target="_blank">Prime Star Marketing</a></span>
    </div>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
  <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
  <script src="theme-assets/js/script.js" type="text/javascript"></script>
  <script src="theme-assets/vendors/js/forms/tags/form-field.js" type="text/javascript"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- END PAGE LEVEL JS-->
</body>

</html>