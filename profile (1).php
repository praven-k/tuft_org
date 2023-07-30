<html>
<head><title>profile</title>
<script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "profile.css">
<meta name="a.validate.01" content="dcaf32187933a14234978eee313021ab98e5" />
</head>

<body>
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
		<table align = "center" >
		<th>
		<?php echo "<h2><span  style = color:red >hello ".$pp."</span></h1>";?>
		<?php //echo '<img src = "data:image;base64,'.base64_encode($row['image']).'"alt="Avatar" class = "avatar" style ="width:120px;height:100px;">';?>
	</table>
	<table>
<div class = "menu">
<tr><th><?php $pp = $row['id'];
$_SESSION['applea'] = $pp;  
 ?>

</th>
<th><?php //  echo '<img src = "data:image;base64,'.base64_encode($row['image']).'"alt="Avatar" class = "avatar" style ="width:120px;height:100px;">';?>
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



?>
<table class = "table" >
<tr>
<div class = "gh">
<th>
<h2><a href = "friend.php" class = "hh"><span style = "color:orange">friend</span></a>
</th>
<th>
<div class = "kk">
<h2><a href = "findfriends.php" class = "kk"><span style = "color:green">findfriends</span></a>
</th>
<th>
<div class = "ll">
<h2><a href = "equal.php" class = "ll"><span style = "color:purple">meet yourself</span></a>


<a href = "qw.php" class = "ll"><span style = "color:red">opposite</span></a>
</th>
</table>