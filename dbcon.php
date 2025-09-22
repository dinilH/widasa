<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="widasa";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed Please recheck database sir! database එක CD එකේ තියෙනෝ .  database සර්ගේ එකට  import කරගන්න. නැත්තන් web site එක වැඩ කරන්නේ නෑ .වෙන අව්ලක් වගේ හිතෙනෝ නම් dbcon.php check කරන්න: " . $conn->connect_error);
}
//echo "Connected successfully";



/*------------------------    Coded by Dinil Hansara,ESOFT METRO CAMPUS(GALLE BRANCH) reg no:-GAL/A-0359/01/2020 ~copyrights reserved~  -------------------------------*/
?>