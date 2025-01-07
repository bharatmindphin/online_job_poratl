<?php
$Id = $_GET['JobId'];
$con = mysqli_connect("localhost","root","","ojp");

mysqli_select_db( $con,"ojp");
$sql = "DELETE FROM `jobseeker_reg` WHERE JobSeekId='".$Id."'";

mysqli_query($con, $sql);

mysqli_close($con);
echo '<script type="text/javascript">alert("Job Seeker Request Rejected");window.location=\'ManageJob.php\';</script>';
?>
