<body>
<?php

	$Id=$_GET['EduId'];

	$con = mysqli_connect("localhost","root","","ojp");
	mysqli_select_db( $con, "ojp");
	$sql = "DELETE FROM `jobseeker_education` WHERE EduId='".$Id."'";
	// execute query
	mysqli_query ($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("Education Deleted Succesfully");window.location=\'education.php\';</script>';

?>
</body>