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
            <li class=" nav-item"><a href="home.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="clients.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Customers</span></a>
            </li>
            <li class="active"><a href="orders.php"><i class="ft-file"></i><span class="menu-title" data-i18n="">Orders</span></a>
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
                                <h1>Orders List</h1>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->

            <!-- Statistics -->
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="form-group">
                                    <button class="btn btn-info btn-sm mr-1" type="button">View All</a>
                                    <button class="btn btn-info btn-sm mr-1" type="button">Today</a>
                                </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title"></h4>

                                <div class="table-responsive">
                                    <table class="table" id="customerTable">
                                        <thead class="thead-dark">
                                            <tr class="text-center">
                                                <th scope="col">#</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Order #</th>
                                                <th scope="col">Campaign</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">PM</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                               <td>1</td>
                                               <td>09/08/2021</td>
                                               <td>981232</td>
                                               <td>981232</td>
                                               <td>Cristian Daron<br>xtian@gmail.com</td>
                                               <td>Google</td>
                                               <td>$125</td>
                                               <td>Bank Transfer</td>
                                               <td>New</td>
                                               <td></td>
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
<div class="modal fade" id="addCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="regForm" method="POST">
      <div class="modal-body">
                    <div class="row mx-auto">
                  <fieldset class="form-group col-12">
                    <h5>1. Personal Information</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">First Name <code>*</code></p>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Last Name <code>*</code></p>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Company Name</p>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Phone Number <code>*</code></p>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Address</p>
                    <textarea class="form-control" id="address" name="address"></textarea>
                  </fieldset>
                  
                  <fieldset class="form-group col-12">
                    <h5>2. Account Information</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Email Address <code>*</code></p>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="john.doe@gmail.com">
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Password  <code>*</code></p>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="*********">
                    <small id="validatePassword">Password must be 8 characters long.</small>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Confirm Password  <code>*</code></p>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="*********">
                    <small id="checkMatch">Password did not match.</small>
                    <small id="matched">Password matched.</small>
                  </fieldset>
                  
                  <fieldset class="form-group col-12">
                    <h5>3. Subscription</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">List of Subscription<code>*</code></p>
                    <select class="form-control" name="subscription" required>
                        <option value="1">Lite Plan</option>
                        <option value="2">Pro Plan</option>
                        <option value="3">Premium Plan</option>
                    </select>
                  </fieldset>
                  </div>
                  <div class="form-group text-center" id="progress">
                      
                  </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addCustomer" id="addCustomer" class="btn btn-warning" value="Submit">
      </div>
    </form>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php 
include('inc/footer.php');
?>