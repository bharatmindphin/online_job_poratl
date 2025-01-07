
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<?php
    include "Dashboard.php";
    ?>

<div id="main">
	<?php
        include "Header.php"; 
    ?>



    <div class="col-div-12">
		    <div class="box-9" style="height: 50%; background-color: aliceblue;">
			      <div class="content-box-1">
            <div class="header">
              <h2>Contact Us</h2></div>
              

              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-left: 35px; margin-top: 20px;">
                <tr>
                  <td width="6%"><img src="add.jpg" alt="" width="15" height="18" /></td>
                  <td width="94%"><strong>Career Options Portal<br/>
                    Sarswati Society, Kamana Rd, <br>
                    opp. to Cine Pluse On the Side,<br>
                    Visnagar, Gujarat 384315,</strong></td>
                </tr>
                <tr>
                  <td><img src="mob.jpg" alt="" width="15" height="18" /></td>
                  <td><strong>Mobile: 6351588430 <br></strong></td>
                </tr>
                <tr>
                  <td><img src="email.png" alt="" width="15" height="18" /></td>
                  <td><strong>Email: onlinejobportal048@gmail.com<br></strong></td>
                </tr>
                <tr>
                  <td><img src="web.png" alt="" width="15" height="18" /></td>
                  <td><strong>Website:www.jobportal.com</strong></td>
                </tr>
              </table>
              <br>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12504.256774172562!2d72.5464987671194!3d23.687636003631756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c4fc1a82d9cc1%3A0xab14b55faa92b2c6!2sSankalchand%20Patel%20University%20(SPU)!5e0!3m2!1sen!2sin!4v1679631095652!5m2!1sen!2sin" width="90%" height="450px" style="margin-left: 35px;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		        </div>
	      </div>
	  </div>

   

	<!-- <div class="col-div-4-1">
		<div class="box-1" style="height: 900px;">
			<div class="content-box-1">
            <?php
              include "A_login.php";
            ?>
		  </div>
		</div>
	</div> -->
        <div class="clearfix"></div><br/>
	
        <div class="clearfix"></div>
    <div class="col-div-12">
        <div class="box-9">
		      <div class="content-box">
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