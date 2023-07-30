<?php
session_start();
$dd = $_SESSION['applea'];
$aa = $_SESSION['mjha'];

$ss = $_SESSION['maha'];

if(isset($_GET['id'])){
    $txt = $_GET['id'];
    
}
$ak = "yes";
$pj = "no";
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$ab = "INSERT INTO lord (id1,id2,request,sent) VALUES ('$dd','$txt','$ak','$pj')";
$ac = mysqli_query($db,$ab);
if($ac) {
    echo "<span style = color:green><h1>request sent</h1></span>";
    

} else {
    echo "not succes";
}
