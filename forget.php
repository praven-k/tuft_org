
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "front1.css">
<body>



<form method = "POST" action = "">
<input type = "text" name = "username" placeholder = "enter your username">
<input type = "text" name = "favdish" placeholder = "enter your favourite dish">
<input type = "text" name = "favplace" placeholder = "enter your favourite place">
<input type = "text" name = "favmovie" placeholder = "enter your favourite movie">
<input type = "submit" name = "submit" value = "submit"></form>
<?php 
session_start();
if(isset($_POST['submit'])) {
$name = $_POST['username']; 
$fav = $_POST['favdish']; 
$favplace = $_POST['favplace']; 
$favmovie = $_POST['favmovie']; 

$_SESSION['mm'] = $name; 
$_SESSION['nn'] = $fav;
$_SESSION['vv'] = $favplace; 
$_SESSION['cc'] = $favmovie; 

    
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");
$sql = "SELECT * from ganesh where username = '$name' and favplace = '$favplace' and favmovie = '$favmovie' and favdish = '$fav'"; 
$aa = mysqli_query($db,$sql);
$saa = mysqli_num_rows($aa); 
if($saa > 0) { 
   while($r = mysqli_fetch_array($aa)) { 
        $ee = $r['id'];
        $_SESSION['applea'] = $ee;
    header("location:ff.php"); 
   }
    
} else {
    echo "ss";
}
}
