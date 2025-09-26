<?php
session_start();

if(empty($_SESSION['loginok']) || $_SESSION['loginok'] == '')
{
    header("Location: login.html");
    die();
}
include('dbcon.php');
$dbuser=$_SESSION['suser'];

$sql = "SELECT * FROM login WHERE email='$dbuser'";
$result = $conn->query($sql);

if($_SESSION['NotificationsNo']==0)
{
	
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Widasa </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.jpg">
	<link rel="stylesheet" href="assets/css/style.css">	
  <script src="assets/jquery/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">	
  <link rel="stylesheet" href="assets/css/w3.css">

  <script src="assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="assets/mdbootstrap/css/bootstrap.css">         <!--bootstrap4 hear-->
  <link rel="stylesheet" href="assets/mdbootstrap/css/bootstrap.min.css">
	<script src="assets/js/script.js"></script>
</head>

<body>
<!--top bar-->
	<div class="container marginlogin">
		<div class="row">
		
				<div class="col-md-6 text-center">
					<a href="dashboard.php"><img src="assets/images/logo.png" class="login_logo"></a>
				</div>
				<div class="col-md-6 text-center"><h2>
					 <span class="d-none d-sm-inline alreadytxt"></span>
					  <a href="login.html" style="color:#37a000; letter-spacing: 3px;">Digital  E - Learning Platform</a></h2>
				</div>
			
		</div>
	</div>
<nav class="navbar navbar-expand navbar-dark bg-dark" style="background:#4CAF50 !important;">
      <a class="navbar-brand" href="dashboard.php">WIDASA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="AboutUs/about.html">About Us <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="AboutUs/support.html">Help <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
	<hr>
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link ">Profile</a>
                </li>
                
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>		
            </ul>
            <div class="tab-content py-4" style="margin-bottom:150px;">
                <div class="tab-pane active" id="profile">
                    <h2 class="mb-3">User Profile</h2>
                    <div class="row">
                        <div class="col-md-6">
								<?php
								if ($result->num_rows > 0)
							{
							  
							  while($row = $result->fetch_assoc()) 
							  {
								echo"<h4>Name : </h4>";
								echo $row["first_name"]." ". $row["last_name"] . "<br>" . "<br>";
								$editFirstName=$row["first_name"];
								$editLastName=$row["last_name"];
							  					    							
								echo"<h4>Email : </h4>";																
								echo $row["email"]."<br>" . "<br>";
								$editEmail=$row["email"];
								
								echo"<h4>Phone Number : </h4>";																
								echo $row["number"]."<br>" ."<br>";
								$editPhone=$row["number"];
								
								$editPassword=$row["password"];
							  }
							}						    
							?>
							
							
                        </div>
                        
                    </div>
					
                    <!--/row-->
                </div>               
                <div class="tab-pane" id="edit">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required name="edited_fname" type="text" value="<?php
								echo $editFirstName; //value meens what we can see first
								?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required name="edited_lname" type="text" value="<?php
								echo $editLastName;
								?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="<?php
								echo $editEmail;
								?>" disabled>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone number</label>
                            <div class="col-lg-9">
                                <input class="form-control" required name="edited_number" type="number" value="<?php
								echo $editPhone;
								?>">
                            </div>
                        </div>
                        <!--
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="State">
                            </div>
                        </div>
                        -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="password-field" required name="password" type="password" value="<?php
								echo $editPassword;
								?>"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        
                        <div class="form-group row" style="margin-bottom:50px;">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                               <input type="submit" name="save" class="btn btn-primary" value="Save And Exit">
                            </div>
                        </div>
                    
					<?php

						if ($_SERVER["REQUEST_METHOD"] == "POST") 
						{
						  $updated_fname = $_POST['edited_fname'];
						  $updated_lname = $_POST['edited_lname'];
						  $updated_number = $_POST['edited_number'];
						  $updated_password = $_POST['password'];
						  
						$filteredfname = filter_var($updated_fname, FILTER_SANITIZE_STRING);
						$filteredlname = filter_var($updated_lname, FILTER_SANITIZE_STRING);
						$filterednumber = filter_var($updated_number, FILTER_SANITIZE_STRING);
						$filteredpassword =htmlspecialchars($updated_password, ENT_QUOTES);	/*will encode double quotes only*/
						  
						  $sql = "UPDATE login SET first_name='$filteredfname' , last_name='$filteredlname' , number='$filterednumber' , password='$filteredpassword' WHERE email='$dbuser'";

							
							if (mysqli_query($conn, $sql)) {
							  echo "<h1 style='margin-bottom:100;'><center>";
							  echo"<script>location.replace('dashboard.php'); </script>";
							} else {
							  echo "Error updating details";
							}
							
						if ($conn->query($sql) === TRUE) {
							  
								$_SESSION['notification3']="Your profile updated successfully";   
								$_SESSION['NotificationsNo']=$_SESSION['NotificationsNo']+1;			/*will calculate all notification number*/
								
							 

						} 		
						
						}
						
					
					?>
					</form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img style="width:50%" class="mx-auto img-fluid img-circle d-block" alt="avatar" src="
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
			
           <!-- <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
				
            </label>-->
        </div>
    </div>
</div>
<div class="footer-bottom">
		 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</div>




				<!--password show/hide buttons-->
<style>
.field-icon {
	
  float: right;
  margin-left: -25px;
  margin-top: -50px;
  position: relative;
  z-index: 2;
}

</style>

<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".toggle-password2").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>
</html>