<html>
<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$filename = $_FILES["txtfile"]["name"];
	$tempname = $_FILES["txtfile"]["tmp_name"];
	$folder = "images/".$filename;
	move_uploaded_file( $tempname , $folder);
	

	$Degree=$_POST['cmbQual'];
	$Uni=$_POST['txtBoard'];
	$Passing=$_POST['cmbYear'];
	$Per=$_POST['txtPer'];
	$Id=$_SESSION['ID'];
	if($Degree=="Other")
	{
		$Degree=$_POST['txtOther'];
	}
	
	$con = mysqli_connect ("localhost","root","","ojp");
	
	mysqli_select_db($con,"ojp");
	
	$sql = "insert into JobSeeker_Education(JobSeekId,Degree,University,PassingYear,Percentage,Upload_Result) values('".$Id."','".$Degree."','".$Uni."','".$Passing."','".$Per."','".$folder."')";
	
	mysqli_query ($con,$sql);
	
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Profile Created Succesfully");window.location=\'Education.php\';</script>';

?>
</body>
</html>