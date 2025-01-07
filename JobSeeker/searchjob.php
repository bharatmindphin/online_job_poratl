
<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php require_once(
  '../Connections/job.php'); ?>
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <style>
    

.single-job-items .job-tittle ul li i {
    font-size: 14px;
    color: #bbbbbb;
    margin-right: 10px;
}

.single-job-items .job-tittle ul li {
    display: inline-block;
    margin-right: 48px;
    font-size: 15px;
    color: #808080;
    line-height: 1.8;
}
li {
    list-style: none;
}

li {
    text-align: -webkit-match-parent;
}

ul {
    list-style-type: disc;
}
.single-job-items .job-items {
    display: flex;
    flex-wrap: wrap;
}
.single-job-items:hover {
    box-shadow: 0px 22px 57px 0px rgba(34,41,72,0.05);
}
a:focus, a:hover, .portfolio-cat a:hover, .footer -menu li a:hover {
    text-decoration: none;
}

a:hover {
    color: #fff;
}
.f-right {
    float: right;
}
.single-job-items {
    padding: 26px 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    -webkit-transition: .4s;
    -moz-transition: .4s;
    -o-transition: .4s;
    transition: .4s;
}

.mb-30 {
    margin-bottom: 1%;
}

*, ::after, ::before {
    box-sizing: border-box;
}

  </style>
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> Job Portal <span class="menu">☰</span></p>
	<p class="logo1"> <span class="menu1">☰</span></p>
  <a href="#" class="icon-a"><img src="ico_archive2.gif" width="7%"> &nbsp;&nbsp;Dashboard</a>
                <a href="profile.php"class="icon-a"><img src="Profile.png" width="12%"> &nbsp;&nbsp;Profile</a>
                <a href="education.php"class="icon-a"><img src="Edu.png" width="12%"> &nbsp;&nbsp;Education</a>
                <a href="searchjob.php"class="icon-a"><img src="Search.png" width="12%"> &nbsp;&nbsp;Search job</a>
                <a href="feedback.php"class="icon-a"><img src="Feedback.png" width="12%"> &nbsp;&nbsp;Feedback</a>
                <a href="logout.php"class="icon-a"><img src="Home.png" width="12%"> &nbsp;&nbsp;Logout</a>
  </div>
<div id="main">

	<div class="head">
		<div class="col-div-5">
<p class="nav"> Career Options Portal</p>

</div>
	
	<div class="col-div-7">
		<div class="navbar">
                <a href="index.php"> Home</a>
                <a href="profile.php"> Profile</a>
                <a href="education.php"> Education</a>
                <a href="searchjob.php"> Search job</a>
                <a href="feedback.php"> Feedback</a>
                <a href="logout.php"> Logout</a>
            
        </div>

		
		
		<div class="notification-div">
			
			
		</div>
	<div class="profile">

		
		<div class="profile-div">
			
		</div>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	
	
	
	<div class="clearfix"></div>
	<br/>

    <div class="col-div-12">
		<div class="box-9" style="height: 50%;">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">
		
<!-- ****************************


***********************************-->


<h2><span><a href="#">Search Job</a></span></h2>
               
<div class="login">
                <form id="form1" method="post" action="SearchJob.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Select Qualification:</strong></td>
                      <td><label>
                      <select name="cmbQual" id="cmbQual">
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
                      </label></td>
                      <td><label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Select Compnay Name:</strong></td>
                      <td><label>
                        <select name="cmbCompany" id="cmbCompany">
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
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>Select Area of Work:</strong></td>
                      <td><label>
                        <select name="cmbArea" id="cmbArea">
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
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="Search" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
              <div class="login">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100%">&nbsp;
                     
                        <?php
						if ($totalRows_Recordset2!=0) 
						{
						do { ?>
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                          <td><strong>JobId</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>CompanyName</strong></td>
                          <td><strong><?php echo $row_Recordset2['CompanyName']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>JobTitle</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobTitle']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Vacancy</strong></td>
                          <td><strong><?php echo $row_Recordset2['Vacancy']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>MinQualification</strong></td>
                           <td><strong><?php echo $row_Recordset2['MinQualification']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobDescription']; ?></strong></td>
                        </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><br> 
                              <a href="Apply.php?JobId=<?php echo $row_Recordset2['JobId'];?>"><strong>Apply For Job</strong></a></td>
                           </tr>
                        </table>
                        <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2)); 
						  
						  ?>
                      </table>
                      <?php
					  }
                      ?></td>
                  </tr>
                </table>
                </div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Status of Job</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Job Title</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Status</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Description</strong></div></th>
                      </tr>
                      <?php

$con = mysqli_connect("localhost","root","","ojp");

mysqli_select_db( $con,"ojp");

$sql = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description
FROM application_master, job_master
WHERE application_master.JobId=job_master.JobId and application_master.JobSeekId='".$_SESSION['ID']."'";

$result = mysqli_query($con, $sql);
 
while($row = mysqli_fetch_array($result))
{
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Status=$row['Status'];
$Description=$row['Description'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                      </tr>
                      <div class="clearfix"></div>
	                    <br/>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                </div>
				
        
             
		    </div>
	    </div>
	</div>

   


	
	
	<div class="clearfix"></div>
	<br/>
	
<div class="clearfix"></div>
    <div class="col-div-12">
        <div class="box-9"style="height: 45%; background-color: rgba(30, 143, 255, 0.207);">
              <div class="content-box" >
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







