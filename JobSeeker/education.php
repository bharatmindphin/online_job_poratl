<?php
if(!isset($_SESSION))
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
    .login table{
      margin-top: 20px;
    }
    .login td{
    
      padding-left: 20px;
      padding-right: 20px;
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
		<div class="box-9" style="height: 100%;">
			<div class="content-box-1" style="margin: 0% 0% 0% 0%;">
			
          
             
             <h1 style="background-color:skyblue; text-align: center;  height:50px;"><span><a href="#"> Education Qualification </a></span></h1>
             <div class="login">
               <table style="width: 100%;" border="" cellspacing="" cellpadding="">
                   <tr>
                     <td bgcolor="#A0B9F3"style="text-align: center;"><strong><h3>Create Education Profile</h3></strong></td>
                   </tr>
                    
                   <tr>
                     <td><form id="form1" method="post" action="InsertEdu.php" enctype="multipart/form-data">
                       <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
                         <tr>
                           <td><strong>Degree:</strong></td>
                           <td>
                           <input type="text" name="cmbQual" id="cmbQual" pattern="[a-zA-Z @ & , ]{1,40}" required/>
                           </td>
                         </tr>
                         
                         <tr>
                           <td><strong>University/Board Name:</strong></td>
                           <td>
                            
                             <input type="text" name="txtBoard" id="txtBoard" pattern="[a-zA-Z @ & , ( )]{1,40}" required />
                             
                           </td>
                         </tr>
                         <tr>
                           <td><strong>Passing Year:</strong></td>
                           <td><label>
                             <select name="cmbYear" id="cmbYear" required>
                               <option>2000</option>
                               <option>2001</option>
                               <option>2002</option>
                               <option>2003</option>
                               <option>2004</option>
                               <option>2005</option>
                               <option>2006</option>
                               <option>2007</option>
                               <option>2008</option>
                               <option>2009</option>
                               <option>2010</option>
                               <option>2011</option>
                               <option>2012</option>
                               <option>2013</option>
                               <option>2014</option>
                               <option>2015</option>
                               <option>2016</option>
                               <option>2017</option>
                               <option>2018</option>
                               <option>2019</option>
                               <option>2020</option>
                               <option>2021</option>
                               <option>2022</option>
                               <option>2023</option>
                              
                             </select>
                           </label></td>
                         </tr>
                         <tr>
                           <td><strong>Percentage(%)</strong></td>
                           <td>
                             <input type="text" name="txtPer" id="txtPer" pattern="[0-9 @ & . % ]{1,10}" required/>
                            </td>
                         </tr>
                         <tr>
                           <td><strong>Upload Result :</strong></td>
                           <td>
                             <input type="file" name="txtfile" id="txtfile" required/>
                            </td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td><label>
                             <input type="submit" name="button" id="button" value="Submit" />
                           </label></td>
                         </tr>
                       </table>
                                         </form>
                    <br>
                   <tr>
                     <td bgcolor="#A0B9F3"style="text-align: center;"><strong><h3>Educational Profile</h3> </strong></td>
                   </tr>
                   <tr>
                     <td><table style= "width: 100%;" border="" cellpadding="" cellspacing="" bordercolor="#006699" >
                       <tr>
                        <th ><div ><strong>ID</strong></div></th>
                         <th ><div ><strong>Degree</strong></div></th>
                         <th ><div ><strong>University</strong></div></th>
                         <th ><div ><strong>Passing Year</strong></div></th>
                          <th ><div><strong>Percentage</strong></div></th>
                          <th ><div><strong>Marksheet</strong></div></th>
                          <th ><div><strong>Action</strong></div></th>
                       </tr>
                       <?php
                       $ID=$_SESSION['ID'];
 $con = mysqli_connect("localhost","root","","ojp");
 mysqli_select_db( $con, "ojp");
 $sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
 $result = mysqli_query($con,$sql);
 while($row = mysqli_fetch_array($result))
 {
  $Id=$row['EduId'];
 $Degree=$row['Degree'];
 $Univ=$row['University'];
 $Passing=$row['PassingYear'];
 $Per=$row['Percentage'];
 $folder=$row['Upload_Result'];
 ?>
                       <tr>
                        <td ><strong><?php echo $Id;?></strong></td>
                         <td ><strong><?php echo $Degree;?></strong></td>
                         <td ><strong><?php echo $Univ;?></strong></td>
                         <td ><strong><?php echo $Passing;?></strong></td>
                         <td ><strong><?php echo $Per;?></strong></td>
                         <td><a href="<?php echo $folder;?>" target="_blank"><strong>View</strong></a></td>

                         <td style="width: 15%;" >
                            <a href="EditEdu.php?ID=<?php echo $ID;?>"><img src="images/edit.png" alt="" style="width: 30%;"></a>&nbsp;&nbsp;&nbsp;
                            <a href="DeleteEdu.php?EduId=<?php echo $Id;?>" ><img src="images/33-512.webp" alt="" style="width: 30%; float: right;"></a>
                        </td>
                       </tr>
                       <?php
 }
 $records = mysqli_num_rows($result);
 ?>
                       <tr>
                         <td colspan="7" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                       </tr>
                       <?php
 mysqli_close($con);
 ?>
                     </table></td>
                   </tr>
                   
                 </table>
                 <p>&nbsp;</p>
                 </div>
		    </div>
	    </div>
	</div>

   
<!-- 
	<div class="col-div-4-1">
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





