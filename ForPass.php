<html>
<body>
<?php
session_start();
$UserName=$_POST['txtUserName'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
$UserType=$_POST['rdUser'];

if($UserType=="Recruiter")
{
    $con = mysqli_connect("localhost","root","","ojp");
    mysqli_select_db($con,"ojp");
$sql = "select * from recruiter_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = mysqli_query($con, $sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
echo $records;
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['RecruiterId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:recruiter/index.php");
} 
mysql_close($con);
}
else
{
    $con = mysqli_connect("localhost","root","","ojp");
    mysqli_select_db($con,"ojp");
$sql = "select * from jobseeker_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = mysqli_query($con, $sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:JobSeeker/index.php");
} 
mysql_close($con);
}
?>
</body>
</html>