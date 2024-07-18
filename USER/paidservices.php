<?php
include('userHeader.php');
$uid = $_SESSION['uid'];
?>

<section class="w3l-hotair-form my-tab-div-x">
    <h1>Paid Services</h1>
    <div class="view-content">

        <?php
        $qry = "SELECT * FROM user_bookings where u_id='$uid'";
        // $time = "SELECT "
        $result = mysqli_query($conn, $qry);
        if ($result->num_rows > 0) {
            // echo date("H:i:s");
        ?>
            <table width="60%">
                <tr>
                    <th>Service Name</th>
                    <th>Card Name</th>
                    <th>CVV</th>
                    <th>Card Date</th>
                    <th>Date</th>
                    <th>AMount</th>

                </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "
                                <tr>
                                    <td>" . $row['service'] . "</td>
                                    <td>" . $row['cardname'] . "</td>
                                    <td>" . $row['cvv'] . "</td>
                                    <td>" . $row['amount'] . "</td>
                                    <td>" . $row['date'] . "</td>
                                    <td>" . $row['total'] . "</td>

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