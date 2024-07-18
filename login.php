<?php
session_start();
include("DBConnection/dbconnection.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Electro Hub :: Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="login/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form my-tab-div-x-z">
        <h1>Report Login Form</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <form action="#" method="post">
                            <input type="text" class="text" name="Email" placeholder="User Name" required="" autofocus>
                            <input type="password" class="password" name="Password" placeholder="User Password" required="" autofocus>
                            <button class="btn" type="submit" name="login">Log In</button>
                        </form>

                        <p class="account">Don't have an account? <a href="USER/userRegister.php">Register</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="login/images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2021 Report Login Form. All rights reserved | Design by <a href="#">pranav and amal</a></p>
        </div>
        <!-- //copyright-->

        <?php
        if (isset($_REQUEST['login'])) {
            $email = $_REQUEST['Email'];
            $password = $_REQUEST['Password'];
            $qry = "SELECT * FROM login WHERE `email` = '$email' AND `password` = '$password'";
            $result = mysqli_query($conn, $qry);
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $uid = $data['reg_id'];
                $type = $data['type'];
                $_SESSION['uid'] = $uid;
                $_SESSION['type'] = $type;

                if ($type == 'ADMIN') {
                    echo "<script>alert('Login Success'); window.location='ADMIN/adminHome.php'</script>";
                } else  if ($type == 'OWNER') {
                    echo "<script>alert('Login Success'); window.location='OWNER/ownerHome.php'</script>";
                } else if ($type == 'STAFF') {
                    echo "<script>alert('Login Success'); window.location='STAFF/staffHome.php'</script>";
                } else if ($type == 'USER') {
                    echo "<script>alert('Login Success'); window.location='USER/userHome.php'</script>";
                } else if ($type == 'SERVICE') {
                    echo "<script>alert('Login Success'); window.location='SERVICE/serviceHome.php'</script>";
                } else {
                    echo "<script>alert('Login Failed')</script>";
                }
            } else {
                echo "<script>alert('Invalid Email / Password'); window.location='index.php'</script>";
            }
        }
        ?>


    </section>
    <!-- //form section start -->
</body>

</html>