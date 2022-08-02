<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta property="og:title" content="KCET - Online Event Registration 2020-2021" />
    <meta property="og:description" content="Online Events started for 2020-2021 at KCET" />
    <meta property="og:url" content="http://www.kamarajengg.edu.in/Events/index.php" />
    <meta property="og:image" content="http://www.kamarajengg.edu.in/Events/img/king.jpg" />
    
    <!-- Title Page-->
    <title>Eligibility Criteria Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        .admissionpics{
            width:100%;
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
        <?php include "header.html"; ?> 
            <?php include "tabs.html"; ?>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Eligibility Criteria</h2>
                </div>
                <div class="card-body" style="text-align: center;">                      
                    <div>
                        <a class = 'btn btn--radius btn--blue' href="be.php">First year B.E/B.Tech</a><br><br>
                        <a class = 'btn btn--radius btn--blue' href="le.php">Lateral Entry</a><br><br>
			<a class = 'btn btn--radius btn--blue' href="me.php">First Year M.E/M.Tech</a>
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
<?php include 'Foot.php'; ?>                    
<!-- end document-->