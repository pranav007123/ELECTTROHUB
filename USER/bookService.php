<?php
session_start();
include('../DBConnection/dbConnection.php');

$stid = $_REQUEST['stid'];
$uid = $_REQUEST['u_id'];

$qryCheck = "SELECT COUNT(*) AS cnt FROM `service_booking` WHERE `user_id` = '$uid' AND `service_id` = '$stid' AND `date` = CURDATE()";

$qryOut = mysqli_query($conn, $qryCheck);

$fetchData = mysqli_fetch_array($qryOut);

if ($fetchData['cnt'] > 0) {
	echo "<script>alert('Already booked / Cant book on same slot of day');window.location = 'viewService.php';</script>";
} else {

$qry = "INSERT INTO service_booking(`usr_id`,`service_id`,`status`,`date`)VALUES('$uid','$stid','REQUESTED',CURDATE())";
if ($conn->query($qry) == TRUE) {
	echo "<script>alert('Successfully Booked');window.location='viewService.php'</script>";
} else {
	echo "<script>alert('Action Failed');window.location='viewService.php'</script>";
}

}

?>
