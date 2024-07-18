<?php
include('adminHeader.php');

?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>service Center</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT * FROM `service`";
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
        ?>
            <table width="60%">
                <tr>
                    <th>service Name</th>
                    <th>Location</th>
                    <th>License</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Email</th>

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
                                </tr>";
            }
        } else {
            echo "<div class='no-data-div'><img src='../images/no_data.png'><p>No Parents</p></div>";
        }

            ?>
            </table>



    </div>
</section>


<?php

include('../footer.php');

?>