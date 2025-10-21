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
		<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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
					<h1>තිර දෙකක වීරයා </h1>
				</div>
				<div>
					<!--<video class="videotop" autoplay muted playsinline width="100%" height="100%" bydinil>
						<source src="../assets/videos/tech_corner/apple.mp4" type="video/mp4">
					</video>-->
					
					<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ZenbookProDuo1.jpg" width="600" height="400">
				</div>
				<div class="text-center parahTopic">
					<h2><u>ZenBook Pro Duo</u></h2>
				</div>
										<!--1-->
				<div class="parah1">
					<p>කාලයෙන් කාලයට තාක්ෂණික ලෝකයේ සිදුවන විවිධ නව්‍යකරණයන් පෙරළියන් අපට දැකගන්න ලැබෙනවා. මේ කියන්න යන්නේ
					තාක්ෂණික ලෝකය තුල විශාල පියවරක් තබමින් විශාල කතාබහක් ඇති කරන්න සමත් වූ උපාංග කිහිපයක් පිළිබඳවයි. මේ උපාංග නිෂ්පාදනය කරන්නේ
					ලොව සුප්‍රකට සමාගමක් වූ Asus සමාගමයි. තාක්ෂණික ලෝකය වෙත නිරන්තරයෙන් නව්‍යතාවයන්ගෙන් පිරි උපාංග හඳුන්වාදෙන සමාගමක් ලෙස
					ලෝකය තුල සුප්‍රකට මේ සමාගමේ නවතම Laptop මාදිලි පිළිබඳවයි මේ ලිපිය ඔස්සේ කතාබහ කෙරෙන්නේ.
					<br><br>
					පරිගණකය අද වෙද්දී මිනිසාගේ දෛනික දින චරියාවට නැතිවම බැරි උපාංගයක් බවට පත්වෙලා අවසානයි. Desktop, Laptop, Palmtop, Super Computers 
					වගේ විවිධ කාර්යන් වෙත කාර්ය විශේෂීකරණය වූ පරිගණක කාණ්ඩයන් ගණනාවක් අද වෙද්දී දැක ගන්න පුළුවන්. 
					වර්ෂ 1981 දී පමණ අතේ ගෙනයා හැකි පරිගණක වෙත මොනිටරයක් එකතු වුණා අද මේ පවතින මට්ටමට ලැප්ටොප් පරිණාමනය වෙන්නේ ඊටත් වසර ගණනාවකට පසුවයි.
					<br><br>
					2018 වසරේ මෙලෙස සිදුවූ ලැප්ටොප් පරිණාමයේ සුවිශේෂී සන්ධිස්ථානයක් සනිටුහන් කරන්න Asus සමාගමට හැකි වුණා. ඒ ඔවුන්ගේ ZenBook Pro UX580
					මාදිලියේ ලැප්ටොප් වෙත ප්‍රධාන 4K LCD Display එකට අමතරව තවත් අඟල් 5.5 FHD display එකක් ඇතුලත් කිරීම සමගයි. මෙය සාමාන්‍ය laptop පරිගණකයක කාර්යභාරයට අමතරව 
					මේ “ScreenPad” එක පරිශීලකයාට මුලික බහුකාර්ය ක්‍රියාවලීන් (multitasking) වගේම විවිධ මෘදුකාංග හසුරවන්නත් පහසුකම ලබාදුන්නා. ඊට අමතරව තවත් අපුර්ව විශේෂාංග 
					ගණනාවකින් සපිරි මේ laptop එක ලොව පුරා පරිශීලකයන් අතර අතිශය ජනප්‍රිය වුණා. කොහොම වුනත් ඒ “ScreenPad” 
					එක ප්‍රමාණයෙන් තරමක් කුඩා නිසා සිදු කළ හැකි ක්‍රියාවලි යම් තරමක් දුරට සීමා වුණා.
					</p>
				</div>
				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h2><u>Laptop ලොවේ පෙරළිකාරයා</u></h2>
				</div>
				
				<img class="insideImg1" alt="img" src="../assets/images/tech_corner/asus zenbook pro duo.jpg" width="400" height="auto">
				
				<div class="parah1">
				2019 වසරේ ඒ කියන්නේ පසුගිය වසරේ අවසාන භාගයේදී Asus සමාගම තවත් නව්‍යතාවයන් ගෙන් සපිරි laptop පරිගණක මාදිලි කිහිපයක් එළිදක්වන්න සුදානම් වෙන බවට 
				තාක්ෂණික ලෝකයේ කතා බහක් පැතිර ගියා. ඔවුන් මේ  සුදානම් වෙන්නේ කුමන ආකාරයක පෙරළියක් සිදු කරන්නදැයි තාක්ෂණික ලෝකයම පසු වුයේ ඉතාම කුතුහලයකින්. 
				සමස්ත තාක්ෂණික ලෝකයම පුදුමයට පත් කරමින් ZenBook Pro Duo (UX581) ඔවුන් එළිදක්වන්න කටයුතු කරනවා. අඟල් 15.6ක 4K OLED touchscreen එකක් 
				එහි ප්‍රධාන display එක 
				ලෙස ඇතුලත් වෙනවා. ඊට අමතරව, අපූරු අඟල් 14ක 4K  “ScreenPad Plus” එකකින් එය සමන්විතයි. 
				
				<br><br>
				පසුගිය දශක කිහිපය තුළ ලැප්ටොප් වෙත සිදුවූ අපූර්වතම නව්‍යකරණය ලෙස ඔවුන් මෙය සඳහන් කිරීම අතිශයෝක්තියක් නොවන බව සඳහන් කරන්නම ඕනේ.
				ඩෙස්ක්ටොප් පරිගණක භාවිතා කරද්දී බොහෝ විට විවිධ වෘතිකයින් තවත් Monitor එකක් Secondary Display ලෙස භාවිත කිරීම සුලබව සිදුවෙනවා. 
				නමුත් මේ නව ZenBook Pro Duo පරිගණකයේ “ScreenPad Plus” 
				හරහා එවැනි Secondary Display එකක් භාවිත කිරීමේ අවශ්‍යතාව සාර්ථකව සපිරෙනවා. 
				</div>
				<hr>
				
<!---------------------------------------------------------------hidden area-------------------------------------------------------------->

				<!--read more / check the loginok-->
				<button class="readMore">Read more...</button>
				<div id="hiddenArticles" hidden>
										<!--3-->
						<div class="text-center parahTopic">
								<h2><u>display දෙකක් මොකටද?</u></h2>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ZenbookProDuo3Features.jpg" width="400" height="auto">
						
						<div class="parah1">
						මේ විශේෂ ScreenPad Plus එක Adobe Premiere Pro, Photoshop, 3D නිර්මාණ මෘදුකාංග භාවිත කරන්නත් වෙත වගේම මෘදුකාංග 
						නිර්මාණ ශිල්පීන්ටත් අතිශයන්ම යෝග්‍ය ලෙස නිර්මාණය වෙලා තිබෙනවා. ඊට අමතරව, තවත් අමතර display එකක 
						අවශ්‍යතාවය සහිත ඕනෑම කෙනෙකුට මේ ඔස්සේ වැඩ කටයුතු සිදු කරගන්න හැකියාව තිබෙනවා. 
						
						<br><br>
						මෙහි ප්‍රධාන Display එක ඉතාම අනර්ඝව නිර්මාණය කරන්න Asus සමාගම සමත් වෙලා තියෙනවා. 
						ඒවගේම අඟල් 15.6ක් වූ මේ තිරය අතිශය නිරවද්‍යව DCI-P3 වර්ණ පරාසයන් දර්ශනය කරන බවට Pantone සහතිකය ලබා තිබෙනවා වගේම, 
						VESA DisplayHDR හි True Black 500 සහතික කිරීමකුත් සහිතයි. මේ OLED display එක අංශක 178ක පුළුල්  view angle එකක් සහිතයි. 
						ඒ නිසාවෙන් මෙය සතුව 100,000: 1 ක ඉතා හොඳ contrast පරාසයක් තිබෙනවා.මෙහි දෙවන තිරය එහෙම නැති නම් ScreenPad Plus 
						එක 4K UHD IPS LCD display එකක්. Apps කිහිපයක එකවර වැඩ කිරීමට පහසුකම මේ හරහා ඔබට ලැබෙනවා. 
						ඒවගේම ඇසට සහ ප්‍රධාන තිරයේ දර්ශනය වෙන දෙයට බාධා නොවන ලෙස Matte look එකක් ඒ වෙත ලබා දෙන්න Asus සමාගම කටයුතු කරලා 
						තිබෙනවා. ඊට අමතරව මේ display දෙක සමගම වැඩ කරන්න මේ පරිගණකයටම ආවේණික විශේෂ මෘදුකාංග ගණනාවක් මෙහි අන්තර්ගත වෙනවා.  
						
						<br><br>
						මේ ZenBook Pro Duo (UX581) laptop පරිගණකය බල ගැන්වෙන්නේ දැනට පවතින බලවත්ම සකසනයක් වන 9th Generation, 8-Core Intel Core i9-9980K processor එකකින්. 
						වගේම නවතම Nvidia GeForce RTX 2060 graphics සහ 6GB ධාරිතාවක් සහිත GDDR6 SDRAM එකකිනුත් සමන්විතයි. ඊට අමතරව, මෙයට 2666MHz වේගයක් සහිත 32GB RAM එකකුත් තිබෙනවා.
						මේ පරිගණකය වෙත 1TB PCIe 3.0 x4 SSD එකක් අන්තර්ගත වෙනවා. 
						එහි උපරිම දත්ත හුවමාරු වේගය තත්පරයට 3.2GBක් බවයි සඳහන් වෙන්නේ. ඊට අමතරව මේ වෙත Wi-Fi 6, Bluetooth 5.0 වැනි අති නවීනතම සන්නිවේදන ක්‍රමවේදයන් අන්තර්ගත වෙනවා. 
							<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

						</div>
						<hr>
												<!--4-->
						<div class="text-center parahTopic">
								<h2><u>Heat වෙනවද?</u></h2>
						</div>
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ZenbookProDuo2Heat.jpg" width="400" height="auto">
						
						<div class="parah1">
						පරිගණකයක්, විශේෂයෙන් laptop පරිගණකයක් විශේෂිත ක්‍රියාවලි වෙනුවෙන් තෝරාගැනීමේදී බොහෝ දෙනෙක් එහි උෂ්ණත්ව පාලන පද්ධතිය ගැන බොහෝ සැලකිලිමත් වෙනවා. 
						විශේෂයෙන් 4K සහිත Display දෙකක් වගේම ඉතාම බලවත් සැකසුම් පද්ධතියක් ක්‍රියාත්මක වෙන නිසාම මෙය උණුසුම් වීම පිළිබඳව ඔබට ගැටළුවක් ඇති. නමුත් ඒ වෙත විශේෂ අවධානයක් 
						යොදන්න සමාගම කටයුතු කරලා තිබෙනවා. “Cool-Air express system” නම් විශේෂිත සිසිලන පද්ධතියක් මේ වෙත ඇතුලත් කරන්නට ඔවුන් කටයුතු කර තිබෙනවා. මේ වෙත CPU සහ GPU ආවරණය වන පරිදි විශේෂිත heat pipes 4ක් සහ 12V Cooling Fans දෙකක් ඇතුලත්.  ඒවගේම ඔබ පරිගණකයේ තරමක් විශාල කටයුත්තක් සිදු කරනවා නම් ඒ වෙනුවෙන්ම සැකසුනු Turbo Cooling ක්‍රමයක්ද තිබෙනවා. 
						ඔබට එය ඒ වෙනුවෙන්ම වෙන්වුණු බොත්තමකින් (Turbo Fan hotkey) ක්‍රියාත්මක කරවන්න හැකියාව තිබෙනවා. 
						
						<br><br>
						<!--iPhone මිලදී ගන්නා බොහෝ දෙනා ලග මෙම උපාංග තිබෙන නිසා මෙය එතරම් ගැටළුවක් බවට පත් නොවනු ඇති බව මගේ මතයයි.-->
						</div>
						<hr>
						
												<!--5-->
						<div class="text-center parahTopic">
								<h2><u>නිමාව </u></h2>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ZenbookProDuo4Finishing.png" width="400" height="auto">
						
						<div class="parah1">
						ඉතාම උසස් තත්වයේ නිමාවක් සහිත මේ ලැප්ටොප්ය එතරම් සැහැල්ලු එකක් නම් නොවන බව කියන්න ඕනේ. කිලෝග්‍රෑම් 2.5 ක පමණ බරකින් යුතු මේ පරිගණකය “desktop replacement” එකක් විදිහට හඳුන්වන්න පුළුවන්. 
						අනෙක් ZenBook පරිගණකවල මෙන්ම මෙහිත් බාහිර සහ අභ්‍යන්තර සැකැස්ම ලෝහ බහුලව යොදාගෙන තමයි නිර්මාණය වෙන්නේ. නමුත් මෙහි අනෙක් ZenBook වලින් විශේෂ බාහිර අනන්‍ය සංකේතයක් ලෙස Asus
						සලකුණ මධ්‍යගතව පවතින්නේ නම් නැහැ. එනිසාවෙන් මෙය අනෙක් ZenBook අතරින් ඉතා ඉක්මනින් හඳුනාගන්නට පුළුවන්.
						ඒවගේම මෙයට නවතම Celestial Blue වර්ණයත් ඇතුලත් කර තිබීම මගින් මෙය දැකුම්කළු නිමාවක් දෙන්න නිර්මාණකරුවන්ට හැකිවෙලා තිබෙනවා. 
						
						<br><br>
						මේ ZenBook Pro Duo UX581 මාදිලියට අමතරව ZenBook Pro Duo UX481 මාදිලියකුත් තිබෙනවා. එය බල ගැන්වෙන්නේ 10th-Gen Intel Core i7 හෝ i5 Processor එකක් මගිනුයි.  
						
						<br><br>
						මේ ZenBook Pro Duo (UX581) laptop පරිගණකය බල ගැන්වෙන්නේ දැනට පවතින බලවත්ම සකසනයක් වන 9th Generation, 8-Core Intel Core i9-9980K processor එකකින්. 
						වගේම නවතම Nvidia GeForce RTX 2060 graphics සහ 6GB ධාරිතාවක් සහිත GDDR6 SDRAM එකකිනුත් සමන්විතයි. ඊට අමතරව, මෙයට 2666MHz වේගයක් සහිත 32GB RAM එකකුත් තිබෙනවා.
						මේ පරිගණකය වෙත 1TB PCIe 3.0 x4 SSD එකක් අන්තර්ගත වෙනවා. 
						එහි උපරිම දත්ත හුවමාරු වේගය තත්පරයට 3.2GBක් බවයි සඳහන් වෙන්නේ. ඊට අමතරව මේ වෙත Wi-Fi 6, Bluetooth 5.0 වැනි අති නවීනතම සන්නිවේදන ක්‍රමවේදයන් අන්තර්ගත වෙනවා. 
						
						</div>
						<hr>
													<!--6-->
						<div class="text-center parahTopic">
								<h2><u>ගැටළු? </u></h2>
						</div>															
						<div class="parah1">
						මේ ලිපිය ලියද්දි මේ උපාංගය භාවිත කරන්නත් අපිට අවස්තාව ලැබුණා. අපිට ගැටළු නම් හමු නොවුනු තරම්. කොහොම වුනත් මේ වෙනුවෙන් යෝජනා කිහිපයක් ඇතුලත් කරන්න අපි හිතුවා. 
						
						<br><br>
						<ol Type="i" style="line-height:180%">
							<li>ScreenPad Plus එක තරමක් දිග වුණානම් භාවිතයට තරමක් වැඩි පහසුවක් ලැබේවි කියලා අපිට හිතුණා.</li>
							<li>මේ කාණ්ඩයේ අනෙක් ලැප්ටොප් සමග ගත විට ප්‍රමාණය අතින් වගේම බරිනුත් තරමක් වැඩියි. කොහොම වුණත් මේ උපාංගයේ අරමුණ desktop replacement laptop එකක් වීම නිසාවෙන් එය නම් එතරම් ගැටළුවක් නෙමෙයි.</li>
							<li>යතුරු පුවරුව තිබෙන ස්ථානය තරමක් නුහුරු බව නිසා ඒ වෙනුවෙන්ම හුරුවෙන්නත් අපිට සිදුවුණා. හැබැයි ඔබ මේ laptop එක මිලදී ගන්නවා නම් ඒ හුරුවීම අතිශය වැදගත් වේවි.</li>
						</ol>
						</div>
						<hr>
												
												<!--7-->
						<div class="text-center parahTopic">
								<h2><u>තවත් සුවිශේෂී වෙන්නට හේතු</u></h2>
						</div>
							<div class="video-responsive">
								<iframe width="900" height="506" src="https://www.youtube.com/embed/1aqI7EnfbVM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>								
						<div class="parah1">
						<b>Multi-function touchpad</b> - මේ නව පරිගණකය තවත් සුවිශේෂී වන්නට හේතු ගණනාවක් තිබෙනවා.   ඒ අතරට multi-function touchpad එක ඇතුලත් නොකරම බැහැ. 
						Laptop එකක අත්‍යවශ්‍යම Touchpad එක ලෙස වගේම numeric KeyPad එක ලෙසත් ක්‍රියාත්මක විය හැකි ලෙස නිමවා ඇති multi-function touchpad එක 
						LED පැනලයක් මගින් ආලෝකමත් වෙනවා. අවශ්‍ය විට ආලෝකය අඩු වැඩි කිරීමේ සිට තවත් විශේෂාංග රාශියක් මේ තුල ඇතුලත් වෙනවා. 
						<br><br>
						<b>Audio System</b> - මෙහි ඇති තවත් සුවිශේෂීත්වයක් වෙන්නේ සුපැහැදිලි ලෙස ශබ්දයන්ට හා සංගීතයට සවන්දිය හැකි ලෙස නිමවා ඇති විශිෂ්ට ගණයේ Audio System එකයි.
						Harmon Kardon Certification එක සහිතවයි මේ Audio System එක ක්‍රියාත්මක වෙන්නේ. 
						<br><br>
						<b>Alexa Light Bar</b> - Alexa කෘත්‍රීම බුද්ධි සහයකයා (virtual assistant) වෙත සංවේදී ආලෝක පද්ධතියක් ඔබට මේ පරිගණකයේ යට කොටසෙහි
						දැකගන්නට පුළුවන්.
						ඔබ Alexa භාවිතා කරනවා නම් මේ සමග ඔබට අපූර්ව අත්දැකීමක් ඔබට ලබා ගන්නට හැකියාව තිබෙනවා. 
						<br><br>
						<b>IR Camera සමග Windows Hello Login</b> - අඳුරේ වුවත් ඔබේ මුහුණ හඳුනා ගනිමින් (facial recognition) Log වීමට ඉඩ සලසන නවතම 
						HD IR camera පද්ධතියක් මෙහි ඇතුලත් වෙනවා. Windows Hello තාක්ෂණය සමග මේ පද්ධතිය ක්‍රියාත්මක වීම සිදු වෙනවා. 
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
						
						<div class="comments"></div>
				</div>	
					
			</div>
			
				

			
			<!--right colum-->
				
				<!--link 1-->
				<div class="col-md-2 col-xs-2 LeftnRightcolums text-center">
			
					<div class="card">
						<a style="text-decoration: none;" href="card1.php">
						
							<img src="../assets/images/tech_corner/TC1.jpg" alt="Avatar" id="rightimg">
						
					    </a>  
					</div>
					 
				
				
							<!--link 2-->
					
							<div class="card">
								<a style="text-decoration: none;" href="card3.php">
								
									<img src="../assets/images/tech_corner/TC3.jpg" alt="Avatar" id="rightimg">
								
								</a>  
							</div>
							
								<!--link 3-->
								<div class="card">
								<a style="text-decoration: none;" href="card4.php">
								
									<img src="../assets/images/tech_corner/TC4.jpg" alt="Avatar" id="rightimg">
								
								</a>  
								</div>
								
								<!--link 3-->
								<div class="card">
								<a style="text-decoration: none;" href="card5.php">
									<!------ Coded by Dinil Hansara,ESOFT METRO / CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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
				  <input type="hidden" name="section" id="section" placeholder="Name" value="tech_corner" /> <!--custom by dinil-->		
				  <input type="hidden" name="card" id="card" placeholder="Name" value="2" /> <!--custom by dinil-->
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