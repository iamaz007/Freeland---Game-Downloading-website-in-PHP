<?php
  // Create database connection
  $db = mysqli_connect("localhost", "id7979100_az", "abdullah007", "id7979100_az");

  // Initialize message variable
  $msg = "";

  $result = mysqli_query($db, "SELECT * FROM movies ORDER BY m_id desc");
?>
<!DOCTYPE html>
<html>
<head>
<title>checking movies</title>
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
  checking movie

  <?php
    while ($row = mysqli_fetch_array($result)) 
	{
      echo "<div id='img_div'>";
      	echo "<img src='Mimages/".$row['m_cover']."' >";
      	echo "<p>".$row['m_title']."</p>";
        echo "<p>id: ".$row['m_id']."</p>";
      	echo "<p>Category: ".$row['m_category']."</p>";

        echo "<a href=".$row['m_link'].">Link</a>";
        echo "<p>imdb rating: ".$row['m_irating']."</p>";
        echo "<p>quality: ".$row['m_quality']."</p>";
        echo "<p>language: ".$row['m_language']."</p>";
      echo "</div>";
    }
  ?>
</div>
</body>
</html>