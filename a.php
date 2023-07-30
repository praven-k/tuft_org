
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
       
    }
    
.avatar {
    width:200px;
    height:200px;
    border-radius:70%;
   
    
}
h2 {
    font-size:80px;
    padding-top:30px;
   
}
.none {
    padding-left:800px;
}
.profile {
    padding-left:800px;
}
a {
    font-size:50px;
    text-decoration: none;
}
table {
    width : 100%;
    height:40px;
} 
.submit1 {
    color:blue;
    background-color:black;
    padding:15px;
    
   
}
.submit2 {
    color:red;
    background-color:black;
    padding:15px;
   
}
.submit3 {
    color:cyan;
    background-color:black;
    padding:15px;
   
}
.submit4 {
    color:grey;
    padding:15px;
   
}
.mm {
    bottom:0px;
    position:fixed;
    background-color:cyan;
}
    </style>
    </head>

 <body>

<?php



<?php

session_start();
if(isset($_POST['button'])) {
    session_destroy();
    header("location:li.php");
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
	<form method = "POST">
	    <table  width = "100"><tr><th><td>
			<?php echo "<h2><span  style = color:red >hello ".$pp."</span>";?></td>



</th><?php $yy = $row['id'];
$_SESSION['applea'] = $yy;  
 ?><div class = "profile"><th>
<?php echo '<img src = "images/'.$row['image'].'"alt = "Avatar" class = "avatar" style = "width:280px;height:200px;">';?>

    
<input type = "submit" name = "button" class = "button" value = "logout">

<?php
echo "<td><a href='vewdetails.php?id=" . $row['id'] . "'>profile</a></td>" ;?></form>
</th></tr></table>
<?php
$i++;
	}
}

?>

   <div class = "mm">
      
<input type = "submit" name = "submit1" value = "friends" class = "submit1">
<input type = "submit" name = "submit2" value = "findfriends" class = "submit2">
<input type = "submit" name = "submit3" value = "meet yourself" class = "submit3">
<input type = "submit" name = "submit4" value = "date" class = "submit4">
</div><?php
if(isset($_POST['submit1'])) {





$aa = "yes";
$ab = "no";
$pa = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");

$pb = "SELECT * FROM lord where id2 = '$yy' and request = '$aa' and sent = '$ab' ";
$pc = mysqli_query($pa,$pb);
$pd = mysqli_num_rows($pc);
$pba = "SELECT * FROM lord where id1 = '$yy' and request = '$aa' and sent = '$ab' ";
$pca = mysqli_query($pa,$pba);
$pda = mysqli_num_rows($pca);
$pg = "SELECT * FROM lord where id2 = '$yy' and request = '$ye' and sent = '$aa' ";
$ph = mysqli_query($pa,$pg);
$pi = mysqli_num_rows($ph);

?>
<?php





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
      $db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$ba = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'no' ";

$bb = mysqli_query($db,$ba);
$bc = mysqli_num_rows($bb);
$ka = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'no' ";
$na = "SELECT * FROM chat where id1 = '$sc' and id2 = '$yy' ";
$nb = mysqli_query($db,$na);
$i = 0;
$kio = "messages";
while ($oo = mysqli_fetch_assoc($nb)) {
    $i++;



}

$kb = mysqli_query($db,$ka);
$kc = mysqli_num_rows($kb);
$kaa = "SELECT * FROM lord where id1 = '$yy' and id2 = '$sc' and sent = 'no' ";

$kba = mysqli_query($db,$kaa);
$kca = mysqli_num_rows($kba);
$kd = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'yes' ";

$ke = mysqli_query($db,$kd);
$kf = mysqli_num_rows($ke);
$kda = "SELECT * FROM lord where id1 = '$yy' and id2 = '$sc' and sent = 'yes' ";

$kea = mysqli_query($db,$kda);
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
    }
} else if(isset($_POST['submit2'])) {

$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");

$sql = "SELECT * FROM lord where id1 = '$yy' and sent = 'yes'";
$pa = mysqli_query($db,$sql);
$pb = mysqli_num_rows($pa);
$ka = "SELECT * FROM lord where id2 = '$yy' and sent = 'yes'";
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
} else if(isset($_POST['submit4'])) {
  

$aa = "yes";
$ab = "no";
$pa = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");
$io = "SELECT * from ganesh where id = '$yy'";
$ip = mysqli_query($pa,$ip);
$ia = mysqli_num_rows($ip);
if($ia > 0) { 
    while($t = mysqli_fetch_array($ia)) { 
        $qw = $t['gender']; 
    }
}
if($qw == "male") { 
    $vb = "female"; 
} else { 
    $vb = "male";
}
$pb = "SELECT * FROM lord where id2 = '$yy' and request = '$aa' and sent = '$ab' ";
$pc = mysqli_query($pa,$pb);
$pd = mysqli_num_rows($pc);
$pba = "SELECT * FROM lord where id1 = '$yy' and request = '$aa' and sent = '$ab' ";
$pca = mysqli_query($pa,$pba);
$pda = mysqli_num_rows($pca);
$pg = "SELECT * FROM lord where id2 = '$yy' and request = '$ye' and sent = '$aa' ";
$ph = mysqli_query($pa,$pg);
$pi = mysqli_num_rows($ph);


?>
<?php





$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$sql = "SELECT * FROM  ganesh where gender = '$vb'";
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
	</head>
	<body>
    <form method = "POST" action = "">  
    <?php
    if($count > 0){
	$i = 0;
	while($rowww = mysqli_fetch_array($result)) {?>
    <div class = "null"><?php
        if($rowww['username'] == $yy && $rowww['password'] == $pb) {
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
      $db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$ba = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'no' ";

$bb = mysqli_query($db,$ba);
$bc = mysqli_num_rows($bb);
$ka = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'no' ";
$na = "SELECT * FROM chat where id1 = '$sc' and id2 = '$pm' ";
$nb = mysqli_query($db,$na);
$i = 0;
$kio = "messages";
while ($oo = mysqli_fetch_assoc($nb)) {
    $i++;



}

$kb = mysqli_query($db,$ka);
$kc = mysqli_num_rows($kb);
$kaa = "SELECT * FROM lord where id1 = '$yy' and id2 = '$sc' and sent = 'no' ";

$kba = mysqli_query($db,$kaa);
$kca = mysqli_num_rows($kba);
$kd = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'yes' ";

$ke = mysqli_query($db,$kd);
$kf = mysqli_num_rows($ke);
$kda = "SELECT * FROM lord where id1 = '$yy' and id2 = '$sc' and sent = 'yes' ";

$kea = mysqli_query($db,$kda);
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
        
        
        

        
        
        } else  {
        

        


        echo "<td><a href='insert.php?id=" . $rowww['id'] . "'>request</a></td>" ;}?></th>
           </tr></table><hr></div></div>
           
        <?php
        
       $i++;
    }
    }
  
}
else if(isset($_POST['submit3'])) {
  

$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");
$sql = "SELECT * FROM ganesh where username = '$yy' and password = '$pb'";
$aa = mysqli_query($db,$sql);
$ab = mysqli_num_rows($aa);
if ($ab > 0) {
    while($row = mysqli_fetch_array($aa)) {
        
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

            if($sc == $yy ) {
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
$pb = "SELECT * FROM lord where id1 = '$yy' and id2 = '$sc' and request = 'yes' and sent = 'no' ";
$pc = mysqli_query($db,$pb);
$pd = mysqli_num_rows($pc);
$pba = "SELECT * FROM lord where id2 = '$yy' and id1 = '$sc' and request = 'yes' and sent = 'no' ";
$pca = mysqli_query($db,$pba);
$pda = mysqli_num_rows($pca);
$pg = "SELECT * FROM lord where id2 = '$yy' and id1 = '$sc' and request = 'ye' and sent = 'yes' ";
$ph = mysqli_query($db,$pg);
$pi = mysqli_num_rows($ph);
$pga = "SELECT * FROM lord where id1 = '$yy' and id2 = '$sc' and request = 'ye' and sent = 'yes' ";
$pha = mysqli_query($db,$pga);
$pia = mysqli_num_rows($pha);
$ka = "SELECT * FROM lord where id1 = '$sc' and id2 = '$yy' and sent = 'no' ";

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
} else {
  echo "";
}

?>
    
