<?php
session_start();

$RequestCard=$_SESSION['RequestCard'];

?>
<?php
include('../dbcon.php');
if(isset($_POST['submit']))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];
	$dbimgpath=$_SESSION['simgpath'];
	
	/*Filtering user's input to avoid xss*/
	
	$filteredfname = filter_var($fname, FILTER_SANITIZE_STRING);
	$filteredlname = filter_var($lname, FILTER_SANITIZE_STRING);
	$filteredemail = filter_var($email, FILTER_SANITIZE_EMAIL);
	$filteredmobile = filter_var($mobile, FILTER_SANITIZE_STRING);
	$filteredpassword =htmlspecialchars($password, ENT_QUOTES);	/*will encode double quotes only*/
	
	$sql="INSERT INTO login (first_name,last_name,email,password,number,img_path) VALUES ('$filteredfname','$filteredlname','$filteredemail','$filteredpassword','$filteredmobile','$dbimgpath')";

}



if ($conn->query($sql) === TRUE) 
{
	$sql="SELECT * FROM login WHERE  email='$email'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$_SESSION['loginok']=1;
	
	$_SESSION['suser']=$row["email"];
	$dbuser=$_SESSION['suser'];
	
	$_SESSION['spassword']=$row["password"];
	$dbpass=$_SESSION['spassword'];
	
	//setting up cookies to remember the user
	
	//cookie for email
	$cookie_name = "widasaUser";
	$cookie_user = $dbuser;	//email at cookie
	setcookie($cookie_name, $cookie_user, time() + (86400 * 360), "/"); // 86400 = 1 day
	
	//cookie for password
	$cookie_name2 = "widasaPass";
	$cookie_password = $dbpass;	//password at cookie
	setcookie($cookie_name2, $cookie_password, time() + (86400 * 30), "/"); // 86400 = 1 day
	
	//sending a message for the user
	$_SESSION['notification1']="Thanks for joining with us! Your WIDASA account created successfully ";
	$_SESSION['NotificationsNo']=$_SESSION['NotificationsNo']+1;			/*will calculate all notification number*/
	
	//redirect
	if($RequestCard!="")
	{
		echo 
		//"<script>window.history.back('../$RequestCard');</script>";         //if this not work use the following header(will not work if the browser dont have history)
		header("location:../$RequestCard");			//Uses for cards login redirection.If not work check Request card <input name='RequestCard' value="(meka)"> on login form in cards
	}
	else
	{
	header('location:../dashboard.php');
	}
	$conn->close();
}
else
{
	$_SESSION['loginok']=0;
	echo"<div style='background: linear-gradient(160deg, #50e2ed 0%, #1fc8db 51%, #2cb5e8 75%); padding:20;'>";
	echo"<h1><u><center>incorrect credentials!</center></u></h1>
	<br>
	<h3>
	
	<ul>
	<li>First of all upload you picture!it is a must.Then enter your details</li>
	if the error does not correct,
	<li>Make sure you entered a strong password</li>
	<li>Make sure you had not signed before using the same email address</li>
	<li>Make sure you entered a valid mobile number</li>
	<li>Make sure you accepted our tearms and conditions</li>
	</ul>
	
	</h3> ";
	echo"<center>";
	echo"<a href='signup.html'>";
		echo"<button id='btntry'><h3>Try Again</h3>";
			echo"<Try Again>";
			echo"</button>";
	echo"</a>";
	echo"</center>";
	echo"</div><br>";
}
/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/

?>
<style>
#btntryfup
{
 background:#EE5F00;
 border:5px; 
 border-radius:50px;
 padding:10 60;
 color:white;
}
#btntry :hover
{
	opacity:0.5%;
}
</style>
