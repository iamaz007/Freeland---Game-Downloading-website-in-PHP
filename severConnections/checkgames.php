<?php
  // Create database connection
  $db = mysqli_connect("localhost", "id6971474_freelandpk", "abdullah007", "id6971474_az");

  // Initialize message variable
  $msg = "";

  
  $result = mysqli_query($db, "SELECT * FROM article ORDER BY a_id desc");
?>
<!DOCTYPE html>
<html>
<head>
<title>checking games</title>
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
  checking games

  <?php
    while ($row = mysqli_fetch_array($result)) 
	{
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['a_cover']."' >";
      	echo "<p>".$row['a_title']."</p>";
      	echo "<p>Category: ".$row['a_category']."</p>";
      echo "</div>";
    }
  ?>
</div>
</body>
</html>