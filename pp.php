<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "front2.php">
    </head>
    <body>
        <input type = "password" name = "password" placeholder = "enter new password">
        <input type = "password" name = "cpassword" placeholder = "confirm password">
        <input type = "submit" name = "submit" value = "submit">
        
    </body>
    
    <?php 
    session_start();
    $a = $_SESSION['tya']; 
    $b = $_SESSION['tyb']; 
    $c = $_SESSION['tyc']; 
    $d = $_SESSION['tyd']; 
    echo $a;
    echo $b;
    if(isset($_POST['submit'])) { 
        $n = $_POST['password']; 
        $m = $_POST['cpassword']; 
        $db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect"); 
       $sql = "UPDATE ganesh SET password = '$n' where username = '$a' and favdish = '$b' and favplace = '$c' and favmovie = '$d' ";
        $s = mysqli_query($db,$sql); 
        $d = mysqli_num_rows($s); 
        if($d > 0) { 
            echo "updated"; 
        } else { 
            echo "not updated"; 
        } 
    }}
    
    
    ?>
    
    