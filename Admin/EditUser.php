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

    <div class="col-div-8">
		<div class="box-1">
			<div class="content-box-1">
<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td><?php
$Id=$_GET['UserId'];

$con = mysqli_connect("localhost","root","","ojp");

mysqli_select_db( $con,"ojp");

$sql = "select * from admin_Master where UserId=".$Id."";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['UserId'];
$Name=$row['UserName'];
$Password=$row['Password'];
}
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">User Id</span></td>
                              <td>
                                <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id;?>" />
                                </td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">User Name:</span></td>
                              <td>
                                <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name;?>" />
                                </td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Password:</span></td>
                              <td>
                                <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password;?>" />
                                </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="submit" value="Update Record" /></td>
                            </tr>
</table>
                        </form>
                        <?php

mysqli_close($con);
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                          </table>
                        </form></td>
                  </tr>
                </table>
                </div>
	    </div>
	</div>

    

	<div class="col-div-4-1">
		<div class="box-1">
			<div class="content-box-1">
			

			
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