<?php
session_start();
include('../dbcon.php');

if($_SESSION['loginok']==1)/*otherwise it will occur an error on non loged in users*/
{
$dbuser=$_SESSION['suser'];   /*trying to adinna userwa*/
}

/*--------------------------------Use for signup redirection-------------------------------------------------------------------*/

$_SESSION['RequestCard']="knowledge_hub/".basename($_SERVER["SCRIPT_FILENAME"]);			/*remember to change this on other cards*/

/*-----------------------------------------------------------------------------------------------------------------------------*/

$_SESSION['card']=basename($_SERVER["SCRIPT_FILENAME"] ,".php");                          /*used in comment-list.php to filter comments according to the card number*/
$section=  pathinfo($_SESSION['RequestCard'],PATHINFO_DIRNAME);
$_SESSION['section']=$section;

?>
<!--copyright 2020 widasa ~coded by Dinil Hansara~ -->
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
					<h1>ලොව විශාලතම සුනඛ වර්ග</h1>
				</div>
				<div>
					<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs6.jpg" width="600" height="400">
				</div>
										<!--1-->
				<div class="parah1">
					<p> ශතවර්ෂ ගණනාවක් තිස්සේ, විවිධ භූගෝලීය ස්ථානවල විවිධ සුනඛයන් යම් යම් භූමිකාවන් ඉටු කිරීමට මිනිසුන්ට සහයා වී ඇත.මෙම සුනඛ වර්ග සමහරක් සඳහා, විශාලත්වය ඔවුන්ගේ පරිපූර්ණත්වය සඳහා වැදගත් කරුණක් වී ඇත, 
					විශාලත්වය වැදගත් වන්නේ,  වේගවත් ක්‍රීඩාවක් /දඩයම් කිරීම හෝ වඩා ආරක්ෂාකාරී ලෙස නිවසක් ආරක්ෂා කිරීම හෝ සීතල පරිසර වල ජීවත් වීම වැනි අවස්ථා සඳහාය. ලොව පුරා සුනඛ වර්ග සිය ගණනක් අතුරින් විශාලතම
					වර්ග කිහිපයක් මෙහි දැක්වේ.
					<br><br>
					</p>
				</div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h2>1. Great Dane</h2>
				</div>
				
				<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs1.jpg" width="400" height="auto">
				
				<div class="parah1">
				Great Dane යනු American Kennel Club විසින් අවම වශයෙන් උස අනුව විශාලතම සුනඛ වර්ගය ලෙස පිළිගන්නා සුනඛ වර්ගයයි . Great Dane යනු ජර්මානු සම්භවයක් ඇති ප්‍රභේදයක් වන අතර එහි ජර්මානු නම වන "Deutsche Dogge"
				මගින් කියවෙන්නේ "German mastiff"යන්නයි. මෙම වර්ගය බිහිවී ඇත්තේ English mastiff,Irish wolfhound අතර හරස් අභිජනනයෙනි.<br><br>
								
				<div class="video-responsive">
					<iframe width="648" height="366" src="https://www.youtube.com/embed/OEmhJZMgj-4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>				
				</div><br>
				
				ඔවුන් බරම සුනඛයන් නොවුනත්, රාත්තල් 100-120 අතර ප්‍රමාණයක් කරා ළඟා වුවද, ඔවුන් උසම අය අතර වේ. සාමාන්‍ය Great Dane අඟල් 28-30 අතර උසකින් යුක්ත වන අතර සමහර විට ඊට වඩා උස විය හැකිය. 
				උසම සුනඛයා සඳහා ලෝක වාර්තාවක් තැබුවේ අඟල් 44 ක් උසැති "Zeus" නම් Great Dane සුනඛයාය. කෙසේ වෙතත්, මෙම විශාල සුනඛයන් ජීවත් වන්නේ වයස අවුරුදු 6 සිට 8 දක්වා පමණි. 
				"Zeus"මහලු වියෙන් මිය ගියේ වයස අවුරුදු 5 දී ය.
				
				<hr>
				</div>				
										<!--3-->
						<div class="text-center parahTopic">
								<h2>2. Neapolitan mastiff</h2>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs2.jpg" width="400" height="auto">
						
						<div class="parah1">
						මෙම වර්ගය කළු, නිල්, මහෝගනී සහ ටව්නි ඇතුළු වර්ණ කිහිපයකින් පැමිණේ.
						<br><br>
						Mastiff වර්ගයේ සුනඛයන් නිසැකවම විශාලතම සුනඛ වර්ග අතර වේ. මෙම Neapolitan mastiff දකුණු ඉතාලියේ සම්භවය සහිතය. මුර බල්ලෙකු ලෙස භාවිතා කරන සාමාන්‍ය පිරිමි මැස්ටිෆ් අඟල් 26-31 අතර උසකින් යුක්ත වන
						අතර බර රාත්තල් 130-155 කි. ගැහැණු සතුන් සාමාන්‍යයෙන් ටිකක් කුඩා වන අතර අඟල් කිහිපයක් කෙටි වන අතර බර රාත්තල් 110-130 කි.
						<br><br>
						
						මෙම වර්ගයේ සුනඛයන් නිර්භීත බව හා නිවස සහ පවුල ආරක්ෂා කිරීම සඳහා ප්‍රසිද්ධියක් උසුලයි,Mastiff වර්ගයේ සුනඛයන් නිශ්ශබ්දව සිටින අතර,
						අනතුරු ඇඟවීම සඳහා බුරනවාට වඩා ක්ෂණිකව ක්‍රියාත්මක වීමට  ප්‍රසිද්ධය.මෙම සුනඛයා සුනඛ පුහුණුව පිළිබඳ මනා දැනුමක් ඇති 
						සහ සමාජීයකරණය සඳහා අවශ්‍ය පුළුල් කාලය යෙදවීමට හැකි හිමිකරුවන්ට පමණක් recommend කරයි.
						</div>
						<hr>
												<!--4-->
						<div class="text-center parahTopic">
								<h2>3. Scottish deerhound</h2>
						</div>
						<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs3.jpg" width="400" height="auto">
						
						<div class="parah1">
						වාර්තාගත ඉතිහාසයට බොහෝ කලකට පෙර ස්කොට්ලන්තයේ ආරම්භ වූ මෙම වර්ගයේ සුනඛයන් එකල රතු මුවන් දඩයම් කිරීමට සහ ගොදුර පහසුවෙන් ලුහුබැඳ යාමට කර ඇත.මොවුන්ට වේගයෙන් දිවීම සදහා හැඩගැසුණු 
						සැහැල්ලු ශරීරයක් ඇත.මොවුන් අඟල් 32 ක් තරම් උසින් යුක්ත වන අතර බර රාත්තල් 110 ක් පමණ වේ<br><br>
						<div class="video-responsive">
							<iframe width="648" height="366" src="https://www.youtube.com/embed/hVqli1mfyWY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>				
						</div><br>
						</div>
						<hr>
						<!--read more / check the loginok-->
						<button class="readMore">Read more...</button>
						<div id="hiddenArticles" hidden>
												<!--5-->
						<div class="text-center parahTopic">
								<h2>4. Dogue de Bordeaux</h2>
						</div>
						
						<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs4.jpg" width="400" height="auto">
						
						<div class="parah1">
						Dogue de Bordeaux, Bordeaux mastiff, French mastiff සහ Bordeauxdog ඇතුළු තවත් නම් කිහිපයකින් හැඳින්වේ. Dogue de Bordeaux ප්‍රංශයේ පැරණිතම සුනඛ වර්ග අතර වේ .
					    Dogue de Bordeaux උස අඟල් 23-27 අතර වන අතර බර රාත්තල් 125-150 අතර වේ.ශරීර ප්‍රමාණයට සාපේක්ෂව  සුනඛයෙකුගේ විශාලතම හිස ඇති බව වාර්තා වන්නේ Dogue de Bordeaux වර්ගයේ සුනඛයන් වේ.<br>
						
						Neapolitan mastiff මෙන් නොව, Bordeauxdog භාවිතා කර ඇත්තේ හුදෙක් නිවස ආරක්‍ෂා කිරීමට වඩා වැඩි යමක් සඳහා වන අතර, මෙම සුනඛයන් රැළවල් බලා ගැනීම සිට කරත්ත 
						ඇද ගැනීම දක්වා සෑම දෙයක් සඳහාම භාවිතා කරන ලදී . මෙම වර්ගයේ සුනඛයන් එළිමහනේ  ක්‍රියාශීලී හා ජවසම්පන්න ය.
						</div>
												<!--6-->
						<div class="text-center parahTopic">
								<h2>5. Newfoundland</h2>
						</div>
						
						<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs5.jpg" width="400" height="auto">
						
						<div class="parah1">
						බොහෝ විශාල අභිජනන වර්ග මෙන් නොව, Newfoundland මුර බල්ලෙකු ලෙස බෝ කර නැත.ඒ වෙනුවට එහි අරමුණ වූයේ ධීවරයින්ට උපකාර කිරීමයි.විශාල, මොවුන්ට බෝට්ටුවලින් දැල් ගෙනයාමට, කරත්ත අදින්නට
						පුහුණු කල හැක. ශක්තිමත් අස්ථි සහ විශාල මාංශ පේශි සහිත නිව්ෆවුන්ඩ්ලන්ඩ් බලවත් පිහිනුම් ක්‍රීඩකයෙක් සහ විශිෂ්ට ජල බේරා ගැනීමේ බල්ලෙකි.මෙම සුනඛයන්  මුහුදේ සිටින මිනිසුන් බේරාගෙන ඇත.<br>
						
						නිව්ෆවුන්ඩ්ලන්ඩ් සුනඛයන් අඟල් 27-30 අතර උසකින් යුක්ත වන අතර බර රාත්තල් 150 ක් පමණ වේ. මොවුන්ගේ ඝන ද්විත්ව කබාය නිසා ඔවුන් තවත් විශාල වී පෙනෙනවා.
						</div>
						
												<!--7-->
						<div class="text-center parahTopic">
								<h2>6. English mastiff</h2>
						</div>
						
						<img class="insideImg1" alt="img" src="../assets/images/knowledge_hub/dogs6.jpg" width="400" height="auto">
						
						<div class="parah1">
						English mastiff යනු ඇමරිකානු කෙනල් සමාජය විසින් පිළිගත් විශාලතම සුනඛ වර්ගයකි . අඟල් 30 ක උසකට වැඩෙන මෙම සුනඛයින්ගේ බර රාත්තල් 250 ක් පමණ වේ. ග්‍රේට් ඩේන් උසම සුනඛයා ලෙස වාර්තාවක් තබා ඇති හෙයින්,
						English mastiff <span style="color:red;">බරම සුනඛයා</span> ලෙස වාර්තාවක් තබා ඇත. මෙතෙක් වාර්තා වී ඇති සුනඛයෙකුගේ ලොකුම බර රාත්තල් 343 ක් බරැති " Aicama Zorba" නම් English mastiff ය. <br>
						</div><hr>
						<div class="schoolnav">
							<div class="col-md-5"></div>
								<div class="col-md-2">
									<a href="../dashboard.php">
										<img src="../assets/images/home-icon.png" class="tech_home_icon"  style="margin-bottom:20px;">
									</a>
								</div>
						<div class="col-md-5"></div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

						</div>
								
									<div class="comments"></div><!--meka wadak nah-->
								
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
					<input type='hidden' name='RequestCard' value='<?php "knowledge_hub/".basename($_SERVER["SCRIPT_FILENAME"]);?>'>
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
				  <input type="hidden" name="section" id="section" placeholder="Name" value="knowledge_hub" /> <!--custom by dinil-->		
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
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------dinil->
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
					</p>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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