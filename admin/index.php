<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <title>YERIKO</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/fullcalendar/vanillaCalendar.css" />
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" />
    <link rel="stylesheet" href="../assets/plugins/chartist/css/chartist.min.css" />
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css" />
    <link rel="stylesheet" href="../assets/plugins/metro/MetroJs.min.css" />

    <link rel="stylesheet" href="../assets/plugins/carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/plugins/carousel/owl.theme.default.min.css" />

    <link rel="stylesheet" href="../assets/plugins/animate/animate.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-material-design.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/icons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
  </head>

  <body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner"></div>
      </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">
      <!-- ========== Left Sidebar Start ========== -->
      <div class="left side-menu">
        <button
          type="button"
          class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"
        >
          <i class="mdi mdi-close"></i>
        </button>

        <!-- LOGO -->
        <div class="topbar-left">
          <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a>-->
            <a href="index.html" class="logo">
              <img src="assets/images/logo-lg.png" alt="" class="logo-large" />
            </a>
          </div>
        </div>

        <div class="sidebar-inner slimscrollleft" id="sidebar-main">
          <div id="sidebar-menu">
            <ul>
              <li class="menu-title">Main</li>

              <li>
                <a href="index.php" class="waves-effect">
                  <i class="mdi mdi-view-dashboard"></i>
                  <span>
                    Dashboard
                    <span class="badge badge-pill badge-primary float-right">7</span>
                  </span>
                </a>
              </li>

              <li class="menu-title">menu</li>
              <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect">
                  <i class="mdi mdi-table"></i>
                  <span> Wanajumuiya </span>
                  <span class="float-right">
                    <i class="mdi mdi-chevron-right"></i>
                  </span>
                </a>
                <ul class="list-unstyled">
                  <li>
                    <a href="wanajumuiya.php">Wanajumuiya</a>
                  </li>
                </ul>
              </li>

              <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect">
                  <i class="mdi mdi-cards"></i>
                  <span> Matangazo </span>
                  <span class="badge badge-pill badge-info float-right">8</span>
                </a>
                <ul class="list-unstyled">
                  <li>
                    <a href="form-elements.html">Matangazo</a>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end sidebarinner -->
      </div>
      <!-- Left Sidebar End -->

      <!-- Start right Content here -->

      <div class="content-page">
        <!-- Start content -->
        <div class="content">
          <!-- Top Bar Start -->
          <div class="topbar">
            <nav class="navbar-custom">
              <div class="dropdown notification-list nav-pro-img">
                <div class="list-inline-item hide-phone app-search">
                  <form role="search" class="">
                    <div class="form-group pt-1">
                      <input type="text" class="form-control" placeholder="Search.." />
                      <a href="">
                        <i class="fa fa-search"></i>
                      </a>
                    </div>
                  </form>
                </div>
              </div>

              <ul class="list-inline float-right mb-0 mr-3">
                <!-- language-->

                <li class="list-inline-item dropdown notification-list">
                  <a
                    class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                    data-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-haspopup="false"
                    aria-expanded="false"
                  >
                    <img
                      src="../assets/images/users/user.png"
                      alt="user"
                      class="rounded-circle img-thumbnail"
                    />
                  </a>
                  <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                      <h5>Welcome</h5>
                    </div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a
                    >
                    <a class="dropdown-item d-block" href="#">
                      <span class="badge badge-success float-right">5</span>
                      <i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a
                    >
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a
                    >
                  </div>
                </li>
              </ul>

              <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                  <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="mdi mdi-menu"></i>
                  </button>
                </li>
              </ul>

              <div class="clearfix"></div>
            </nav>
          </div>
          <!-- Top Bar End -->

          <div class="page-content-wrapper dashborad-v">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="page-title-box">
                    <div class="btn-group float-right">
                      <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Urora</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>

              <!-- end page title end breadcrumb -->
              <div class="row">
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-xl-3">
                  <div class="card bg-danger m-b-30">
                    <div class="card-body">
                      <div class="d-flex row">
                        <div class="col-3 align-self-center">
                          <div class="round">
                            <i class="mdi mdi-google-physical-web"></i>
                          </div>
                        </div>
                        <div class="col-8 ml-auto align-self-center text-center">
                          <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">18090</h5>
                            <p class="mb-0">Visits Today</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                  <div class="card bg-info m-b-30">
                    <div class="card-body">
                      <div class="d-flex row">
                        <div class="col-3 align-self-center">
                          <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                          </div>
                        </div>
                        <div class="col-8 text-center ml-auto align-self-center">
                          <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">562</h5>
                            <p class="mb-0">New Users</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                  <div class="card bg-success m-b-30">
                    <div class="card-body">
                      <div class="d-flex row">
                        <div class="col-3 align-self-center">
                          <div class="round">
                            <i class="mdi mdi-basket"></i>
                          </div>
                        </div>
                        <div class="col-8 ml-auto align-self-center text-center">
                          <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">7514</h5>
                            <p class="mb-0">New Orders</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                  <div class="card bg-primary m-b-30">
                    <div class="card-body">
                      <div class="d-flex row">
                        <div class="col-3 align-self-center">
                          <div class="round">
                            <i class="mdi mdi-calculator"></i>
                          </div>
                        </div>
                        <div class="col-8 ml-auto align-self-center text-center">
                          <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">$32874</h5>
                            <p class="mb-0">Total Sales</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Column -->
              </div>

              <!--end row-->
            </div>
            <!-- container -->
          </div>
          <!-- Page content Wrapper -->
        </div>
        <!-- content -->

        <footer class="footer">
          © 2025 Crafted By iSoftTz.
        </footer>
      </div>
      <!-- End Right content here -->
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap-material-design.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/detect.js"></script>
    <script src="../assets/js/fastclick.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/jquery.blockUI.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/jquery.nicescroll.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>

    <script src="../assets/plugins/carousel/owl.carousel.min.js"></script>
    <script src="../assets/plugins/fullcalendar/vanillaCalendar.js"></script>
    <script src="../assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="../assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/plugins/metro/MetroJs.min.js"></script>
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <script src="../assets/pages/dashborad.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>
  </body>
</html>
