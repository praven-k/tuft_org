<html>
<head>
  <style>
  .main {
    padding-top:365px;
    
    
    
    
  }
  .kk {
    background:white;
  background:images (1).jpeg;
    
  }
    .menu {
      width : 100%;
      height:150px;
      border:2px solid green;
     
      
      text-align:center;
      text-size-adjust: 500px;
      
      
    }
    
    .jj {
      padding:20px;
      
      
    }
    .2 { 
      padding:20px;
    }
    .submit { 
      padding-left:200px;
      padding-bottom:10px;
      
      
    }
    .mm {
      width:70%;
      text-align:center;
      height:90px;
      
      
      
    }
    .a { 
      text-decoration:none;
      padding-left:20px;
    }
 
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: green;
  font-size:50px;
}
::-moz-placeholder { /* Firefox 19+ */
  color: green;
  font-size:50px;
}
:-ms-input-placeholder { /* IE 10+ */
  color: green;
  font-size:50px;
}
:-moz-placeholder { /* Firefox 18- */
  color: green;
  font-size:50px;
}
input[type = submit] {
    font-size:70px;
    color:blue;
}
input[type = text] {
    font-size:50px;
   
}
input[type = password] {
    font-size:50px;
}
h1 {
    font-size:80px;
}
a{
    font-size:50px;
}
h7 {
    font-size:45px;
}
  </style>
</head>
<body background = "aa.jpg" >
  <form method = "post">
    
  <div class = "main">
   
    <div class = "kk">
    <div class = "jj">
<h1><span style = "color:red">ENTER YOUR DETAILS</span></h1>
  <input type = "text" class = "menu" placeholder = "enter your username" name = "username"></div><div class = "jj">
  <input type = "password" class = "menu" placeholder = "enter your password" name = "password"></div><div class = " submit">
<h6><input type = "submit" class = "mm" placeholder = "submit" name = "submit"></h6></div>
  <div class = "a">
  <a href = "front1.php" class = "a"><span style = "color:red">create new account </span><a href = "forget.php" class = "a">
<span style = "color:green"> |forget password</span></h3></a></div>
  
  
  
  </div>
  </form>
<?php
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
		echo "<h7><span style = color:red>bad creditals";
		
	}
}  
?>
</body>