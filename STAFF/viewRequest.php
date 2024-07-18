<?php
include('staffHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>User Request</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT  distinct ub.*, u.*, st.`st_name` FROM `user_bookings` ub, `station` st, `user_reg` u, `staff` stf  WHERE ub.`u_id` = u.`u_id` AND ub.`st_id` = st.`st_id` AND ub.`st_id` = stf.`st_id` AND ub.`status` = 'REQUESTED'";
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
                    <th>Action</th>

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
                                    <td>" . $row['st_name'] . "</td>
                                    <td><a class='approve-btn' href='approveUserRequest.php?rqstid=" . $row['b_rqst_id'] . "&stf_id=" . $uid . "'>Approve</a></td>
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Request</p></div>";
        }

            ?>
            </table>



    </div>
</section>


<?php

include('../footer.php');

?>