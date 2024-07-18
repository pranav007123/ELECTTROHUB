<?php
include("ownerHeader.php");
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>Station Staff</h1>
    
    <div class="view-content">

        <?php
        $qry = "SELECT * FROM `staff` stf, `station` st WHERE stf.`st_id` = st.`st_id` AND `stf`.`st_id` = '$uid'";
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
        ?>
            <table width="60%">
                <tr>
                    <th>Staff</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['stf_name'] . "</td>
                                    <td>" . $row['stf_age'] . "</td>
                                    <td>" . $row['stf_phone'] . "</td>
                                    <td>" . $row['stf_address'] . "</td>
                                    <td>" . $row['stf_qualification'] . "</td>
                                    <td>" . $row['stf_experience'] . "</td>
                                    <td>" . $row['stf_email'] . "</td>
                                    <td><a class='approve-btn' href='removeStaff.php?id=" . $row['stf_id'] . "&st_id=" . $uid . "'>Remove</a></td>
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Staffs</p></div>";
        }

            ?>
            </table>



    </div>
</section>


<?php

include('../footer.php');

?>