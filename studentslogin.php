<!DOCTYPE html>
<html lang="en">
<?php 
include 'db1config.php';
 
$con = mysqli_connect($host,$user,$pass, $db);
if(!$con)
{
	echo "Failed to connect to MySQL: ";
	exit();
}
 ?>
<head>
	
    <!-- Title Page-->
    <title>Admission Registration Portal</title>

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
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
        <?php include "header.html"; ?> 
            <?php include "tabs.html"; ?>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Admission Registration Portal</h2>
                </div>
                <div class="card-body">
                    <form method="GET">
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="n" placeholder="eg., Kamaraj.K" REQUIRED >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" REQUIRED>
                                </div>
                            </div>
                        </div>
                        <div  align="right">
                            <button class="btn btn--radius-2 btn--red" type="submit" name = "explore">Next</button>
                            <?php
                                //session_start();
                                
                                if(isset($_GET['explore']))
                                {
                                    $name = $_GET['n'];
                                    $email = $_GET['email'];

                                    //$_SESSION['name']=$name;
                                    //$_SESSION['email']=$email;

                                    //echo "$name";                                                            
                                    $sql = "select * from admission_q where Name = '$name' and Email = '$email'";
                                    $result = mysqli_query($con,$sql);
                                    $count = mysqli_num_rows($result);
                                    if($count <= 0){
                                        echo "Un Available";
                                        echo "<script> window.location = 'admi.php?name=$name&email=$email'</script>";                                        
                                        
                                    }
                                    else{
                                        echo "Available";
                                        echo "<script> window.location = 'LP3.php?'</script>";                                                                            
                                    }                                    
                                }	                        
                            ?>
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