
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php require_once('../Connections/job.php'); ?>
<?php

   

$colname_Recordset1 = "-1";
if (isset($_SESSION['Name'])) {
    $colname_Recordset1 = $_SESSION['Name'];
}
$con = mysqli_connect("localhost","root","","job");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   
  </style>
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> Job Portal <span class="menu">☰</span></p>
	<p class="logo1"> <span class="menu1">☰</span></p>
 
  
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
        <a href="index.php" class="icon-a"><i class="fa fa-pie-chart icons"></i>   Home</a>
        <a href="Profile.php" class="icon-a"><i class="fa fa-list icons"></i>   Profile</a>
        <a href="ManageJob.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Manage JOB</a>
        <a href="Application.php" class="icon-a"><i class="fa fa-user icons"></i>   Application</a>
        <a href="Feedback.php" class="icon-a"><i class="fa fa-tasks icons"></i>   Feedback</a>
        <a href="logout.php" class="icon-a"><i class="fa fa-list-alt icons"></i>   Logout</a>
  </div>
<div id="main">

	<div class="head">
		<div class="col-div-5">
<p class="nav"> Career Options Portal</p>

</div>
	
	<div class="col-div-7">
		<div class="navbar">

                   <a href="index.php"> Home</a>
                   <a href="Profile.php"> Profile</a>
                   <a href="ManageJob.php"> Manage JOB</a>
                   <a href="Application.php"> Application</a>
                   <a href="Feedback.php"> Feedback</a>
                   <a href="logout.php"> Logout</a> 
            
        </div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>

    <div class="col-div-12">
		<div class="box-9">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">
      <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               <div class="login">
                   <form id="form1" method="post" action="Application.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Select Job Title:</strong></td>
                      <td><label>
                        <select name="cmbTitle" id="cmbTitle">
                        
                          <?php
                          $fatch_data = "SELECT * FROM `job_master`";
                          $fatch_data_run = mysqli_query($job,$fatch_data);
                          while ($fatch_data_row = mysqli_fetch_assoc($fatch_data_run)) {
                            $JobTitle = $fatch_data_row['JobTitle'];
                            $jobTitle = $fatch_data_row['jobTitle'];
                            echo "<option value='$JobTitle'>$JobTitle</option>";
                          }?>
                         

                        </select>
                      </label></td>
                      <td><label>
                      
                        <input type="submit" name="button" id="button" value="View " />
                      </label></td>
                    </tr>
                  </table>
              </form>
  
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Email</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                     <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>View & Send</strong></div></th>
                  </tr>
                  </div>
                  <br>
                  <?php
                 

$con = mysqli_connect("localhost","root","","job");

mysqli_select_db( $con,"job");


                 


if(isset($_POST['button'])){
  $JobTitle=$_POST['cmbTitle'];

  $fatch_data2 = "SELECT * FROM `job_master` WHERE JobTitle='$JobTitle'";

  $fatch_data2_run = mysqli_query($job,$fatch_data2);
  $count = 1;
  while ($fatch_data2_row = mysqli_fetch_assoc($fatch_data2_run)) 
  {
    $JobId = $fatch_data2_row['JobId'];
    $fatch_data3 = "SELECT * FROM `application_master` WHERE JobId='$JobId'";
    $fatch_data3_run = mysqli_query($job,$fatch_data3);
    $fatch_data3_row = mysqli_fetch_assoc($fatch_data3_run);
    $JobSeekId = $fatch_data3_row['JobSeekId'];
    $Status = $fatch_data3_row['Status'];

    $fatch_data4 = "SELECT * FROM `jobseeker_reg` WHERE JobSeekId='$JobSeekId'";
    $fatch_data4_run = mysqli_query($job,$fatch_data4);
    $fatch_data4_row = mysqli_fetch_assoc($fatch_data4_run);
    $JobSeekId = $fatch_data4_row['JobSeekId'];
    $JobSeekerName = $fatch_data4_row['JobSeekerName'];
    $City = $fatch_data4_row['City'];
    $Email = $fatch_data4_row['Email'];

    echo "<tr>
            <td ><strong> $count</strong></td>
            <td ><strong> $JobSeekerName</strong></td>
            <td ><strong> $City</strong></td>
            <td ><strong> $Email</strong></td>
            <td ><strong> $Status</strong></td>
            <td ><strong><a href='ViewBiodata.php?JobSeekId=$JobSeekId&&Status=$Status'>&nbsp;View</a></strong></td>
    </tr> ";
    $count++;
    } 
    $records = mysqli_num_rows($fatch_data2_run);
 
}
?>
                </table>
                <?php
mysqli_close($con);
?>
           <br>
		    </div>
	    </div>
	</div>


	<div class="clearfix"></div>
	<br/>
	
<div class="clearfix"></div>
    <div class="col-div-12">
        <div class="box-9" style="height: 45%; background-color: rgba(30, 143, 255, 0.207);">
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


