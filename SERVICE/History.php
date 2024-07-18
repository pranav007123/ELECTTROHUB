<?php
include('serviceHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>History</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT sb.*, s.*,u.* FROM `service_booking` sb, `service` s, `user_reg` u  WHERE sb.`usr_id` = u.`u_id` AND sb.`service_id` = s.`s_id` AND sb.`status` = 'COMPLETED' AND sb.`service_id` = '$uid'";
        // $time = "SELECT "
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
        //    echo $uid;
        ?>
            <table width="60%">
                <tr>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Requested On</th>
                    <th>Station</th>
                    <!-- <th>Action</th> -->

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['u_name'] . "</td>
                                    <td>" . $row['u_phone'] . "</td>
                                    <td>" . $row['u_email'] . "</td>
                                    <td>" . $row['status'] . "</td>
                                    <td>" . $row['date'] . "</td>
                                    <td>" . $row['s_name'] . "</td>
                                  
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Request</p></div>";
        }

            ?>
            </table>



    </div>
</section>
