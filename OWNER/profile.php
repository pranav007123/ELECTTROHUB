<?php
include("ownerHeader.php");
$stid = $_SESSION['uid'];

$qry = "SELECT st.*, l.`password` FROM `station` st, `login` l WHERE st.`st_id` = l.`reg_id` AND l.`type` = 'OWNER' AND st.`st_id` = '$stid'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);

?>

<!-- form section start -->
<section class="w3l-hotair-form my-tab-div-x">
    <h1>Charging Station Profile</h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <h2>Update</h2>
                    <form action="#" method="post">
                        <div class="div-input-x">
                        <p>Station Name</p>
                        <input type="text" class="text" name="ST_NAME" placeholder="Station Name" required autofocus value="<?php echo $row['st_name'] ?>">
                        </div>

                        <div class="div-input-x">
                        <p>Station Address</p>
                        <textarea placeholder="Address" name="ST_ADDRESS" required><?php echo $row['st_address'] ?></textarea>
                        </div>

                        <div class="div-input-x">
                        <p>License Number</p>
                        <input disabled type="text" name="ST_LNO" placeholder="License Number" required value="<?php echo $row['st_l_no'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Price per 1 kWh</p>
                        <input type="text" name="ST_PPONE" placeholder="Price per 1 kWh" required value="<?php echo $row['st_price_one_kwh'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Price per 1 hour</p>
                        <input type="text" name="ST_PPHR" placeholder="Price per 1 hour" required value="<?php echo $row['st_price_per_hour'] ?>">
                        </div>
                        <div class="div-input-x">
                        <p>Parking Price</p>
                        <input type="text" name="ST_PP" placeholder="Parking price" required value="<?php echo $row['st_parking_price'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Opening Time</p>
                        <input type="time" name="ST_OPEN" placeholder="Opening Time" required value="<?php echo $row['st_open'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Closing Time</p>
                        <input type="time" name="ST_CLOSE" placeholder="Closing Time" required value="<?php echo $row['st_close'] ?>">
                        </div>

                        <div class="div-input-x">
                        <p>Owner Name</p>
                        <input type="text" class="text" name="NAME" placeholder="Owner Name" required value="<?php echo $row['st_owner'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Age</p>
                        <input type="number" name="AGE" placeholder="Age" required value="<?php echo $row['st_age'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Phone</p>
                        <input type="text" name="PHONE" placeholder="Phone" maxlength="10" pattern="[0-9][0-9]{9}" required value="<?php echo $row['st_phone'] ?>">
                        </div>
                        
                        <div class="div-input-x">
                        <p>Email</p>
                        <input class="text" name="EMAIL" type="email" required placeholder="Email" value="<?php echo $row['st_email'] ?>" />
                        </div>
                        
                        <div class="div-input-x">
                        <p>Password</p>
                        <input class="password" name="PASSWORD" type="password" placeholder="Password" required value="<?php echo $row['password'] ?>" />
                        </div>
                        
                        <div class="clear"></div>
                        <button class="btn" name="update_station" type="submit">Update</button>

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
    if (isset($_REQUEST['update_station'])) {

        $StName = $_REQUEST['ST_NAME'];
        $StAddress = $_REQUEST['ST_ADDRESS'];
        $StLicense = $_REQUEST['ST_LNO'];
        $StPPOne = $_REQUEST['ST_PPONE'];
        $StPPhr = $_REQUEST['ST_PPHR'];
        $StPP = $_REQUEST['ST_PP'];
        $StOpen = $_REQUEST['ST_OPEN'];
        $StClose = $_REQUEST['ST_CLOSE'];

        $Name = $_REQUEST['NAME'];
        $Age = $_REQUEST['AGE'];
        $Phone = $_REQUEST['PHONE'];
        $Email = $_REQUEST['EMAIL'];
        $Password = $_REQUEST['PASSWORD'];


        $qryReg = "UPDATE `station` SET `st_name` = '$StName', `st_address` = '$StAddress', `st_price_one_kwh` = '$StPPOne', `st_price_per_hour` = '$StPPhr', `st_parking_price` = '$StPP', `st_owner` = '$Name', `st_age` = '$Age', `st_phone` = '$Phone', `st_email` = '$Email', `st_open` = '$StOpen', `st_close` = '$StClose' WHERE `st_id` = '$stid'";
        $qryLog = "UPDATE `login` SET `email` = '$Email' , `password` = '$Password' WHERE `reg_id` = '$stid' AND `type` = 'OWNER'";

        // echo $qryReg . "&& " . $qryLog;

        if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
            echo "<script>alert('Profile Updated Successfully');window.location = 'profile.php';</script>";
        } else {
            echo "<script>alert('Update Failed');window.location = 'profile.php';</script>";
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