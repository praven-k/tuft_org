<?php
session_start();
if(isset($_GET['id'])){
    $ass = $_GET['id'];
    echo $ass;

}
$pp = $_SESSION['applea'];
echo $pp;







$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil");

?>
<div id = "content">
<?php /*
?><div class = "msg">
        <?php
        $qa = "SELECT * FROM chat where id1 = '$pp' and id2 = '$ass'";
$qb = mysqli_query($db,$qa);
$qc = mysqli_num_rows($qb);
if($qc > 0) {
    while ($err = mysqli_fetch_array($qb)) {
        ?><?php
        echo $err['message'];
        echo "<br>";
        echo $err['time'];
        echo "<br>";
        ?><hr class = "one"><?php
    }
}?>
        </div>
        <div class = "a">
    <?php
    
$ka = "SELECT * FROM chat where id1 = '$ass' and id2 = '$pp'";
$kb = mysqli_query($db,$ka);
$kc = mysqli_num_rows($kb);
if($kc > 0) {
    while ($err = mysqli_fetch_array($kb)) { 
?><?php
        echo $err['message'];
        echo "<br>";
        echo $err['time'];?><hr>
        <?php
        echo "<br>";
         }
}?></div>
    
<?php
    }



?>





<head>
<link rel = "stylesheet" type = "text/css" href = "c.css">
</head>
<body>
<table align = "center">
<form method = "POST" >
<div class = "form">
<input type = "text" name = "message" class = "text">
<input type = "submit" name = "submit" value = "submit">
</form>
</form>
</body>
</div>









