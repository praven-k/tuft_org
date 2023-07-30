<head>
<link rel = "stylesheet" type = "text/css" href ="">
 <style> 
     .register {
         width:19%;
	
	font-size:30px;
	padding:14px;
	background-color:white;
	text-align:center;
	border:2px solid green;
	opacity:0.8;
	

	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition : all 0.5s ease-in-out;
	-webkit-border-radius:5px 5px 5px 5px;
}
     </style>

 



</head>


<?php 
session_start();
if(isset($_POST['upload'])) {
$err = $_SESSION['applea'];
$er = $_SESSION['rr'];
echo $err;
echo $er;
date_default_timezone_set("Asia/Calcutta");  
$date = date('d-m :H:i');
/*
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
if(isset($_POST["upload"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // File info 
        $fileName = basename($_FILES["image"]["name"]); 
        $imageUploadPath = $uploadPath .$err.".".$er.".".$fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["image"]["tmp_name"]; 
              $Path = $err.".".$er.".".$fileName; 


            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp,$imageUploadPath,5); 
             
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
 
*/



$db = mysqli_connect("sql211.epizy.com","epiz_27157118","hcI3DINtNlNo","epiz_27157118_anil") or die("unable to connect");
$sql = "INSERT INTO chat (id1,id2,time) values ('$err','$er','$date')";
$as = mysqli_query($db,$sql);
if($as) {
    echo "inserted";
} else {
    echo "not inserted";
}
}
?>
