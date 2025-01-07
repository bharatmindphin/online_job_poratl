
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
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'PT Serif', serif;
    }
    h3{
      position: relative;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      color: rgb(0, 0, 0);
      margin: 0px;
      font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    
  </style>
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"> Job Portal <span class="menu">☰</span></p>
	<p class="logo1"> <span class="menu1">☰</span></p>
  <a href="#" class="icon-a"><img src="ico_archive2.gif" width="7%"> &nbsp;&nbsp;Dashboard</a>
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
		<div class="box-9" style="height: 50%;">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">

			<h1 style="background-color:skyblue; text-align: center;  height:50px;"><span><a href="#"> Welcome <?php echo $_SESSION['Name'];?></a></span></h1>

      <img src="images/image_7.jpg" alt="hj" style="width: 100%; margin: 0px;">
            
            


      
         
		    </div>
	    </div>
	</div>
  <br>
  <break>
  <div class="col-div-4-1">
		      <div class="box" style="height: 50%;">
            <img src="images/icon1.jpg" alt="" style="width: 20%; float: left;">
                <h3 class="mb-3" style="padding-top: 20px;">Search Millions of Jobs</h3><br>
                <p><b>Search Millions of Jobs</b> is to simplify the job search process for job seekers by aggregating job postings from various sources and providing recruiters with a cost-effective way to qualified candidate.</p>
             </div>
      </div> 
       
      <div class="col-div-4-1">
          <div class="box" style="height: 50%;">
            <img src="images/icon2.png" alt="" style="width: 20%; float: left;">
                <h3 class="mb-3" style="padding-top: 20px;">Easy To Manage Jobs</h3><br>
                <p><b>Easy To Manage Jobs</b> is to provide recruiter with a simple and efficient way to manage job postings, applications, and resumes, streamlining the hiring process and saving time.</p>
             </div>
      </div>

      <div class="col-div-4-1">
          <div class="box" style="height: 50%;">
            <img src="images/icon23.png" alt="" style="width: 20%; float: left;">
                <h3 class="mb-3" style="padding-top: 20px;">Top Careers</h3><br>
                <p><b>Top Careers</b> is to empower job seekers by providing them with insights into top career opportunities and equipping them with the tools and resources they need to achieve career success.</p>
             </div>
      </div>
   

	<!-- <div class="col-div-4-1">
		<div class="box-1" style="height: 700px;">
			<div class="content-box-1">
      <?php
        include "right.php";
    ?>

			
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



