<?php

if(isset($_SESSION['NotificationsNo']))
{
	$_SESSION['NotificationsNo'] = $_SESSION['NotificationsNo'];
	
	if(isset($_SESSION['notification1']))
	{
		$_SESSION['notification1']=$_SESSION['notification1'];
	}
	
	if(isset($_SESSION['notification2']))
	{
		$_SESSION['notification2']=$_SESSION['notification2'];
	}

}
else
{
	$_SESSION['NotificationsNo'] =0;
}
?>

<header>
<nav class="navbar navbar-inverse" style="background:#656565; margin-bottom:0px; border-radius:0px;" data-spy="affix" data-offset-top="197">
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
          <li><a href="index.php">HOME</a></li>
          <li><a href="AboutUs/about.html">ABOUT US</a></li>
          <li><a href="AboutUs/support.html">HELP</a></li>
		  <li><a href="AboutUs/contact.php">CONTACT US</a></li>
          <li class="dropdown"><a href="#TopFeatures" class="dropdown-toggle" data-toggle="dropdown">Features<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="e_pasala.html"><h5>E Pasala</h5></a></li>
              <li><a href="tech_corner.html"><h5>Tech Corner</h5></a></li>
			  <li><a href="enjoy.html"><h5>Enjoy</h5></a></li>
			  <li><a href="how_to.html"><h5>How-To</h5></a></li>
			  <li><a href="knowledge_hub.html"><h5>Knowledge Hub</h5></a></li>
            </ul>
		  </li>
		  <li><a type="button" href="admin/dist/admin.php" id="cPanel" class="btnNotifications info" style="display:none;">ADMIN CONTROL PANEL</a></li>
		  <?php
			if(isset($_SESSION['adminLoginOk']))
			{
				 $login=$_SESSION['adminLoginOk'];
				 if($login==1)
				 {
					 echo "<script>
						$(document).ready(function(){
							$('#cPanel').css('display', 'inline');
						});
						</script>";
				 }
			}
		  ?>
        </ul>

		<ul class="navbar-right">			
		  <div class="text-center">
			<div id="NotificationBtn">
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifications" id="bellIconToolTip" class="notification">
				<i class="fa fa-bell" data-toggle="modal" data-target="#NotificationModal1"></i>
				 <span id="NotificationBadge" class="badge animated tada delay-3s" data-mdb-animation-reset="false"><?php echo $_SESSION['NotificationsNo']; ?></span>
				
				<!-----------------------display notifications---------------------------->
				 <?php
				 if($_SESSION['NotificationsNo']==0)
					{
						echo "<script>";
						echo "$(document).ready(function(){
								$('#NotificationBadge').hide();																							
							  });
							  
							  $('#NotificationBtn').click(function(){
									$('#notificationContent').html('<h3>No notifications for now.<br><br>දැනට දැනුම්දීම් නොමැත.</h3>');
								});
							  ";
							  
					  echo"</script>";
					}
				 elseif($_SESSION['NotificationsNo']!=0)
					{
						echo "<script>";
						echo "
							  $('#NotificationBtn').click(function(){
									$('#notificationContent').html('";
									if(isset($_SESSION['notification1']))
									{
										echo $_SESSION['notification1'];
										echo "<br><br>";
									}
									
									if(isset($_SESSION['notification2']))
									{
									echo $_SESSION['notification2'];
									echo "<br><br>";
									}	
									
									if(isset($_SESSION['notification3']))
									{
									echo $_SESSION['notification3'];
									echo "<br><br>";
									}	
									echo"');";
									echo "$('#NotificationBadge').hide();";	/*Remember to corrected it!*/	
						echo" });";							  							  
					  echo"</script>";	

					}
					
					
				 ?>
				 
			</a>  
		  </div>
		  </div>		  
        </ul>
      </div>
    </div>
 </div>
</nav>    
</header>	
				<!------notification modal------->

<div class="modal fade" id="NotificationModal1" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none !important;" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header text-center">
		  <h1 class="modal-title" style="color:#4285F4" id="exampleModalLabel">Notifications</h1>
		</div>
		<div class="modal-body text-center" id="notificationContent">
		 
		</div>
		<div class="modal-footer d-grid gap-2 d-md-block">
		  <button type="button" id="NotificationModalClose" class="btnNotifications info"  data-dismiss="modal" aria-label="Close">
			Close
		  </button>
		</div>
	  </div>
	</div>
</div>
	  