<?php
session_start();
?>

<?php
if(!isset($_COOKIE["widasaUser"]) and !isset($_COOKIE["widasaPass"])) 
{
}
else
{
setcookie("widasaUser", "", time() - 360 , "/");
setcookie("widasaPass","", time() - 360 , "/");
setcookie("widasaAdminLogin","", time() - 360 , "/");

}
if(isset($_COOKIE["widasaAdminLogin"]))
{
	setcookie("widasaAdminLogin", "", time() - 360 , "/");
}
session_unset();
session_destroy();
//$_SESSION['loginok']=0;
header('location:index.php');




?>