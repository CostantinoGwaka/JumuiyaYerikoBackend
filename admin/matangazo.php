<?php include '../includes/config.php'; ?>
<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
    header('location:../index.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title>YERIKO</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
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
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="mdi mdi-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!-- <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a> -->
                    <a href="index.php" class="logo">
                        <img src="../assets/images/whiteyeriko1.png" alt="" height="60" />
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
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="matangazo.php">Matangazo</a>
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
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="../assets/images/users/user.png" alt="user"
                                        class="rounded-circle img-thumbnail" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item d-block" href="#">
                                        <span class="badge badge-success float-right">5</span>
                                        <i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">YERIKO</a></li>
                                            <li class="breadcrumb-item"><a href="#">Matangazo</a></li>
                                            <li class="breadcrumb-item active">Kutuma Matangazo</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Matangazo</h4>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Ujumbe wa
                                            kutuma</h4>

                                        <div class="general-label">
                                            <form class="mb-0" method="POST" action="matangazo.php"
                                                enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="exampleTextarea" class="bmd-label-floating">Ujumbe wa
                                                        kutuma
                                                    </label>
                                                    <textarea class="form-control" name="message" id="message"
                                                        rows="10"></textarea>
                                                </div>

                                                <button type="submit" name="ongeza"
                                                    class="btn btn-primary btn-raised mb-0">
                                                    Tuma
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
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

    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>
<?php
                if(isset($_POST['ongeza'])){

                    $message = $_POST['message'];
                    $messageId = "YERIKO-". rand(40403,19000);

                    $post_date = date('Y-m-d');



                    if($message == "" || $messageId == "")
                    {
                        echo "<script>alert('Please Make Sure Your Provide All Details')</script>";
                        echo "<script>window.open('matangazo.php','_self')</script>";
                        exit();
                    }else{
                        $insert = "insert into `jumbe`(`messageid`, `message`, `people`, `dates`) VALUES('$messageId','$message','0','$post_date')";
                        $run = mysqli_query($con,$insert);
                        
                        $select = "select * from wanajumuiya";
                        $run = mysqli_query($con,$select);
                        $people = 0;
                        while($row=mysqli_fetch_array($run)){
                        	$phone = $row['namba_ya_simu'];
                        	$newPhone = substr($phone, 1);
                        	$form = "$newPhone";
                        	$api_key='3c097df3f528142c';
                            $secret_key = 'N2UxYmEyYzUwZmIzYWZhYTY1YzdlZGRhNWFhZDZkZjg4MjJiMWY2ZDRmYTBjNDZiNjEzNTcxMTBmMGEwYTdmZg==';
                            
                            $postData = array(
                                'source_addr' => 'INFO',
                                'encoding'=>0,
                                'schedule_time' => '',
                                'message' => "$message\n$messageId\nYeriko System",
                                'recipients' => [array('recipient_id' => '1','dest_addr'=>"$form")]
                            );
                            
                            $Url ='https://apisms.beem.africa/v1/send';
                            
                            $ch = curl_init($Url);
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                            curl_setopt_array($ch, array(
                                CURLOPT_POST => TRUE,
                                CURLOPT_RETURNTRANSFER => TRUE,
                                CURLOPT_HTTPHEADER => array(
                                    'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
                                    'Content-Type: application/json'
                                ),
                                CURLOPT_POSTFIELDS => json_encode($postData)
                            ));
                            
                            $response = curl_exec($ch);
                            
                            if($response === FALSE){
                                echo $response;
                                die(curl_error($ch));
                            }
                        	$people = $people + 1;
                        }
                        
                        if($run)
                        {
                            $insert = "UPDATE `jumbe` SET `people`='$people' WHERE `messageid` = '$messageId' ";
		                    $run = mysqli_query($con,$insert);
                            echo "<script>alert('Jumbe imetumwa kikamirifu kikamirifu !!')</script>";
                            echo "<script>window.open('matangazo.php','_self')</script>";
                        }
                        else
                        {
                            echo "<script>alert('Something went wrong !!')</script>";
                            echo "<script>window.open('matangazo.php','_self')</script>";
                        }
                    }

                }

                
?>