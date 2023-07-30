<?php
session_start();
$pp = $_SESSION['applea'];

if(isset($_GET['id'])) {
    $kk = $_GET['id'];

}
$hh = "yes";
$ee = "no";
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");
$ab = "INSERT INTO lord (id1,id2,request,sent) VALUES ('$kk','$pp','ye','$hh')";
$ss = mysqli_query ($db,$ab);
if($ss) {
    
    $v = "DELETE FROM lord WHERE id1 = '$kk' and id2 = '$pp' and sent = '$ee' ";
		if( mysqli_query($db,$v) ) {
			echo "request accepted";
		} else {
			echo "something went wrong";
		}

} else {
    echo "something went wrong";
}

?>