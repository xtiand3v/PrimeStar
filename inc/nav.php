<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content pt-1">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-block d-md-none d-lg-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-block text-white">
                        <?php
                        if ($subscriptionStatus == "Trial") {
                        ?>
                            <div id="progressBar">
                                <div></div> 
                            </div>
                           <small>Free trial ends in :</small>
                        <?php
                        } else {
                        ?>
                            <?php echo $subscriptionName; ?>: <a class="btn btn-success btn-sm">Active</a>
                        <?php

                        }
                        ?>
                    </li>
                    <ul class="dropdown-menu">
                        <li class="arrow_box">
                            <form>
                                <div class="input-group search-box">
                                    <div class="position-relative has-icon-right full-width">
                                        <input class="form-control" id="search" type="text" placeholder="Search here...">
                                        <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online"><img src="theme-assets/images/portrait/avatar.jpg" class="bg-white" alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <a class="dropdown-item" href="#">
                                    <i class="ft-user"></i> Edit Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="inc/logout.php"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>