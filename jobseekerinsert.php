<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
if(isset($_POST['button2']))
{
$Name=$_POST['txtName'];
// $Address=$_POST['txtAddress'];
$City=$_POST['txtCity'];
$Email=$_POST['txtEmail'];
// $Mobile=$_POST['txtMobile'];
// $Qualification=$_POST['cmbQual'];
$Gender=$_POST['cmbGender'];	
// $BirthDate=$_POST['txtBirthDate'];
$Status="Pending";
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$ConfirmPassword=$_POST['ConfirmPassword'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
    if($Password===$ConfirmPassword)
    {
        $con = mysqli_connect ("localhost","root","","ojp");
        mysqli_select_db($con,"ojp");

        $sql = "insert into JobSeeker_reg(JobSeekerName,City,Email,Gender,Status,UserName,Password,ConfirmPassword,Question,Answer) values('$Name','$City','$Email','$Gender','$Status','$UserName','$Password','$ConfirmPassword','$Question','$Answer')";

        mysqli_query ($con, $sql);
        mysqli_close ($con);

        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
    }
    else {
        echo '<script type="text/javascript">alert("Password And Confirm-Password Does Not Match /n Registration Failed");window.location=\'index.php\';</script>';
    }
}
?>  


</body>
</html>