<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "front2.php">
    </head>
    <body>
        <input type = "password" name = "password" placeholder = "enter new password">
        
        <input type = "submit" name = "submit" value = "submit">
        
    </body>
    
<?php 
session_start(); 
if(isset($_POST['submit'])) {
$e = $_SESSION['applea'];
echo $e;
$n = $_POST['password'];

$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$sql = "UPDATE ganesh SET password = '$n' where id = '$e'" ; 
$ww = mysqli_query($db,$sql);
$rr = mysqli_num_rows($ww); 
if($rr > 0) {
    header("location:profile.php"); 
} else { 
    echo "eeee";
} 
}
?>