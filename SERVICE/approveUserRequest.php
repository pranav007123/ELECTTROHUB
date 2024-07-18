<?php
session_start();
include('../DBConnection/dbConnection.php');

$rqstid = $_REQUEST['rqstid'];
$stfid = $_REQUEST['stf_id'];

$qry = "UPDATE `service_booking` SET  `status` = 'APPROVED' WHERE`bookid` = '$rqstid'";
if ($conn->query($qry) == TRUE) {
	echo "<script>alert('Successfully Approved');window.location='viewRequest.php'</script>";
	// echo $qry;
} else {
	echo "<script>alert('Action Failed');window.location='viewRequest.php'</script>";
}


?>
