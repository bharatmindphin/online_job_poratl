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
  <a href="#"class="icon-a"><i class="fa fa-pie-chart icons"></i>   Charts</a>
  <a href="#"class="icon-a"><i class="fa fa-list icons"></i>   Projects</a>
  <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i>   Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i>   Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i>   Accounts</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i>   Tasks</a>
  <a href="#"class="icon-a"><i class="fa fa-bell icons"></i>   Notification</a>
  <a href="#"class="icon-a"><i class="fa fa-circle icons"></i>   Icons</a>


</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<p class="nav"> Career Options Portal</p>

</div>
	
	<div class="col-div-6">
		<div class="navbar">
            <a href="index.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="Recruiter.php">Recruiter</a>
            <a href="jobseeker.php">Jobseeker</a>
            <a href="ContactUs.php">Contact Us</a>
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
			<img src="Online Job Portal.png" alt="" style="width: 100%; margin-top: 350px;">
			
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
        <div class="box-9">
		    <div class="content-box">
            
		
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