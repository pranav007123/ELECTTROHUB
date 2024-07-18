<?php
include("adminHeader.php");
?>

<!-- form section start -->
<section class="w3l-hotair-form my-tab-div-x">
    <h1>Add Service Center</h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2>Add</h2>
                    <form action="#" method="post">
                        <input type="text" class="text" name="S_NAME" placeholder="Service Center Name" required autofocus>
                        <textarea placeholder="Address" name="S_ADDRESS" required></textarea>
                        <input type="text" name="S_LNO" placeholder="License Number" required>

                        <input type="text" class="text" name="ONAME" placeholder="Owner Name" required>
                        <input type="text" name="SPHONE" placeholder="Phone" maxlength="10" pattern="[0-9][0-9]{9}" required>
                        <input value="E-MAIL" class="text" name="SEMAIL" type="email" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}" />
                        <input value="PASSWORD" class="password" name="SPASSWORD" type="password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" />
                        <div class="clear"></div>
                        <button class="btn" name="add_service" type="submit">Add</button>

                    </form>

                </div>
                <div class="w3l_form align-self">
                    <di id="map-x">
                        <img src="../login/images/1.png" alt="" class="img-fluid">
                </div>
            </div>

            <!-- <div id="id-map" style="width: 600px; height: 500px;">

                </div> -->
        </div>
    </div>
    <!-- //form -->
    </div>

    <?php
    if (isset($_REQUEST['add_service'])) {

        $SName = $_REQUEST['S_NAME'];
        $SAddress = $_REQUEST['S_ADDRESS'];
        $SLicense = $_REQUEST['S_LNO'];

        $OName = $_REQUEST['ONAME'];
        $Phone = $_REQUEST['SPHONE'];
        $Email = $_REQUEST['SEMAIL'];
        $Password = $_REQUEST['SPASSWORD'];

        $qryCheck = "SELECT COUNT(*) AS cnt FROM `service` WHERE `s_email` = '$Email' OR `s_phone` = '$Phone'";

        $qryOut = mysqli_query($conn, $qryCheck);

        $fetchData = mysqli_fetch_array($qryOut);

        if ($fetchData['cnt'] > 0) {
            echo "<script>alert('Already exist an Account with same Email / Phone Number');window.location = 'addService.php';</script>";
        } else {

            $qryReg = "INSERT INTO service(s_name, address, license_no, s_owner, s_phone, s_email) VALUES('$SName', '$SAddress', '$SLicense', '$OName', '$Phone', '$Email')";
            $qryLog = "INSERT INTO login(`reg_id`, `email`, `password`, `type`) VALUES((select max(s_id) from service), '$Email', '$Password', 'SERVICE')";

            echo $qryReg . "&& " . $qryLog;

            if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
                // echo "<script>alert('Registration Success');window.location = 'addService.php';</script>";
            } else {
                // echo "<script>alert('Registration Failed');window.location = 'addService.php';</script>";
            }
        }
    }

    ?>

</section>
<!-- //form section start -->

<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const location = {
            lat: -25.344,
            lng: 131.036
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("id-map"), {
            zoom: 4,
            center: location,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGSqedOUcnRGc1_RIxL9QVxPP7xME7yv0&callback=initMap&libraries=&v=weekly" async></script>

<?php
include("../footer.php");
?>