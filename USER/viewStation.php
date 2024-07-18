<?php
include('userHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>Charging Station</h1>
    <div class="view-content">

        <?php
        
        $qry = "SELECT * FROM `station`";
        // $time = "SELECT "
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            // echo date("H:i:s");
        ?>
            <table width="60%">
                <tr>
                    <th>Station Name</th>
                    <th>Location</th>
                    <th>License</th>
                    <th>Price per 1 kWh</th>
                    <th>Price per Hour</th>
                    <th>Parking Price</th>
                    <th>Opening Time</th>
                    <th>Closing Time</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['st_name'] . "</td>
                                    <td>" . $row['st_address'] . "</td>
                                    <td>" . $row['st_l_no'] . "</td>
                                    <td>" . $row['st_price_one_kwh'] . "</td>
                                    <td>" . $row['st_price_per_hour'] . "</td>
                                    <td>" . $row['st_parking_price'] . "</td>
                                    <td>" . $row['st_open'] . "</td>
                                    <td>" . $row['st_close'] . "</td>
                                    <td>" . $row['st_owner'] . "</td>
                                    <td>" . $row['st_phone'] . "</td>
                                    <td>" . $row['st_email'] . "</td>
                                    <td><a class='approve-btn' href='bookStationform.php?stid=" . $row['st_id'] . "&u_id=" . $uid . "'>Book</a></td>
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Stations</p></div>";
        }

            ?>
            </table>



    </div>
</section>


<?php

include('../footer.php');

?>