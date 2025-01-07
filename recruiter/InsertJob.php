<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<?php
	$ID=$_SESSION['ID'];
	$txtTitle=$_POST['txtTitle'];
    $txtLocation=$_POST['txtLocation'];
    $cmbType=$_POST['cmbType'];
	$cmbMode=$_POST['cmbMode'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
    $Name=$_SESSION['Name'];
    
	$con = mysqli_connect("localhost","root","","ojp");
	mysqli_select_db( $con, "ojp");
	$sql = "INSERT INTO `job_master`(`RecruiterId`, `CompanyName`, `JobTitle`, `JobLocation`, `JobType`,`JobMode`, `Vacancy`, `MinQualification`, `JobDescription`) VALUES ('$ID','$Name','$txtTitle','$txtLocation','$cmbType','$cmbMode','$txtTotal','$cmbQual','$txtDesc')";

	mysqli_query ($con, $sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Job Detailes Inserted Succesfully");window.location=\'ManageJob.php\';</script>';

?>