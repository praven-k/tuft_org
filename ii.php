<html>
<head>
  <style>
  .main {
    padding-top:185px;
    
    
    
    
  }
  .kk {
    background:white;
  background:images (1).jpeg;
    
  }
    .menu {
      width : 100%;
      height:70px;
      border:2px solid green;
     
      
      text-align:center;
      
      
    }
    
    .jj {
      padding:20px;
      
      
    }
    .2 { 
      padding:20px;
    }
    .submit { 
      padding-left:120px;
      padding-bottom:10px;
      
      
    }
    .mm {
      width:50%;
      text-align:center;
      height:40px;
      
      
    }
    .a { 
      text-decoration:none;
      padding-left:20px;
    }
  </style>
</head>
<body bgcolor="orange" background = "weebly-background.jpg" >
  <form method = "post">
    
  <div class = "main">
   
    <div class = "kk">
    <div class = "jj">
<h1><span style = "color:red">ENTER YOUR DETAILS</span></h1>
  <input type = "text" class = "menu" placeholder = "enter your username" name = "username"></div><div class = "jj">
  <input type = "password" class = "menu" placeholder = "enter your password" name = "password"></div><div class = " submit">
  <input type = "submit" class = "mm" value = "submit" name = "submit"></div>
  <div class = "a">
  <a href = "ff" class = "a"><span style = "color:red">create new account </span><a href = "ff" class = "a">
<span style = "color:green"> |forget password</span></h3></a></div>
  
  
  
  </div>
  </form>
  
</body><?php
session_start();
ob_start();
$db =  mysqli_connect ("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die ("unable to connect");

if(!empty($_POST['submit'])) {
	$user = $_POST['username'];
	$password = $_POST['password'];
	$query = "select * from ganesh where username = '$user' and password = '$password'";
	$result = mysqli_query($db,$query);
	$count = mysqli_num_rows($result);
	if ($count > 0) { 
	
	$_SESSION['mjha'] = $user;
    $_SESSION['mjhb'] = $password;
		
	header("location:profile.php");
	 
	} else {
		echo "<h4><span style = color:orange>above fields are required";
		
	}
}  
?>
