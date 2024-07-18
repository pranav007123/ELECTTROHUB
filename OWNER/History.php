<?php
include('ownerHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>History</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT ub.*, u.*, stf.`stf_name` FROM `user_bookings` ub, `station` st, `user_reg` u, `staff` stf WHERE ub.`st_id` = st.`st_id` AND ub.`u_id` = u.`u_id` AND ub.`stf_id` = stf.`stf_id` AND ub.`status` = 'FULLY CHARGED' AND ub.`st_id` = '$uid'";
        // $time = "SELECT "
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            // echo $qry;
        ?>
            <table width="60%">
                <tr>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Completed On</th>
                    <th>Delivered By</th>
                    <th>Status</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                            <tr>
                                <td>" . $row['u_name'] . "</td>
                                <td>" . $row['u_phone'] . "</td>
                                <td>" . $row['u_address'] . "</td>
                                <td>" . $row['u_email'] . "</td>
                                <td>" . $row['date'] . "</td>
                                <td>" . $row['stf_name'] . "</td>
                                <td>" . $row['status'] . "</td>
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