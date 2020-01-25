<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "dbphpsearch");

  // Initialize message variable
  $msg = "";

  $result = mysqli_query($db, "SELECT * FROM software ORDER BY id desc");
?>
<!DOCTYPE html>
<html>
<head>
<title>checking software</title>
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
  checking software

  <?php
    while ($row = mysqli_fetch_array($result)) 
	{
      echo "<div id='img_div'>";
      	echo "<img src='softImages/".$row['cover']."' >";
      	echo "<p>".$row['title']."</p>";
      	echo "<a href='".$row['link']."'link</a>";
      echo "</div>";
    }
  ?>
</div>
</body>
</html>