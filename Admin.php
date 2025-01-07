

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    /* Style for the header */
.head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Style for the logo */
.head .nav {
  font-size: 24px;
  font-weight: bold;
  margin: 0;
}



    /* Style for the header */
.head2 {
  background-color: rgb(176, 180, 169);
  height: 50px;
  margin-top: 0px;
  padding-top: 10px;
}

.head2 h1 {
  text-align: center;
  margin: 0;
}

/* Style for the login form */
.login {
  margin: 20px auto;
  max-width: 400px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login table {
  width: 100%;
}

.login td {
  padding: 5px;
}

.login input[type="text"],
.login input[type="password"],
.login select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
  margin-bottom: 10px;
  font-size: 16px;
}

.login input[type="submit"] {
  background-color: rgb(176, 180, 169);
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  font-size: 16px;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background-color: #555;
}

/* Media queries for responsiveness */
@media (max-width: 600px) {
  .login {
    max-width: 300px;
  }
}

@media (max-width: 400px) {
  .login input[type="submit"] {
    width: 100%;
  }
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


    <div class="col-div-12">
		    <div class="box-1">
			      <div class="content-box-1">
              <h2 style="background-color:rgba(44, 138, 220, 0.36); height: 60px; width: 100%; text-align: center; padding-top: 20px; font: 2em sans-serif;"><span><a href="#">Admin Login</a></span></h2>
              
              
            <div class="login">
                <form name="form1" method="post" action="login.php">
                  <table style="margin:0px 0px 0px 0px;">
                    <tr>
                      <td><strong>User Name</strong></td>
                    </tr>
                    <tr>
                    <td>
                        <input type="text" name="txtUser" id="txtUser">
                      </td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                    </tr>
                    <tr>
                    <td>
                        <input type="password" name="txtPass" id="txtPass">
                       </td>
                    </tr>
                    <tr>
                      <td><strong>User Type</strong></td>
                    </tr> 
                     <tr>
                      <td><label>
                      <input type="text" name="cmbUser" id="cmbUser" value="Administrator">
                        <!-- <select name="cmbUser" id="cmbUser">
                          <option value="Administrator">Administrator</option>
                          </select> -->
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    
                  </table>
      </form>
    </div>
                    
   



              
              
		        </div>
	      </div>
	  </div>

   

	
        
	
        
	
		
	
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