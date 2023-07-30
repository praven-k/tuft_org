<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "front4.css">
<script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<?php
session_start();


echo "<h1 class = ee><span style = color:red>hello ".$_SESSION['mjha']."</span></h1>";

if(isset($_POST['submit'])) {
	$a = $_SESSION['mjha'];
$b = $_SESSION['mjhb'] ; 
echo $b;
$c = $_SESSION['mjhc'] ;
$d = $_SESSION['mjhd'] ;
$e = $_SESSION['mjhe'] ;

$aa = $_SESSION['mjhaa'] ;
$bb = $_SESSION['mjhbb'] ;
$cc = $_SESSION['mjhcc'] ;
 

	
$aaa = $_SESSION['mjhaaa'] ;
$bbb = $_SESSION['mjhbbb'] ;
$ccc = $_SESSION['mjhccc'] ;
$ddd = $_SESSION['mjhddd'] ;
$eee = $_SESSION['mjheee'] ;

$fff = $_SESSION['mjhfff'];

$tmp=$_FILES["file"]["tmp_name"];

      $extension = explode("/", $_FILES["file"]["type"]);
	  

      $name=$a.".".$b.".".$extension[1];
	  

    move_uploaded_file($tmp, "images/" . $name);


echo $a;
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");


$sql = "INSERT INTO ganesh (username,password,dateofbirth,gender,phone,favplace,favmovie,favdish,aboutlove,moretime,interested,favwork,stressremove,beahero,image) VALUES ('$a','$b','$c','$d','$e','$aa','$bb','$cc','$aaa','$bbb','$ccc','$ddd','$eee','$fff','$name')";


if(mysqli_query($db,$sql)) {
	header("location:ios.php");
} else {
	
	echo "not updated";
	
}
}



?>
<h1><span style = "color:green">upload your image</span></h1>

<form method = "POST" action = "" enctype = "multipart/form-data">

<input type = "file" name = "file" class = "br" value = "upload" />

<input type = "submit" name = "submit" value = "submit">