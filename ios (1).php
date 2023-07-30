<!DOCTYPE html>
<html>
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  text-align:left;
  padding-right:10px;
}

.dropdown:hover .dropdown-content {
  display: block;
}


#mySidenav a {
  position: absolute;
  left: 40px;
  transition: 0.3s;
  padding: 10px;
  width: 200px;
  text-decoration: none;
  font-size: 40px;
  color: white;
  border-radius: 0 5px 5px 0;
}
body {
    background-color:cyan;
    font-size:100px;
}

#mySidenav a:hover {
  left: 0;
}

#friends {
  top: 200px;
  background-color: #4CAF50;
  width:200px;
  padding:200px;
}

#findfds {
  top: 290px;
  background-color: #2196F3;
  padding : 200px;
}

#meetyourself {
  top:390px;
  background-color: #f44336;
  padding:200px;
}

#date {
  top: 490px;
  background-color: #555;
  padding:200px;
}
.menu {
   
    padding:90px;
    paddipx;
    
}
</style>
<link rel = "stylesheet" type = "text/css" href = "profil.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="friends.php" id="friends">friends</a>
  <a href="findfriends.php" id="findfds">findfriends</a>
  <a href="#" id="meetyourself">meetyourself</a>
  <a href="same.php" id="date">date</a>
</div>

<div style="margin-left:80px;">
  
</div>
<body>



 

</html>
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
		<?php //echo '<img src = "data:image;base64,'.base64_encode($row['image']).'"alt="Avatar" class = "avatar" style ="width:120px;height:100px;">';?>
<div class = "menu">
	
<tr><th><?php $pp = $row['id'];
$_SESSION['applea'] = $pp; 
$ee = $row['image'];
 ?>

</th>
<th><?php //  echo '<img src = "data:image;base64,'.base64_encode($row['image']).'"alt="Avatar" class = "avatar" style ="width:120px;height:100px;">';?>
<?php //echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?>
<div class="dropdown">
  <span><?php echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:200px;height:250px;">';?><span>
  <div class="dropdown-content">
<?php echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:340px;height:390px;">'; ?></div>
</div>
 
<form method = "post">
<input type = "submit" name = "button" class = "button" value = "logout">
</th>
<th><?php
echo "<td><a href='vewdetails.php?id=" . $row['id'] . "'>profile</a></td>" ;?></div>
<?php
$i++;
	}
}

?>