
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
		    <div class="box-9" style="height: 50%; background-color: rgba(187, 209, 220, 0.341);">
			      <div class="content-box-1">
              
                  <div class="login">
                <h2><span><a href="#">Welcome To JOB PORTAL</a></span></h2>
               

                <form id="form2" method="post" action="ForPass.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="middle">Select User:</td>
                      <td><p>
                        <label>
                          <input type="radio" name="rdUser" value="Recruiter" id="rdUser_0" />
                          Recruiter</label>
                        <br />
                        <label>
                          <input type="radio" name="rdUser" value="JobSeeker" id="rdUser_1" />
                          JobSeeker</label>
                        <br/>
                      </p></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><select name="cmbQue" id="cmbQue">
                        <option selected="selected">What is Your Pet Name?</option>
                        <option>Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                        </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button2" id="button2" value="Submit" />
                      </label></td>
                    </tr>
                  </table>
              </form>
                
          </div>
           
            
            
            <br>
            <br>
            
            
                    
                 
		        </div>
	      </div>
	  </div>

   

	
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