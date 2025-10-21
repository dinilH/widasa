<?php
session_start();
include('../dbcon.php');
if($_SESSION['loginok']==1)/*otherwise it will occur an error on non loged in users*/
{
$dbuser=$_SESSION['suser'];   /*trying to adinna userwa*/
}
/*--------------------------------Use for signup redirection-------------------------------------------------------------------*/

$_SESSION['RequestCard']="tech_corner/".basename($_SERVER["SCRIPT_FILENAME"]);			/*remember to change this on other cards*/

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
					<h1>ZOOM </h1>
						<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

				</div>
				<div>
					<!--<video class="videotop" autoplay muted playsinline width="100%" height="100%">
						<source src="../assets/videos/tech_corner/apple.mp4" type="video/mp4">
					</video>-->
					
					<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Zoom1.jpg" width="600" height="400">
				</div>
				<div class="text-center parahTopic">
					<h2><u>COVID-19 සමග අප අතර   ප්‍රසිද්ධ වූ Zoom</u></h2>
				</div>
										<!--1-->
				<div class="parah1">
					<p>COVID-19 පැතිරීම මැඩපැවැත්වීමට ලෝකය උත්සාහ කරන විට විශාල සංඛ්‍යාවක් සමාජයෙන් ඈත්වී සිටින අතර,
					zoom රැස්වීම් (නොමිලේ, ගෙවුම් සැලසුම් සමඟ මසකට ඩොලර් 14.99 සිට ආරම්භ වේ) වීඩියෝ සම්මන්ත්‍රණ මෙවලම් අතර ඉහළම 
					තේරීමක් ලෙස අවධානය යොමු කර ඇත . නිවසේ සිට වැඩ කරන අතරතුර ඔබට වීඩියෝ ඇමතුම් ලබා ගත හැකි අතර වෙනත් ආකාරයේ 
					අතථ්‍ය රැස්වීම්(Virtual Meetings) සඳහා එය භාවිතා කළ හැකිය.2019 දෙසැම්බරයේ දී, 
					Zoom සඳහා දෛනික රැස්වීම් සඳහා මිලියන 10 ක සාමාන්‍යයක් තිබුණි . 2020 මාර්තු මාසයේදී එම සංඛ්‍යාව මිලියන 200 කි.
					<br><br>
					</p>
				</div>
				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h2><u>ZOOM පිළිබඳ පසුබිම</u></h2>
				</div>
				
				<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Zoom2.jfif" width="400" height="auto">
				
				<div class="parah1">
				Zoom රැස්වීම් කතාව ආරම්භ වූයේ 2011 දී වීඩියෝ සම්මන්ත්‍රණ මෘදුකාංග සඳහා වෙළඳපොළ පිරී ඉතිරී ගිය අවස්ථාවේදීය.
				එකල පැවති ගැටළුව වූයේ කිසිදු වීඩියෝ සම්මන්ත්‍රණ සේවාවක්  ස්ථිරව  නිසි ලෙස නොපැවතීමය් . 				
				මෙම අවකාශය තුළට " mucked-up space waltzed Zoom Video Communications"(පසුකාලීනව "Zoom"ලෙස හඳුන්වනු ලැබේ),
				නව සමාගමක් වීඩියෝ ඇමතුම් වඩාත් විශ්වාසදායක ලෙස කිරීම කෙරෙහි අවධානය යොමු කළේය.මෙහි නිර්මාතෘ Eric Yuan නම් ඇමරිකානු ජාතිකයාය.
				ඔහු ඉපදී හැදී වැඩුණේ චීනයේ ෂැන්ඩොං පළාතේ ය.1987 දී පළමු වසරේ විශ්ව විද්‍යාල සිසුවෙකු ලෙස ඔහු තම පෙම්වතිය බැලීමට පැය 10 ක දුම්රිය 
				ගමනක් යමින් සිටියදී ඇයව බැලීමට පහසු ක්‍රමයක් සොයමින් සිටියදී වීඩියෝ ටෙලිෆොනි මෘදුකාංග සංවර්ධනය කිරීමට පෙළඹුණි.
				
				<br><br>
				Zoom සමාගමහි  මූලික නිෂ්පාදනය වන Zoom Meetings බොහෝ හේතු නිසා විශ්මයට පත් වේ. එය සතුව අතිවිශිෂ්ට විශේෂාංග කට්ටලයක් ඇත,
				නිදසුනක් ලෙස, අධි විභේදන (HD) වීඩියෝ සහ ශ්‍රව්‍ය සහ ඔබ වීඩියෝ ලෙස පටිගත කරන ඇමතුම්වල ටයිප් කළ පිටපත් ලබා ගැනීමේ හැකියාව
				(මෙය වෙන් කර ඇත්තේ  මුදල් ගෙවන සාමාජිකයින් සඳහා පමණි).
				</div>
				<hr>
				
				<!--read more / check the loginok-->
				<button class="readMore">Read more...</button>
				<div id="hiddenArticles" hidden>
										<!--3-->
						<div class="text-center parahTopic">
								<h2><u>අපි කොහොමද මුලින්ම පටන්ගන්නේ ?</u></h2>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Zoom3.jpg" width="400" height="auto">
						
						<div class="parah1">
						Zoom රැස්වීමකට ඔබට ආරාධනා කරන්නේ නම්, ඔබට ගිණුමක් සෑදීමට අවශ්‍ය නොවේ. කෙසේ වෙතත්, Zoom 
						download කිරීම සඳහා page එකක් ඔබට එනවා. ඔබ කැමති නම්  browser එක හරහා සම්බන්ධ විය හැකි බැවින් app එක download කිරීම 
						අත්‍යවශ්‍ය නොවේ, නමුත් app එක ඔබට ප්‍රශස්ත අත්දැකීමක් ලබා දෙයි.
						Zoom Meetings හි Android, iOS, Linux, Windows, සහ macOS සඳහා app ඇත.
						
						<br><br>
						රැස්වීමක් පැවැත්වීමට සහ අනෙක් අයට එක්වීමට ආරාධනා කිරීමට ඔබට Zoom රැස්වීම් භාවිතා කිරීමට අවශ්‍ය නම්, ඔබ ගිණුමක් සෑදිය යුතුය.
						ඔබ ගිණුමක් නිර්මාණය කරන විට, ඔබට පුද්ගලික රැස්වීම් හැඳුනුම්පතක් (Personal Meeting ID-PMI)
						ලැබෙනු ඇත, එය ඔබට ඕනෑම වේලාවක රැස්වීමක් ආරම්භ කිරීමට භාවිතා කළ හැකිය.
						පෙර දැනුම්දීමකින් තොරව සහභාගිවන්නන්ට ඔබගේ PMI යවා ඉක්මනින් ඇමතුම ලබා ගත හැකි නිසා එය පහසුය. 
						සෑම නව රැස්වීමක් සඳහාම අනන්‍යය රැස්වීම් හැඳුනුම්පතක් (Unique meeting Id)ජනනය කිරීමේ හැකියාවද ඔබට ඇත, එය ආරක්ෂක හේතූන් මත වඩාත් යෝග්‍ය වේ, 
						PMI භාවිතා කිරීම වඩාත් පහසු වන අවස්ථා තිබේ, විශේෂයෙන් නිතිපතා රැස්වන කුඩා කණ්ඩායම් අතර එය වඩාත් පහසු වේ.
						<br><br>
						
						Zoom රැස්වීම්වල free account එකකින් ඔබට ඇමතුමකින් පුද්ගලයින් 100 ක් දක්වා 
						නොමිලේ  join කර ගත හැකි අතර gallery-style view එකක  පුද්ගලයින් 49 ක් පමණ දැක ගත හැකිය.
						නොමිලේ භාවිතා කරන්නන් සඳහා meeting එකක් මිනිත්තු 40 කට සීමා වේ, නමුත් ඔබට අවශ්‍ය තාක් කල් වෙන් වෙන්  meeting ලබා ගත හැකිය. 
						ඔබට රැස්වීම් කීයක් පැවැත්විය හැකිද යන්නට සීමාවක් නැත. ඔබට free account එකකින් වඩාත්ම වැදගත් අංග සහ මෙවලම් ලැබෙනු ඇත, නමුත් ඔබට වාර්තා, 
						පරිශීලක කළමනාකරණය හෝ පරිපාලක පාලනයන් නොලැබේ. record කළ meeting ගබඩා කිරීමට කිසිදු cloud storage space 
						මෙම free account තුල ඇතුළත් නොවේ. 
						කෙසේ වෙතත්, meeting record කර වීඩියෝ තමාගේ පරිගණකය තුල ගබඩා කළ හැකිය.
						</div>
						<hr>
												<!--4-->
						<div class="text-center parahTopic">
								<h2><u>නව Zoom පරිශීලකයින් සඳහා ප්‍රයෝජනවත් කරුණු</u></h2>
						</div>
						
						
						<div class="parah1">
						නව කොරෝනා වයිරස් පැතිරීම නැවැත්වීමට ගත් උත්සාහයන් හේතුවෙන් දුරස්ථ වැඩ සහ පාසල් අධ්‍යාපනය හදිසියේම ඉහළ යාමත් සමඟ 
						නව පරිශීලකයින් zoom වෙත පැමිණෙමින් සිටිති. ඔබ zoom අළුත් නම්
						එය භාවිතා කිරීමට ඉගෙන ගැනීමට මෙම කරුණු කිහිපය ප්‍රයෝජනවත් විය හැකිය.
						<br><br>
						<ol>
							<li> ඔබ නොමිලයේ zoom භාවිතා කරන්නේ නම්, ඔබට කැමති තාක් කල් පවතින meeting ලබා ගත හැකිය.
							පුද්ගලයන් තිදෙනෙකු හෝ වැඩි ගණනක් සමඟ meeting සඳහා, ඔබ විනාඩි 40 කට සීමා වේ.</li><br>
							
							<li>  සහභාගිවන්නෙකු zoom window එකෙන් ඉවතට යන විට host ට දැකගත හැකි අංගයක් zoom හි  කලින්  තිබී ඇති අතර, එය දැන් නැතිවී ගොස්   
							ඇති බැවින් ඒ ගැන කරදර නොවන්න.
							</li><br>
							
							<li>zoom meeting සඳහා බොහෝ දෙනා ආරම්භක වේලාවන් සාමාන්‍යයෙන් පැය හෝ පැය භාගයේ ගුණාකාර(උදා:-10.00 a.m/10.30 a.m)
							යොදාගන්නා අතර එමඟින් වීඩියෝ සම්මන්ත්‍රණ අඩවි වෙත traffic ඉහළ යයි.
							එම වේලාවන්ම යොදා නොගෙන වෙනත් වේලාවක meeting ආරම්භ කිරීම (උදා:-10.15 a.m/10.45 a.m), ඔබගේ meeting ආරම්භ කිරීමට ඔබට
							කිසියම් ගැටළුවක් ඇත්නම් එය විසදීමට උදව් විය හැකිය.</li><br>
							
							<li>
							<dl>							
								<dt>
								Zoom තුළ විශේෂයෙන් නිවසේ සිට වැඩ කරන විට මිනිසුන් ආදරය කරන අංග දෙකක් පවතිය්, 
								</dt> 
								<dd>(i.) රූපයක් හෝ වීඩියෝවක් සමඟ ඔබේ සැබෑ පසුබිම සැඟවීමට ඔබට ඉඩ සලසන virtual background සහ </dd><br><br>
									<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Zoom4.1.png" width="400" height="auto">
									<br><br>
								<dd> (ii.) සමේ tone smooth කරන "Touch Up My Appearance" නමින් face filter</dd><br><br>
									<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Zoom4.2.png" width="400" height="auto">
									<br><br>
							</dl>
							</li>
						</ol>
						</div>
						<hr>
												<!--5-->
						<div class="text-center parahTopic">
								<h2><u>අපගේ නිර්දේශය</u></h2>
						</div>
						<div class="parah1">
						Zoom meeting වීඩියෝ සම්මන්ත්‍රණ යෙදුමක් ලෙස සලකා බැලීම වටී. එය Cisco Webex Meetings, 
						 Intermedia Unite,Ms teams,Google meet සහ Ringcentral Office වැනි software සමඟ සැසඳීමේදී වීඩියෝ සම්මන්ත්‍රණ සඳහා Widasa සංස්කාරකවරුන්ගේ තේරීමකි.
						</div>
						<div class="video-responsive">
							<iframe width="900" height="506" src="https://www.youtube.com/embed/VnyitUU4DUY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
							<script>
								 let playAfterThisHeight = 200
									$(document).scroll(function() {
										if ($(document).scrollTop()> playAfterThisHeight) {
											  $('.videotop').trigger('play');

										} else {
										  $('.videotop').trigger('pause');
										}
									})
							</script>
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
						
						<div class="comments"></div>
				</div>	
					
			</div>
			
				

			
			<!--right colum-->
				
				
				<div class="col-md-2 col-xs-2 LeftnRightcolums text-center">
						<!--link 1-->
					<div class="card">
						<a style="text-decoration: none;" href="card1.php">
						
							<img src="../assets/images/tech_corner/TC1.jpg" alt="Avatar" id="rightimg">
						
					    </a>  
					</div>
							<!--link 2-->
					<div class="card">
						<a style="text-decoration: none;" href="card2.php">
						
							<img src="../assets/images/tech_corner/TC2.jpg" alt="Avatar" id="rightimg">
						
					    </a>  
					</div>
					 
				
				
							<!--link 3-->
					
							<div class="card">
								<a style="text-decoration: none;" href="card3.php">
								
									<img src="../assets/images/tech_corner/TC3.jpg" alt="Avatar" id="rightimg">
								
								</a>  
							</div>
							
							<!--link 4-->
					
							<div class="card">
								<a style="text-decoration: none;" href="card5.php">
								
									<img src="../assets/images/tech_corner/TC5.jpg" alt="Avatar" id="rightimg">
								
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
					<input type='hidden' name='RequestCard' value='<?php "tech_corner/".basename($_SERVER["SCRIPT_FILENAME"]);?>'>
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
				  <input type="hidden" name="section" id="section" placeholder="Name" value="tech_corner" /> <!--custom by dinil change this-->		
				  <input type="hidden" name="card" id="card" placeholder="Name" value="4" /> <!--custom by dinil change this-->
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
								$('.readMore').hide();
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
					</p>	<!---  by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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