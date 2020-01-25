<?php
  // Create database connection
  $db = mysqli_connect("localhost", "id7979100_az", "abdullah007", "id7979100_az");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['m_cover']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['m_title']);
	
	$a_keyword = mysqli_real_escape_string($db, $_POST['m_keyword']);
	
	$a_category = mysqli_real_escape_string($db, $_POST['m_category']);

  $a_link = mysqli_real_escape_string($db, $_POST['m_link']);

  $a_irating = mysqli_real_escape_string($db, $_POST['m_irating']);

  $a_quality = mysqli_real_escape_string($db, $_POST['m_quality']);

  $a_language = mysqli_real_escape_string($db, $_POST['m_language']);
	
  	// image file directory
  	$target = "Mimages/".basename($image);

  	$sql = "INSERT INTO movies (m_cover, m_title,m_keyword,m_category,m_link,m_irating,m_quality,m_language) VALUES ('$image', '$image_text', '$a_keyword', '$a_category','$a_link','$a_irating','$a_quality','$a_language')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['m_cover']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Main Movie upload</title>
<a href="https://www.freelandpk.tk/admin/yahanpeuploadhotihan.php">home</a><br>
<a href="https://www.freelandpk.tk/admin/yahanpeuploadhotahasoftware.php">software</a><br>
<a href="yahanpeuploadhotahamovies.php">Movies</a><br>
<a href="https://www.freelandpk.tk/admin/checkgames.php">check games</a><br>
<a href="https://www.freelandpk.tk/admin/checkSoftware.php">check Softwares</a><br>
<a href="checkMovies.php">check Movies</a><br>
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
  Main Movies upload
  <form method="POST" action="yahanpeuploadhotahamovies.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
	  <input type="text" name="m_title" placeholder="title">
	  <input type="text" name="m_category" placeholder="category"><br>hollywood bollywood pakistan tvSeries<br>
    <input type="text" name="m_link" placeholder="link"><br>

    <input type="text" name="m_irating" placeholder="imdb rating"><br>
    <input type="text" name="m_quality" placeholder="quality"><br>
    <input type="text" name="m_language" placeholder="language"><br>
	 
  	  <input type="file" name="m_cover" value="choose image">
  	</div>
	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="m_keyword" 
      	placeholder="enter keywords"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>