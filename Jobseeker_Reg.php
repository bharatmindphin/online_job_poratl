
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
 .conn {
  position: relative;
  /* text-align: center; */
  color: rgb(0, 0, 0);
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 2px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 30px;
  left: 25px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
 
 .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
} 

   
  </style>
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
            <h2 >Jobseeker Registration Form</h2></div>

                    <div class="login">

                <form action="jobseekerinsert.php" method="post"  id="form2">
                  <!-- <table width="100%" border="0" style="margin:20px 10px 0px 25px;"> -->
                  <table width="100%" border="0">
                    <tr>
                      <td>JobSeeker Name:</td>
                      <td>
                        <input type="text" name="txtName" id="txtName" pattern="[a-zA-Z ]{1,20}" title="Name should only contain letters." required/>
                        
                        </td>
                    </tr>
                   
                    <!-- <tr>
                      <td>Address:</td>
                      <td>
                        <textarea name="txtAddress" id="txtAddress" cols="20" rows="2" required></textarea>
                    </td>
                    </tr> -->
                    <tr>
                      <td>City:</td>
                      <td>
                        <input type="text" name="txtCity" id="txtCity" pattern="[a-zA-Z ]{1,40}" title="Name should only contain letters." required/>
                    </td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td>
                        <input type="email" name="txtEmail" id="txtEmail" required/>
                        
                        </td>
                    </tr>
                    <!-- <tr>
                      <td>Mobile:</td>
                      <td>
                        <input type="text" name="txtMobile" id="txtMobile" pattern="[6-9]{1}[0-9]{9}" title="Please enter valid phone number" required/>
                        </td> 
                    </tr>-->
                    <!-- <tr>
                      <td>Qualification:</td>
                      <td>
                      <input type="text" name="cmbQual" id="cmbQual" required/>
                      </td>
                    </tr> -->
                    <!-- <tr>
                      <td>Other:</td>
                      <td>
                        <input type="text" name="txtOther" id="txtOther" required />
                      </td>
                    </tr> -->
                    <tr>
                      <td>Gender:</td>
                      <td>
                        <input type="radio" name="cmbGender" id="cmbGender" value="Male" required> Male
                        <input type="radio" name="cmbGender" id="cmbGender" value="Female" required> Female
                      </td>
                    </tr>
                    <!-- <tr>
                      <td>BirthDate:</td>
                      <td>
                        <input type="Date" name="txtBirthDate" id="txtBirthDate" required />
                       </td>
                    </tr> -->
                   
                    <tr>
                      <td>User Name:</td>
                    <td>
                        <input type="text" name="txtUserName" id="txtUserName" pattern="[a-zA-Z0-9]{1,20}" title="Username should only contain letters & digits." required />
                        </td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td>
                        <input type="password" name="txtPassword" id="txtPassword" pattern="[a-zA-Z0-9!@#$%^&*]{8,16}" title="Create strong password" required/>
                     </td>
                    </tr>
                    <tr>
                      <td>Confirm-Password:</td>
                      <td>
                        <input type="password" name="ConfirmPassword" id="ConfirmPassword" pattern="[a-zA-Z0-9!@#$%^&*]{8,16}" title="Username should only contain letters & digits." required/>
                     </td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td>
                        <select name="cmbQue" id="cmbQue" required>
                          <option selected="selected">What is Your Pet Name?</option>
                          <option>Who is Your Favourite Person?</option>
                          <option>What is the Name of Your First School?</option>
                        </select>
                     </td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td>
                        <input type="text" name="txtAnswer" id="txtAnswer" required/>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <label></label>
                        <div style="text-align: center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
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
      <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
</svg>
<hr>
<h3 style="font-size: 27px;"> Welcome To JobSeeker</h3>
      <p style="font-size: 15px;"> You are so seconds away form earning your own money</p>
      
      <hr>
      <!-- <h4> Alread Have An Account?  &nbsp; <button style="background-color: blue; color: white; padding: 3px; font-size: 20px; border-radius: 4px; width: 80px;" ><a href="index.php" style="color: white;">Login</a></button></h4> -->

      <?php
          include "A_login.php";
      ?>
		  </div>
		</div>
	</div>
        <div class="clearfix"></div><br/>
	
        <div class="clearfix"></div>
    <div class="col-div-12">
        <div class="box-9" style="height: 45%;">
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