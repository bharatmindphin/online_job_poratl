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
      body {
        font-family: Arial, sans-serif;
      }
      
      h1 {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
      }
      
      form {
        width: 600px;
        height: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-family: Arial, sans-serif;
      }
      
      label {
        display: block;
        margin-bottom: 15px;
        font-size: larger;
      }
      .submit{
      margin: 30px 150px;
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
		
		
		<div class="notification-div">
		</div>

	    <div class="profile">
            <div class="profile-div">
			</div>
	    </div>
    </div>
	<div class="clearfix"></div>



    <div class="col-div-12">
		<div class="box-9" style="height: 700px;">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">
			<h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>

               <?php
                    $ID=$_SESSION['ID'];
                    $con = mysqli_connect("localhost","root","", "ojp");
                    mysqli_select_db($con,"ojp");
                    
                     $sql = "select * from recruiter_reg where RecruiterId='".$ID."'  ";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result)
                ?>
                


    <form>
      <h1> Company Profile</h1>
    <div class="col-div-4-1">
      <div class="box-1" style="height: 100px; width: 100px; background-color: #f2f2f2;">
        <div class="content-box-1">

          <div class="img">
            <label><img src="../<?php echo $row['CompanyLogo']; ?>" style="height: 90px; width: 90px;border: 1px solid black; border-radius: 5px;"></label>
          </div>

              </div>
           </div>
      </div>
     <div class="col-div-4-1">
		    <div class="box-1" style="height: 100px; width: 340px;background-color: #f2f2f2;">
			      <div class="content-box-1">
             
              <label><strong>Company Name : </strong> </label>
              <label><?php echo $row['CompanyName'];?></label>
              
                
            </div>
         </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="col-div-8">
      <div class="box-1" style="height: 380px; width: 540px;background-color: #f2f2f2;">
          <div class="content-box-1">
      <label><strong> Contact Person: </strong> &nbsp;&nbsp;<?php echo $row['ContactPerson'];?> </label>     
            
      <label><strong> Address : </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['Address'];?></label>
      
      <label><strong> City : </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo $row['City'];?></label>
      
      <label><strong> Email : </strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo $row['Email'];?></label>
      
      <label><strong> Mobile : </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <?php echo $row['Mobile'];?></label>
      
      <label><strong> Area of Work : </strong>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['Area_Work'];?></label>
      
      <label><strong> User Name : </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <?php echo $row['UserName'];?></label>
      
     
    <a href="EditProfile.php?RecruiterId=<?php echo $row['RecruiterId']; ?>" class="submit">Edit Profile</a>
          </div>
       </div>
  </div>

    </form>
		    </div>
	    </div>
	</div>

   

	<!-- <div class="col-div-4-1">
		<div class="box-1" style="height: 700px;">
			<div class="content-box-1">
     
            </div>
         </div>
    </div> -->
	
	
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

