<?php 
session_start();
include ('../inc/connection.php');
if(isset($_SESSION['username'])){
  echo "<script> window.location.href = 'home.php'</script>";
}
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
  <link rel="apple-touch-icon" href="../theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="https://primestarmktg.xtian.dev/theme-assets/images/logo/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../theme-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="../theme-assets/css/app-lite.css">
  <!-- END CHAMELEON  CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-orange-yellow" data-col="2-columns">

  <!-- fixed-top-->

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-body">
        <!-- Basic Inputs start -->


        <div class="col-xl-4 mx-auto col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center">
                <center>
                  <img src="https://www.primestarmarketing.com/wp-content/uploads/2021/06/PrimeStarLogo-gradient-black.png" class="img-fluid" width="200">
                  <h1 class="text-uppercase mt-2">Administrator Login</h1>
                </center>
              </h4>
            </div>
            <div class="card-block">
              <div class="card-body">
                <form id="loginForm" method="POST" action="check.php">
                  <center>
                <div id="ack"></div>
              </center>
                  <fieldset class="form-group">
                    <p class="text-muted">Username</p>
                    <input type="text" class="form-control" id="username" name="username">
                  </fieldset>
                  <fieldset class="form-group">
                    <p class="text-muted">Password</p>
                    <input type="password" class="form-control" id="password" name="password">
                  </fieldset>
                  <div class="form-group">
                    <button class="btn btn-warning btn-min-width mr-1 mb-1" type="submit" id="submitLogin">Submit</button>
                  </div>
                  <!-- <div class="form-group text-center">
                    <p>Don't have an account? <a href="register.php">Register here</a></p>
                  </div> -->
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
  <script src="../theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="../theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
  <script src="../theme-assets/js/core/app-lite.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script src="../theme-assets/vendors/js/forms/tags/form-field.js" type="text/javascript"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- END PAGE LEVEL JS-->
</body>

<?php include ('inc/confirmation.php'); ?>
</html>