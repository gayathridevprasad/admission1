<html>

<head>
    <!-- Title Page-->
    <title>Event Footer Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <?php
    ?>
    <style>
        @keyframes spin {
            from {
                transform: rotateY(0deg);
                moz-transform: rotateY(0deg);
                ms-transform: rotateY(0deg);
            }

            to {
                transform: rotateY(360deg);
                moz-transform: rotateY(360deg);
                ms-transform: rotateY(360deg);
            }
        }

        .imageSpin {
            animation-name: spin;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 5s;
            -webkit-animation-name: spin;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-duration: 5s;
        }

        .foot {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(41, 22, 111);
            color: white;
            text-align: center;
        }

        #foot {
            text-align: center;
            display: block;
        }
    </style>
</head>
<footer>
    <div class="foot">
        Copyright &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>.<br/>
        <b>Kamaraj College of Engineering and Technology.</b>
    </div>
</footer>

</html>