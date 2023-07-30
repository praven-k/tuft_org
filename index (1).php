<html>







<?php

session_start();
ob_start();
$db =  mysqli_connect ("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die ("unable to connect");

if(!empty($_POST['submit'])) {
    
$db =  mysqli_connect ("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die ("unable to connect");


	$user = $_POST['username'];
	$password = $_POST['password'];
	$query = "select * from ganesh where username = '$user' and password = '$password'";
	$result = mysqli_query($db,$query);
	$count = mysqli_num_rows($result);
	if ($count > 0) { 
	
	$_SESSION['mjha'] = $user;
    $_SESSION['mjhb'] = $password;
		echo $user;echo $password;
	header("location:profile.php");
	 
	} else {
		echo "<h4><span style = color:orange>above fields are required";
		
	}
}  







?>


<head><title>page</title>
<link rel = "stylesheet" type = "text/css" href = "1111.css">
<meta name="a.validate.01" content="dcaf32187933a14234978eee313021ab98e5" />





</head>
<body>
<h1>Heelo ashok</h1>
<form method = "POST" action = "">
<div class = "loginpage">

<div class = "mess">

<h1><span style = "color:red"</span>LOGIN FORM</h1>
</div>
<div class = "group">
<input id = "user" type = "text" name = "username" class = "input" placeholder = "enter your username" >
</div>
<div class = "group">
<input id = "password" type = "password" name = "password" class = "nayak" placeholder = "enter your password" >
</div>
<div class = "kk">
<input type = "submit"  class = "register" name = "submit" value = "submit">

</div>
<div class = "aa">
<h3><a href = "front1.php"><span style = "color:green">create a new account</span></a>
</div>
<div class = "yy">
<h3><a href = "forget.php"><span style = "color:red">forget password</span></a></h3>
</div>
