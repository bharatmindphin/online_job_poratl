<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
	
	
	$con = mysqli_connect ("localhost","root","","ojp");
	mysqli_select_db( $con, "ojp");
    $sql = "insert into recruiter_feedback(RecruiterId, Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';

?>
</body>
</html>


	
	