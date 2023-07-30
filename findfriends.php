<?php
session_start();

$pm = $_SESSION['applea'];

$aa = "yes";
$ab = "no";
$pa = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");

$pb = "SELECT * FROM lord where id2 = '$pm' and request = '$aa' and sent = '$ab' ";
$pc = mysqli_query($pa,$pb);
$pd = mysqli_num_rows($pc);
$pba = "SELECT * FROM lord where id1 = '$pm' and request = '$aa' and sent = '$ab' ";
$pca = mysqli_query($pa,$pba);
$pda = mysqli_num_rows($pca);
$pg = "SELECT * FROM lord where id2 = '$pm' and request = '$ye' and sent = '$aa' ";
$ph = mysqli_query($pa,$pg);
$pi = mysqli_num_rows($ph);

?>
<?php




$sa = $_SESSION['mjha'];
$sb = $_SESSION['mjhb'];
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$sql = "SELECT * FROM  ganesh";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result) ;



	?>
	
	
	<head>
	<link rel = "stylesheet" type = "text/css" href = "findfriends.css">
	<title>findfriends</title>
    <style>
    body {
    
    }
    </style>
    <script data-ad-client="ca-pub-4034355635885300" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>
	<body>
    <form method = "POST" action = "">  
    <?php
    if($count > 0){
	$i = 0;
	while($rowww = mysqli_fetch_array($result)) {?>
    <div class = "null"><?php
        if($rowww['username'] == $sa && $rowww['password'] == $sb) {
		continue ; }?>
        
        
        <?php $sc = $rowww['id'];
    
        
       $_SESSION['id'] = $sc; 
             ?>
		<div class = "one">
        <table   cellpadding = "15" cellspacing = "15">
        <tr>
        <th>
        <?php echo '<img src = "images/'.$rowww['image'].'"alt = "Avatar" class = "avatar" style = "width:120px;height:100px;">';?></th><th>
        <?php echo $rowww['username']; ?></th>
        </tr></table></div>
        <div class = "three">
        <table class = "table" cellspacing = "20" cellpadding = "20"><tr>
        <th><?php echo "<td><a href='vewdetails.php?id=" . $rowww['id'] . "'>viewdetails</a></td>"?></th><th>
      <?php
      $conn = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$ba = "SELECT * FROM lord where id1 = '$sc' and id2 = '$pm' and sent = 'no' ";

$bb = mysqli_query($conn,$ba);
$bc = mysqli_num_rows($bb);
$ka = "SELECT * FROM lord where id1 = '$sc' and id2 = '$pm' and sent = 'no' ";
$na = "SELECT * FROM chat where id1 = '$sc' and id2 = '$pm' ";
$nb = mysqli_query($conn,$na);
$i = 0;
$kio = "messages";
while ($oo = mysqli_fetch_assoc($nb)) {
    $i++;



}

$kb = mysqli_query($conn,$ka);
$kc = mysqli_num_rows($kb);
$kaa = "SELECT * FROM lord where id1 = '$pm' and id2 = '$sc' and sent = 'no' ";

$kba = mysqli_query($conn,$kaa);
$kca = mysqli_num_rows($kba);
$kd = "SELECT * FROM lord where id1 = '$sc' and id2 = '$pm' and sent = 'yes' ";

$ke = mysqli_query($conn,$kd);
$kf = mysqli_num_rows($ke);
$kda = "SELECT * FROM lord where id1 = '$pm' and id2 = '$sc' and sent = 'yes' ";

$kea = mysqli_query($conn,$kda);
$kfa = mysqli_num_rows($kea);
        if($kc > 0) {
            echo "request received:";
        echo "<td><a href='accept.php?id=" . $rowww['id'] . "'>accept</a></td>" ;

        } elseif ($kf > 0) {
            echo "friends:";
            echo "<td><a href='op.php?id=" . $rowww['id'] . "'>chat</a></td>" ;
            echo $i.$kio;
        } elseif($kfa > 0) {
            echo "friends:";
            echo "<td><a href='op.php?id=" . $rowww['id'] . "'>chat</a></td>" ;
            echo $i.$kio;
        } elseif ($kca > 0) {
            echo "request sent";
        
        
        

        
        
        } else {
        

        


        echo "<td><a href='insert.php?id=" . $rowww['id'] . "'>request</a></td>" ;}?></th>
           </tr></table><hr></div></div>
           
        <?php
        
       $i++;
    }
    }?>
    </body>
    </table>
    </html>
