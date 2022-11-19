<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 14:15:12 GMT -->

<head>
    <meta charset="utf-8" />
    <title> Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- third party css -->
    <link href="libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- C3 Chart css -->
    <link href="libs/c3/c3.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body data-layout="horizontal">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Navigation Bar-->
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown d-none d-lg-block">
                            <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="images/flags/us.jpg" alt="lang-image" height="12">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/germany.jpg" alt="lang-image" class="mr-1" height="12"> <span
                                        class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/italy.jpg" alt="lang-image" class="mr-1" height="12"> <span
                                        class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/spain.jpg" alt="lang-image" class="mr-1" height="12"> <span
                                        class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/russia.jpg" alt="lang-image" class="mr-1" height="12"> <span
                                        class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow m-0"><span class="float-right">
                                            <span class="badge badge-danger float-right">5</span>
                                        </span>Notification</h5>
                                </div>

                                <div class="slimscroll noti-scroll">

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i
                                                class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Robert S. Taylor commented on Admin<small
                                                class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-settings-outline"></i>
                                        </div>
                                        <p class="notify-details">New settings
                                            <small class="text-muted">There are new settings available</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-bell-outline"></i>
                                        </div>
                                        <p class="notify-details">Updates
                                            <small class="text-muted">There are 2 new updates available</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="images/users/avatar-4.jpg" class="img-fluid rounded-circle"
                                                alt="" />
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user
                                            <small class="text-muted">You have 10 unread messages</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>
                        <?php
                        if (isset($_SESSION['adminid'])) {
                            include_once 'config.php';
                            $id = $_SESSION['adminid'];
                            $d_query = "select * from admin where admin_id='$id'";
                            $d_result = mysqli_query($conn, $d_query);
                            $d_row = mysqli_fetch_assoc($d_result);
                        }
                        ?>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($d_row['admin_profile']); ?>"
                                    width="32" height="32" alt="User" class="rounded-circle">

                                <span class="pro-user-name ml-1">
                                    <?php echo $d_row['admin_name'] ?> <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="profile.php" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profile</span>
                                </a>
                                <?php

                                if (!isset($_SESSION['adminid'])) {
                                ?>

                                <!-- item-->
                                <a href="login.php" class="dropdown-item notify-item">
                                    <i class="fe-log-in"></i>
                                    <span>Login</span>
                                </a>
                                <?php } else { ?>
                                <!-- item-->
                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                                <?php } ?>
                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">

                        <a href="index.php" class="logo text-center logo-dark">
                            <span class="logo-lg">
                                <img src="images/logo-dark.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">A</span> -->
                                <img src="images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>

                        <a href="index.php" class="logo text-center logo-light">
                            <span class="logo-lg">
                                <img src="images/logo-light.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">A</span> -->
                                <img src="images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.php"> <i class="fe-airplay"></i>Dashboard</a>
                            </li>
                            <li class="has-submenu">
                                <a href="product_warranty.php">
                                    <i class="fe-briefcase"></i>Product Warranty
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="product_badge.php">
                                    <i class="fe-briefcase"></i>Product Badge
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="main_category.php">
                                    <i class="fe-briefcase"></i>Category
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="product.php">
                                    <i class="fe-box"></i>Product</a>
                            </li>
                            <li class="has-submenu">
                                <a href="weddingpackage.php"><i class="fe-box"></i></i>Wedding Package</a>
                            </li>
                            <li class="has-submenu">
                                <a href="service.php"><i class="fe-box"></i></i>Services</a>
                            </li>

                            <li class="has-submenu">
                                <a href="order.php"><i class="fe-file-plus"></i>Orders</a>
                            </li>
                            <li class="has-submenu">
                                <a><i class="fe-plus-square"></i>More</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span class="menu-title">More Pages</span>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="user.php">Users</a>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="feedback.php">feedback</a>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="team.php">Team</a>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="subscription.php">Subscription</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->