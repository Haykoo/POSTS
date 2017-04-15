<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: DarkSlateGrey">
	<div class="container">   
		<a href="index.php">
			<button type="button" id="add" class="btn btn-primary" style="float: right;margin-right: 100px;margin-top: 50px">Add your post</button>
	  	</a>
	</div>
</body>
</html>



<?php
  include "function.php";
  $query3="SELECT ID,Title,Textarea,Image FROM news";
  $result=query($query3);
  if(empty($result)){
    die;
  }
  foreach ($result as $value) {

    echo "<div id='".$value['ID']."' style='width:800px;height:200px;background-color:black;margin:10px auto'>";
        echo "<h1 style='color:white;font-size:25px;width:500px;float:left;margin-left:15px' contenteditable>".$value['Title']."</h1>";
        echo "<p style='color:white; width:500px;float:left;margin-left:15px'contenteditable>".$value['Textarea']."</p>";

        echo "<input class='delete'value='Delete'type='button'style='margin-top:30px;margin-left:65px;width:50px;height:25px'>";
        echo "<input class='edit' value='Edit' type='button' style='width:50px;height:25px;margin-left:120px'>";
        echo "<img style='width:220px;height:140px;float:right' src='images/".$value['Image']."'>";
    echo "</div>";
    
  }


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        $('.delete').click(function(){
            var id=$(this).parent().attr('id');
            // alert(id);
            $.ajax({
                type: 'POST',
                url: 'add_post.php',
                data: {id:id,action:'delete'},
                success: function(data) {
                    document.location.reload();
                }
            });
        });
        $('.edit').click(function(){
            var id=$(this).parent().attr('id');
            var title=$(this).parent().children(':first-child').html();
            var textarea=$(this).parent().children(':nth-child(2)').html();
            // alert(id);
            $.ajax({
                type: 'POST',
                url: 'add_post.php',
                data: {id:id,action:'edit',title:title,textarea:textarea},
                success: function(data) {
                    document.location.reload();
                }
            });
        });
    });
</script>



