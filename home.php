<?php
session_start();
include('inc/connection.php');
if (!isset($_SESSION['email'])) {
    echo "<script> window.location.href = 'index.php'</script>";
}
include('inc/header.php');
include('inc/check_subscription.php');
include('inc/getDataClient.php');
include('inc/orders.php');
?>

<!-- fixed-top-->
<?php
include('inc/nav.php');
?>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="theme-assets/images/logo/logo.png" />
                    <h3 class="brand-text">Prime Star</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="orders.php"><i class="ft-file"></i><span class="menu-title" data-i18n="">Orders</span></a>
            </li>
            <li class=" nav-item"><a href="manage-subs.php"><i class="ft-file"></i><span class="menu-title" data-i18n="">Billing</span></a>
            </li>
            <li class=" nav-item"><a href="invoices.php"><i class="ft-file-text"></i><span class="menu-title" data-i18n="">Invoices</span></a>
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
        <div class="content-body mt-1">
            <!-- Chart -->
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-6">
                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content">
                            <div class="text-center pt-2">
                                <h1>Hello, <?php echo $user_name; ?></h1>
                                <p>Welcome to your dashboard</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2">
                            <div class="pb-0">
                            <h3 class="text-muted success p-1" style="padding-bottom: 0 !important;">Active</h3>
                            </div>
                            <div class="row p-1 pt-0">
                            <div class="col-4">
                                <small>Total</small>
                                <h1 class="text-bold-600 font-large-2">
                                <?php echo $active; ?> <i class="ft-circle success font-large-1"></i> </h1>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2">
                            <div class="pb-0">
                            <h3 class="text-muted info p-1" style="padding-bottom: 0 !important;">Completed</h3>
                            </div>
                            <div class="row p-1 pt-0">
                            <div class="col-4">
                                <small>Total</small>
                                <h1 class="text-bold-600 font-large-2">
                                <?php echo $completed; ?> <i class="ft-check-square info font-large-1"></i> </h1>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
                </div>
                
                <div class="col-6">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content">
                            <div class="text-center pt-2">
                                <h1>Add Business Listing</h1>
                                <center>
                                    <button class="btn btn-info btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#businessModal" type="button"><i class="ft-plus"></i>Add</button>
                                </center>
                            </div>
                                <center>
                                    <h4>List of Business</h4>
                                </center>
                            <?php
                            $company = mysqli_query($conn, "SELECT * FROM client_business WHERE client_id = '$client_id' ORDER BY business_id DESC");
                            if (mysqli_num_rows($company) >= 1) {
                                ?>
                                
                                <div class="table-responsive">
                                        <table class="table table-hovered">
                                <?php
                                $num = 1;
                                while($companyData = mysqli_fetch_array($company)){
                                    ?>
                                    <tr>
                                        <td><?php echo $num++; ?>. <?php echo $companyData['company_name']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    
                                    </table>
                                    </div>

                                    <?php
                            } else {
                                
                            ?>
                            <center>
                                <h3>Empty data.</h3>
                            </center>

                        <?php
                               
                        } ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->

            <!-- Statistics -->
            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" id="heading-multiple-thumbnails">Announcements </h3>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <div class="form-group">
                                    <a class="btn btn-warning btn-min-width mr-1 mb-1" href="#" role="button">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title"><small>Latest Updates/Promo/Announcements</small></h4>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   Announcement #1
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
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

<div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD BUSINESS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="inc/addBusiness.php">
            <div class="modal-body">
                <div class="row">
                        <input type="text" name="client_id" hidden value="<?php echo $client_id; ?>" class="form-control">
                    <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Company Name</p>
                        <input type="text" name="company_name" class="form-control">
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Listing Links</p>
                        <input type="text" name="listing_link" class="form-control">
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Business Type</p>
                        <select name="company_type" class="form-control" required>
                            <option value="Startup" selected>Startup</option>
                            <option value="Individual">Individual</option>
                            <option value="Multi-location">Multi-location</option>
                            <option value="Agency Partnership">Agency Partnership</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group col-12 col-lg-12 col-md-12col-sm-12 col-xs-12">
                        <p>Listing Platform</p>
                        <select name="listing_platform" class="form-control" required>
                            <option value="Google" selected>Google</option>
                            <option value="Tripadvisor">Tripadvisor</option>
                            <option value="Trustpilot">Trustpilot</option>
                        </select>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="saveBusiness" class="btn btn-warning" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>
<?php 
include('modal.php');
 ?>

<!-- Trial Ended --> 

<div class="modal fade" id="trialEndedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9998;background: rgba(0,0,0,0.8)">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trial Ended</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
          <div class="float-right">
              
              <a class="btn btn-danger" href="inc/logout.php"><i class="ft-power"></i> Logout</a>
              </div>
      </div>
      <div class="modal-body">
          <center><h1>Your 7-day Free Trial has ended.</h1></center>
      <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">
                                    <center>
                                        <img src="theme-assets/images/subscription/lite-plan.png" class="img-fluid">
                                    </center>
                                </h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                        <div class="form-group text-center">
                                            <button class="btn btn-warning btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#liteModal" type="button">Choose Plan</button>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">
                                    <center>
                                        <img src="theme-assets/images/subscription/pro-plan.png" class="img-fluid">
                                    </center>
                                </h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                        <div class="form-group text-center">
                                            <button class="btn btn-warning btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#proModal" type="button">Choose Plan</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">
                                    <center>
                                        <img src="theme-assets/images/subscription/premium-plan.png" class="img-fluid">
                                    </center>
                                </h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                        <div class="form-group text-center">
                                            <button class="btn btn-warning btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#premiumModal" type="button">Choose Plan</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
<script> 
$(window).on('load', function() {
    $('#trialEndedModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
});
});
</script>