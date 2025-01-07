<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if (isset($_POST['button'])) 
{


$txtId = $_POST['txtId'];
$txtName=$_POST['txtName'];

$filename = $_FILES["image"]["name"];
$temp_name = $_FILES["image"]["tmp_name"];
$folder = "upload/" . $filename;
move_uploaded_file($temp_name, $folder);

$txtContact=$_POST['txtContact'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtArea=$_POST['txtArea'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
$ConfirmPassword=$_POST['ConfirmPassword'];
    if($txtPassword===$ConfirmPassword)
    {
        $con = mysqli_connect("localhost","root","","ojp");
        mysqli_select_db( $con, "ojp");

        $sql = "Update recruiter_reg  set CompanyName='".$txtName."', CompanyLogo = '$folder',ContactPerson='".$txtContact."',Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Area_Work='".$txtArea."',UserName='".$txtUser."',Password='".$txtPassword."',ConfirmPassword='".$ConfrmPassword."' where RecruiterId=".$txtId."";
        // Execute query
        mysqli_query($con, $sql);
        // Close The Connection
        mysqli_close($con);

        echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';

    }
    else {
    echo '<script type="text/javascript">alert("Password and Confirm Password do not match");window.location=\'Profile.php\';</script>';
    }
}
?>
</body>
</html>
