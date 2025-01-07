<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];
$con = mysqli_connect("localhost","root","","ojp");

mysqli_select_db( $con,"ojp");

$sql = "Update admin_Master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
// Execute query
mysqli_query($con, $sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
?>