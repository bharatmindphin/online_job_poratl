
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



    <div class="col-div-8">
		    <div class="box-1" style="height: 900px;">
			      <div class="content-box-1">
            <div class="header">
              <h2 >Recruiter Registration Form</h2></div>
              <div class="login">

<form action="Recruiterinsert.php" method="post" enctype="multipart/form-data">
  <table width="100%" border="0" >
    <tr>
      <td>Company Name:</td>
      <td>
        <input type="text" name="txtName" id="txtName" pattern="[a-zA-Z ]{1,60}" title="Name should only contain letters." required/>
        </td>
    </tr>
   
    <tr>
      <td>Contact Person:</td>
      <td>
        <input type="text" name="txtPerson" id="txtPerson" pattern="[a-zA-Z ]{1,20}" title="Name should only contain letters." required />
        </td>
    </tr>
      <td>Company Image:</td>
      <td> <input type="file" name="image"  id="image"><br>
</td>
    <!-- <tr>
      <td>Address:</td>
      <td>
        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5" required></textarea>
        </td>
    </tr> -->
    <tr>
      <td>City:</td>
      <td>
        <input type="text" name="txtCity" id="txtCity" pattern="[a-zA-Z ]{1,40}" title="Name should only contain letters."required/>
        </td>
    </tr>
    <tr>
      <td>Email:</td>
      <td>
        <input type="email" name="txtEmail" id="txtEmail" required />
       </td>
    </tr>
    <!-- <tr>
      <td>Mobile:</td>
      <td>
        <input type="text" name="txtMobile" id="txtMobile" pattern="[6-9]{1}[0-9]{9}" title="Please enter valid phone number" required />
        </td>
    </tr> -->
    <!-- <tr>
      <td>Area of Work: </td>
      <td>
      <input type="text" name="txtAreaWork" id="txtAreaWork" required />
     </td>
    </tr> -->
    <tr>
      <td>User Name:</td>
    <td>
        <input type="text" name="txtUserName" id="txtUserName" pattern="[a-zA-Z0-9]{1,20}" title="Username should only contain letters & digits."required />
        </td>
    </tr>
    <tr>
      <td>Password:</td>
      <td>
        <input type="password" name="txtPassword" id="txtPassword" pattern="[a-zA-Z0-9!@#$%^&*]{8,16}" title="Username should only contain letters & digits."  required />
      </td>
    </tr>
    <tr>
      <td>Confirm-Password:</td>
      <td>
        <input type="password" name="ConfirmPassword" id="ConfirmPassword" pattern="[a-zA-Z0-9!@#$%^&*]{8,16}" title="Username should only contain letters & digits."  required />
      </td>
    </tr>
    <tr>
      <td>Security Question:</td>
      <td><select name="cmbQue" id="cmbQue" required>
        <option>What is Your Pet Name?</option>
        <option selected="selected">Who is Your Favourite Person?</option>
        <option>What is the Name of Your First School?</option>
                                                  </select></td>
    </tr>
    <tr>
      <td>Answer:</td>
      <td>
      <input type="text" name="txtAnswer" id="txtAnswer" required/>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="button2" id="button2" value="Submit" />
          </div>
     </td>
    </tr>
  </table>
 </form>
</div>

              
              
		        </div>
	      </div>
	  </div>

   

	<div class="col-div-4-1">
		<div class="box-1" style="text-align:center; text-shadow: 5px; height: 900px;">
			<div class="content-box-1">
      <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
<hr>
<h3 style="font-size: 28px;"> Welcome To Recruiter</h3>
      <p style="font-size: 15px;"> You are so seconds away form earning your own money</p>
      <hr>
      <!-- <h4> Alread Have An Account? &nbsp; <button style="background-color: blue; color: white; padding: 3px; font-size: 20px; border-radius: 4px; width: 80px;" ><a href="index.php" style="color: white;">Login</a></button></h4> -->
      <?php
          include "A_login.php";
      ?>
    </div>
		</div>
	</div>
        <div class="clearfix"></div><br/>
	
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