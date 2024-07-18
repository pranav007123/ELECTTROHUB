<?php
include("ownerHeader.php");
?>

<!-- form section start -->
<section class="w3l-hotair-form my-tab-div-x">
    <h1>Add Station Staff</h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2>Add</h2>
                    <form action="#" method="post">
                        <input type="text" class="text" name="NAME" placeholder="Staff Name" required>
                        <input type="number" name="AGE" placeholder="Age" required>
                        <textarea placeholder="Address" name="ADDRESS" required></textarea>
                        <input type="number+" name="PHONE" placeholder="Phone" maxlength="10" pattern="[0-9][0-9]{9}" required>
                        <textarea placeholder="Qualification" name="QUAL" required></textarea>
                        <input type="number" name="EXP" placeholder="Experience (*in years)" required>
                        <input value="E-MAIL" class="text" name="EMAIL" type="email" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}" />
                        <input value="PASSWORD" class="password" name="PASSWORD" type="password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" />
                        <div class="clear"></div>
                        <button class="btn" name="add_staff" type="submit">Add</button>

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
    $uid = $_SESSION['uid'];

    if (isset($_REQUEST['add_staff'])) {
        $Name = $_REQUEST['NAME'];
        $Age = $_REQUEST['AGE'];
        $Address = $_REQUEST['ADDRESS'];
        $Phone = $_REQUEST['PHONE'];
        $Qual = $_REQUEST['QUAL'];
        $Exp = $_REQUEST['EXP'];
        $Email = $_REQUEST['EMAIL'];
        $Password = $_REQUEST['PASSWORD'];

        $qryCheck = "SELECT COUNT(*) AS cnt FROM `staff` WHERE `stf_email` = '$Email' OR `stf_phone` = '$Phone'";

        $qryOut = mysqli_query($conn, $qryCheck);

        $fetchData = mysqli_fetch_array($qryOut);

        if ($fetchData['cnt'] > 0) {
            echo "<script>alert('Already exist an Account with same Email / Phone Number');window.location = 'userRegister.php';</script>";
        } else {

            $qryReg = "INSERT INTO staff(st_id, stf_name, stf_age, stf_phone, stf_address, stf_qualification, stf_experience, stf_email) VALUES('$uid', '$Name', '$Age', '$Phone', '$Address', '$Qual', '$Exp', '$Email')";
            $qryLog = "INSERT INTO login(`reg_id`, `email`, `password`, `type`) VALUES((select max(stf_id) from staff), '$Email', '$Password', 'STAFF')";

            // echo $qryReg . "&& " . $qryLog;

            if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
                echo "<script>alert('New staff added Successfully');window.location = 'addStaff.php';</script>";
            } else {
                echo "<script>alert('Can't add Staff');window.location = 'addStaff.php';</script>";
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