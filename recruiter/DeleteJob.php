<body>
<?php

	$Id=$_GET['JobId'];

	$con = mysqli_connect("localhost","root","","ojp");
	mysqli_select_db( $con, "ojp");
	$sql = "delete from job_master where JobId='".$Id."'";
	// execute query
	mysqli_query ($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("Job Deleted Succesfully");window.location=\'ManageJob.php\';</script>';

?>
</body>
