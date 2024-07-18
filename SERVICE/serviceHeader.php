<?php
session_start();
include("../DBConnection/dbconnection.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Electro Hub | Home :: SERVICE</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta name="keywords" content="Mechanized Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener(
            "load",
            function() {
                setTimeout(hideURLbar, 0);
            },
            false
        );

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet" />

    <!-- //Fonts -->

    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="../login/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="../login/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <!-- mian-content -->
    <div class="main-content-x" id="home">
        <div class="layer-x">
            <!-- header -->
            <header>
                <div class="container-fluid px-lg-5">
                    <!-- nav -->
                    <nav class="py-4 d-lg-flex">
                        <div id="logo">
                            <h1><a href="ownerHome.php"> Electro Hub</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li class="active"><a href="serviceHome.php">Home</a></li>
                            <!-- <li><a href="profile.php" class="scroll">Profile</a></li> -->
                            <!-- <li><a href="addStaff.php" class="scroll">Add Staff</a></li> -->
                            <!-- <li><a href="viewStaff.php" class="scroll">View Staff</a></li> -->
                            
                            <li><a href="viewRequest.php" class="scroll">View Request</a></li>
                            <li><a href="viewApprovedRequest.php" class="scroll">Approved Request</a></li>
                            <li><a href="History.php" class="scroll">History</a></li>
                            <li><a href="../index.php" class="scroll">Logout</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <!-- <div class="container">
              
                <div class="banner-info-w3layouts">
                    <h3>Turning big ideas into great products</h3>
                    <p class="my-3">
                        Lorem Ipsum has been the industry's standard since the
                        1500s.Vestibulum ante ipsum primis in faucibus orci luctus.
                    </p>
                    <a href="#" class="read-more mt-3 btn">Read More </a>
                </div>
            </div> -->
        </div>
        <!-- //banner -->