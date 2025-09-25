<?php
session_start();
?>
<?php
include('dbcon.php');

if(isset($_POST['submit']))
{
	$user=$_POST["email"];
	$password=$_POST["password"];
	$RequestCard=$_POST["RequestCard"];           //for the redirection to the card for login/signup using card links
}
$_SESSION['loginok']=0;
$_SESSION['suser']=$user;
$_SESSION['spassword']=$password;


$dbuser=$_SESSION['suser'];
$dbpass=$_SESSION['spassword'];

$sql="SELECT * FROM login WHERE  email='$dbuser'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/

if($dbuser==$row['email'] && $dbpass==$row['password'])
{
	$_SESSION['loginok']=1;
	//updating the cookie
	if(!empty($_POST["remember-me"])) 
	{
		setcookie("widasaUser", $dbuser, time() + (86400 * 36), "/");			/*check whether the remember me on login.php is ticked*/
		setcookie("widasaPass", $dbpass, time() + (86400 * 36), "/");
	}
	//login from cards
	if(isset($_POST['RequestCard']))
	{
		echo 
		"<script>window.history.back('$RequestCard');</script>";         //if this not work use the following header(will not work if the browser dont have history)
		//header("location:$RequestCard");			//Uses for cards login redirection.If not work check Request card <input name='RequestCard' value="(meka)"> on login form in cards
	}
	else
	{
	header('location:dashboard.php');
	}
	//admin login for adminPanel
	if($dbuser=="admin@widasa.com" && $dbpass=="MFWS#1")
	{
		$_SESSION['adminLoginOk']=1;
		setcookie("widasaAdminLogin", "1", time() + (86400 * 1), "/");
	}
}
else
{
	$_SESSION['loginok']=0;
	if(isset($_POST['RequestCard']))
	{
		//Uses for cards login redirection.If not work check Request card <input name='RequestCard' value="(meka)"> on login form in cards
		echo 
		"<script>
		alert('Invalid username or password!');
		window.history.back('$RequestCard');			//equal to clicking back button on browser(if not work,use a header)
		</script>";

		exit();
	}
	else
	{
	header('location:login.html');
	}
}
/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/

?>