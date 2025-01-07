<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> Job Portal <span class="menu">☰</span></p>
	<p class="logo1"> <span class="menu1">☰</span></p>
 
  
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
        <a href="index.php" class="icon-a"><i class="fa fa-pie-chart icons"></i>   Home</a>
        <a href="Profile.php" class="icon-a"><i class="fa fa-list icons"></i>   Profile</a>
        <a href="ManageJob.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Manage JOB</a>
        <a href="ManageWalkin.php" class="icon-a"><i class="fa fa-tasks icons"></i>   Walkin-Interview</a>
        <a href="Application.php" class="icon-a"><i class="fa fa-user icons"></i>   Application</a>
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
                   <a href="ManageWalkin.php"> Walkin-Interview</a>
                   <a href="Application.php"> Application</a>
                   <a href="logout.php"> Logout</a> 
            
        </div>
</div>
	
	<div class="clearfix"></div>
	<br/>
  </div>
    <div class="col-div-12">
		<div class="box-9">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">
			<h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Personal Information</strong></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobSeekId'];

$con = mysqli_connect("localhost","root","","ojp");
mysqli_select_db( $con, "ojp");

$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $row['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Resume:</strong></td>
                    <td><a href="../jobseeker/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Qualification</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Percentage</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_GET['JobSeekId'];


  $con = mysqli_connect("localhost","root","","ojp");
  mysqli_select_db( $con, "ojp");

  $sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
          
$result = mysqli_query($con, $sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$Per=$row['Percentage'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
                      </tr>
                      <?php
}
$records = mysqli_num_rows($result);
?>
                      
                      <?php

?>
                    </table></td>
                  </tr>
                </table>
                <?php
				$Status=$_GET['Status'];
				if($Status =='Apply')
				{
				?>
                <form id="form1" method="post" action="">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><input type="email" name="to"></td>
                  </tr>
                    <tr>
                      <td><strong>Call Latter Description:</strong></td>
                        <td>
                            <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
              <?php

              if(isset($_POST['button'])){
                
                $to = $_POST['to'];
                $subject = "Online Job Protal";
                $txtDesc = $_POST['txtDesc'];
                $headers = "From: onlinejobportal048@gmail.com";

                $send = mail($to, $subject, $txtDesc, $headers);
                
                $updata_data = "UPDATE `application_master` SET Description='$txtDesc',Status='Call Later & Email Send' WHERE JobSeekId='$ID'";
                $updata_data_result = mysqli_query($con,$updata_data);
                if($updata_data_result){
                  echo '<script type="text/javascript">alert("Call Latter Send Succesfully");window.location=\'Application.php\';</script>';
                }
              }
			  }
			  ?>
                <p align="center"><a href="Application.php"><strong>Back</strong></a></p>
        
           
		    </div>
	    </div>
	</div>

   

	<!-- <div class="col-div-4-1">
		<div class="box-1">
			<div class="content-box-1">
       < ?php
        include "right.php";
    ?>

			
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

