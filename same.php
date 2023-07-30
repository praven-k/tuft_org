<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "findfriends.css">

<?php
session_start();
$a = $_SESSION['applea'];

$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$sql = "SELECT * FROM ganesh where id = '$a'";
//$ss = mysqli_query($db,$sql);
$result = mysqli_query($db,$sql);

$count = mysqli_num_rows($result) ;
if($count > 0) {
	
	

	
	
	while($row = mysqli_fetch_array($result)) {
	$ee = $row['gender'];
    echo $ee;
    }
}
if($ee) {
    $ff = "female";

} else {
    $ff = "male";
}
    $g = "SELECT * from ganesh where gender = '$ff'";
    $r = mysqli_query($db,$g);

$counts = mysqli_num_rows($r) ;
if($counts > 0) {
	
	

	
	
	while($roww = mysqli_fetch_array($r)) {
	//$ee = $roww['username'];
    //echo $ee;?>
    <div class = "one">
        <table   cellpadding = "15" cellspacing = "15">
        <tr>
        <th>
        <?php echo '<img src = "images/'.$roww['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?></th><th>
        <?php echo $roww['username']; ?></th>
        </tr></table></div>
        <div class = "three">
        <table class = "table" cellspacing = "20" cellpadding = "20"><tr>
        <th><?php echo "<td><a href='vewdetails.php?id=" . $roww['id'] . "'>viewdetails</a></td>"?></th><th><?php
    echo "<br>";
    }
}






?>

