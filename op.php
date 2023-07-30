
<html>
<head>
  

<title>chat</title></head>
<!-- For ease i'm just using a JQuery version hosted by JQuery- you can download any version and link to it locally -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var documentInterval;
$(function() {
    startRefresh();
});

function startRefresh() {
    setTimeout(startRefresh,6000);
    $.get('select2.php', function(data) {
        $('#content').html(data);    
    });
    $('#ss').click(function(){
  clearInterval(documentInterval);
});
}
/*$(function () {
    $('#menu').on('submit',function (e) {

              $.ajax({
                type: 'post',
                url: 'select2.php',
                data: $('#menu').serialize(),
                success: function () {
                 alert("Email has been sent!");
                }
              });
          e.preventDefault();
        });
});*/
</script>




</script>
</head>
<body background = "whatsapp.jpg">


<div id = "content"></div>
<?php 
session_start();

if(isset($_GET['id'])) {
    $dd = $_GET['id'];
    $_SESSION['rr'] = $dd;
}
?>

<div id = "ss">
<?php include ("file.php"); 
?>
</div>

<div id = "ll">
<?php include("oo.php");
?>
</div>

