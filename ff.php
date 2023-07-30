<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "front1.css">
<head>
<body>


<?php

session_start();
$rr = $_SESSION['applea'];
echo $rr;


$ss = $_POST['password'];

if(isset($_POST['submit'])){
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");

$sql = "UPDATE ganesh SET password = '$ss' WHERE id = '$rr'";
$qq = mysqli_query($db,$sql); 
$ww = mysqli_num_rows($qq); 
$sq = "SELECT * from ganesh where id = '$rr'";

$q = mysqli_query($db,$sq); 
$w = mysqli_num_rows($q); 

while($row = mysqli_fetch_array($q)) { 
    $jj = $row['username'];
    $_SESSION['mjha'] = $jj;
    $_SESSION['mjhb'] = $ss;
}
if($qq) {
    header("location:profile.php");

} else {
    echo "lose";
}
}
?>
<form method = "POST">
    <input type = "password" name = "password">
    <input type = "submit" name = "submit" value = "submit">
</form>