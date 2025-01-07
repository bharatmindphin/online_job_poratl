<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        td {
            background-color: #f2f2f2;
        }
    </style>
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> Job Portal <span class="menu">☰</span></p>
	<p class="logo1"> <span class="menu1">☰</span></p>
  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
  <a href="index.php"class="icon-a"><i class="fa fa-circle icons"></i>   Home</a>
  <a href="User.php"class="icon-a"><i class="fa fa-pie-chart icons"></i>   User</a>
  <a href="ManageRecruiter.php"class="icon-a"><i class="fa fa-list icons"></i>   Manage Recruiter</a>
  <a href="ManageJob.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Manage JobSeeker</a>
  <a href="Feedback.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Feedback</a>
  <a href="Logout.php"class="icon-a"><i class="fa fa-user icons"></i>   Logout</a>
  
 


</div>
<div id="main">

	<div class="head">
		<div class="col-div-5">
<p class="nav"> Career Options Portal</p>

</div>
	
	<div class="col-div-7">
		<div class="navbar">
            <a href="index.php">Home</a>
            <a href="User.php">User</a>
            <a href="ManageRecruiter.php">Manage Recruiter</a>
            <a href="ManageJob.php">Manage JobSeeker</a>
            <a href="Feedback.php">Feedback</a>
            <a href="Logout.php">Logout</a>
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
		<div class="box-1" style="padding-top: 30px; padding-left: 10px; height:50%;">
			<div class="content-box-1">
			
            <table  border="0" cellspacing="0" cellpadding="0"style="width: 100%;">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                        <table  border="1" style="width: 100%;" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Gender</div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Detail</strong></div></th>
                       
                      </tr>
                      <?php
$con = mysqli_connect("localhost","root","","ojp");

mysqli_select_db( $con,"ojp");
$sql = "select * from JobSeeker_Reg where Status='Pending'";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['JobSeekId'];
$Name=$row['JobSeekerName'];
$City=$row['City'];
$Gender=$row['Gender'];

?>
                      <tr>
                        <td ><strong><?php echo $Id;?></strong></div></td>
                        <td ><strong><?php echo $Name;?></strong></div></td>
                         <td ><strong><?php echo $City;?></strong></div></td>
                          <td ><strong><?php echo $Gender;?></strong></div></td>
                         <td ><strong><a href="DetailJob.php?JobId=<?php echo $Id;?>">Detail</a></strong></div></td>
                       
                      </tr>
                      <?php
}
$records = mysqli_num_rows($result);
?>
                      <tr>
<td colspan="5" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
                      <?php
                            mysqli_close($con);
                            ?>
                    </table></td>
                  </tr>
                  
                </table>
                <br>
		    </div>
	    </div>
	</div>

    

	<!-- <div class="col-div-4-1">
		<div class="box-1">
			<div class="content-box-1">
			

			
		</div>
		</div>
	</div> -->
	
	
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