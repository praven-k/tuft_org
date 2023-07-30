<html>
<head><title>friends</title>
<link rel = "stylesheet" type = "text/css" href = "friend.css">
<script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<?php
session_start();
$pp = $_SESSION['applea'];
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");

$sql = "SELECT * FROM lord where id1 = '$pp' and sent = 'yes'";
$pa = mysqli_query($db,$sql);
$pb = mysqli_num_rows($pa);
$ka = "SELECT * FROM lord where id2 = '$pp' and sent = 'yes'";
$kb = mysqli_query($db,$ka);
$kc = mysqli_num_rows($kb);
if($pb > 0) {
    while($row = mysqli_fetch_array($pa)) {
        ?>
        <div class = "null">
        
        <?php $sc = $row['id2'];
        
        
       $_SESSION['maha'] = $sc; 
        $da = "SELECT * FROM ganesh where id = '$sc'";
$dc = mysqli_query($db,$da);
$dd = mysqli_num_rows($dc); ?>
		<tr>
        <th width = "100"><?php
        if ($dd > 0) {
            while ($roww = mysqli_fetch_array($dc)) {
                $dfd = $roww['id'];
?>
            
<div class = "one">
        <table cellspacing = "10" cellpadding = "10" ><tr><th>
		<?php echo '<img src = "images/'.$roww['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?></th><th>
		
        <?php echo $roww['username']; ?></th></tr></table></div>
        </div>
        <div class = "three">
        <table class = "table" cellspacing = "13" cellpadding = "15"><tr>
        <th><?php echo "<td><a href='vewdetails.php?id=" . $roww['id'] . "'>viewdetails</a></td>"?></th><th>
     
     
     <?php echo "<td><a href='op.php?id=".  $roww['id'] . "'>chat</a></td>"?></th></tr></table> <hr></div>
     
</div><?php

        
            }?><?php
        }


    }
}
if($kc > 0) {
    while($ro = mysqli_fetch_array($kb)) {
        ?>
        <div class = "null">
    
        <?php $scc = $ro['id1'];
        
        
       $_SESSION['maha'] = $sc; 
        $da = "SELECT * FROM ganesh where id = '$scc'";
$dc = mysqli_query($db,$da);
$dd = mysqli_num_rows($dc); ?>
		<?php
        if ($dd > 0) {
            while ($r = mysqli_fetch_array($dc)) {
                $cdd = $r['id'];
                $_SESSION['id'] = $cdd;

            

        ?>
        
		<div class = "one">
        <table cellspacing = "10" cellpadding = "10"><tr><th>
        <?php echo '<img src = "images/'.$r['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?></th><th>
		
        <?php echo $r['username']; ?></th></tr></table></div>
        <div class = "three">
        <table class = "table" cellspacing = "13" cellpadding = "15"><tr><th>
        <?php echo "<td><a href='vewdetails.php?id=" . $r['id'] . "'>viewdetails</a></td>"?></th><th>
        
     
      <?php echo "<td><a href='op.php?id=" . $r['id'] . "'>chat</a></td>" ;?></th></tr></table></div>
    </div>
      

        <?php
            }?><hr><?php
        }
    }
}
?>
