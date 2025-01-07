<?php
$Id = $_GET['RecId'];

$con = mysqli_connect("localhost","root","","ojp");

mysqli_select_db($con,"ojp");

$sql = "Update recruiter_Reg set Status='Confirm' where RecruiterId=".$Id."";

mysqli_query($con,$sql);

mysqli_close($con);
echo '<script type="text/javascript">alert("Recruiter Request Confirmed");window.location=\'ManageRecruiter.php\';</script>';
?>