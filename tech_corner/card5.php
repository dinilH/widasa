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
					<h1>බොහෝ අය විශ්වාස කරන පරිගණක මිත්‍යා </h1>
				</div>
				<div>
					<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ComputerMyths1.jpg" width="600" height="400">
				</div>
				<div class="text-center parahTopic">
					<h2><u>1.)Virus guard එකක් තිබේ නම්, මගේ පරිගණකයට වෛරස එන්නේ නෑ.</u></h2>
				</div>
				
				<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ComputerMyths1.1.jpg" width="600" height="400">
						<!--1-->
				<div class="parah1">
					<p>
					බොහෝ අය සිතන්නේ Virus guard එකක් ස්ථාපනය කිරීමෙන් කිසිදු වෛරසයක් තම පරිගණකයට ආසාදනය වීම වළක්වනු ඇති බවයි. 
					ශක්තිමත් ප්‍රති-වයිරස මෘදුකාංගයක් තිබීම අතිශයින්ම වැදගත් වන අතර, එය බොහෝ තර්ජන වලින් ඔබව ආරක්ෂා කරනු ඇත. 
					කෙසේ වෙතත්, ඔබගේ virus guard මෘදුකාංගයට මීට පෙර කිසිදිනක එය හඳුනා නොගත් virus අල්ලා ගත නොහැක. 
					නව වෛරස්  මෙන්ම චරපුරුශ මෘදුකාංග(spyware)හා අනෙකුත් malware හැම විටම නිර්මාණය වෙමින් පවතී. 
					ඇත්ත වශයෙන්ම, ඔබ මෙම ලිපිය කියවාගෙන යන මොහොතේදීම නව එකක් නිර්මාණය වෙමින් පවතිනවා විය හැක.
					ඕනෑම පැරණි පanti-virus software එකක් install කිරීම ප්‍රමාණවත් නොවන්නේ එබැවිනි - නව තර්ජන
					වලක්වා ගැනීම සඳහා ඔබේ antivirus මෘදුකාංග නිරන්තරයෙන් යාවත්කාලීන කිරීම (update) ඉතා වැදගත් වේ . 
					එසේ වුවද, දක්ෂ වෛරසයක් තවමත් virus guard හරහා ලිස්සා යා හැකිය.
					<br><br>
					ඔබේ anti-virus මෘදුකාංගයට ඔබව මිනිස් දෝෂයකින් (human error)  ආරක්ෂා කළ නොහැක . ඔබ (හෝ ඔබගේ පවුලේ කෙනෙකු) සැක සහිත
					විද්‍යුත් තැපැල් ඇමුණුම් විවෘත කරන්නේ නම් හෝ free software නොසැලකිලිමත් ලෙස download කරන්නේ නම්, ඔබ ඔබේ පරිගණකයට
					වෛරස් ආරාධනා කරනවා විය හැකිය! ඔබට ශක්තිමත්, update කරන ලද anti-virus වැඩසටහනක් තිබුනද, සැමවිටම ආරක්ෂිත 
					අන්තර්ජාල ගවේෂණ භාවිතයන් භාවිතා කරන්න.
					</p>
				</div>
				<hr>
									<!--2-->
				<div class="text-center parahTopic">
						<h2><u>2.)Mac පරිගණකවලට වෛරස එන්නේ නෑ.</u></h2>
				</div>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

								
				<div class="parah1">
				වසර ගණනාවක් තිස්සේ මිනිසුන් උපකල්පනය කළේ වෛරස් ආසාදනය විය හැකි එකම පරිගණක windows බවයි. වින්ඩෝස් හි ජනප්‍රියතාවය සහ
				විශාල වෙළඳපල කොටස හේතුවෙන් mac අඩු තර්ජන වලින් ප්‍රයෝජන ලබා ඇත . නමුත්  කාලය වෙනස් වෙමින් තිබේ , සයිබර් අපරාධකරුවන් 
				mac වෙත නව අවධානයක් යොමු කර ඇත. 2012 දී,  Mac පරිගණක 600,000  ක්
				flashback නම් ට්රෝජන්  ආසාදනය විය  .Apple ඔබේ පරිගණක වෙළඳ නාමය නම්, ඔබේ නොසැලකිලිමත් දින අවසන්. එය හානිවලින් 
				ආරක්ෂා කර ගැනීම සඳහා ආරක්ෂක පියවර ගැනීම දැන් ඉතා වැදගත් වේ.
				</div>
				<hr>
				
				<!--read more / check the loginok-->
				<button class="readMore">Read more...</button>
				<div id="hiddenArticles" hidden>
										<!--3-->
						<div class="text-center parahTopic">
								<h2><u>3.) ඔබ ඔබේ ලැප්ටොප් බැටරිය  charge කළ යුත්තේ එය සම්පූර්ණයෙන්ම හිස් වූ විට පමණි.</u></h2>
						</div>
						
						
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ComputerMyths3.jfif" width="400" height="auto">
						
						<div class="parah1">
						ඔබට පුදුමද? මෙම මිථ්‍යාව බොහෝ දෙනා තුල ඇත. පරිගණක nickel cadmium බැටරි භාවිතා කරන විට, charge කිරීමට පෙර 
						බැටරිය සම්පූර්ණයෙන්ම බැස යන තෙක් බලා සිටීම වඩාත් සුදුසුය. කෙසේ වෙතත්, අද වන විට භාවිතා වන <b>lithium-ion</b> බැටරි ආරෝපණය කිරීමට  
						බැටරිය සම්පූර්ණයෙන්ම බැස යන තෙක්  ඔබ බලානොසිටින්නේ නම් එය දිගු කල් පවතිනු ඇත. ඔබ හිස් හෝ අඩු lithium-ion බැටරියක් ආරෝපණය කරන විට, එය ආරෝපණයට රසායනික
						ප්‍රතිරෝධයක් පෙන්වය් . එමනිසා, නැවත ආරෝපණය කිරීමට පෙර ඔබේ බැටරි බිංදුවට නොයැවීම සුදුසුය!
						</div>
						<hr>
												<!--4-->
						<div class="text-center parahTopic">
								<h2><u>4.)  ඔබ වෙබ් ලිපිනයට පෙර "www" ටයිප් කළ යුතුය. </u></h2>
						</div>
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ComputerMyths4.png" width="400" height="auto">
						
						<div class="parah1">
						මෙය තවත් මිථ්‍යාවකි. මුලදී, අන්තර්ජාලය නිර්මාණය කර ඇත්තේ වෙබ් අඩවියේ ලිපිනයක අත්‍යවශ්‍ය අංගයක් වන 
						“www” සමගය. කෙසේ වෙතත්, අද අන්තර්ජාලය ක්‍රියා කරන ආකාරය සමඟ,වෙබ් අඩවියේ domain name පමණක් type කිරීම ප්‍රමාණවත්ය . 
						(සටහන: මෙය ක්‍රියාත්මක කිරීම සඳහා ඔබ තවමත් ".com" කොටස ඇතුළත් කළ යුතුය.) නිදසුනක් ලෙස, ඔබේ වෙබ් බ්‍රව්සරයට 
						<a href="https://widasa.com">widasa.com</a> ටයිප් කිරීමෙන් ඔබව කෙලින්ම widasa මුල් පිටුවට ගෙන යනු ඇත. "Google.com" හෝ "apple.com" වැනි ඔබේ
						ප්‍රියතම වෙබ් අඩවි සමඟ එය උත්සාහ කරන්න!
						<br><br>
						</div>
						<hr>
												<!--5-->
						<div class="text-center parahTopic">
								<h2><u>5.) ඔබේ hard disk එකෙහි  ඇති files ගණන එහි ක්‍රියාකාරිත්වයට බලපායි.</u></h2>
						</div>
						<img class="insideImg1" alt="img" src="../assets/images/tech_corner/ComputerMyths5.jfif" width="400" height="auto">
						
						<div class="parah1">
						පරිගණකයක් සෙමින් ධාවනය වන විට, සමහරුන් files delete කිරීම ආරම්භ කරනවා. යථාර්ථය නම්, ඔබේ පරිගනකයේ hard disk 
						සම්පුර්ණයෙන්ම පිරී නොමැති නම්, එය මත ගබඩා කර ඇති files ගණන පරිගණක වේගය සමඟ එතරම් සම්බන්ධයක් නැත. මන්දගාමී 
						පරිගණක ආසාදනයකින් හෝ එකවර වැඩිපුර program run වීම වැනි දෑ සාමාන්‍යයෙන් පරිගණකයක් සෙමින් ධාවනයට  හේතු වේ .
						<br><br>
						
						ඔබේ පරිගණකය මන්දගාමී වුවහොත්, හොඳම ක්‍රියාමාර්ගය වන්නේ<br>
						<ol>
						<li> ඔබ භාවිතා නොකරන ඕනෑම වැඩසටහන් close කිරීම.</li>
						<li>ඔබේ පරිගණකයේ ක්‍රියාකාරිත්වයට බලපාන  malware හඳුනා ගැනීමට පරිගණකය ස්කෑන් කිරීම. </li>
						<li>එසේම, පරිගණකය නැවත ආරම්භ කිරීමෙන් එහි RAM clear කිරීම. </li>
						<li>OS/Software update කිරීම් සම්පූර්ණ කිරීම. </li>
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
							<!------ Coded by Dinil Hansara/ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~ -------->

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
								<a style="text-decoration: none;" href="card4.php">
								
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
					<input type='hidden' name='RequestCard' value='<?php "tech_corner/".basename($_SERVER["SCRIPT_FILENAME"]);?>'>
					<!------------------------------------------------------------------->
					<!------------------------------------------------------------------->
					<!------------------------------------------------------------------->				
			  <button type="submit" class="submitbtn" name="submit">login</button>			  			    
			</form>
				  <p class="message">Not registered? 
				  <button type="submit" class="submitbtn" name="submit">
					<a href="../signup/signup.html">Create an account</a>
				  </button>
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
				  <input type="hidden" name="card" id="card" placeholder="Name" value="5" /> <!--custom by dinil-->
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
	</footer>	<!------ Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 /copyrights reserved/ -------->

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