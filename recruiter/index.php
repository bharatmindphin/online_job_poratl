

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
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@0;1&family=Libre+Baskerville:wght@700&family=PT+Serif&display=swap" rel="stylesheet">

<style>
  h1{
    background-color:skyblue;
    text-align: center;  
    height:70px; 
    padding-top: 20px;
    font-family: 'PT Serif', serif;
  }
  .img{
    float: left;
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

	
	
	
	<div class="clearfix"></div>
	<br/>

    <div class="col-div-12">
		<div class="box-9" style="background-color: rgba(51, 198, 238, 0.247); height: 50%;">
			<div class="content-box-1">
			
      <?php
          $ID=$_SESSION['ID'];
          $con = mysqli_connect("localhost","root","", "ojp");
          mysqli_select_db($con,"ojp");
          
          $sql = "select * from recruiter_reg where RecruiterId='".$ID."'  ";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
      ?>
  
      <div class="img">
        <label><img src="../<?php echo $row['CompanyLogo']; ?>" style="height: 90px; width: 90px;border: 1px solid black; border-radius: 5px;"></label>
      </div>
      <h1 ><span><a href="#"> Welcome To Control Panel <?php echo $_SESSION['Name'];?></a></span></h1>

      <img src="image/image_5.jpg" alt="hj" style="width: 100%; height: 500px;">
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



