<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>


/*
nav ul {
    display: flex;
}

nav li {
    margin-right: 20px;
}

nav a {
    color: #fff;
}

nav a:hover {
    text-decoration: underline;
} */

/* hero section styles */
/* .hero {
    background-image: url('hero-image.jpg');
    background-position: center;
    background-size: cover;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero h1 {
    color: #fff;
    font-size: 3em;
    text-shadow: 1px 1px #333;
} */

/* about section styles */
.about {
    padding: 50px;
}

.about h2 {
    font-size: 2em;
    margin-top: 0;
}

.about ul {
    margin-top: 20px;
}

.about li {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.about p {
    font-size: 1.2em;
    line-height: 1.5;
    margin-bottom: 20px;
}

.about blockquote {
    border-left: 5px solid #333;
    margin: 20px 0;
    padding: 10px;
}

.about blockquote p {
    font-style: italic;
    font-size: 1.2em;
    margin-bottom: 10px;
}

.about blockquote cite {
    font-style: normal;
    font-size: 1.2em;
}

/* contact section styles */
.contact {
    background-color: #f1f1f1;
    padding: 20px;
}


.contact p {
    font-size: 1.3em;
    line-height: 1.5;
    margin-bottom: 20px;
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

	 <div class="clearfix"></div><br/>



    <div class="col-div-12">
		    <div class="box-9" style="background-color: rgba(100, 148, 237, 0.158);">
			      <div class="content-box-1">
              <div class="header">
              <h2 >About Us</h2></div>
              <main>
		<!-- <section class="hero">
			<h1>About Us</h1>
		</section> -->
		
		<section class="about">
			<h2>Who We Are</h2>
			<p>Online Job Portal System is a platform that connects job seekers with recruiters. Our mission is to simplify the job search process and make it easy for recruiters to find the right candidates.</p>
			<h2>Our Team</h2>
			<ul>
				<li>Chudhary Bharat </li>
                <li>Bahelim Misba </li>
                <li>Brahmbhatt Urja</li>
			</ul>
			<h2>Our Mission</h2>
			<p>Our mission is to provide a reliable, user-friendly platform that simplifies the job search process and connects job seekers with recruiters.</p>
			<h2>Our Vision</h2>
			<p>Our vision is to become the go-to platform for job seekers and recruiters, providing the best possible experience for both.</p>
			<h2>Testimonials</h2>
			<blockquote>
				<p>"I found my dream job thanks to Online Job Portal System. The platform is easy to use and helped me connect with the right recruiters."</p>
				<cite>Dhruv Prajapati - Job Seeker</cite>
			</blockquote>
			<blockquote>
				<p>"We were able to find the perfect candidate for our company thanks to Online Job Portal System. The platform saved us time and made the hiring process easier."</p>
				<cite>Vikram Chaudhary - recruiter</cite>
			</blockquote>
		</section>
		
		<section class="contact">
			<p>Have a question or need help? Contact us at <b>info@onlinejobportal.com</b> or call us at <b> 91+ 63515 88430.</p>
			</section>
	</main>
	

              
              
		        </div>
	      </div>
	  </div>

   

	<!-- <div class="col-div-4-1">
		<div class="box-1">
			<div class="content-box-1">
            < ?php
              include "A_login.php";
            ?>
		  </div>
		</div>
	</div> -->
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