<?php
session_start();
include('../DBConnection/dbConnection.php');

$stfid = $_REQUEST['id'];
$stid = $_REQUEST['st_id'];

$qry = "DELETE FROM `staff` WHERE `stf_id` = '$stfid'";
$qry1 = "DELETE FROM `login` WHERE `reg_id` = '$stfid' AND `type` = 'STAFF'";
if ($conn->query($qry) == TRUE && $conn->query($qry1) == TRUE) {
	echo "<script>alert('Successfully Removed Staff');window.location='viewStaff.php'</script>";
} else {
	echo "<script>alert('Action Failed');window.location='viewStaff.php'</script>";
}

?>
