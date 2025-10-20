<?php
SESSION_START();
?>
<?php
include('../dbcon.php');
//upload.php

if(isset($_POST["image"]))
{
 $data = $_POST["image"];
 $image_array_1 = explode(";", $data);
 $image_array_2 = explode(",", $image_array_1[1]);
 $data = base64_decode($image_array_2[1]);
 $imageName = time() . '.png';
 //echo $imageName;
 file_put_contents($imageName, $data);
 echo "<img src='$imageName'>";
 
 		/*To be used in database record,dashboard,comment system,edit profile only otherwise use $imageName in this file*/
	$imgpath="signup/$imageName";
	$_SESSION['simgpath']=$imgpath;
	$_SESSION['imgUploadOk']=1;
}

/*
$dbimgpath=$_SESSION['simgpath'];
if(!empty($dbimgpath))
{
	echo "image not uploaded";
}
*/
//echo $imgpath;



//$sql = "UPDATE login SET img_path='$path' WHERE email='$dbuser' ";

/*if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/
?>
