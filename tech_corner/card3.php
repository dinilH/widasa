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
  
  	<!------ Coded by Dinil-ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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
					<h1>වට්ස්ඇප් රහස් </h1>
				</div>
				<div>					
					<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Whatsapp1.jpg" width="600" height="400">
				</div>
				<div class="text-center parahTopic">
					<h2><u>ඔබ ඉන්න තැන වෙනත් අයෙකුට යවන්න </u></h2>
				</div>
										<!--1-->
				<div class="parah1">
					<p>
					WhatsApp ඔබට සම්බන්ධතා සහ ඡායාරූප යැවීමට මෙන්ම සම්බන්ධතා හෝ ලේඛනයක් බෙදා ගැනීමට ඉඩ සලසයි, 
					නමුත් ඔබට ඔබේ ස්ථානයද යැවිය හැකිය. ඔබ කොතැනක හෝ මිතුරෙකු මුණගැසෙන්නේ නම් මෙය ඉතා පහසුය, විශේෂයෙන්
					ඔබ Share Live Location තෝරා ගන්නේ නම්, එමඟින් ඔබ තෝරා ගන්නා කාල සීමාව සඳහා ඔබේ සජීවී ස්ථානය බැලීමට ඔබේ සම්බන්ධතාවයට
					ඉඩ සලසයි, එවිට ඔවුන්ට ඔබව නිරීක්ෂණය කළ හැකිය. කාල වේලාවන් මිනිත්තු 15, පැය 1 හෝ පැය 8 ලෙස සකසා ඇත.
					<br><br>
					<u>Android: Chat > Specific chat > Tap on the paperclip to the right of the message box > Location > Share Live Location > කාල රාමුව තෝරන්න.</u>
					<br><br>
					<u>iOS: Chat > Specific chat > Tap on "+" to the left of the message box > Location > Share Live Location > කාල රාමුව තෝරන්න.</u>
					</p>
				</div>
				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h2><u>ඔබගේ සියලු  chat සොයන්න</u></h2>
				</div>
				
				<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Whatsapp2.jpg" width="400" height="auto">
				
				<div class="parah1">
				කවුරුහරි ඔබට ඔවුන්ගේ ලිපිනය එවා ඇති අතර විශේෂිත වැඩසටහනක් හෝ චිත්‍රපටයක් ගැන කතා කිරීම ඔබට මතක ඇති නමුත් ඔබ සොයන දේ සොයා ගැනීමට 
				ඔබගේ සියලු පණිවිඩ අනුචලනය කිරීමට ඔබට අවශ්‍ය නැත. 
				IOS හි ඔබගේ සියලු කතාබස් වලට ඉහළින් සෙවුම් තීරුවක් ඇත. ඇන්ඩ්රොයිඩ් මත  , සෙවුම් අයිකනය තියෙනවා.
				
				<br><br>
				නගර නාමයක ආරම්භයේ සිට ඔබ නිශ්චිත වචනයකට ලිපිනයක් සොයන්නේ නම් ඔබට සෙවුම් තීරුවට ඕනෑම දෙයක් ටයිප් කළ හැකි අතර 
				එම වචනය සමඟ ඇති සියලුම කතාබස් විශේෂිත පණිවිඩ ලෙස පහතින් දිස්වනු ඇත.
				අදාළ ප්‍රති result ලයක් මත ක්ලික් කිරීමෙන් ඔබ කළ කතාබස් සංවාදයේ එම කොටස වෙත ඔබව ගෙන යනු ඇත.
				</div>
				
<!---------------------------------------------------------------hidden area-------------------------------------------------------------->

				<!--read more / check the loginok-->
				<button class="readMore">Read more...</button>
				<div id="hiddenArticles" hidden>
				
										<!--3-->
						<div class="text-center parahTopic">
								<h2><u>විශේෂිත chat සොයන්න</u></h2>
						</div>
						<div class="parah1">
						ඔබගේ සියලු කතාබස් වලට වඩා විශේෂිත කතාබහක් සෙවීමට ඔබට අවශ්‍ය නම්, මෙයද කළ හැකිය. 
						සමහර විට ඔබ නිශ්චිත රැස්වීම් ස්ථානයක් ගැන සංවාදයක් පැවැත්වූවා විය හැකිය, 
						නැතහොත් ඔවුන් ඔබට ඔවුන්ගේ වෙනත් සම්බන්ධතා අංකය හෝ ඔවුන්ගේ ලිපිනය උදාහරණයක් ලෙස එවා ඇත.						
						<br><br>
						
						<u>iOS: Chats > Specific chat > Tap on contact info at the top > Chat Search > Type in the search bar that appears at the top of that specific chat.</u>
						<br><br>
						
						<u>Android: Chats > Specific chat > Open the menu top right > Search > Type in the search bar that appears at the top of that specific chat.</u>						
						</div>
						<hr>
												<!--4-->
						<div class="text-center parahTopic">
								<h2><u>ඔබ වැඩිපුරම chat කරන්නේ කා සමඟදැයි සොයා බලන්න</u></h2>
						</div>
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Whatsapp4.png" width="400" height="auto">
						
						<div class="parah1">
						ඇත්තටම ඔබේ ප්‍රියතම පුද්ගලයා කවුද? එය ඔබ සිතන අය නොවිය හැකිය. ඔබ වැඩිපුරම පණිවුඩ යවන පුද්ගලයින් සොයා ගැනීමට 
						ක්‍රමයක් ඇති අතර එක් එක් පුද්ගලයා කොපමණ ගබඩා ප්‍රමාණයක් ගන්නේද යන්න වෙනත් දේ අතර වේ.
						<br><br>
						<u>iOS & Android: Settings > Data and Storage Usage > Storage Usage > Select Contact.</u>
						</div>
						<hr>
						
												<!--5-->
						<div class="text-center parahTopic">
								<h2><u>ඔබ කොපමණ දත්ත භාවිතා කරනවාදැයි සොයා බලන්න</u></h2>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Whatsapp5.jpg" width="400" height="auto">
						
						<div class="parah1">
						ඔබගේ දත්ත භාවිතය ගැන ඔබ කනස්සල්ලට පත්ව සිටී නම්, ඔබ කොපමණ ප්‍රමාණයක් භාවිතා කරනවාද යන්න ඔබට හරියටම සොයාගත හැකිය. 
						යවන ලද සහ ලැබුණු පණිවිඩ ගණන මෙන්ම යවන ලද සහ ලැබුණු දත්තවල වාර්තාවක් ඔබට ලැබෙනු ඇත. 
						<br><br>
						<u>iOS & Android: Settings > Account > Data Usage > Network Usage.</u>
						</div>
						<hr>
													<!--6-->
													
						<div class="text-center parahTopic">
								<h2><u>Web සහ ඩෙස්ක්ටොප් එකේ WhatsApp භාවිතා කරන්න</u></h2>
						</div>	
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Whatsapp6.jpg" width="400" height="auto">
						<div class="parah1">
						WhatsApp ඔබගේ ජංගම දුරකථනයට පමණක් සීමා නොවේ. ඔබගේ දුරකථනයෙන් සියල්ල සමමුහුර්ත(sync) කරන වෙබ් යෙදුමක් ඇති අතර
						ඩෙස්ක්ටොප් යෙදුමක් ද ඇත.
						<a href="https://web.whatsapp.com/" target="_blank">https://web.whatsapp.com</a> වෙත යන්න  හෝ ඩෙස්ක්ටොප් යෙදුම <a href="https://whatsapp.com/download/" target="_blank">https://whatsapp.com/download</a> වෙතින් බාගන්න.						
						<br><br>
						
						එවිට ඔබට ඔබගේ දුරකථනයෙන් WhatsApp විවෘත කළ යුතුය> Settings > WhatsApp Web/Desktop >බ්‍රව්සරයේ හෝ ඩෙස්ක්ටොප් යෙදුමේ 
						QR කේතය පරිලෝකනය කරන්න> උපදෙස් අනුගමනය කරන්න.						
						<br><br>
						
						වෙබ් සහ ඩෙස්ක්ටොප් යෙදුම යන දෙකම ඔබේ පරිගණකයේ කතාබස් සහ ඇඟවීම් ලබා දෙන අතර ඉක්මනින් හා පහසුවෙන් පිළිතුරු දීමට ඔබට ඉඩ සලසයි.
						ඔබගේ දුරකථනය ක්‍රියාත්මක වීමට එය සම්බන්ධ කිරීමට අවශ්‍ය වුවද ඔබගේ සම්බන්ධතාවය නැති වුවහොත්, 
						ඔබගේ දුරකථන සම්බන්ධතාවය නැවත ලබා ගන්නා තෙක් වෙබ් යෙදුම sync කිරීම නවත්වනු ඇත. 
						</div>
						<hr>
													<!--7-->
													
						<div class="text-center parahTopic">
								<h2><u>ඔබගේ WhatsApp chat screen wallpaper වෙනස් කරන්න</u></h2>
						</div>
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/Whatsapp7.jpg" width="400" height="auto">

						<div class="parah1">
						WhatsApp සතුව සම්මත wallpaper ඇත, එය ඔබගේ සියලු කතාබස් වල පසුබිමක් ලෙස දිස්වනු ඇත. විවිධ  වර්ණ, 
						ඔබේම ඡායාරූප මෙන්ම වට්ස්ඇප් වෙතින්ම පින්තූර එකතුවක් ඇතුළුව ඔබට මෙම  wallpaper වෙනස් කළ හැකිය.						
						<br><br>
						
						<u>iOS: Settings > Chats > Chat Wallpaper > Choose Wallpaper Library, Solid Colours or Photos තෝරන්න.</u> 				
						<br><br>
						
						<u>Android: Settings > Chats > Chat Wallpaper > Wallpaper Library, Solid Colours, Gallery, Default or No Wallpaper තෝරන්න.</u>
						</div>
						<hr>
												
												<!--8-->
						
						<div class="video-responsive">
							<iframe width="900" height="506" src="https://www.youtube.com/embed/7jIu2NUUC5I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
						</div>
						<div class="text-center parahTopic">
								<h1>අපි තවත් Whatsapp රහස් සමග ඊලග අතිරේකයෙන් හමු වෙමු</h1>
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
								<a style="text-decoration: none;" href="card2.php">
								
									<img src="../assets/images/tech_corner/TC2.jpg" alt="Avatar" id="rightimg">
								
								</a>  
							</div>
							
							<!--link 3-->
							<div class="card">
								<a style="text-decoration: none;" href="card4.php">
								
									<img src="../assets/images/tech_corner/TC4.jpg" alt="Avatar" id="rightimg">
								
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
				  <input type="hidden" name="section" id="section" placeholder="Name" value="tech_corner" /> <!--custom by dinil-->		
				  <input type="hidden" name="card" id="card" placeholder="Name" value="3" /> <!--custom by dinil-->
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