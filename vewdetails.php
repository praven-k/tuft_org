<html>
<head>
<title>viewdetails.php</title>
<link rel = "stylesheet" type = "text/css" href = "viewdetails.css">;
<script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>

<?php
session_start();
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$pp = $_SESSION['mjha'];

if(isset($_GET['id'])) {
    $n = $_GET['id'];
    
}


$sql = "SELECT * FROM ganesh where id = '$n' ";
$result = mysqli_query($db,$sql);

$count = mysqli_num_rows($result) ;
if($count > 0) {


	
	
	$i = 0;
	while($row = mysqli_fetch_array($result)) {
    
	?><div class = "main">
		
	
	
	<table align = "center">
<div class = "menu">
<tr>

<th><?php // echo '<img src = "data:image;base64,'.base64_encode($row['image']).'"alt="Avatar" class = "avatar" style ="width:120px;height:100px;">';?>
		 <?php echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?>
</th></tr>
<tr><td align = "center">username:
<th>
<?php echo $row['username']; ?> 
</th></td></tr>
<tr><td align = "center">aboutlove
<th>
<?php echo $row['aboutlove']; ?>
</th></td></tr><tr><td align = "center">interested in:
<th>
<?php echo $row['interested'];?>
</th></td></tr><tr><td align = "center">favwork:
<th>
<?php echo $row['favwork'];?>
</th></td></tr><tr><td align = "center">steressremove :
<th>
<?php echo $row['stressremove'];?>
</th></td>
</tr>

</table>
</div>
<?php
$i++;
	}
}



?>