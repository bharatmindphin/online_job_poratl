<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php require_once(
  'Connections/job.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  // $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

mysqli_select_db($job, $database_job);
$query_Recordset1 = "SELECT MinQualification FROM job_master";
$Recordset1 = mysqli_query($job, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

mysqli_select_db( $job, $database_job);
$query_Recordset3 = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description FROM application_master, job_master WHERE application_master.JobId=job_master.JobId";
$Recordset3 = mysqli_query( $job, $query_Recordset3) or die(mysqli_error());
$row_Recordset3 = mysqli_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysqli_num_rows($Recordset3);

mysqli_select_db( $job, $database_job);
$query_Recordset4 = "SELECT distinct CompanyName FROM job_master";
$Recordset4 = mysqli_query($job, $query_Recordset4) or die(mysqli_error());
$row_Recordset4 = mysqli_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysqli_num_rows($Recordset4);

mysqli_select_db($job, $database_job);
$query_Recordset5 = "SELECT distinct JobTitle FROM job_master";
$Recordset5 = mysqli_query( $job, $query_Recordset5) or die(mysqli_error());
$row_Recordset5 = mysqli_fetch_assoc($Recordset5);
$totalRows_Recordset5 = mysqli_num_rows($Recordset5);

$colname_Recordset2 = "-1";
if (isset($_POST['cmbQual'])) {
  $colname_Recordset2 = $_POST['cmbQual'];
}
$colname2_Recordset2 = "-1";
if (isset($_POST['cmbCompany'])) {
  $colname2_Recordset2 = $_POST['cmbCompany'];
}
$colname3_Recordset2 = "-1";
if (isset($_POST['cmbArea'])) {
  $colname3_Recordset2 = $_POST['cmbArea'];
}
mysqli_select_db($job, $database_job);
$query_Recordset2 = sprintf("SELECT * FROM job_master WHERE MinQualification = %s and CompanyName=%s and JobTitle=%s", GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname2_Recordset2, "text"),GetSQLValueString($colname3_Recordset2, "text"));
$Recordset2 = mysqli_query( $job, $query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>


<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		
		
		.top-left {
  			position: absolute;
			bottom: 20px;
			left: 1%;
		}
		.login {
  			max-width: 100%;
  			margin: 0 auto;
  			padding: 0px;
			border: none;
			background-color: rgba(0, 0, 0, 0.433);
		}
		.login td, tr{	
			border: none;
		}
		.login select{
			border: none;
			border-radius: 100px;
		}
		.login td:nth-child(1){
			width: 20%;
		}
		.col-div-4-1 a{
		text-decoration: none;
		font-size: 25px;
		display: block;
		padding: 5px 5px 8px 5px;
		color: rgb(0, 0, 0);
		}
		.submit{
			background-color: white;
			border: 2px solid black;
			color: green;
			padding: 5px 10px;
			text-align: center;
			display:inline-block;
			font-size: 20px;
			cursor: pointer;
			border-radius: 10px;
			text-decoration: none;
		}
	</style>
</head>


<body>
	
	
		<?php
   			 include "Dashboard.php";
    	?>
<div id="main">

		<?php
       		 include "Header.php"; 
    	?>
		
		
	
	
	<div class="clearfix"></div>
	<br/>
	

    

    <div class="col-div-12">
		<div class="box-1" style="width: 96%; height: 100%;">
			<div class="content-box-1">
			<img src="business-people-casual-meeting.jpg" alt="hj" style="width: 104%; margin: -20px -10px -20px -20px;">
			
			<div class="top-left">
			<h2 style="text-align: center; "><span> <h1 style="text-align: center; color: white;">Find the most exciting startup jobs</h1></span></h2>
			
			<div class="login">
					<form id="form1" method="post" action="SearchJob.php">
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td>&nbsp;
						  <select name="cmbQual" id="cmbQual">
							<option value="">Select Qualification</option>
							
								<?php
		do {  
		?>
								<option value="<?php echo $row_Recordset1['MinQualification']?>"><?php echo $row_Recordset1['MinQualification']?></option>
								<?php
		} while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
		  $rows = mysqli_num_rows($Recordset1);
		  if($rows > 0) {
			  mysqli_data_seek($Recordset1, 0);
			  $row_Recordset1 = mysqli_fetch_assoc($Recordset1);
		  }
		?>
						  </select>
						  
						  </td>

						  <td>&nbsp;
							<select name="cmbCompany" id="cmbCompany">
							  <option value="">Select Compnay Name</option>
							  
								<?php
	  do {  
	  ?>
								<option value="<?php echo $row_Recordset4['CompanyName']?>"><?php echo $row_Recordset4['CompanyName']?></option>
								<?php
	  } while ($row_Recordset4 = mysqli_fetch_assoc($Recordset4));
		$rows = mysqli_num_rows($Recordset4);
		if($rows > 0) {
			mysqli_data_seek($Recordset4, 0);
			$row_Recordset4 = mysqli_fetch_assoc($Recordset4);
		}
	  ?>
							 
							</select>
						 </td>


						<td>&nbsp;
						<select name="cmbArea" id="cmbArea">
							<option value="">Select Area of Work</option>
							<?php
do {  
?>
                          <option value="<?php echo $row_Recordset5['JobTitle']?>"><?php echo $row_Recordset5['JobTitle']?></option>
                          <?php
} while ($row_Recordset5 = mysqli_fetch_assoc($Recordset5));
  $rows = mysqli_num_rows($Recordset5);
  if($rows > 0) {
      mysqli_data_seek($Recordset5, 0);
	  $row_Recordset5 = mysqli_fetch_assoc($Recordset5);
  }
?>
						</select>
						</td>
						<td>&nbsp;&nbsp;
							<a href="Jobseeker_Reg.php" class="submit">Search</a>
						     </td>
						</tr> 
					  </table>
				  </form>
				</div>
			</div>
		    </div>
	    </div>
	</div>
	
	<div class="clearfix"></div>
	<br/>
    
<!-- recruiter, jobseeker & jobs -->
	<div class="col-div-4-1">
		<div class="box">
			
			<?php
				$con = mysqli_connect("localhost","root","","ojp");
				mysqli_select_db( $con,"ojp");
				$sql = "SELECT * FROM jobseeker_reg WHERE JobSeekId";
				$result = mysqli_query($con, $sql);
				$records = mysqli_num_rows($result);
				?>
				<a href="#"><?php echo "Total ".$records." +"; ?></a>
				<h2>Jobseeker</h2>
		</div>
	</div>
	<div class="col-div-4-1">
		<div class="box">
			
			<?php
				$con = mysqli_connect("localhost","root","","ojp");
				mysqli_select_db( $con,"ojp");
				$sql = "SELECT * FROM recruiter_reg WHERE RecruiterId";
				$result = mysqli_query($con, $sql);
				$records = mysqli_num_rows($result);
				?>
				<a href="#"><?php echo "Total ".$records." +"; ?></a>
				<h2>Recruiter</h2>
		</div>
	</div>
	
	<div class="col-div-4-1">
		<div class="box">
			<?php
			$con = mysqli_connect("localhost","root","", "ojp");
			mysqli_select_db($con, "ojp");
			$sql = "select * from job_Master where JobId";
			$result = mysqli_query($con, $sql);
			$records = mysqli_num_rows($result);
			?>
            <a href="#"><?php echo "Total ".$records." + "; ?></a>
			<h2>Jobs</h2>
			
		</div>
	</div>

   
	 <div class="clearfix"></div>
    <br>
    <div class="col-div-12">
        <div class="box-9" style=" height: 45%; background-color: rgba(30, 143, 255, 0.207); display: flex;">
		    <div class="content-box">
				<!-- <div class="col-div-4-1">
					<div class="box" style="width: 290%; height: 45%; background-color: rgba(30, 143, 255, 0.207); display: flex;"> -->
				
<?php

$con = mysqli_connect("localhost","root","", "ojp");
mysqli_select_db($con, "ojp");
$sql = "select * from job_Master where JobId";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
{
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$JobType=$row['JobType'];
$MinQualification=$row['MinQualification'];
$JobDescription =$row['JobDescription'];
$JobLocation=$row['JobLocation'];
?>
			<div class="data" style="border: 1px solid rgba(17, 17, 40, 0.332); margin: 1%; padding: 1%;
									 font-size: 18px; border-radius: 10px;">	
				<div class="row" ><i class="fa fa- icons">
					<div class="col" style="margin-left: 6%;"><img src="title-icon.png" alt="" style="width: 4.5%;">&nbsp;&nbsp; <strong> Title :  <?php echo $JobTitle;?> </strong><a style="margin-left: 6%;" href="Jobseeker_Reg.php"><input type="submit" name="button" value="Apply For Job" style="background-color: rgba(103, 152, 244, 0.585); padding: 0.5%; border-radius: 5px; border: none;"></a></div>

					<div class="col" style="margin-left:6%;" class="icon-a"><img src="com.png"  style="width:  2.6%;">&nbsp;&nbsp; Company Name : <?php echo $CompanyName;?></div>

					

					<div class="col" style="margin-left:6%;"><img src="time.png"  style="width:  2.6%;">&nbsp;&nbsp; <?php echo $JobLocation;?>,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $JobType;?> </div>
					
		
					<div class="col" style="margin-left:6%;"><img src="edu.png"  style="width:  2.6%;">&nbsp;&nbsp; MinQualification : <?php echo $MinQualification;?></div>

					<div class="col" style="margin-left:6%;"><img src="description.png" alt="" style="width:  2.6%;">&nbsp;&nbsp; Job Description : <?php echo $JobDescription;?></div>

					</i>
				</div>
			</div>				
                      
                      <?php
}
mysqli_close($con);
?>
 

				
            </div>
        </div>
    </div>
	
	<div class="clearfix"></div>
	<br/>
	<div class="clearfix"></div>
    <div class="col-div-12">
        <div class="box-9" style="height: 45%; background-color: rgba(30, 143, 255, 0.207);">
		    <div class="content-box">
					<?php
						include "footer.php";
					?>
			</div>
		</div>
	</div>
	

	
		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".menu").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('display', 'none');
    $(".logo1").css('display','block');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icon-a").css('height', '25px');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".menu1").css('display','block');
      $(".menu").css('display','none');
  });

$(".menu1").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
    $(".logo").css('display','block');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".menu").css('display','block');
      $(".menu1").css('display','none');
 });

</script>
<script>
$(document).ready(function(){
  $(".profile p").click(function(){
    $(".profile-div").toggle();
    
  });
  $(".noti-icon").click(function(){
    $(".notification-div").toggle();
  });



  
});
</script>
</body>


</html>


