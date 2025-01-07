<body>
<?php
if(isset($_POST['button']))
{

	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];

	$con = mysqli_connect("localhost","root","","ojp");

	mysqli_select_db( $con,"ojp");
	$sql = "insert into admin_master	(UserName,Password) values('".$UserName."','".$Password."')";
	
	mysqli_query ($con,$sql);
	
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';
}
?>
</body>
</html>
