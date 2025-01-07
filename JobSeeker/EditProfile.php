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
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> Job Portal <span class="menu">☰</span></p>
	<p class="logo1"> <span class="menu1">☰</span></p>
 
  
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
		<div class="box-9" style="height: 50%; background-color: rgba(109, 99, 241, 0.195);">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">
			<h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               <?php
$ID=$_SESSION['ID'];

$con = mysqli_connect("localhost","root","","ojp");
mysqli_select_db( $con, "ojp");
$sql = "SELECT * FROM `jobseeker_reg` WHERE jobseekid='".$ID."'";

$result = mysqli_query($con, $sql); 
 
$row = mysqli_fetch_array($result)
?>
<div class="login">
<form method="post" action="UpdateProfile.php" enctype="multipart/form-data">
                <table width="100%" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><strong>JobSeeker ID:</strong></td>
                    <td>
                      <input name="txtId" type="text" id="txtId" readonly value="<?php echo $row['JobSeekId'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>JobSeeker Name :</strong></td>
                    <td>
                      <input name="txtName" type="text" id="txtName" pattern="[a-zA-Z ]{1,4 0}"  title="Name should only contain letters." value="<?php echo $row['JobSeekerName'];?>" />
                      </td>
                  </tr>
                  
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td>
                      <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"  ><?php echo $row['Address'];?></textarea>
                      </td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td>
                      <input name="txtCity" type="text" id="txtCity" pattern="[a-zA-Z ]{1,30}" value="<?php echo $row['City'];?>" />
                     </td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td>
                      <input name="txtEmail" type="email" id="txtEmail" value="<?php echo $row['Email'];?>" />
                     </td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td>
                    <input type="text" name="txtMobile" id="txtMobile"  pattern="[6-9]{1}[0-9]{9}" title="Please enter valid phone number" required value="<?php echo $row['Mobile'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td>
                    <input type="text" name="cmbQual" id="cmbQual" required  pattern="[a-zA-Z & , 0-9 ]{1,40}" value="<?php echo $row['Qualification'];?>" />
                      </td>
                  </tr>
                  
                    <tr>
                      <td>BirthDate:</td>
                      <td>
                        <input type="Date" name="txtBirthDate" id="txtBirthDate" required 
       min="1990-01-01" max="2003-12-31" value="<?php echo $row['BirthDate'];?>" />
                       </td>
                    </tr>
                    <tr>
                      <td>Upload Resume :</td>
                      <td><label>
                        <input type="file" name="image" id="image" required value="<?php echo $row['Resume'];?>"  />
                      </label></td>
                    </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td>
                      <input name="txtUser" type="text" id="txtUser" readonly value="<?php echo $row['UserName'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Password:</strong></td>
                    <td>
                      <input name="txtPassword" type="password" id="txtPassword"  pattern="[a-zA-Z @ & _ 0-9 ]{8,16}" value="<?php echo $row['Password'];?>" />
                      </td>
                  </tr>
                  <tr>
                    <td><strong>Confirm-Password:</strong></td>
                    <td>
                      <input name="ConfirmPassword" type="password" id="ConfirmPassword" pattern="[a-zA-Z @ & _ 0-9 ]{8,16}" value="<?php echo $row['ConfirmPassword'];?>" />
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



