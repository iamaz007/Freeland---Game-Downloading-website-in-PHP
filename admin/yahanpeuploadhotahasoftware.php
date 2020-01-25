<?php
  // Create database connection
  $db = mysqli_connect("localhost", "id6971474_freelandpk", "abdullah007", "id6971474_az");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	
  	// Get title
  	$image_text = mysqli_real_escape_string($db, $_POST['title']);
	
	$keyword = mysqli_real_escape_string($db, $_POST['keyword']);
	
	$link = mysqli_real_escape_string($db, $_POST['link']);
	
	
  	// image file directory
  	

  	$sql = "INSERT INTO software (title,keyword, link) VALUES ('$image_text', '$keyword', '$link')";
  	// execute query
  	mysqli_query($db, $sql);

  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Main Software upload</title>
<a href="yahanpeuploadhotihan.php">home</a><br>
<a href="yahanpeuploadhotahasoftware.php">software</a><br>
<a href="https://freelandmovie.000webhostapp.com/admin/yahanpeuploadhotahamovies.php">movies</a><br>
<a href="checkgames.php">check games</a><br>
<a href="checkSoftware.php">check Softwares</a><br>
<a href="https://freelandmovie.000webhostapp.com/admin/checkMovies.php">check Movies</a><br>
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
  Main Software upload
  <form method="POST" action="yahanpeuploadhotahasoftware.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
	  <input type="text" name="title" placeholder="title">
	  <input type="text" name="link" placeholder="link">
	 
  	  
  	</div>
	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="keyword" 
      	placeholder="enter keywords"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>