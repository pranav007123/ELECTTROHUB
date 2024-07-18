<?php
include("userHeader.php");
?>

<!-- form section start -->
<section class="w3l-hotair-form my-tab-div-x">
    <h1>User feedbacks</h1>
    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="content-wthree">
                    <form action="#" method="post">
                        <input type="text" class="text" name="NAME" placeholder="Subject" required>
                        <textarea placeholder="Address" name="Descriptions" required></textarea>
                    
                        <button class="btn" name="add_staff" type="submit">Add</button>

                    </form>

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
        $Address = $_REQUEST['Descriptions'];

            $qryReg = "INSERT INTO feedbacks(uid,subject,des)values('$uid','$Name','$Address')";

            // echo $qryReg . "&& " . $qryLog;

            if ($conn->query($qryReg) == TRUE) {
                echo "<script>alert(' added Successfully');window.location = 'feedbacks.php';</script>";
            } else {
                echo "<script>alert('Can't add ');window.location = 'addStaff.php';</script>";
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