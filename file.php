<head><title>chat</title>
<link rel = "stylesheet" type = "text/css"  href = "file.css">


</head>
<body>


<div id = "mm">
<form method = "POST">
<div id = "one">
<input type = "text" name = "message" class = "text" placeholder = "type your message"></div>
<input type = "submit" name = "submit" class = "register" value = "send">
</form>

</div>


<?php
session_start();
date_default_timezone_set("Asia/Calcutta");  
$date = date('d-m :H:i');

if(isset($_POST['submit'])) {
$oo = $_SESSION['applea'];
$dd = $_SESSION['rr'];
$msg = $_POST['message'];
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");
$sql = "INSERT INTO chat (id1,id2,message,time) VALUES ('$oo','$dd','$msg','$date')";
$ee = mysqli_query($db,$sql);
if($ee) {
    echo ".";
} else {
    echo "not inserted";
}
}
?>