<?php
session_start();
include('../dbcon.php');
if($_SESSION['loginok']==1)/*otherwise it will occur an error on non loged in users*/
{
$dbuser=$_SESSION['suser'];   /*trying to adinna userwa*/
}
/*--------------------------------Use for signup redirection-------------------------------------------------------------------*/

$_SESSION['RequestCard']="enjoy/".basename($_SERVER["SCRIPT_FILENAME"]);			/*remember to change this on other cards*/

/*-----------------------------------------------------------------------------------------------------------------------------*/

$_SESSION['card']=basename($_SERVER["SCRIPT_FILENAME"] ,".php");                          /*used in comment-list.php to filter comments according to the card number*/
$section=  pathinfo($_SESSION['RequestCard'],PATHINFO_DIRNAME);
$_SESSION['section']=$section;

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Widasa </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/icon.jpg">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <script src="../assets/jquery/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet" href="../assets/css/internalpages.css">
  <link rel="stylesheet" href="../assets/css/reaction_system.css">  

  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
  <script src="../assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="../assets/mdbootstrap/css/bootstra.css">         <!--bootstrap4 hear-->
  <link rel="stylesheet" href="../assets/mdbootstrap/css/bootstra.min.css">
  
   <script src="../assets/js/internalpages.js"></script>
  
  <link rel="stylesheet" href="../assets/mdbootstrap/css/mdb.css"> 
	<link rel="stylesheet" href="../assets/mdbootstrap/css/mdb.min.css">
	<link rel="stylesheet" href="../assets/mdbootstrap/css/mdb.lite.css">
	<link rel="stylesheet" href="../assets/mdbootstrap/css/mdb.lite.min.css">
	<script type="text/javascript" src="../assets/mdbootstrap/js/mdb.js"></script>			<!--mdb hear(custom library)-->
	<script type="text/javascript" src="../assets/mdbootstrap/js/mdb.min.js"></script>
	<script type="text/javascript" src="../assets/mdbootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../assets/mdbootstrap/js/popper.min.js"></script>
	<script src="../assets/js/script.js"></script>
</head>
<body>

	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

<button onclick="topFunction()" id="myBtn" data-toggle="tooltip" data-placement="top" title="උඩට යන්න ">Top</button>
<!--top bar-->
	<div class="container marginlogin">
		<div class="row">
		
				<div class="col-md-6 text-center">
					<a href="../dashboard.php"><img src="../assets/images/logo.png" class="login_logo"></a>
				</div>
				<div class="col-md-6 text-center"><h2>
					 <span class="d-none d-sm-inline alreadytxt"></span>
					  <div style="color:#37a000; letter-spacing: 3px;">Digital  E - Learning Platform</a></h2>
				</div>
			
		</div>
	</div>
<header>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WIDASA</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="../index.php">HOME</a></li>
          <li><a href="../AboutUs/about.html">ABOUT US</a></li>
          <li><a href="../AboutUs/support.html">HELP</a></li>
		  <li><a href="../AboutUs/contact.php">CONTACT US</a></li>
          <li class="dropdown"><a href="#TopFeatures" class="dropdown-toggle" data-toggle="dropdown">Features<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../e_pasala.html"><h5>E Pasala</h5></a></li>
              <li><a href="../tech_corner.html"><h5>Tech Corner</h5></a></li>
			  <li><a href="../enjoy.html"><h5>Enjoy</h5></a></li>
			  <li><a href="../how_to.html"><h5>How-To</h5></a></li>
			  <li><a href="../knowledge_hub.html"><h5>Knowledge Hub</h5></a></li>
            </ul>
		  </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
</header>
<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!------------>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-xs-3 LeftnRightcolums text-center">
			<img id="logotechinner" src="../assets/images/tech_corner/logo_tech_corner.png">
			<hr><h3>Quick links</h3>
			<a href="../e_pasala.html" class="btnLink"><button type="button" class="block">E-pasala</button></a><br>
			<a href="../tech_corner.html" class="btnLink"><button type="button" class="block active">Tech Corner</button></a><br>
			<a href="../enjoy.html" class="btnLink"><button type="button" class="block">Enjoy</button></a><br>
			<a href="../how_to.html" class="btnLink"><button type="button" class="block">How-To</button></a>
			<hr>
		</div>
		
			
			<div class="col-md-8 col-xs-7 d-flex justify-content-center">
				<div class="center_topic text-center">
					<h1>මෙතෙක් වැඩිපුරම නරඹන ලද යූ ටියුබ් වීඩියෝ </h1>
				</div>
				<div>
				<img class="insideImg1" alt="img" src="../assets/images/enjoy/YouTube1.jpg" width="400" height="auto">
				</div>
				<div class="text-center parahTopic">
					<h2><u>Youtube පිළිබඳ පසුබිම</u></h2>
				</div>
										<!--1-->
				<div class="parah1">
					<p>යූ ටියුබ් යනු ඇමරිකාවේ කැලිෆෝනියා ප්‍රාන්තයේ මූලස්ථානය පිහිටි මාර්ගගත වීඩියෝ බෙදාගැනීමේ වේදිකාවකි. හිටපු PayPal සේවකයින් තිදෙනෙකු වන චැඩ් හර්ලි, ස්ටීව් චෙන් සහ ජාවෙඩ් කරීම් 2005 පෙබරවාරි මාසයේදී
					මෙම සේවාව නිර්මාණය කළහ. ගූගල් විසින් 2006 නොවැම්බර් මාසයේදී මෙම වෙබ් අඩවිය ඇමරිකානු ඩොලර් බිලියන 1.65 කට මිලදී ගන්නා ලදී; යූ ටියුබ් දැන් ගූගල් හි අනුබද්ධිත ආයතනයක් 
					ලෙස ක්‍රියාත්මක වේ.මේ වන විට මෙය ලෝකයේ ප්‍රධානතම වීඩියෝ බෙදාහැරීමේ සේවාවකි. 
					<br><br>
					</p>
				</div>
				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h2><u>මෙතෙක් වැඩිපුරම නරඹන ලද යූ ටියුබ් වීඩියෝ</u></h2><br>
						<h3>10. Justin Bieber — Sorry (3.37 billion views)</h3>
							<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

				</div>
				<div class="video-responsive">
					<iframe width="900" height="506" src="https://www.youtube.com/embed/fRh_vgS2dFE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>				
				</div><br>
				<div class="parah1">
				යූ ටියුබ් හි views බිලියනයක වීඩියෝවක් ලබාගත් දෙවන සංගීත කලාකරුවා Justin Bieber වේ.ඔහුගේ "Sorry" views බිලියනයක දර්ශනයක් කරා ළඟා වූ 22 වන youtube වීඩියෝව වේ . මේ වන විට ඔහුගේ 
				ජනප්‍රියම යූ ටියුබ් වීඩියෝව බවට "sorry"පත් වී ඇත.
				එය බිලියන 2 සීමාව කරා ළඟා වූ වේගවත්ම video එකක් බවට පත්විය. එය බොහෝ කරදරයකින් තොරව පහසුවෙන් views බිලියන 3.6 ක් දක්වා යාත්‍රා කළේය.
				</div>
				<hr>				
										<!--3-->
						<div class="text-center parahTopic">
								<h3>9. Miroshka TV — Learning Colors Multi-Colored Eggs on the Farm (3.65 billion views)</h3>
						</div>
						
						<div class="video-responsive">
							<iframe width="626" height="351" src="https://www.youtube.com/embed/_nAu9D-8srA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						
						</div><br>
						<div class="parah1">
						YouTube හි වැඩිපුරම නරඹන ලද වීඩියෝ අතර ළමුන් සඳහා අධ්‍යාපනික විනෝදාස්වාද video ඇත.මෙය Miroshka TV YouTube නාලිකාව විසින් ළමයින් සඳහා සකස් කල අධ්‍යාපනික 
						වීඩියෝවක් වන අතර එය පළමු වරට upload කළ දින සිට මේ දක්වා
						බිලියන 3.6 කට අධික දර්ශන ප්‍රමාණයක් රැස් කර ගෙන ඇත.ඔබ මේ ගැන සිතන්නේ නම් එය පුදුමයක් නොවේ 						
						<br><br>
						</div>
						<hr>
												<!--4-->
						<div class="text-center parahTopic">
								<h3>8. Psy — Gangnam Style (3.88 billion views)</h3>
						</div>
						
						<div class="video-responsive">
							<iframe width="900" height="506" src="https://www.youtube.com/embed/9bZkp7q19f0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div><br>
						
						<div class="parah1">
						YouTube හි වීඩියෝ ඉතිහාසයේ පෙරළියකි, Psy ගේ Gangnam Style බොහෝ ජනප්‍රියත්වයට පත්වූ අතර එය නිකුත් වී මාස හයකට අඩු කාලයකදී ( 2012 ජූලි සිට දෙසැම්බර් දක්වා )  බිලියනයකට වඩා වාරයක් නරඹන ලද පළමු යූ ටියුබ් වීඩියෝව බවට පත්විය. 
						එය 2014 මැයි මාසයේදී views බිලියන 2 ක් කරා ළඟා වූ පළමු වීඩියෝව බවට 
						පත්වූ අතර 2015 වන තෙක් එම views සංඛ්යාව ලබාගැනීමට  සමීප තරඟකරුවෙකු සිටියේ නැත.						
						</div>
						<hr>
											<!--5-->
				<div class="text-center parahTopic">
					<h3>7. Mark Ronson — Uptown Funk featuring Bruno Mars (4.02 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/OPf0YbXqDm0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div><br>
				
				<div class="parah1">
					මෙම ලැයිස්තුවේ ඇති හොඳම වීඩියෝ තුනට වඩා Uptown Funk පැරණි වුවත්, තවමත්  views රාශියක් ලබමින්නව ප්‍රේක්ෂකයින් එක්රැස් කරයි. Mark Ronson ගේ  Uptown Funk වීඩියෝව 2014 නොවැම්බරයේදී යූ ටියුබ් වෙත
					පිවිසි අතර වේගයෙන් ජනප්‍රියම හා වඩාත්ම කැමති වීඩියෝවක් බවට පත්විය.
				</div>
				<hr>
				
											<!--6-->
				<div class="text-center parahTopic">
					<h3>6. LooLoo Kids — Johny Johny Yes Papa (4.32 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/F4tHL8reNCs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><br>
				
				<div class="parah1">
					වැඩිපුරම නරඹන ලද YouTube වීඩියෝ 10 අතරට පැමිණි ළමයින් සඳහා වන තවත් වීඩියෝවක් වන්නේ Johny Johny Yes Papa ය. එය දඟකාර  ළදරුවෙකු සහ ඔහුගේ තාත්තා පිළිබඳ කෙටි සජීවිකරණ සංගීත වීඩියෝවකි.
					ළදරුවෙකු සීනි ටිකක් අනුභව කිරීමට උත්සාහ කිරීම පිළිබඳ සරල ගීතයකි. එය බිලියන 4 කට වඩා වැඩි වාර ගණනක් නරඹා / සවන් දී ඇති බව සලකන විට එය හොඳ දෙයකි.
				</div>
				<hr>
				
				<!--read more / check the loginok-->
				<button class="readMore">Read more...</button>
				<div id="hiddenArticles" hidden>
											<!--7-->
				<div class="text-center parahTopic">	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

					<h3>5. Masha and the Bear — Recipe for Disaster (4.37 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/KYniUCGPGLs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><br>
				
				<div class="parah1">
					Recipe for Disaster රුසියානු CGI-සජීවිකරණ රූපවාහිනී වැඩසටහනේ ළමුන් සඳහා වන Masha and the Bear කතා මාලාවේ episodes වලින් එකකි. මෙම ප්‍රසංගය තම මව් රටෙන් පිටත පුළුල් ලෙස ජනප්‍රිය වී
					ඇති අතර බොහෝ episode වලට YouTube හි විශාල views සංඛ්‍යාවක් ඇත. Recipe for Disaster upload කළ නාලිකාව වන "Get Movies", මෙම එක් විශේෂිත කථාංගයකින් පමණක් ප්‍රේක්ෂකයින් විශාල ප්‍රමාණයක් උපයා ඇත.					
				</div>
				<hr>
				
											<!--8-->
				<div class="text-center parahTopic">
					<h3>4. Wiz Khalifa — See You Again ft. Charlie Puth (4.84 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/RgKAFK5djSk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><br>
				
				<div class="parah1">
					Wiz Khalifa සහ  Charlie Puth ගේ See You Again ,Furious 7 චිත්‍රපටය   ප්‍රවර්ධනයට සහාය වීම සඳහා සම්බන්ධ කර තිබේ. එය 2015 april මාසයේ ආරම්භයේ සිට බිලියන 4 කට 
					අධික views ප්‍රමාණයක් ලබා ඇත.<br>
					See You Again ,බිලියන 2 ක views පසු කළ දෙවන වීඩියෝව බවට පත්වූ අතර එය බිලියන 4 කට වඩා වාර ගණනක් නරඹන ලද වීඩියෝ හතෙන් එකකි.
				</div>
				<hr>
				
											<!--9-->
				<div class="text-center parahTopic">
					<h3>3. Ed Sheeran — Shape of You (5.08 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/JGwWNGJdvx8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><br>
				
				<div class="parah1">
					Shape Of You ,views බිලියනයකට ළඟා වූ තුන්වන වේගවත්ම වීඩියෝව ලෙස එය වාර්තා තබා ඇති අතර
					බිලියන 2 සහ බිලියන 3 ක views ලබා ගත් දෙවන වේගවත්ම වීඩියෝව ද වේ.
				</div>
				<hr>
				
											<!--10-->
				<div class="text-center parahTopic">
					<h3>2. Luis Fonsi — Despacito ft. Daddy Yankee (7.08 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/kJQP7kiw5Fk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><br>
				
				<div class="parah1">
					ලුයිස් ෆොන්සි සහ ඩැඩි යැන්කිගේ චරිත නිරූපණය කරමින්  Despacito 2017 ජනවාරි මාසයේදී යූ ටියුබ් වෙත පිවිසි අතර දින 97 ක් තුළ බිලියනයකට අධික views ප්‍රමාණයක් රැස් කළේය. 
					වීඩියෝව බිලියන 2 ක් ලබා ගත් වේගවත්ම වීඩියෝව බවට පත්වූ අතර පළමු වරට බිලියන 4, බිලියන 5, බිලියන 6 සහ දැන් බිලියන 7 ක් ඉක්මවා ගිය වීඩියෝව බවට පත්විය.
				</div>
				<hr>
				
											<!--11-->
				<div class="text-center parahTopic">
					<h3>1. Pinkfong — Baby Shark Dance (7.31 billion views)</h3>
				</div>
				<div class="video-responsive">
					<iframe width="626" height="351" src="https://www.youtube.com/embed/XqZsoesa55w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><br>
				
				<div class="parah1">
					කොරියානු පොප් නිෂ්පාදක Pinkfong විසින් නිෂ්පාදනය කරන ලද Baby Shark Dance සංකීර්ණ ගීතයක් නොවේ.  කෙසේ වෙතත්, මෙම ගීතය මෙම ලැයිස්තුවේ අංක එකේ වීඩියෝව බවට පත්වූ අතර
					යූ ටියුබ් හරහා සොයාගත හැකි අසංඛ්‍යාත වෙනස්කම් ඇති කළේය.<br>
					
					Baby Shark Dance සාර්ථකත්වය ඇත්තෙන්ම පුදුමයට කරුණක් නොවේ - Baby Shark ගෙන ඒම සහ එය එකවර 12 වතාවක් වාදනය කිරීම ඔබේ ළදරුවා සන්සුන් කිරීමට ඇති එකම ක්‍රමය නම්, 
					අන්තර්ජාලයට පිවිසෙන සෑම දෙමව්පියෙකුම යන්නේ එය හරියටම කිරීමට. වැඩිපුරම නරඹන ලද වීඩියෝව ලෙස බේබි ෂාක් දිගටම පවතිනු ඇතැයි අපේක්ෂා කල හැක.
				</div>
				<hr>
				<div class="schoolnav">
							<div class="col-md-5"></div>
								<div class="col-md-2">
									<a href="../dashboard.php">
										<img src="../assets/images/home-icon.png" class="tech_home_icon"  style="margin-bottom:20px;">
									</a>
								</div>
						<div class="col-md-5"></div>
						</div>
						
						<div class="comments"></div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

				</div>	
					
			</div>
			
				

			
			<!--right colum-->
				
				
				<div class="col-md-2 col-xs-2 LeftnRightcolums text-center">
						<!--link 1-->
					<div class="card">
						<a style="text-decoration: none;" href="../tech_corner/card1.php">
						
							<img src="../assets/images/tech_corner/TC1.jpg" alt="Avatar" id="rightimg">
						
					    </a>  
					</div>
							<!--link 2-->
					<div class="card">
						<a style="text-decoration: none;" href="../tech_corner/card2.php">
						
							<img src="../assets/images/tech_corner/TC2.jpg" alt="Avatar" id="rightimg">
						
					    </a>  
					</div>
					 
				
				
							<!--link 3--dinil-->
					
							<div class="card">
								<a style="text-decoration: none;" href="../tech_corner/card3.php">
								
									<img src="../assets/images/tech_corner/TC3.jpg" alt="Avatar" id="rightimg">
								
								</a>  
							</div>
							
							<!--link 4-->
					
							<div class="card">
								<a style="text-decoration: none;" href="../tech_corner/card4.php">
								
									<img src="../assets/images/tech_corner/TC4.jpg" alt="Avatar" id="rightimg">
								
								</a>  
							</div>

				</div>
	</div>
</div>
<!----------------------------------------login/signup for new members and exiting non logged users---------------------------------------------->
<div class="col-md-4 col-xs-1"></div>
<div class="col-md-4 col-xs-7">
	<center>
		<div class="login-page animated zoomIn faster" hidden>
		  <div class="form">
		  				<h4>Please login/signup to continue</h4>
		  <div class="loginCloseBtn"><h3>x</h3></div>
			
			<form class="login-form" method="POST" action="../login.php" target="_self">
			  <input type="text" placeholder="email" name="email" id="email" required>
			  <input type="password" placeholder="password" name="password" id="password" required>		<!--------------login------------->
			  <input id="remember-me" name="remember-me" type="checkbox" checked>
					<span><h4 style="color:black">Remember me</h4></span> 			
			  <br>
			  
			  
				<!----Change the following value for each card. Otherwise redirection won't work------>
					<!------------------------------------------------------------------->
					<!------------------------------------------------------------------->
					<!------------------------------------------------------------------->
					<input type='hidden' name='RequestCard' value='<?php "enjoy/".basename($_SERVER["SCRIPT_FILENAME"]);?>'>
					<!------------------------------------------------------------------->
					<!------------------------------------------------------------------->
					<!------------------------------------------------------------------->				
			  <button type="submit" class="submitbtn" name="submit">login</button>			  			    
			</form>
				  <p class="message">Not registered? 
				  <button type="submit" class="submitbtn" name="submit">
					<a href="../signup/signup.html">Create an account</a>				  		  				  
				  </p>			  
		  </div>
		</div>
	</center>	
</div>
<div class="col-md-4 col-xs-4"></div>

<!------------------------------------------------------------------reaction section------------------------------------------------------------------->
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
<div class="comment-form-container" hidden>
            <form id="frm-comment">
                <div class="input-row">
				  <input type="hidden" name="section" id="section" placeholder="Name" value="enjoy" /> <!--custom by dinil-->		
				  <input type="hidden" name="card" id="card" placeholder="Name" value="1" /> <!--custom by dinil-->
                    <input type="hidden" name="comment_id" id="commentId" placeholder="Name" /> 			
                </div>
				<div class="media mt-3 shadow-textarea">
				<div class="col-md-1 col-xs-3">
						<?php
						if($_SESSION['loginok']==1)/*only shows for logged or signed users(picture and full name)*/
						{
							$sql = "SELECT * FROM login WHERE email='$dbuser'";
							$result = $conn->query($sql);
							while($row = $result->fetch_assoc()) 				//display users's name from session 
							{
							echo "<img class='d-flex rounded-circle mr-3' style='width:64px;' src='../". $row["img_path"]."'>" ;	
							//echo "<h5 class='mt-0 font-weight-bold blue-text'>" . $row["first_name"]." ". $row["last_name"];
												
						?>
				</div>
                <div class="col-md-11 col-xs-9">	
					<?php
						echo "<b><h4 class='mt-0 font-weight-bold blue-text'>" . $row["first_name"]." ". $row["last_name"]."</b>" ."</h4>";
							}
						}
					?>
					<p id="reply" hidden>reply</p>		<!--shows when the user click reply button-->
                    <textarea maxlength="300" rows="2" style="margin-bottom:10;" class="input-field" type="text" name="comment"
                              id="comment" placeholder="Write a public Comment"> 
					</textarea>
					
                
                <div>
				<div id="comment-message">Comments Added Successfully!</div>
                    <input type="button" class="commentbtn" id="submitButton" value="Comment" />											   
                </div>
				</div>
				</div>
            </form>	
			<script>
////////////////////////Reaction(comment&likes)section for internal pages////////////////////////////////////////////////////
            var totalLikes = 0;
            var totalUnlikes = 0;
           
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#comment").focus();
				 $("#reply").show();		/*shows the reply text under the user name*/
					
            }
			
            $("#submitButton").click(function () {
                $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "../comments&likes/comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                            $("#comment-message").css('display', 'inline-block');
							$("#section").val("");
							$("#card").val("");
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                            listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });

            $(document).ready(function () {
                listComment();
            });

            function listComment() {
                $.post("../comments&likes/comment-list.php",
                        function (data) {
                            var data = JSON.parse(data);

                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                var obj = getLikesUnlikes(commentId);
                                
                                if (parent == "0")
                                {
                                	if(data[i]['like_unlike'] >= 1) 
                                    {
                                        like_icon = "<img src='../comments&likes/like.png'  id='unlike_" + data[i]['comment_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comment_id'] + ",-1)' />";
                                        like_icon += "<img style='display:none;' src='../comments&likes/unlike.png' id='like_" + data[i]['comment_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comment_id'] + ",1)' />";
                                    }
                                    else
                                    {
                                    	   like_icon = "<img style='display:none;' src='../comments&likes/like.png'  id='unlike_" + data[i]['comment_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comment_id'] + ",-1)' />";
                                        like_icon += "<img src='../comments&likes/unlike.png' id='like_" + data[i]['comment_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comment_id'] + ",1)' />";
                                        
                                    }
                                    
                                    comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                                <span class='commet-row-label'>from</span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>at</span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a>\
                                            </div>\
                                            <div class='post-action'>\ " + like_icon + "&nbsp;\
                                                <span id='likes_" + commentId + "'> " + totalLikes + " likes </span>\
                                            </div>\
                                        </div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {

                for (var i = 0; (i < data.length); i++)
                {

                    var obj = getLikesUnlikes(data[i].comment_id);
                    if (commentId == data[i].parent_comment_id)
                    {
                        if(data[i]['like_unlike'] >= 1) 
                        {
                            like_icon = "<img src='../comments&likes/like.png'  id='unlike_" + data[i]['comment_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comment_id'] + ",-1)' />";
                            like_icon += "<img style='display:none;' src='../comments&likes/unlike.png' id='like_" + data[i]['comment_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comment_id'] + ",1)' />";
                            
                        }
                        else
                        {
                         like_icon = "<img style='display:none;' src='../comments&likes/like.png'  id='unlike_" + data[i]['comment_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comment_id'] + ",-1)' />";
                         like_icon += "<img src='../comments&likes/unlike.png' id='like_" + data[i]['comment_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comment_id'] + ",1)' />";
                            
                        }
                        var comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                                <span class='commet-row-label'>from</span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>at</span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a>\
                                            </div>\
                                            <div class='post-action'> " + like_icon + "&nbsp;\
                                                <span id='likes_" + data[i]['comment_id'] + "'> " + totalLikes + " likes </span>\
                                            </div>\
                                        </div>";

                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }

            function getLikesUnlikes(commentId)
            {

                $.ajax({
                    type: 'POST',
                    async: false,
                    url: '../comments&likes/get-like-unlike.php',
                    data: {comment_id: commentId},
                    success: function (data)
                    {
                        totalLikes = data;
                    }

                });

            }
            
                         
           function likeOrDislike(comment_id,like_unlike)
            {
              
                $.ajax({
                    url: '../comments&likes/comment-like-unlike.php',
                    async: false,
                    type: 'post',
                    data: {comment_id:comment_id,like_unlike:like_unlike},
                    dataType: 'json',
                    success: function (data) {
                        
                        $("#likes_"+comment_id).text(data + " likes");
                        
                        if (like_unlike == 1) { 
                            $("#like_" + comment_id).css("display", "none");
                            $("#unlike_" + comment_id).show();
                        }

                        if (like_unlike == -1) {
                            $("#unlike_" + comment_id).css("display", "none");
                            $("#like_" + comment_id).show();
                        }
                        
                    },
                    error: function (data) {
                        alert("error : " + JSON.stringify(data));
                    }
                });
            }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////        
            
</script>			
</div>
<div id="output" hidden></div>
</div>
<div class="col-md-1"></div>
</div>
</div>
<!------------------------------------------------All rights reserved 2020 WIDASA------------------------------------------------------------------------>

<!-----------------------------------------checking login ok for reading more and showing comment add section--------------------------------------------->	
        <script>
		<?php
			if($_SESSION['loginok']==1)
			{

				/*show hidden paragraphs and comment section for logged in users*/
					echo "$(document).ready(function(){
							$('.comment-form-container,#output,#hiddenArticles').show();
								$('.readMore').hide()
						});";
			}
			if($_SESSION['loginok']==0)
			{
				/*show login screen for new/non logged users*/
				echo "$(document).ready(function(){						 
							 $('.readMore').click(function(){
								$('.login-page').show();
						  });
						});";
			}
		?>
        </script>
<!---------------------------------------------------------------------------------------------------------------------------->
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
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						Quick Links
					</div>	
					<div class="footer-links">
						<a href="../e_pasala.html">
							E-pasala
						</a>
						<a href="../tech_corner.html">
							Tech Corner
						</a>
						<a href="../enjoy.html">
							Enjoy
						</a>
						<a href="../how_to.html">
							How-To
						</a>
						<a href="../knowledge_hub.html">
							Knowledge Hub
						</a>
					</div>
				</div>
				<div class="col-md-4 m-b-30">
					<div class="footer-title m-t-5 m-b-20 p-b-8">
						More
					</div>	
					<div class="footer-links">
						<a href="../AboutUs/support.html">
							Help
						</a>
						<a href="../AboutUs/contact.php">
							Contact Us
						</a><!--
						<a href="#">
							FAQ
						</a>
						<a href="#">
							Privacy policy
						</a>-->
					</div>
				</div>
				
			</div>
		</div> 	
	</footer>
	<div class="footer-bottom">
		 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
	</div>



<!--------------------------------------top-to button(other functions are in the external file)------------------------------------------>
<script>
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
</script>


</body>