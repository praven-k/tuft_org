<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "select2.css">
</head>



<body backround = "whatsapp.jpg">
<?php
session_start();
$err = $_SESSION['applea'];
$op = $_SESSION['rr'];


?>

<div id = "content"><?php
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");

$sql = "SELECT * FROM chat";
$result = mysqli_query($db,$sql);

$count = mysqli_num_rows($result) ;
if($count > 0) {?>
	
	

	<?php
	
	while($row = mysqli_fetch_array($result)) {
	?>
<div id = "one">

	<?php
	if($row['id1'] == $err && $row['id2'] == $op) {
		$color = "red";?>
		<span><?php echo $row['message'];
        echo "<br>";?> </span><h5><?php /*
        if($row['image']) {
         echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:200px;height:200px;">';
        } else {
            continue;
        }
        */
        ?></h5></div><div id = "two">
	
		<?php
	} elseif ($row['id2'] == $err && $row['id1'] == $op) {
		$color = "purple";?>
		<h4><?php echo $row['message'];
        echo "<br>";?></h4><h7><?php /*
        if($row['image']) {
         echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:200px;height:200px;">';
        } else {
            continue;
        } */
        ?></h7></div><?php

    } else {
        continue;
    }?>


    
     

	
	
	
	<?php
	}
}?> 