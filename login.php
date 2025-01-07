<html>
<body>
<?php

session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
$con = mysqli_connect("localhost","root","","ojp");
mysqli_select_db( $con,"ojp");
$sql = "select * from admin_master where UserName='$UserName' and Password='$Password'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:Admin/index.php");
} 
mysql_close($con);
}
else if($UserType=="JobSeeker")
{
$con = mysqli_connect("localhost","root","","ojp");
mysqli_select_db( $con,"ojp");
$sql = "select * from jobseeker_reg where UserName='$UserName' and Password='$Password' and Status='Confirm'";
$result = mysqli_query($con, $sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:jobSeeker/index.php");
} 
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","root","","ojp");
mysqli_select_db( $con,"ojp");
$sql = "select * from recruiter_reg where UserName='$UserName' and Password='$Password' and Status='Confirm'";
$result = mysqli_query($con, $sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['RecruiterId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:recruiter/index.php");
} 
mysqli_close($con);
}

?>
</body>
</html>