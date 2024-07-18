<?php
include('userHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>station Request</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT ub.*, st.* FROM `user_bookings` ub, `station` st, `user_reg` u  WHERE ub.`u_id` = u.`u_id` AND ub.`st_id` = st.`st_id` AND ub.`status` = 'REQUESTED' AND ub.`u_id` = '$uid'";
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
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Requested On</th>

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
                                    <td>" . $row['st_owner'] . "</td>
                                    <td>" . $row['st_phone'] . "</td>
                                    <td>" . $row['st_email'] . "</td>
                                    <td>" . $row['status'] . "</td>
                                    <td>" . $row['date'] . "</td>
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Requests</p></div>";
        }

            ?>
            </table>



    </div>
</section>



<section class="w3l-hotair-form my-tab-div-x">
    <h1>service Request</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT sb.*, s.* FROM `service_booking` sb, `service` s, `user_reg` u  WHERE sb.`usr_id` = u.`u_id` AND sb.`service_id` = s.`s_id` AND sb.`status` = 'REQUESTED' AND sb.`usr_id` = '$uid'";
        // $time = "SELECT "
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            // echo date("H:i:s");
        ?>
            <table width="60%">
                <tr>
                    <th>Service Center</th>
                    <th>Location</th>
                    <th>License</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Requested On</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['s_name'] . "</td>
                                    <td>" . $row['address'] . "</td>
                                    <td>" . $row['license_no'] . "</td>
                                    <td>" . $row['s_owner'] . "</td>
                                    <td>" . $row['s_phone'] . "</td>
                                    <td>" . $row['s_email'] . "</td>
                                    <td>" . $row['status'] . "</td>
                                    <td>" . $row['date'] . "</td>
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Requests</p></div>";
        }

            ?>
            </table>



    </div>
</section>


<?php

include('../footer.php');

?>