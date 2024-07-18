<?php
session_start();
include('../DBConnection/dbConnection.php');

$stid = $_REQUEST['stid'];
$uid = $_REQUEST['u_id'];

$qryCheck = "SELECT COUNT(*) AS cnt FROM `user_bookings` WHERE `u_id` = '$uid' AND `st_id` = '$stid' AND `date` = CURDATE()";

$qryOut = mysqli_query($conn, $qryCheck);

$fetchData = mysqli_fetch_array($qryOut);

if ($fetchData['cnt'] > 0) {
	echo "<script>alert('Already booked / Cant book on same slot of day');window.location = 'viewStation.php';</script>";
} else {

$qry = "INSERT INTO `user_bookings` (`u_id`, `st_id`, `status`, `date`) VALUES('$uid', '$stid', 'REQUESTED', CURDATE())";
if ($conn->query($qry) == TRUE) {
	echo "<script>alert('Successfully Booked');window.location='viewStation.php'</script>";
} else {
	echo "<script>alert('Action Failed');window.location='viewStation.php'</script>";
}

}

?>
