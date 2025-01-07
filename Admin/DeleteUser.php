<?php

	$Id=$_GET['UserId'];
	$con = mysqli_connect("localhost","root","","ojp");

	mysqli_select_db( $con,"ojp");
	$sql = "delete from admin_Master where UserId='".$Id."'";
	
	mysqli_query ($con, $sql);
	
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

?>