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
            <li class="active"><a href="clients.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Customers</span></a>
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
                                <h1>Customers List</h1>
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
                          
<!-- Notification -->
<?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                            <div class="form-group">
                                    <button class="btn btn-success btn-sm btn-min-width mr-1" data-toggle="modal" data-target="#addCustomer" type="button">Add New Customer</a>
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
                                                <th scope="col">Customer ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Types</th>
                                                <th scope="col">Campaign<br><small>Active|Completed</small></th>
                                                <th scope="col">Date Registered</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include ('inc/customersList.php');
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
<?php 
include('inc/footer.php');
include('inc/client_modal.php');
?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#editCustomer').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


  $("#editCustomer").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

  

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#deleteCustomer').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'clients_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#client_id').val(response.client_id);
      $('.client_id').val(response.client_id);
      $('#edit_name').val(response.client_fullname);
      $('#editphone_number').val(response.client_contact);
      $('#editpassword').val(response.password);
      $('#editemail').val(response.client_email);
      $('#editaddress').text(response.client_address);
    }
  });
}
</script>