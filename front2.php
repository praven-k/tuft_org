<html>
<head>
    <script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<link rel = "stylesheet" type = "text/css" href = "front2.css">
</head>
<body>
<form method = "POST" action = "">

<?php
session_start();
$op = $_SESSION['mjha'];

if(isset($_POST['submit'])) {
$db = mysqli_connect("localhost","root","","anil");
$aa = $_POST['favplace'];
$bb = $_POST['favmovie'];
$cc = $_POST['favdish'];
$_SESSION['mjhaa'] = $aa;
$_SESSION['mjhbb'] = $bb;
$_SESSION['mjhcc'] = $cc;





if(empty($aa) or empty($bb) or empty($cc)) {
echo "all fields are required";

} else {
	header ("location:front3.php");
}
}
	?>

<div class = "red">
<?php
echo "<h1 class = ee><span style = color:red>hello ".$op."</span></h1>";

?>
<h1 class = "gg">details for password recover</h1>
<div class = "uiui">
<div class = "group">
<input id = "favplace" type = "text" name = "favplace" class = "input" placeholder = "enter your favourite place" >
</div>
<div class = "group">
<input id = "favmovie" type = "text" name = "favmovie" class = "input" placeholder = "enter your favourite movie" >
</div>
<div class = "group">
<input id = "favdish" type = "text" name = "favdish" class = "input" placeholder = "enter your favourite dish" >
</div>
<div class = "hr">

</div>
<div class = "kk">
<input type = "submit"  class = "register" name = "submit" value = "submit">
