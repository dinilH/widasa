<?php
session_start();
include('../dbcon.php');
if($_SESSION['loginok']==1)/*otherwise it will occur an error on non loged in users*/
{
$dbuser=$_SESSION['suser'];   /*trying to adinna userwa*/
}
/*--------------------------------Use for signup redirection-------------------------------------------------------------------*/

$_SESSION['RequestCard']="how-to/".basename($_SERVER["SCRIPT_FILENAME"]);			/*remember to change this on other cards*/

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
<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!------------>
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
</header>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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
					<h1>ග්‍රැෆික් ඩිසයිනින්   #1</h1>
				</div>
				<div>
					<img class="insideImg1" alt="img" src="../assets/images/how_to/graphic1.jpg" width="600" height="400">
				<hr>
				</div>
				<div class="text-center parahTopic">
					<h1><b>ග්‍රැෆික් ඩිසයිනින් පිළිබඳ හැඳින්වීම</b></h1>
				</div>
										<!--1-->
				<div class="parah1">
					<p>
					ග්‍රැෆික් නිර්මාණය යනු typing, photography, iconography(නිරූපණ) හා illustration භාවිතයෙන්  සිදුවන දෘශ්‍ය සන්නිවේදන
					(visual communication)ක්‍රියාවලියයි. මෙම ක්ෂේත්‍රය  දෘශ්‍ය සන්නිවේදනයේ(visual communication)
					 සහ සන්නිවේදන නිර්මාණයේ (communication design)උප කුලකයක් ලෙස සලකනු ලැබේ,  ග්‍රැෆික් නිර්මාණකරුවන් සංකේත(symbols),
					 රූප සහ text නිර්මාණය කර ඒකාබද්ධ කොට අදහස් හා පණිවිඩවල දෘශ්‍ය නිරූපණයන්(visual representations) සාදයි.
					 <br>
					
					visual designs නිර්මාණය කිරීම සඳහා ඔවුන් typing, visual arts සහ පිටු පිරිසැලසුම්(page layout) ක්‍රම භාවිතා කරයි. 
					ග්‍රැෆික් නිර්මාණයේ පොදු යෙදීම් :-
					<ol>
						<li>ආයතනික සැලසුම් (logos සහ වෙළඳ නාම)</li>
						<li>කතුවැකි සැලසුම් (සඟරා, පුවත්පත් සහ පොත්)</li>
						<li>මාර්ග සැකසීම </li>
						<li>පාරිසරික සැලසුම්</li>
						<li>වෙළඳ ප්‍රචාරණය</li>
						<li>වෙබ් නිර්මාණය</li>
						<li>සන්නිවේදන සැලසුම්</li>
						<li>නිෂ්පාදන</li>
					</ol>
					<br>
					
					ග්‍රැෆික් නිර්මාණය සහ වෙබ් නිර්මාණය වැඩි වැඩියෙන් අත්වැල් බැඳගනී. සඟරා වල online ප්‍රකාශනයක් තිබිය යුතු අතර පුවත්පත්, සිල්ලර වෙළඳසැල්, 
					රෝහල් සහ වෙනත් ආකාරයේ ව්‍යාපාර සහ ආයතන ද එසේ විය යුතුය. එමනිසා, ග්‍රැෆික් නිර්මාණකරුවන් බොහෝ විට බොහෝ විෂයයන් ඔස්සේ දැනුමක් 
					ඇති කර ගත යුතුය. ග්‍රැෆික් නිර්මාණය හුදෙක් අලංකාරය නොවේ. එය වනිජ්‍යයේ හා ජීවිතයේ කොටසකි.
					<br><br>
					
					ග්‍රැෆික් නිර්මාණකරුවෙකු ලෙස, ඔබට ප්‍රගුණ කිරීමට අවශ්‍ය බොහෝ මෙවලම් සහ ශිල්පීය ක්‍රම තිබේ. ඔබ Illustrator, InDesign,
					Photoshop, වෙනත් මෘදුකාංග හෝ සාම්ප්‍රදායික පෑන සහ කඩදාසි භාවිතා කළත්, ඔබේ ශෛලිය දියුණු කිරීමට, ඔබේ කුසලතා 
					වැඩි කිරීමට සහ නව දෙයක් උත්සාහ කිරීමට ඔබව පොළඹවන articles මෙම අතිරේකය හරහා ඔබට ලබා ගත හැක    
					</p>
				</div>
				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h1><b>Photoshop සමඟ graphic designing</b></h1>
				</div>
				<img class="insideImg1" alt="img" src="../assets/images/how_to/web2.jpeg" width="600" height="400">
				
				<div class="parah1">
				ඇඩෝබි ෆොටෝෂොප් යනු windows සහ mac සඳහා Adobe Incoperation විසින් වැඩි දියුණු කරන ලද සහ ප්‍රකාශයට පත් කරන ලද 
				raster graphic සංස්කාරකයකි. (පරිගණක ග්‍රැෆික්ස් සහ ඩිජිටල් ඡායාරූපකරණයේදී, raster graphic/bitmap image යනු 
				සාමාන්‍යයෙන් සෘජුකෝණාස්රාකාර pixel ජාලයක් නිරූපණය කරන තිත් අනුකෘති දත්ත ව්‍යුහයකි.)
				එය මුලින්ම නිර්මාණය කළේ 1988 දී තෝමස් සහ ජෝන් නොල් විසිනි. එතැන් සිට මෙය, raster graphic සංස්කරණයේ පමණක් නොව 
				සමස්තයක් ලෙස ඩිජිටල් කලාවක් බවට පත්ව ඇත.මෙය මුදල් ගෙවා ලබා ගත යුතු  software එකක් වන නමුත්  ශ්‍රී ලංකාව තුල බොහෝ දෙනා 
				crack versions භාවිතයට යොමු වී ඇත.
				<br><br>
				 මෙම මෘදුකාංගය, 
				<br>
				<ol>
					<li>Advanced editing සහ retouching</li>
					<li>layers කිහිපයක්,effects සහිත රූප ඒකාබද්ධ කිරීම</li>
					<li>3D design</li>
					<li>Digital drawing සහ painting</li>
					<li>වෙබ් අඩවි නිර්මාණය සදහා වඩාත් සුදුසු වේ </li>
				</ol>
				 
						
				ඔබ හොඳ වෙබ් නිර්මාණකරුවෙකු නම්, ඔබේ වෙබ් අඩවිය ගොඩනඟන විට <span style="color:#4CAF50;">Responsive design</span>, 
				සෞන්දර්යය(<span style="color:#4CAF50;">Aesthetics</span>*),
				භාවිතාව(<span style="color:#4CAF50;">usability</span>*) සහ ප්‍රවේශ්‍යතාව(<span style="color:#4CAF50;">accessibility</span>*)
				වැනි සංකල්ප කෙරෙහි ද ඔබ අවධානය යොමු කරනු ඇත.
				<br><br>
				
				*<span style="color:#4CAF50;">Responsive design</span>යනු දුරකථන සහ ටැබ්ලට් වැනි අතිරේක උපාංගවල වෙබ් අඩවි හොඳ පෙනුමක්
				ඇති කිරීමට සහ හොඳින් ක්‍රියා කිරීමට ජනප්‍රිය තාක්‍ෂණයකි. විවිධ web browser පළල සඳහා විවිධ CSS නීති සැකසීමෙන් එය සිදු කරයි.
				<br><br>
				
				<p style="padding:30; background:#4CAF50; border-radius:100px; color:white;" class="text-center">
					Responsive Design සජීවී නිරූපණයක් අවශ්‍යද? ඔබ මෙම පිටුව හෝ මෙම වෙබ් අඩවියේ ඕනෑම page එකක්  ඔබ පරිගණකයකින් 
					නරඹන්නේ නම්, ඔබගේ  browser window පළල අඩු කර සිදුවන්නේ කුමක්දැයි බලන්න.ඔබ දැන් දකින ව්‍යුහයට වඩා වෙනස් එකක් ඔබට පෙනේවි.  
				</p>
				<br><br>
				
				*<span style="color:#4CAF50;">Aesthetics</span>වෙබ් පිටු වල පෙනුමට විශාල කාර්යභාරයක් ඉටු කරයි. ඔබ shock වන වෙබ් අඩවි ගොඩක් දැක ඇති. ටිකක් සෞන්දර්යාත්මක න්‍යාය
				ඉගෙන ගන්න, ඔබේ වෙබ් අඩවිය ඒවායින් එකක් නොවනු ඇතැයි අපේක්ෂා කරමු!
				<br><br>
				
				*<span style="color:#4CAF50;">Usability</span>වෙබ් නිර්මාණයේ තවත් වැදගත් අංගයකි.මෙයින් කියවෙන්නේ වෙබ් අඩවියක් කෙතරම්
				බුද්ධිමත්ද යන්න සහ පරිශීලකයින්ට අවශ්‍ය දේ සොයා ගැනීම හෝ කිරීම කොතරම් පහසුද යන්න පිළිබඳව වේ.
				<br><br>
				
				*<span style="color:#4CAF50;">Accessibility</span> යනු ඉතා වැදගත් වෙබ් නිර්මාණ පුහුණුවකි. මෙයින් සිදුවන්නේ බිහිරි සහ අන්ධ අය 
				ඇතුළුව web පිරික්සීමට සහායක උපාංග(ex:- Screen readers) භාවිතා කරන පුද්ගලයින්ට වෙබ් පිටු නැරඹිය හැකි වීමයි.
				</div>
				<hr>
				
				<!--read more / check the loginok-->
				<button class="readMore">Read more...</button>
				<div id="hiddenArticles" hidden>
				
										<!--3-->
						<div class="text-center parahTopic">
								<h1><b>වෙබ් නිර්මාණය ඉගෙන ගැනීමට ක්‍රම</b></h1>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/how_to/web3.jpg" width="400" height="auto">
						
						<div class="parah1">
						දෘශ්‍ය නිර්මාණය(Visual design) ඉගෙන ගැනීමට ඇති එකම සැබෑ ක්‍රමය එය ඔබටම ඉගැන්වීම බව සමහර අය පැවසිය හැකිය. පුහුණු වීම, 
						පවතින වෙබ් අඩවි වලින් අභාසය  ලබා ගැනීම,මිනිසුන්ගෙන් ඔබේ නිර්මාණ පිළිබද වඅසා වැඩිදියුණු කිරීම 
						web designing ඉගෙන ගැනීමට ඇති ක්‍රමයන් වේ . නමුත් මතක තබා ගන්න, වෙබ් නිර්මාණය යනු වෙබ් අඩවියක දෘශ්‍ය පෙනුම පමණක් නොවේ.
						ඔබට පෙර සදහන් කල accessibility ඔබට ඉගැන්විය හැකිද? නිසැකවම එය අභියෝගයක් වනු ඇත.
						<br><br>
						
						ඔබ විසින්ම වෙබ් නිර්මාණ ඉගෙනීම විශිෂ්ටයි, නමුත් ඔබ වෙබ් නිර්මාණ පොතක් හෝ online වෙබ් නිර්මාණ පුහුණුවක් සමඟ ඔබට සහාය විය
						යුතුය. බොහෝ අය පොතකින් වෙබ් නිර්මාණය ඉගෙන ගැනීමට තෝරාගනී, මන්ද එය ඔබ ප්‍රගුණ කිරීමට සමීපව අධ්‍යයනය කළ යුතු දෙයකි.
						තවද අපගේ සගරාවේ how-to විශේෂාංගය යටතේ උගන්වන web designing පාඩම් ඔබට නිසැකවම උදව්වක් වනු ඇත.
						</div>
						<hr>

						<div class="text-center parahTopic">
								<h1><b>අපි ඊලග අතිරේකයෙන් HTML,CSS පිලිබදව ඉගෙන ගනිමු </b></h1>
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
					 
				
				
							<!--link 3-->
					
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
					<input type='hidden' name='RequestCard' value='<?php "how-to/".basename($_SERVER["SCRIPT_FILENAME"]);?>'>
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
				  <input type="hidden" name="section" id="section" placeholder="Name" value="how-to" /> <!--custom by dinil-->		
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
       
            
</script>			
</div>
<div id="output" hidden></div>
</div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

<div class="col-md-1"></div>
</div>
</div>
<!------------------------------------------------All rights reserved 2020 WIDASA--------------------------------------------------ByDinil---------------------->

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