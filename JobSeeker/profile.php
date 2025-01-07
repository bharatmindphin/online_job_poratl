
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
   
    .ct{
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      border: unset;
      border: hidden;
      
    }
    .ct tr{
      background-color: rgba(127, 255, 212, 0.208);
      font-weight: bold;
    }
    .ct td{
      padding: 12px 15px;
    }
    .ct tbody tr{
      border-bottom: 1px solid black;

    }
    .submit{
      background-color: rgba(41, 63, 232, 0.742);
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
      font-weight: bold;
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
		<div class="box-9" style="height: 50%; padding-left: 150px; padding-right: 150px;  width: 70%;">
			<div class="content-box-1">
			<h1 style="background-color:skyblue; text-align: center;  height:50px;"><span><a href="#"> Welcome <?php echo $_SESSION['Name'];?></a></span></h1>

                <?php
                 $ID=$_SESSION['ID'];
                $con = mysqli_connect("localhost","root","","ojp");
                mysqli_select_db( $con, "ojp" );
                 $sql = "select * from jobseeker_reg where JobSeekId='".$ID."'  ";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result)
                ?>
                
                    <table class="ct" width="100%">
                      <tbody>
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
                        <td><a href="<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                    </tr>
                    <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?JobSeekId=<?php echo $row['JobSeekId']; ?>" class="submit">Edit Profile</a> </td>
                  </tr>
                      </tbody>
                    </table>
                    
		    </div>
	    </div>
	</div>

   

	<!-- <div class="col-div-4-1">
		<div class="box-1" style="height: 540px;">
			<div class="content-box-1">
      <?php
        include "right.php";
    ?>

			
		</div>
		</div>
	</div>
	 -->
	
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







