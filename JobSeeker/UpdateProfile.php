<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$Name=$_POST['txtName'];
$Address=$_POST['txtAddress'];
$City=$_POST['txtCity'];
$Email=$_POST['txtEmail'];
$Mobile=$_POST['txtMobile'];
$Qualification=$_POST['cmbQual'];
$BirthDate=$_POST['txtBirthDate'];

$filename = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
$folder = "images/" . $filename;
move_uploaded_file($temp_name, $folder);

$UserName=$_POST['txtUser'];
$Password=$_POST['txtPassword'];
$ConfirmPassword=$_POST['ConfirmPassword'];
    if($Password===$ConfirmPassword)
    {

        $con = mysqli_connect("localhost","root","","ojp");
        mysqli_select_db( $con, "ojp");



        $sql = " UPDATE jobseeker_reg SET JobSeekerName='".$Name."', Address='".$Address."', City='".$City."', Email='".$Email."',Mobile='".$Mobile."',Qualification='".$Qualification."', BirthDate='".$BirthDate."',Resume='$folder', UserName='".$UserName."',Password='".$Password."',ConfirmPassword='".$ConfirmPassword."' WHERE JobSeekId='".$txtId."'";
        // Execute query
        mysqli_query($con, $sql);
        // Close The Connection
        mysqli_close($con);
        echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
    }
    else {
        echo '<script type="text/javascript">alert("Password and Confirm Password do not match");window.location=\'UpdateProfile.php\';</script>';
    }
?>
</body>
</html>
