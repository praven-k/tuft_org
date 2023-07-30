<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "front3.css">
<script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<?php
session_start();
$op = $_SESSION['mjha'];
echo "<h1 class = ee><span style = color:red>hello ".$op."</span></h1>";




if(isset($_POST['submit'])) {
$db = mysqli_connect("localhost","root","","anil");
$aaa = $_POST['aboutlove'];
$bbb = $_POST['moretime'];
$ccc = $_POST['interested'];
$ddd = $_POST['favwork'];
$eee = $_POST['stressremove'];
$fff = $_POST['beahero'];
$_SESSION['mjhaaa'] = $aaa;
$_SESSION['mjhbbb'] = $bbb;
$_SESSION['mjhccc'] = $ccc;
$_SESSION['mjhddd'] = $ddd;
$_SESSION['mjheee'] = $eee;

$_SESSION['mjhfff'] = $fff;






if(empty($aaa) or empty($bbb) or empty($ccc) or empty($ddd) or empty($eee) or empty($fff)) {
echo "all fields are required";

} else {
	header ("location:55.php");
}
}
	?>
<form method = "POST" action = "">
<div class = "tuyy">
<div class = "dropdown">
<span><input id = "aboutlove" type = "text" class = "input" name = "aboutlove" placeholder = "about love you feel" ></span>
<div class = "dropdown-content">

<p><span style = "color:green">infatuation</p>
<hr>
<p><span style = "color:green">happiness</p>
<hr>
<p><span style = "color:green">best understanding</p>
<hr>
<p><span style = "color:green">fake believe</p>



</div>
</div>
<div class = "group">
<div class = "dropdown">
<span><input id = "moretime" type = "text" class = "input" name = "moretime" placeholder = "u like to spend moretime with " ></span>
<div class = "dropdown-content">
<p><span style = "color:blue">family</p>
<hr>
<p><span style = "color:blue">friends</p>
<hr>
<p><span style = "color:blue">kids</p>
<hr>
<p><span style = "color:blue"> watching movies</p>
</div>
</div>
<div class = "group">
<div class = "dropdown">
<span><input id = "interested" type = "text" class = "input" name = "interested" placeholder = "your interest in" ></span>
<div class = "dropdown-content">
<p><span style = "color:orange">singing</p>
<hr>
<p><span style = "color:orange">dance</p>
<hr>
<p><span style = "color:orange">sports</p>
<hr>
<p><span style = "color:orange">acting</p>
<hr>
<p><span style = "color:orange">nventing new</p>
<hr>
<p><span style = "color:orange">reading</p>
<hr>
<p><span style = "color:orange">writing</p>
</div>
</div>
</div>
<div class = "dropdown">
<div class = "group">
<span><input id = "favwork" type = "text" class = "input" name = "favwork" placeholder = "your favourite work" >
<div class = "dropdown-content">

<p><span style = "color:red">eating</p>
<hr>
<p><span style = "color:red">sleeping</p>
<hr>
<p><span style = "color:red">travelling</p>
<hr>
<p><span style = "color:red">parties</p>
<hr>
<p><span style = "color:red">praying god</p>
<hr>
<p><span style = "color:red">chichatting</p>
<hr>
<p><span style = "color:red">playing</p>
<hr>
<p><span style = "color:red"><option value = "reading">reading</p>
<hr>
<p><span style = "color:red">writing</p>

</div>
</div>
</div>
<div class = "dropdown">

<div class = "group">
<span><input id = "stressremove" type = "text" class = "input" name = "stressremove" placeholder = "what you do to remove stress" ></span>
<div class = "dropdown-content">
<p><span style = "color:violet">excercise</p>
<hr>
<p><span style = "color:violet">spend time with friends and family</p>
<hr>
<p><span style = "color:violet">laugh</p>
<hr>
<p><span style = "color:violet">yoga or meditation</p>
<hr>
<p><span style = "color:violet">listening music</p>
<hr>
<p><span style = "color:violet">watching movies</p>
<hr>
<p><span style = "color:violet">playing</p>
<hr>
<p><span style = "color:violet">reading or writing</p>
</div>
</div>

</div>
<div class = "dropdown">
<div class = "group">
<span><input id = "beahero" type = "text" class = "input" name = "beahero" placeholder = "where u will choose if u got a chance to be a hero " >
<div class = "dropdown-content">


<p><span style = "color:cyan">friends</p>
<hr>
<p><span style = "color:violet">family</p>
<hr>
<p><span style = "color:violet">society</p>
</div>
</div>



</div>
<div class = "kk">
<input type = "submit"  class = "register" name = "submit" value = "next">
