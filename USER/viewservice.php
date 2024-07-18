<?php
include('userHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>service Station</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT * FROM `service`";
        // $time = "SELECT "
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            // echo date("H:i:s");
        ?>
            <table width="60%">
                <tr>
                    <th>Service Name</th>
                    <th>Location</th>
                    <th>License</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>

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
                                    <td><a class='approve-btn' href='bookService.php?stid=" . $row['s_id'] . "&u_id=" . $uid . "'>Book</a></td>
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