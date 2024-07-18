<?php
include('ownerHeader.php');

?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1> User feedbacks</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT * FROM `feedbacks`, user_reg where  user_reg.u_id=feedbacks.uid";
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
        ?>
            <table width="60%">
                <tr>
                    <th> Name</th>
                    <th>EMail</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Subject</th>
                    <th>Descriptions</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['u_name'] . "</td>
                                    <td>" . $row['u_email'] . "</td>
                                    <td>" . $row['u_phone'] . "</td>
                                    <td>" . $row['u_address'] . "</td>
                                    <td>" . $row['subject'] . "</td>
                                    <td>" . $row['des'] . "</td>
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