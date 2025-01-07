<?php
        if (!isset($_SESSION)) 
        {
          session_start();
          
        }
?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .login td{
      padding-left: 20px;
      padding-right: 20px;
    }
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

		
		
		<div class="notification-div">
			
			
		</div>
	<div class="profile">

		
		<div class="profile-div">
			
		</div>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	
	
	
	

    <div class="col-div-12">
		<div class="box-9" style="height: 50%;" >
			<div class="content-box-1">
			<h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               
      <div class="login" style="width: 1400px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3" style="text-align: center;"><strong><h3>Manage Job</h3></strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="InsertJob.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <!-- <tr>
                          <td><strong>Company Name :</strong></td>
                          <td>
                            <input type="text" name="txtName" id="txtName" required/>
                            </td>
                        </tr>
                        <tr> -->
                          <td><strong>Job Title :</strong></td>
                          <td>
                            <input type="text" name="txtTitle" id="txtTitle" pattern="[a-zA-Z & . , & ]{1,60}" required/>
                            </td>
                        </tr>
                        <tr>
                          <td><strong>Job Location :</strong></td>
                          <td>
                            <input type="text" name="txtLocation" id="txtLocation" pattern="[a-zA-Z . , @ & ]{1,60}" required/>
                            </td>
                        </tr>
                        <tr>
                      <td><strong>Job Type :</strong></td>
                      <td>
                        <input type="radio" name="cmbType" id="cmbType" value="Full-Time" required> Full-Time                       
                        <input type="radio" name="cmbType" id="cmbType" value="Part-Time" required> Part-Time
                      </td>
                    </tr>
                    </tr>
                        <tr>
                      <td><strong>Job Mode :</strong></td>
                      <td>
                        <input type="radio" name="cmbMode" id="cmbMode" value="Online" required> Online                       
                        <input type="radio" name="cmbMode" id="cmbMode" value=" Offline" required> Offline
                      </td>
                    </tr>
                        <tr>
                          <td><strong>Total Vacancy :</strong></td>
                          <td>
                            <input type="text" name="txtTotal" id="txtTotal" pattern="[a-zA-Z & 0-9 ]{1,60}" required/>
                            </td>
                        </tr>
                        <tr>
                          <td><strong>Qualification :</strong></td>
                          <td><input type="text" name="cmbQual" id="cmbQual" pattern="[a-zA-Z . , @ & 0-9 ]{1,60}" required/>
                            </td>
                        </tr>
                         
                        <tr>
                          <td><strong>Description :</strong></td>
                          <td>
                            <textarea name="txtDesc" id="txtDesc" cols="20" rows="2" required></textarea>
                            </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
     
                    </td>
                  </tr>
                  </div>
                  <tr>
                    <td bgcolor="#A0B9F3"style="text-align: center;"><strong><h3>Posted Job </h3></strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Type</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>
                    
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">EditJob</div></th>
                      </tr>
<?php

    $con = mysqli_connect("localhost","root","", "ojp");
    mysqli_select_db($con, "ojp");
    //  $sql = "select * from job_master where CompanyName ='".$_SESSION['Name']."'";
    $sql = "select * from job_master where JobId";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result))
    {
    $Id=$row['JobId'];
    $JobTitle=$row['JobTitle'];
    $Vacancy=$row['Vacancy'];
    $JobType=$row['JobType'];
    $MinQualification=$row['MinQualification'];
    $JobDescription =$row['JobDescription'];
?>
            <tr>
                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobType;?></strong></div></td>
                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobDescription;?></strong></div></td>
                      
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteJob.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="EditJob.php?JobId=<?php echo $Id;?>">Edit</a></strong></div></td>
                      </tr>
<?php
  }
  $records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
<?php
  mysqli_close($con);
?>
                    </table></td>
                  </tr>
                </table>

           
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

