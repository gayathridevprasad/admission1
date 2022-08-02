<!DOCTYPE html>
<html lang="en">

<head>
	
    <!-- Title Page-->
    <title>Admin Login Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

                            <?php
                             session_start();
                                if(isset($_POST['explore']))
                                {
                                    $logins=array('Admin' => 'Admin');
				    $name=isset($_POST['name'])? $_POST['name'] : '';
				    $pwd=isset($_POST['pwd'])? $_POST['pwd'] : '';
                                    if(isset($logins[$name]) && $logins[$name] == $pwd)
                                    {
					$_SESSION['UserData']['name']=$logins[$name];
                                        $_SESSION['login']='Loggedin';
                                        $_SESSION['start'] = time();

	 				// taking now logged in time
					$_SESSION['expire'] = $_SESSION['start'] + (10 * 60) ; 
					header("location:admin.php");
                                        exit;
                                    }
                                    else{$msg="<span style='color:red'>Invalid Login</span>";}
                                    //$n = "Admin";
                                    //$p = "Admin";
                                    //$name = $_GET['name'];
                                    //$pwd = $_GET['pwd'];
                                    //if($name == $n && $pwd == $p){
                                      //  echo "<script> window.location = 'admin.php'</script>";
                                                                                                                                                                                              
                                }	                        
                            ?>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
        <?php include "header.html"; ?> 
            <?php include "tabs.html"; ?>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Admin Panel</h2>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-row">
                        <?php if(isset($msg)) { ?>
                           <button class="btn btn--radius-2 btn--red" type="submit" name = "s"><?php echo $msg; ?></button>
			<?php }?>
			</div>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" REQUIRED>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pwd" REQUIRED>
                                </div>
                            </div>
                        </div>
                        <div  align="right">
                            <button class="btn btn--radius-2 btn--red" type="submit" name = "explore">submit</button>
                             
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
<?php include 'Foot.php'; ?>      