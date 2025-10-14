<?php
session_start();
include('../dbcon.php');
$grade="Grade 8";
$subject=array("Maths","Science","Buddhism","Sinhala","English","History","ICT","Civics","Geography","Tamil","Health","PTS","Art")
?>
<!<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Widasa </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/aboutPage.css">
	<link rel="stylesheet" href="../assets/css/style.css">	

	
  </head>
  <body>
	<!--top bar-->
	<div class="container marginlogin">
		<div class="row"  style="margin:25px;">
		
				<div class="col-md-6 text-center">
					<a href="../index.php"><img src="../assets/images/logo.png" class="login_logo"></a>
				</div>
				<div class="col-md-6 text-center">
				<h2>
					 <span class="d-none d-sm-inline alreadytxt"></span>
					  <a href="" style="color:#37a000; letter-spacing: 3px;">Digital  E - Learning Platform</a></h2>
				</h2>	
				</div>		
		</div>
	</div>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="../e_pasala.html#JUNIOR"><span class="img" style="background-image: url(../assets/images/e_pasala/grade_8.jpg);"></span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
			<div class="row">
			<div id="subjects1" class="col-md-12">
				<ul>
					<li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
					<li><a href="#Maths"><?php echo $subject[0] ?></a></li>
					<li><a href="#Science"><?php echo $subject[1] ?></a></li>
					<li><a href="#Buddhism"><?php echo $subject[2] ?></a></li>
					<li><a href="#Sinhala"><?php echo $subject[3] ?></a></li>
					<li><a href="#English"><?php echo $subject[4] ?></a></li>
					<li><a href="#History"><?php echo $subject[5] ?></a></li>
				</ul>
			</div>
			<div id="subjects2" class="col-md-12" style="display: none">
				<ul>	
					<li><a href="#ICT"><?php echo $subject[6] ?></a></li>				
					<li><a href="#Civics"><?php echo $subject[7] ?></a></li>
					<li><a href="#Geography"><?php echo $subject[8] ?></a></li>
					<li><a href="#Tamil"><?php echo $subject[9] ?></a></li>
					<li><a href="#Health"><?php echo $subject[10] ?></a></li>
					<li><a href="#PTS"><?php echo $subject[11] ?></a></li>
					<li><a href="#Art"><?php echo $subject[12] ?></a></li>
				</ul>
			</div>
			</div>
			<i id="showMoreSubjects" class="fa fa-angle-double-down"></i>
			<i id="showLessSubjects" class="fa fa-angle-double-up"></i>
			</nav>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
					<!------------------------------nav bar----------------------------------------->
			<nav class="navbar navbar-expand navbar-dark bg-dark" style="background:#4CAF50 !important;">

				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarsExample02">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active" style="background:lightblue">
						<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active" style="">
						<a class="nav-link" href="../e_pasala.html">E Pasala <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="../tech_corner.html">Tech Corner <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="../how_to.html">How To <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="../enjoy.html">Enjoy <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="../knowledge_hub.html">Knowledge Hub <span class="sr-only">(current)</span></a>
					  </li>
					</ul>
				  </div>
			</nav>
			<!----------------------------------------------------------------[0]MATHS SECTION------------------------------------------------------------------------->
			<div id="<?php echo $subject[0] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[0] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[0] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/grade8/rcg_maths_grd_8_2019_i&ii_en.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 Richmond College 1st term paper english medium</a></li>
						  <!--<li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2016 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2016 AL ICT MCQ Sinhala</a></li>-->
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <!--<div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[0] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>-->
				</section>
			</div>
			<!-----------------------------------------------------------------------END OF MATHS SECTION---------------------------------------------------------------------------->
			
			<!----------------------------------------------------------------[1]SCIENCE SECTION------------------------------------------------------------------------->
			<div id="<?php echo $subject[1] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[1] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[1] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/grade8/rcg_science_grd_8_2019_i&ii_si.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 Richmond College 1st term paper sinhala medium</a></li>
						  <li><a style="color:black;" href="../assets/files/grade8/rcg_science_grd_8_2019_i&ii_en.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 Richmond College 1st term paper english medium</a></li>
						  <!--<li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT ET Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ET Structured Essay Sinhala</a></li>-->
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

				  <!--<div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[1] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ET MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ET Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ET MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ET Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>-->
				</section>
			</div>
			<!-----------------------------------------------------------------------END OF SCIENCE SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[2]BUDDHISM SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[2] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[2] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[2] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[2] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF BUDDHISM SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[3]Sinhala SECTION------------------------------------------------------------------------->
			<div id="<?php echo $subject[3] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[3] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[3] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/grade8/rcg_sinhala_grd_8_2019_i&ii.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 Richmond College 1st term paper</a></li>
						  <!--<li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>-->
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <!--<div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[3] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>-->
				</section>
			</div>
			<!-----------------------------------------------------------------------END OF Sinhala SECTION---------------------------------------------------------------------------->
			
			
			<!-----------------------------------------------------------------------[4]English SECTION------------------------------------------------------------------------->
			<div id="<?php echo $subject[4] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[4] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[4] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/grade8/rcg_english_grd_8_2019.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 Richmond College 1st term paper</a></li>
						  <!--<li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>-->
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <!--<div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[4] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>-->
				</section>
			</div>
			<!-----------------------------------------------------------------------END OF English SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[5]History SECTION------------------------------------------------------------------------->
			<div id="<?php echo $subject[5] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[5] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[5] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/grade8/rcg_history_grd_8_2019_i&ii_si.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 Richmond College 1st term paper I,II</a></li>
						  <!--<li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>-->
						</ul>
					  </h5>
					  </div>
					</div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

						<hr>	
					</div>
				  <!--<div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[5] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>-->
				</section>
			</div>
			<!-----------------------------------------------------------------------END OF History SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[6]ICT SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[6] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[6] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[6] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[6] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF ICT SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[7]Civics SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[7] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[7] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[7] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[5] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF Civics SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[8]Geography SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[8] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[8] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[8] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[8] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF Geography SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[9]Tamil SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[9] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[9] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[9] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[9] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF Tamil SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[10]Health SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[10] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[10] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[10] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[10] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF Health SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[11]PTS SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[11] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[11] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[11] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[11] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF PTS SECTION---------------------------------------------------------------------------->
			
			<!-----------------------------------------------------------------------[12]ART SECTION------------------------------------------------------------------------->
			<!--<div id="<?php echo $subject[12] ?>">
				<section class="ftco-section ftco-bread">
					<div class="container">
						<div class="row no-gutters slider-text justify-content-center align-items-center">
				  <div class="col-md-8 ftco-animate">
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span><a href="../e_pasala.html">E PASALA</a></span> <span><?php echo $grade; ?></span></p>
					<h1 class="bread"><?php echo $subject[12] ?></h1>
				  </div>
				</div>
					</div>
				</section>
				<section class="ftco-section contact-section">
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[12] ?> past papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
						<hr>	
					</div>
				  <div class="container">
					  <div class="mb-4">
						<h2 class="h3 font-weight-bold"><?php echo $subject[12] ?> model papers</h2>
					  </div>
					<div class="row block-9">
					  <div class="col-md-12 d-flex">
					  <h5>
						<ul class="fa-ul">
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2019 AL ICT Structured Essay & Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2019 AL ICT Structured Essay & Essay Sinhala </a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT MCQ Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT MCQ Sinhala</a></li>
						  <li><a style="color:black;" href="../assets/files/technology/2018 AL ICT Structured Essay Sinhala widasa.com.pdf" target="_blank"><span class="fa-li"><i class="fas fa-file" style="color:#45b6fe;"></i></span>2018 AL ICT Structured Essay Sinhala</a></li>
						</ul>
					  </h5>
					  </div>
					</div>
					<hr>	
				  </div>
				</section>
			</div>-->
			<!-----------------------------------------------------------------------END OF ART SECTION---------------------------------------------------------------------------->
			
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">         
	              <ul class="list-unstyled photo">
				    <li><a href="grade6.php" class="img" style="background-image: url(../assets/images/e_pasala/grade_6.jpg);"></a></li>
	                <li><a href="grade7.php" class="img" style="background-image: url(../assets/images/e_pasala/grade_7.jpg);"></a></li>
	                <li><a href="grade8.php" class="img" style="background-image: url(../assets/images/e_pasala/grade_8.jpg);"></a></li>
	                <li><a href="grade9.php" class="img" style="background-image: url(../assets/images/e_pasala/grade_9.jpg);"></a></li>
	                <li><a href="grade10.php" class="img" style="background-image: url(../assets/images/e_pasala/grade_10.jpg);"></a></li>
					<li><a href="grade11.php" class="img" style="background-image: url(../assets/images/e_pasala/grade_11.jpg);"></a></li>
	                <!--<li><a href="#" class="img" style="background-image: url(images/image_5.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/image_6.jpg);"></a></li>-->
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	             <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Grades</h2>
	              <ul class="list-unstyled categories">
	              	<li><a href="../e_pasala.html#AL">Advanced Level</a></li>
	              	<li><a href="../e_pasala.html#OL">Ordinary Level</a></li>
	                <li><a href="../e_pasala.html#JUNIOR">Junior section</a></li>
	                <li><a href="../e_pasala.html#PRIMARY">Primary Section</a></li>             
	              </ul>
	            </div>
	          </div>
			  <div class="col-md">
	             <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Quick Links</h2>
	              <ul class="list-unstyled categories">
	              	<li><a href="../e_pasala.html">E Pasala</a></li>
	              	<li><a href="../tech_corner.html">Tech Corner</a></li>
					<li><a href="../enjoy.html">Enjoy</a></li>
	                <li><a href="../how_to.html">How-To</a></li>
	                <li><a href="../knowledge_hub.html">Knowledge Hub</a></li>             
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><a href="tel:0715565890" target="_blank"><span class="fas fa-phone"></span>&nbsp;<span class="text">0715565890</span></a></li>
		                <li><a href="mailto:widasa@gmail.com"><span class="fas fa-envelope"></span>&nbsp;<span class="text">widasa@gmail.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12 text-center">

	 <p>
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
	 </p>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <script src="../assets/jquery/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>


  <script src="../assets/js/AboutUs/jquery-migrate-3.0.1.min.js"></script>
  <script src="../assets/js/AboutUs/popper.min.js"></script>
  <script src="../assets/js/AboutUs/jquery.easing.1.3.js"></script>
  <script src="../assets/js/AboutUs/jquery.waypoints.min.js"></script>
  <script src="../assets/js/AboutUs/jquery.stellar.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/AboutUs/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/AboutUs/aos.js"></script>
  <script src="../assets/js/AboutUs/jquery.animateNumber.min.js"></script>
  <script src="../assets/js/AboutUs/bootstrap-datepicker.js"></script>
  <script src="../assets/js/AboutUs/jquery.timepicker.min.js"></script>
  <script src="../assets/js/AboutUs/scrollax.min.js"></script>
  <script src="../assets/js/AboutUs/google-map.js"></script>
  <script src="../assets/js/AboutUs/main.js"></script>
  
  <script>
$(document).ready(function(){
  $("#showMoreSubjects").click(function(){
	$("#subjects1").hide();
	$("#subjects2").fadeIn();
	$("#showMoreSubjects").hide();
	$("#showLessSubjects").fadeIn();
  });
$("#showLessSubjects").click(function(){
	$("#subjects2").hide();
	$("#subjects1").fadeIn();
	$("#showLessSubjects").hide();
	$("#showMoreSubjects").fadeIn();
	});
 });
</script>
  
  </body>
  </html>