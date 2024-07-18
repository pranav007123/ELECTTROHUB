<?php
session_start();
include('../DBConnection/dbConnection.php');

$rqstid = $_REQUEST['rqstid'];
$stfid = $_REQUEST['stf_id'];

$qry = "UPDATE `user_bookings` SET `stf_id` = '$stfid', `status` = 'FULLY CHARGED', `date` = CURDATE() WHERE`b_rqst_id` = '$rqstid'";
if ($conn->query($qry) == TRUE) {
	echo "<script>alert('Successfully Completed');window.location='viewApprovedRequest.php'</script>";
	// echo $qry;
} else {
	echo "<script>alert('Action Failed');window.location='viewApprovedRequest.php'</script>";
}


?>
