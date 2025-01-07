<?php
$Id = $_GET['RecId'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","ojp");
// Select Database
mysqli_select_db($con,"ojp");
// Specify the query to Update Record
$sql = "DELETE FROM recruiter_reg WHERE RecruiterId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Recruiter Request Rejected");window.location=\'ManageRecruiter.php\';</script>';
?>