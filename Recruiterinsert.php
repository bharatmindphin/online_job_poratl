<?php

if(isset($_POST['button2']))
{
$CompnayName=$_POST['txtName'];

$filename = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
$folder = "upload/". $filename;
move_uploaded_file($temp_name, $folder);

$ContactPerson=$_POST['txtPerson'];
// $Address=$_POST['txtAddress'];
$City=$_POST['txtCity'];
$Email=$_POST['txtEmail'];
// $Mobile=$_POST['txtMobile'];
// $Area=$_POST['txtAreaWork'];
$Status="Pending";
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$ConfirmPassword=$_POST['ConfirmPassword'];
$UserType="Recruiter";
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
if($Password===$ConfirmPassword)
{

$con = mysqli_connect ("localhost","root","","ojp");
mysqli_select_db($con,"ojp");

$sql = "INSERT INTO recruiter_reg(CompanyName, CompanyLogo, ContactPerson,City, Email, Status, UserName, Password, ConfirmPassword,Question, Answer) VALUES ('$CompnayName','$folder', '$ContactPerson','$City','$Email','$Status','$UserName','$Password','$ConfirmPassword','$Question','$Answer')";

mysqli_query ($con, $sql);
mysqli_close ($con);

echo '<script type="text/javascript">alert("Registration Completed Succesfully");
window.location=\'index.php\';</script>';
}
else {
echo '<script type="text/javascript">alert("Password And Confirm-Password Does Not Match /n Registration Failed");window.location=\'index.php\';</script>';
}
}
?>