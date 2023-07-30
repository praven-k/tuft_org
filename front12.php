<html>
<?php
session_start();
if(isset($_POST['submit'])) {
$db = mysqli_connect("localhost","root","","anil");
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['dateofbirth'];
$d = $_POST['gender'];
$e = $_POST['phone'];
$_SESSION['mjha'] = $a;
$_SESSION['mjhb'] = $b;
$_SESSION['mjhc'] = $c;
$_SESSION['mjhd'] = $d;
$_SESSION['mjhe'] = $e;
$sql = "SELECT * FROM main where username = '$a' and password = '$b' ";
$results = mysqli_query($db,$sql) ;


if(empty($a) or empty($b) or empty($c) or empty($d) or empty($d)) {
echo "all fields are required";
} elseif (mysqli_num_rows($results) > 0) {
	echo "username and password exists";
	//header ("location:front2.php");
} else {
	header ("location:front2.php");
	//echo "username and password exists";
}
}
	?>

<head><title>page</title>
<link rel = "stylesheet" type = "text/css" href = "front1.css">




</head>
<body>

<form method = "POST" action = "">
<div class = "loginpage">

<div class = "mess">

<h1><span style = "color:green">REGISTER FIRST</span></h1>
</div>
<div class = "group">
<input id = "user" type = "text" class = "input" name = "username" placeholder = "enter your name" >
</div>
<div class = "group">
<input id = "password" type = "password" class = "input" name = "password" placeholder = "set a strong password" >
</div>
<div class = "group">
<input id = "dateofbirth" type = "text" class = "input" name = "dateofbirth" placeholder = "dd/mm/year" >
</div>
<div class = "group">
<input id = "gender" type = "text" class = "input" name = "gender" placeholder = "gender" >
</div>
<div class = "group">
<input id = "phonenumber" type = "text" name = "phone" class = "input" placeholder = "enter your phone number" >
</div>
<div class = "kk">
<input type = "submit" class = "register" name = "submit" value = "next">

</div>
</div>