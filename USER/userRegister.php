<?php
session_start();
include("../DBConnection/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Electro Hub :: Register</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="../login/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="../login/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form my-tab-div-x-z">
        <h1> Register Form</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Register</h2>
                        <form action="#" method="post">
                            <input type="text" class="text" name="NAME" placeholder="Name" required autofocus>
                            <input type="number" name="AGE" placeholder="Age" required>
                            <input type="text" name="PHONE" placeholder="Phone" maxlength="10" pattern="[0-9][0-9]{9}" required>
                            <textarea placeholder="Address" name="ADDRESS" required></textarea>
                            <input value="E-MAIL" class="text" name="EMAIL" type="email" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}" />
                            <input value="PASSWORD" class="password" name="PASSWORD" type="password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" />
                            <div class="clear"></div>
                            <button class="btn" name="register" type="submit">Register</button>

                        </form>

                        <p class="account">Already have an account? <a href="../index.php">Login</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="../login/images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2021 Report Login Form. All rights reserved | Design by <a href="#">pranav and amal </a></p>
        </div>
        <!-- //copyright-->

        <?php
        if (isset($_REQUEST['register'])) {

            $Name = $_REQUEST['NAME'];
            $Age = $_REQUEST['AGE'];
            $Phone = $_REQUEST['PHONE'];
            $Address = $_REQUEST['ADDRESS'];
            $Email = $_REQUEST['EMAIL'];
            $Password = $_REQUEST['PASSWORD'];

            $qryCheck = "SELECT COUNT(*) AS cnt FROM `user_reg` WHERE `u_email` = '$Email' OR `u_phone` = '$Phone'";

            $qryOut = mysqli_query($conn, $qryCheck);

            $fetchData = mysqli_fetch_array($qryOut);

            if ($fetchData['cnt'] > 0) {
                echo "<script>alert('Already exist an Account with same Email / Phone Number');window.location = 'userRegister.php';</script>";
            } else {

                $qryReg = "INSERT INTO user_reg(u_name, u_age, u_phone, u_address, u_email) VALUES('$Name', '$Age', '$Phone', '$Address', '$Email')";
                $qryLog = "INSERT INTO login(`reg_id`, `email`, `password`, `type`) VALUES((select max(u_id) from user_reg), '$Email', '$Password', 'USER')";

                // echo $qryReg . "&& " . $qryLog;

                if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
                    echo "<script>alert('Registration Success');window.location = '../index.php';</script>";
                } else {
                    echo "<script>alert('Registration Failed');window.location = 'userRegister.php';</script>";
                }
            }
        }

        ?>

    </section>
    <!-- //form section start -->
</body>

</html>