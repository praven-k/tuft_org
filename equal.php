<?php
session_start();
$pp = $_SESSION['mjha'];


$ss = $_SESSION['mjhb'];

$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$sql = "SELECT * FROM ganesh where username = '$pp' and password = '$ss'";
$aa = mysqli_query($db,$sql);
$ab = mysqli_num_rows($aa);
if ($ab > 0) {
    while($row = mysqli_fetch_array($aa)) {
        $la = $row['id'];
        $_SESSION['orgid'] = $la;
        
        $ac = $row['aboutlove'];
        $_SESSION['al'] = $ac;
        $ad = $row['moretime'];
        $_SESSION['mt'] = $ad;
        $ae = $row['interested'];
        $_SESSION['in'] = $ae;
        $af = $row['favwork'];
        $_SESSION['fw'] = $af;
        $ag = $row['stressremove'];
        $_SESSION['sr'] = $ag;
        $ah = $row['beahero'];
        $_SESSION['bah'] = $ah;
        $ka = "SELECT * FROM ganesh where aboutlove = '$ac' and moretime = '$ad' and interested = '$ae' and favwork = '$af' and stressremove = '$ag' and beahero = '$ah'";
        $kb = mysqli_query($db,$ka);
        $kc = mysqli_num_rows($kb);
        if($kc > 0) {
            while ($roww = mysqli_fetch_array($kb)) {
            $sc = $roww['id'];
            $_SESSION['id'] = $sc;

            if($sc == $la ) {
                continue;
            }
        
            ?>
            <head>
            <link rel = "stylesheet" type = "text/css" href = "friend.css">
            </head>
            <body bgcolor = "white">
    <form method = "POST" action = "">
                <div class = "null">
        <table  align = "center" cellspacing = "15" cellpadding = "15">
        <?php 
        
        
        
    
             ?>
		<tr>
        <th width = "100">
		<th> <?php echo '<img src = "images/'.$roww['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?></th></tr>
		<tr><th>
        <?php echo $roww['username']; ?></th>
        </tr>
        <tr>
        <th><?php echo "<td><a href='vewdetails.php?id=" . $roww['id'] . "'>viewdetails</a></td>"?></th>
     <tr>
      <th>
      
      </div>
      <?php
                
                
            
            
         
    


?>
<?php 
//$pa = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");
$pb = "SELECT * FROM lord where id1 = '$la' and id2 = '$sc' and request = 'yes' and sent = 'no' ";
$pc = mysqli_query($db,$pb);
$pd = mysqli_num_rows($pc);
$pba = "SELECT * FROM lord where id2 = '$la' and id1 = '$sc' and request = 'yes' and sent = 'no' ";
$pca = mysqli_query($db,$pba);
$pda = mysqli_num_rows($pca);
$pg = "SELECT * FROM lord where id2 = '$la' and id1 = '$sc' and request = 'ye' and sent = 'yes' ";
$ph = mysqli_query($db,$pg);
$pi = mysqli_num_rows($ph);
$pga = "SELECT * FROM lord where id1 = '$la' and id2 = '$sc' and request = 'ye' and sent = 'yes' ";
$pha = mysqli_query($db,$pga);
$pia = mysqli_num_rows($pha);
$ka = "SELECT * FROM lord where id1 = '$sc' and id2 = '$la' and sent = 'no' ";

$kb = mysqli_query($db,$ka);
$kc = mysqli_num_rows($kb);
if($pd > 0) {
    echo "request sent";
} elseif($pda > 0) {
    echo "request received";
     echo "<td><a href='accept.php?id=" . $roww['id'] . "'>accept</a></td>" ;

} elseif($kc > 0) {
    echo "accept";
} elseif ($pi > 0) {
    echo "friends";
    echo "<td><a href='c.php?id=" . $roww['id'] . "'>chat</a></td>" ;

} elseif($pia > 0) {
    echo "friends";
    echo "<td><a href='op.php?id=" . $roww['id'] . "'>chat</a></td>" ;

} else {
    echo "<td><a href='insert.php?id=" . $roww['id'] . "'>request</a></td>" ;
}
            
        break;
    }
} 
    }
}
?>
 </table>         