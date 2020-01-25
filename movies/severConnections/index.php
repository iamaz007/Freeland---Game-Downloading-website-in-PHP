<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Freeland Movies">
	<meta name="description" content="Freeland provides cracked and free games for pc and consoles, softwares, free movies including tv shows, and amazing daily life tips and tricks.">
	<meta name="keyword" content="free games, cracked games, games, cracks, crack only, free software, steam, xbox free games, ps4 free games, free softwares, crack softwares, latest cracks, free movies, movies, top movies, top 90s movies, best movies, netflix free, netflix free account, pakistani movies free download, free hd movies, bollywood movies, free hollywood movies">
	<meta name="author" content="AZ">
	<title>Freeland</title>	
<script src="js/ads.js" type="text/javascript"></script>
<body class="fixed-header" onLoad="disableClick()">
<div id="main-content"  class="checkadblock">
	<!-- /header -->	
	<div class="modal-search">
		<div class="container">
			<form method="POST" action="search">
				<input type="text" name="search" class="form-control" placeholder="Search Movies or Tv Series...">
				<input type="submit" name="submit" id="but" value="search" />
				<input type="reset" id="but" value="reset">
				<i class="fa fa-times close"></i>
			</form>
		</div>
	</div><!-- /.modal-search -->
	<!-- wrapper --> 
	<div id="wrapper">
		<section class="hero hero-games height-300 section parallax bg1" style="background-image: url(img/slideshow/hollyCover.jpg);">
		<?php
	include 'parallexGame.php';
?>
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title bold" STYLE="font-family:Montserrat">Movies and Tv series</div>
					<p>All movies and tv shows available at freeland are 100% free, if any movie or tv show is not available at Freeland then contact to admin.</p>
				</div>
			</div>
		</section>
		
		<section class="padding-top-25 no-padding-bottom border-bottom-1 border-grey-300">
			<div class="container">
				<div class="headline">
					<h4>Recently added</h4>
				</div>
			</div>
		</section>
		
		<section class="bg-grey-50" id="ajaax">
			<div class="container">
				<div class="row">
								
								<?php
									// define how many results you want per page
									$results_per_page = 12;
									// find out the number of results stored in database
									$sql='SELECT * FROM movies';
									$result = mysqli_query($con, $sql);
									$number_of_results = mysqli_num_rows($result);
									// determine number of total pages available
									$number_of_pages = ceil($number_of_results/$results_per_page);
									// determine which page number visitor is currently on
									if (!isset($_GET['page'])) {
									  $page = 1;
									} else {
									  $page = $_GET['page'];
									}
									// determine the sql LIMIT starting number for the results on the displaying page
									$this_page_first_result = ($page-1)*$results_per_page;
									// retrieve selected results from database and display them on page
									$sql='SELECT * FROM movies ORDER BY m_id desc LIMIT 6';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>";
										echo "<div class='card'>";
										echo "<div class='card-img pag list-inline'>";
										echo "<div id='img_div'>";
												echo "<a href='moviefiles/".$row{'m_title'}.".php?'><img src='admin/Mimages/".$row['m_cover']."' width='580' height='326'></a>";
												echo "<div class='caption'>
												<h3 class='card-title' STYLE='font-family:Montserrat;color:black;font-size:14px;overflow-wrap:break-word; white-space: nowrap; text-overflow: ellipsis;overflow: hidden;'>
												<a href='moviefiles/".$row{'m_title'}.".php?'>".$row['m_title']."</h3></div></a>";
												echo "<div class='btn btn-success btn-rounded' style='color:white;position: absolute;bottom: 0; right: 0;text-transform:uppercase;'>".$row['m_category']."</div>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
									}
									
									?>	
				</div>
			</div>
		</section>
	<!-- /#wrapper -->
	
	<!-- footer -->
	<?php
	include 'footer.php';
	?>	



</body>
</html>