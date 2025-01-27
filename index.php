<?php
session_start();
session_regenerate_id(true);
include('includes/config.php');
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$sql ="SELECT email,Password,level FROM admin WHERE phonenumber=:email and Password=:password";
	$query= $dbh -> prepare($sql);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':password', $password, PDO::PARAM_STR);
	$query-> execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$result=$query->fetch(PDO::FETCH_OBJ);
	$ans = $query->rowCount();
// 	echo "<script>alert('data $email $password $ans');</script>";
	if($query->rowCount() > 0)
	{

		$sql2 = "SELECT email,Password,level FROM admin WHERE phonenumber=:phonenumber and Password=:password";
		$query2 = $dbh -> prepare($sql2);
		$query2= $dbh -> prepare($sql);
		$query2-> bindParam(':email', $email, PDO::PARAM_STR);
		$query2-> bindParam(':password', $password, PDO::PARAM_STR);
		$query2-> execute();
		$result=$query2->fetch(PDO::FETCH_OBJ);
		
		if($result->level == "1"){
			$_SESSION['alogin']=$_POST['email'];

			$email = $_SESSION['alogin'];
			$sql = "SELECT * from admin where phonenumber = (:email);";
			$query = $dbh -> prepare($sql);
			$query-> bindParam(':email', $email, PDO::PARAM_STR);
			$query->execute();
			$result=$query->fetch(PDO::FETCH_OBJ);
			$full_name = $result->full_name;
			$_SESSION['fname'] = $full_name;

			$_SESSION['alevel']='1';
			echo "<script type='text/javascript'> document.location = 'admin/'; </script>";
		}else if($result->level == "2"){
			$_SESSION['alogin']=$_POST['email'];

			$email = $_SESSION['alogin'];
			$sql = "SELECT * from admin where phonenumber = (:email);";
			$query = $dbh -> prepare($sql);
			$query-> bindParam(':email', $email, PDO::PARAM_STR);
			$query->execute();
			$result=$query->fetch(PDO::FETCH_OBJ);
			$full_name = $result->full_name;
			$_SESSION['fname'] = $full_name;


			$_SESSION['alevel']='2';
			echo "<script type='text/javascript'> document.location = 'staff/'; </script>";
		}	

	}else{
		
    echo "<script>alert('Sorry,Your information not found in our system');</script>";

	}
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

    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div></div>
    <div class="wrapper-page">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/images/extra.png" alt="" class="img-fluid" />
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center pt-3">
                                        <a href="index.php">
                                            <img src="assets/images/yeriko1.png" alt="logo" height="60" />
                                        </a>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <form class="form-horizontal m-t-20 mb-0" method="POST" action="index.php">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" required=""
                                                        placeholder="Username" name="email" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="password" required=""
                                                        placeholder="Password" name="password" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1" />
                                                        <label class="custom-control-label" for="customCheck1">Remember
                                                            me</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-right row m-t-20">
                                                <div class="col-12">
                                                    <button name="login"
                                                        class="btn btn-primary btn-raised btn-block waves-effect waves-light"
                                                        type="submit">
                                                        Log In
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-material-design.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>