<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: DarkSlateGrey">
<form action="add_post.php" method="POST" enctype="multipart/form-data">
	<center><input type="text" id="title" name="title" placeholder="Enter Your Title,,,"><br>
	<textarea name="textarea" id="textarea" cols="50" rows="20"></textarea><br>
	<input type="file" name="image" id="image"><br>
	<input type="submit" name="action" id="add" value="Add"></center>
</form>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
}
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        $("#add").click(function(){
        	var title=$("#title").val();
        	var textarea=$("#textarea").val();
        	var image=$("#image").val();
            $.ajax({
                type: 'POST',
                url: 'add_post.php',
                data: {title:title,textarea:textarea,iamge:image,action:'add'},
                success: function(data) {
                	document.location.reload();
                }
            });
   		});
    });
 </script> -->

