<?php
include("UserHeader.php");

$stid = $_REQUEST['stid'];
$uid = $_REQUEST['u_id'];
?>
<style>
select{

}

</style>
<!-- form section start -->
<section class="w3l-hotair-form my-tab-div-x">
    <h1>Service Booking</h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <form>
                        <select name="serv" require class="form-control">
<option> Water Service  </option>
<option> Vehicle Service  </option>
<option> General Service  </option>
<option>Other Service</option>
</select><br><br>
<input type="hidden" value="<?php echo $stid ?>" name="stationid">
<input type="hidden" value="<?php echo $uid ?>" name="userid">

                        <input type="text" class="text" name="NAME" placeholder="Card Name" required>
                        <input type="number" name="CNO" placeholder=" Card Number" required min="1000000000000000" max="9999999999999999">
                        <input type="password" name="CVV" placeholder="CVV Number" required minlength="3" maxlength="3">
                        <input type="number" name="Amloiunt" placeholder="Total Amount" required min="200">
                        <input type="datetime-local" name="dates" placeholder="date" required>

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
        $vvv=$_REQUEST['serv'];
        $Name = $_REQUEST['NAME'];
        $Age = $_REQUEST['CNO'];
        $Address = $_REQUEST['CVV'];
        $Phone = $_REQUEST['Amloiunt'];
        $Qual = $_REQUEST['dates'];
//
$stid = $_REQUEST['stationid'];
$uid = $_REQUEST['userid'];



        $qry = "INSERT INTO user_bookings(u_id, st_id, status, date,service,cardname,cardno,cvv,total,amount) 
        VALUES('$uid', '$stid', 'REQUESTED', CURDATE(),'$vvv','$Name','$Age','$Address','$Phone','$Qual')";


            if ($conn->query($qry) == TRUE) {
                echo "<script>alert('Service Booked Suucess');window.location = 'viewStation.php';</script>";
            } else {
                echo "<script>alert('failed...');window.location = 'viewStation.php';</script>";
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