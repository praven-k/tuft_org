<html>
<head>
    <style>
    table {
        width:85%;
        height:90px;
    }
    th {
        padding:15px;
    }
    input[type = submit] {
        font-size:50px;
        background-color:green;
    }
    </style>
    </head>
<body>
 
<form method = "POST">
    <table border = "1">
        <tr><th>
<input type = "submit" name = "submit1" value = friends></th><th>
<input type = "submit" name = "submit2" value = "findfriends"></th></tr><tr><th>
<input type = "submit" name = "submit3" value = "meet yourself"></th><th>
<input type = "submit" name = "submit4" value = "date"></th></tr>
</table>
</body>
<?php

session_start();
if(isset($_POST['button'])) {
    session_destroy();
    header("location:index.php");
}
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$pp = $_SESSION['mjha'];
$pb = $_SESSION['mjhb'];




$sql = "SELECT * FROM ganesh where username = '$pp' and password = '$pb' ";
$result = mysqli_query($db,$sql);

$count = mysqli_num_rows($result) ;
if($count > 0) {


	
	
	$i = 0;
	while($row = mysqli_fetch_array($result)) {
    
	?>
			<?php echo "<h2><span  style = color:red >hello ".$pp."</span></h1>";?>

	</table>
	<table>
<div class = "menu">
<tr><th><?php $pp = $row['id'];
$_SESSION['applea'] = $pp;  
 ?>
<?php echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?>
<form method = "post">
<input type = "submit" name = "button" class = "button" value = "logout">
</th>
<th><?php
echo "<td><a href='vewdetails.php?id=" . $row['id'] . "'>profile</a></td>" ;?>
</table>
<?php
$i++;
	}
}

