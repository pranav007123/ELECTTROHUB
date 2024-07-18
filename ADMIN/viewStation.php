<?php
include('adminHeader.php');

?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>Charging Station</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT * FROM `station`";
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
        ?>
            <table width="60%">
                <tr>
                    <th>Station Name</th>
                    <th>Location</th>
                    <th>License</th>
                    <th>Owner</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Email</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['st_name'] . "</td>
                                    <td>" . $row['st_address'] . "</td>
                                    <td>" . $row['st_l_no'] . "</td>
                                    <td>" . $row['st_owner'] . "</td>
                                    <td>" . $row['st_age'] . "</td>
                                    <td>" . $row['st_phone'] . "</td>
                                    <td>" . $row['st_email'] . "</td>
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