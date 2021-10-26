<?php
session_start();
include('../inc/connection.php');
if (!isset($_SESSION['username'])) {
    echo "<script> window.location.href = 'index.php'</script>";
}
include('inc/header.php');
include('inc/totalNum.php');
?>

<!-- fixed-top-->
<?php 
include ('inc/nav.php');
?>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="../theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Prime Star admin logo" src="../theme-assets/images/logo/logo.png" />
                    <h3 class="brand-text">Prime Star</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="home.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="clients.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Customers</span></a>
            </li>
            <li class=" nav-item"><a href="orders.php"><i class="ft-file"></i><span class="menu-title" data-i18n="">Orders</span></a>
            </li>
            <li class=" nav-item"><a href="tasks.php"><i class="ft-info"></i><span class="menu-title" data-i18n="">Problems</span></a>
            </li>
            <li class=" nav-item"><a href="invoices.php"><i class="ft-file-text"></i><span class="menu-title" data-i18n="">Invoices</span></a>
            </li>
            <li class=" nav-item"><a href="reports.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Reports</span></a>
            </li>
            <li class=" nav-item"><a href="inc/logout.php"><i class="ft-log-out"></i><span class="menu-title" data-i18n="">Logout</span></a>
            </li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Chart -->
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-12 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content">
                            <div class="text-center pt-2">
                                <h1>Hello, Administrator</h1>
                                <p>Welcome to the Admin Dashboard</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2">
                            <div class="pb-0">
                            <h5 class="text-muted success p-1" style="padding-bottom: 0 !important;">Customers</h5>
                            </div>
                            <div class="row p-1 pt-0">
                            <div class="col-4">
                                <small>Total</small>
                                <h1 class="text-bold-600 font-large-2">
                                3 <i class="ft-users success font-large-1"></i> </h1>
                            </div>
                            <div class="col-7 d-flex text-center">
                                <div class="p-1">
                                <p>Today <br><b>3</b></p>
                                </div>
                                <div class="p-1">
                                <p>Week <br><b>3</b></p>
                                </div>
                                <div class="p-1">
                                <p>Month <br><b>3</b></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2">
                            <div class="pb-0">
                            <h5 class="text-muted info p-1" style="padding-bottom: 0 !important;">Orders</h5>
                            </div>
                            <div class="row p-1 pt-0">
                            <div class="col-4">
                                <small>Total</small>
                                <h1 class="text-bold-600 font-large-2">
                                0 <i class="ft-file info font-large-1"></i> </h1>
                            </div>
                            <div class="col-7 d-flex text-center">
                                <div class="p-1">
                                <p>Today <br><b>0</b></p>
                                </div>
                                <div class="p-1">
                                <p>Week <br><b>0</b></p>
                                </div>
                                <div class="p-1">
                                <p>Month <br><b>0</b></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        
                    <div class="card-content ecom-card2">
                            <div class="pb-0">
                            <h5 class="text-muted danger p-1" style="padding-bottom: 0 !important;">Problem Tasks</h5>
                            </div>
                            <div class="row p-1 pt-0">
                            <div class="col-4">
                                <small>Total</small>
                                <h1 class="text-bold-600 font-large-2">
                                0 <i class="ft-info danger font-large-1"></i> </h1>
                            </div>
                            <div class="col-7 d-flex text-center">
                                <div class="p-1">
                                <p>Today <br><b>0</b></p>
                                </div>
                                <div class="p-1">
                                <p>Week <br><b>0</b></p>
                                </div>
                                <div class="p-1">
                                <p>Month <br><b>0</b></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->

            <!-- Statistics -->
            <div class="row match-height">
                <div class="col-xl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="heading-multiple-thumbnails">Recently added </h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <div class="form-group">
                                    <a class="btn btn-warning btn-min-width mr-1 mb-1" href="clients.php" role="button">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Customers</h4>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date Registered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include ('inc/dashCustomerList.php');
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--/ Statistics -->
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php 
include('inc/footer.php');
?>