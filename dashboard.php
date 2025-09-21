<?php
session_start();
if(empty($_SESSION['loginok']) || $_SESSION['loginok'] == '')
{
    header("Location: index.php");
    die();
}
include('dbcon.php');
$dbuser=$_SESSION['suser'];
/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Widasa </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.jpg">
  <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
  <script src="assets/jquery/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="assets/css/comments.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">	
  <link rel="stylesheet" href="assets/css/w3.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <!--<script src="assets/js/bootstrap.js"></script>--><!--minified version is enough-->

  
  <link rel="stylesheet" href="assets/mdbootstrap/css/mdb.css"> 
	<link rel="stylesheet" href="assets/mdbootstrap/css/mdb.min.css">
	<link rel="stylesheet" href="assets/mdbootstrap/css/mdb.lite.css">
	<link rel="stylesheet" href="assets/mdbootstrap/css/mdb.lite.min.css">
	<script type="text/javascript" src="assets/mdbootstrap/js/mdb.js"></script>			<!--mdb hear(custom library)-->
	<script type="text/javascript" src="assets/mdbootstrap/js/mdb.min.js"></script>
	<script type="text/javascript" src="assets/mdbootstrap/js/popper.js"></script>
	<script type="text/javascript" src="assets/mdbootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
	
	<script src="assets/js/owl.carousel.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

</head>

<body class="bgcolour">

<!--top bar-->
	<div class="container-fluid marginlogin"  style="background:white;">
		<div class="row">
		
				<div class="col-md-4 text-center">
					<a href="index.php"><img src="assets/images/logo.png" class="login_logo"></a>
				</div>
				<div class="col-md-5  text-center"><h2>
					 <span class="d-none d-sm-inline alreadytxt"></span>
					  <a href="#" style="color:#37a000; letter-spacing: 3px;">Digital  E - Learning Platform</a></h2>	
				</div>
				
				<div class="col-md-1 col-xs-6 text-center"><h2>
					<div class="dropdown1">							
					  <a href="profile.php">
					  <div id="dashboardProfilePic" class="animated delay-1s ZoomIn img_propic text-center">

					  </div>
					  <img  class="animated delay-1s ZoomIn img_propic" style="width:90%" id="output" src="
					  <?php
					  		
							$sql = "SELECT * FROM login WHERE email='$dbuser'";
							$result = $conn->query($sql);
							while($row = $result->fetch_assoc()) 
							{
							$dbimgpath=$row['img_path'];
							echo $dbimgpath;
							}							
					  ?>
					  ">
					  </a>
					
					  <div class="dropdown-content1"  style="z-index:5 !important;">
						<a href="profile.php">My Account</a>
						<a href="#.html"></a>						
						<a href="logout.php">Logout</a>
						<a href="#"></a>
						<a href="#"></a>
					  </div>
					</div>
				</h2>
				</div>
				<div class="col-md-2 col-xs-6 text-center">
					<div class="buttonHi animated bounceInRight" style="vertical-align:middle border:0px; border-radius:0px 50px 0px 50px;">
					<?php
						if ($result->num_rows > 0)
							{
							  $sql = "SELECT * FROM login WHERE email='$dbuser'";
							  $result = $conn->query($sql);
							  // output data of each row
							  while($row = $result->fetch_assoc()) 
							  {
								echo "Hi " . "<br>".$row["first_name"]. "<br>";
							  }
						    }
					?>
					</div>
				</div>
			
		</div>
	</div>
<!--/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/
-->
<?php include "header.php"; ?>

<div class="owl-carousel owl-theme">
  <img alt="Top features" class="item" src="assets/images/e_school_slide2.jpg">
  <img alt="Top features" class="item" src="assets/images/e_school_slide.jpg">
  <img alt="Top features" class="item" src="assets/images/e_school_slide3.jpg">
  <img alt="Top features" class="item" src="assets/images/e_school_slide4.jpg">
  <img alt="Top features"class="item" src="assets/images/e_school_slide5.jpg">
</div>	    
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
	dots:true,
    items:1,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:5000,
    /*autoplayHoverPause:true,*/
	smartSpeed:2000,
});
</script>

			</div>
			
	</div>
</div>

	

		<!--cards-->
	<div  class="cardrow well">
	<div class="row" id="TopFeatures">
		<div class="col-md-12 text-center">
			<h1>Top Features</h1>
		</div>
	</div>
		<div class="container-fluid" style="height:45px;">
			<!--<div class="row rowmy">
				<div class="col-sm-3 col-xs-2"></div>
				<div class="col-sm-6 col-xs-8 mbreaker">					
					<div class="readmgzn animated pulse infinite slower delay-5s"id="animated-img1">
					  <a style="text-decoration: none;" href=",Re<dMagazine/WidasaMagazine.html">
						<img src="assets/images/magazinenew.jpg" alt="Magazine" style="width:100%; height:100%;">
						  
					</div>
					 </a>
				</div>
				<div class="col-sm-3 col-xs-2"></div>
			</div>-->
		</div>
		
		<div class="container-fluid">
			<div class="row rowmy">
				<div class="col-sm-1"></div>
				<div class="col-sm-2 col-xs-6 mbreaker">
					
					<div class="card">
					  <a style="text-decoration: none;" href="e_pasala.html">
						<img src="assets/images/e-pasala.jpg" alt="Avatar" style="width:100%; height:105%;">
						  <!--<div class="cardtext">
								<h1 class="maintex"><b>e-school </b></h1> 
								
						  </div>-->
					</div>
					 </a>
				</div>
				
				<div class="col-sm-2 col-xs-6 mbreaker">
					
					<div class="card">
					  <a style="text-decoration: none;" href="tech_corner.html">
						<img src="assets/images/tech_corner.jpg" alt="Avatar" style="width:100%; height:105%;">						  
					</div>
					 </a>
				</div>
				
				<div class="col-sm-2 col-xs-6 mbreaker">
					
					<div class="card">
					  <a style="text-decoration: none;" href="enjoy.html">
						<img src="assets/images/enjoy.jpg" alt="enjoy" style="width:100%; height:105%;">						
					</div>
					 </a>
				</div>
				
				<div class="col-sm-2 col-xs-6 mbreaker">
					
					<div class="card">
					  <a style="text-decoration: none;" href="how_to.html">
						<img src="assets/images/how_to.jpg" alt="Avatar" style="width:100%; height:105%;">						  
					</div>
					 </a>
				</div>
				<div class="col-sm-2 col-xs-4 mbreaker">
					
					<div class="card">
					  <a style="text-decoration: none;" href="knowledge_hub.html">
						<img src="assets/images/knowledge_hub.jpg" alt="Avatar" style="width:100%; height:105%;">						  
					</div>
					 </a>
				</div><!--/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/
-->
				<div class="col-xs-4"></div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid text-center">
		<div class="well">
			<div class="row">
				<div class="col-md-12" style="margin-bottom:50;">
					<h1>Recommended Articles for you</h1>
				</div>
			</div>
			<div class="owl-carousel owl-theme">
			  <a href="tech_corner/card1.php"><img class="item" src="assets/images/tech_corner/TC1.jpg" style="width:70%"></a>
			  <a href="tech_corner/card2.php"><img class="item" src="assets/images/tech_corner/TC2.jpg" style="width:70%"></a>
			  <a href="tech_corner/card3.php"><img class="item" src="assets/images/tech_corner/TC3.jpg" style="width:70%"></a>
			  <a href="tech_corner/card4.php"><img class="item" src="assets/images/tech_corner/TC4.jpg" style="width:70%"></a>
			  <a href="tech_corner/card5.php"><img class="item" src="assets/images/tech_corner/TC5.jpg" style="width:70%"></a>
			  <a href="enjoy/card1.php"><img class="item" src="assets/images/enjoy/E1.jpg" style="width:70%"></a>
			  <a href="how-to/card1.php"><img class="item" src="assets/images/how_to/HT1.jpg" style="width:70%"></a>
			  <!--<a href="how-to/card2.php"><img class="item" src="assets/images/how_to/HT2.jpg" style="width:70%"></a>-->
			  <a href="knowledge_hub/card1.php"><img class="item" src="assets/images/knowledge_hub/KH1.jpg" style="width:70%"></a>
			</div>	    
			<script>
			var owl2 = $('.owl-carousel');
			owl2.owlCarousel({
				dots:true,
				loop:true,
				margin:10,
				autoplay:true,
				autoplayTimeout:4000,
				/*autoplayHoverPause:true,*/
				smartSpeed:2000,
				dotsSpeed:1,
				dragEndSpeed:2,
				
				responsiveClass:true,
					responsive:{
						0:{
							items:3,
							nav:true
						},
						600:{
							items:4,
							nav:true,
						},
						1000:{
							items:5,
							nav:true,
							loop:true,
						}
					}
			});
			</script>
		</div>
	</div>
	
	<div class="container-fluid text-center">
		<div class="well">
			<div class="row">
				<div class="col-md-12" style="margin-bottom:50;">
					<h1>E-PASALA for school students</h1>
				</div>
			</div><!--By DinilHansara-->
			<div class="owl-carousel owl-theme">
			  <a href="e_pasala/grade6.php"><img class="item" src="assets/images/e_pasala/grade_6.jpg" style="width:70%"></a>
			  <a href="e_pasala/grade7.php"><img class="item" src="assets/images/e_pasala/grade_7.jpg" style="width:70%"></a>
			  <a href="e_pasala/grade8.php"><img class="item" src="assets/images/e_pasala/grade_8.jpg" style="width:70%"></a>
			  <a href="e_pasala/grade9.php"><img class="item" src="assets/images/e_pasala/grade_9.jpg" style="width:70%"></a>
			  <a href="e_pasala/grade10.php"><img class="item" src="assets/images/e_pasala/grade_10.jpg" style="width:70%"></a>
			  <a href="e_pasala/grade11.php"><img class="item" src="assets/images/e_pasala/grade_11.jpg" style="width:70%"></a>
			  <a href="e_pasala/technology.php"><img class="item" src="assets/images/e_pasala/technology.jpg" style="width:70%"></a>
			  <a href="e_pasala/maths.php"><img class="item" src="assets/images/e_pasala/maths.jpg" style="width:70%"></a>
			  <a href="e_pasala/science.php"><img class="item" src="assets/images/e_pasala/science.jpg" style="width:70%"></a>
			  <a href="e_pasala/art.php"><img class="item" src="assets/images/e_pasala/art.jpg" style="width:70%"></a>
			  <a href="e_pasala/commerce.php"><img class="item" src="assets/images/e_pasala/commerce.jpg" style="width:70%"></a>
			</div>	    
			<script>
			var owl3 = $('.owl-carousel');
			owl3.owlCarousel({
				dots:true,
				loop:false,
				margin:10,
				autoplay:true,
				autoplayTimeout:6000,
				autoplayHoverPause:true,
				smartSpeed:3000,
				dotsSpeed:1,
				
				responsiveClass:true,
					responsive:{
						0:{
							items:3,
							loop:false,
							nav:true
						},
						600:{
							items:5,
							loop:false,
							nav:true,
						},
						1000:{
							items:11,
							loop:false,
						}
					}
			});
			</script>
		</div>
	</div>
<!--footer-->

    <footer class="footer">				
		<div class="container">
			<div class="row">
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						About us
					</div>	
					<p class="white-text">
						WIDASA is optimized for learning, testing, and training.
						Examples might be simplified to improve reading and basic understanding.
						Tutorials, references, and examples are constantly reviewed to avoid errors, 
						but we cannot warrant full correctness of all content. While using this site, 
						you agree to have read and accepted our terms of use, cookie and privacy policy.
					</p>
				</div>
				<!--
				<div class="col-md-3 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						Latest themes
					</div>	
					<div class="footer-links">
						<a href="#">
							Appointment
						</a>
						<a href="#">
							Health center
						</a>
						<a href="#">
							Quality
						</a>
						<a href="#">
							Wallstreet
						</a>
					</div>
				</div>-->
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						Quick Links
					</div>	
					<div class="footer-links">
						<a href="e_pasala.html">
							E Pasala
						</a>
						<a href="tech_corner.html">
							Tech Corner
						</a>
						<a href="enjoy.html">
							Enjoy
						</a>
						<a href="how_to.html">
							How-to
						</a>
						<a href="knowledge_hub.html">
							Knowledge Hub
						</a>
					</div>
				</div>
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						More
					</div>	
					<div class="footer-links">
						<a href="AboutUs/support.html">
							Help
						</a>						
						<a href="AboutUs/contact.php">
							Contact Us
						</a>						
						<a href="logout.php">
							Logout
						</a>
						<!--
						<a href="#">
							Support forum
						</a>
						-->
					</div>
				</div>
				<div class="footer-social-links m-t-30" align="center">
						<li>
							<a href="https://www.facebook.com/dinil.hansara.5">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="https://twitter.com/DinilHansara">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="https://lk.linkedin.com/in/dinil-hansara-2455b01b0">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
							
							<a href="#">
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</a>
						</li>
					</div>
			</div>
		</div> 	
	</footer>
	<div class="footer-bottom" style="margin-bottom:0px;">
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
	</div>

</body>
</html>
