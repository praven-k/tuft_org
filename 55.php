<html>
<head><title>image upload</title>
<link rel = "stylesheet" type = "text/css" href = "55.css">


</head>
<?php
session_start();


echo "<h1 class = ee><span style = color:red>hello ".$_SESSION['mjha']."</span></h1>";

if(isset($_POST['submit'])) {
	$a = $_SESSION['mjha'];
$b = $_SESSION['mjhb'] ; 
echo $b;
$c = $_SESSION['mjhc'] ;
$d = $_SESSION['mjhd'] ;
$e = $_SESSION['mjhe'] ;

$aa = $_SESSION['mjhaa'] ;
$bb = $_SESSION['mjhbb'] ;
$cc = $_SESSION['mjhcc'] ;
 

	
$aaa = $_SESSION['mjhaaa'] ;
$bbb = $_SESSION['mjhbbb'] ;
$ccc = $_SESSION['mjhccc'] ;
$ddd = $_SESSION['mjhddd'] ;
$eee = $_SESSION['mjheee'] ;

$fff = $_SESSION['mjhfff'];

$tmp=$_FILES["file"]["tmp_name"];

   

 
/* 
 * Custom function to compress image size and 
 * upload to the server using PHP 
 */ 
function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
} 
 
 
// File upload path 
$uploadPath = "images/";

 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // File info 
        $fileName = basename($_FILES["image"]["name"]); 
        $imageUploadPath = $uploadPath .$a.".".$b.".".$fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["image"]["tmp_name"]; 
              $Path = $a.".".$b.".".$fileName; 


            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp,$imageUploadPath,5); 
             echo $ii;
            if($compressedImage){ 
                $status = 'success'; 
                $statusMsg = "Image compressed successfully."; 
                

            }else{ 
                $statusMsg = "Image compress failed!"; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
 



echo $a;
$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");


$sql = "INSERT INTO ganesh (username,password,dateofbirth,gender,phone,favplace,favmovie,favdish,aboutlove,moretime,interested,favwork,stressremove,beahero,image) VALUES ('$a','$b','$c','$d','$e','$aa','$bb','$cc','$aaa','$bbb','$ccc','$ddd','$eee','$fff','$Path')";


if(mysqli_query($db,$sql)) {
	header("location:profile.php");
} else {
	
	header("location:profile.php");
	
}
}



?>
<h1><span style = "color:green">upload your image</span></h1>

<form method = "POST" action = "" enctype = "multipart/form-data">

 
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
    <p>please be patient while image is loading</p>
</form>