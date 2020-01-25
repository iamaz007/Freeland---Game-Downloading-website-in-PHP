<?php
  // Create database connection
  $db = mysqli_connect("localhost", "id6971474_freelandpk", "abdullah007", "id6971474_az");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['a_cover']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['a_title']);
	
	$a_keyword = mysqli_real_escape_string($db, $_POST['a_keyword']);
	
	$a_category = mysqli_real_escape_string($db, $_POST['a_category']);
	
  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO article (a_cover, a_title,a_keyword,a_category) VALUES ('$image', '$image_text', '$a_keyword', '$a_category')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['a_cover']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Main Game upload</title>
<a href="yahanpeuploadhotihan.php">home</a><br>
<a href="checkgames.php">check games</a><br>
<a href="indexdGames.php">daily games</a>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  Main games upload
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
	  <input type="text" name="a_title" placeholder="title">
	  <input type="text" name="a_category" placeholder="category">
	 
  	  <input type="file" name="a_cover" value="choose image">
  	</div>
	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="a_keyword" 
      	placeholder="enter keywords"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>