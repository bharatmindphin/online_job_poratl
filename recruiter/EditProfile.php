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
    padding-left: 15px;
    padding-right: 15px;
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
			<h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               <?php
$ID=$_SESSION['ID'];

$con = mysqli_connect("localhost","root","","ojp");
mysqli_select_db( $con, "ojp");
$sql = "SELECT * FROM recruiter_reg WHERE RecruiterId='".$ID."'";

$result = mysqli_query($con, $sql);
 
$row = mysqli_fetch_array($result)
?>
<div class="login">
<form method="post" action="UpdateProfile.php" enctype="multipart/form-data">
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Company ID:</strong></td>
                    <td>
                      <input name="txtId" type="text" id="txtId" readonly required value="<?php echo $row['RecruiterId'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Company Name:</strong></td>
                    <td>
                      <input name="txtName" type="text" id="txtName"  required pattern="[a-zA-Z . , @ & 0-9 ]{1,60}" value="<?php echo $row['CompanyName'];?>" />
                      </td>
                  </tr>
                  <td><strong><label for="Image">Company Logo :</label></strong></td>
                  <td>
                    <input type="file" name="image" value="Browse" id="image" required="required" accept="image/*" value="<?php echo $row['CompanyLogo']; ?>"><br>
                  </td>
                  <tr>
                    <td><strong>Contact Person:</strong></td>
                    <td>
                      <input name="txtContact" type="text" id="txtContact" required pattern="[a-zA-Z ]{1,60}" value="<?php echo $row['ContactPerson'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td>
                      <textarea name="txtAddress" id="txtAddress" cols="35" required pattern="[a-zA-Z . , @ & 0-9 ]{1,60}" rows="3"> <?php echo $row['Address'];?></textarea>
                      </td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td>
                      <input name="txtCity" type="text" id="txtCity" pattern="[a-zA-Z ]{1,60}" required value="<?php echo $row['City'];?>" />
                     </td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td>
                      <input name="txtEmail" type="email" id="txtEmail" required value="<?php echo $row['Email'];?>" />
                     </td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td>
                    <input name="txtMobile" type="text" id="txtMobile" required pattern="[6-9]{1}[0-9]{9}"  value="<?php echo $row['Mobile'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Area of Work:</strong></td>
                    <td>
                      <input name="txtArea" type="text" id="txtArea" required pattern="[a-zA-Z . , @ & 
                      ]{1,60}" value="<?php echo $row['Area_Work'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td>
                      <input name="txtUser" type="text" id="txtUser" required readonly value="<?php echo $row['UserName'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Password:</strong></td>
                    <td>
                      <input name="txtPassword" type="password" id="txtPassword" pattern="[a-zA-Z @ & _ 0-9 ]{8,16}" required value="<?php echo $row['Password'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Copnfirm-Password:</strong></td>
                    <td>
                      <input name="ConfirmPassword" type="password" id="ConfirmPassword" pattern="[a-zA-Z @ & _ 0-9 ]{8,16}" required value="<?php echo $row['ConfirmPassword'];?>" />
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
</div>
           
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



