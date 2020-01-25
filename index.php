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
	<meta name="title" content="Freeland">
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
				<input type="text" name="search" class="form-control" placeholder="Search Games...">
				<input type="submit" name="submit" id="but" value="search" />
				<input type="reset" id="but" value="reset">
				<i class="fa fa-times close"></i>
			</form>
		</div>
	</div><!-- /.modal-search -->
	<!-- wrapper --> 
	<div id="wrapper">	
	<!--slider-->
		<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#full-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#full-carousel" data-slide-to="1"></li>
				<li data-target="#full-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active inactiveUntilOnLoad">
					<img src="img/slideshow/cover1.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 bounceInDown">Shadow of the Tomb Raider</h1>
							<p data-animation="animated animate7 fadeInUp">As Lara Croft races to save the world from a Maya apocalypse, she must become the Tomb Raider she is destined to be.</p>
							<a href="gamefiles/Shadow Of The Tomb Raider" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeInDown">Download</a>
						</div>		
					</div>
				</div>
				<div class="item">
					<img src="img/slideshow/bfv.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeInDown">Battlefield 5</h1>
							<p data-animation="animated animate7 fadeIn">The series goes back to its roots in a never-before-seen portrayal of World War 2.</p>
							<a href="gamefiles/Battlefield V" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">Download</a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="img/slideshow/wdf.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeIn">The Walking Dead The Final Season</h1>
							<p data-animation="animated animate7 fadeIn">Clementine, now a fierce and capable survivor, has reached the final chapter in her journey.</p>
							<a href="https://ouo.io/4XNnZN" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn">Download</a>
						</div>
					</div>
				</div>	
				<a class="left carousel-control" href="#full-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#full-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>
	<!--/slider-->	
		<section class="bg-grey-50 border-bottom-1 border-grey-200 relative">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="title outline">
							<h4><i class="fa fa-heart"></i>Exclusive Crack Games</h4>
							<p>Recently added</p>
						</div>
					</div>
				</div>
				<div class="row">
								
								<?php
									// define how many results you want per page
									$results_per_page = 12;
									// find out the number of results stored in database
									$sql='SELECT * FROM article';
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
									$sql='SELECT * FROM article WHERE a_id in (56,64,66,68,69,70) ORDER BY a_id desc LIMIT 6';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>";
										echo "<div class='card'>";
										echo "<div class='card-img pag list-inline'>";
										echo "<div id='img_div'>";
												echo "<a href='gamefiles/".$row{'a_title'}.".php?'><img src='admin/images/".$row['a_cover']."' width='580' height='326'></a>";
												echo "<div class='caption'>
												<h3 class='card-title' STYLE='font-family:Montserrat;color:black;font-size:14px;overflow-wrap:break-word; white-space: nowrap; text-overflow: ellipsis;overflow: hidden;'>
												<a href='gamefiles/".$row{'a_title'}.".php?'>".$row['a_title']."</h3></div></a>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
									}
									
									?>
								
							
				</div>
				
				<div class="text-center"><a href="games" class="btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right margin-top-10 margin-bottom-20">Show More <i class="fa fa-angle-right"></i></a></div>
			</div>
		</section>
			
		<div class="background-image margin-top-40" style="background-image: url(../img.youtube.com/vi/IsDX_LiJT7E/maxresdefault.jpg);">
			<span class="background-overlay"></span>
			<div class="container">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XYtyeqVQnRI" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- /#wrapper -->
	
	<!-- footer -->
	<?php
	include 'footer.php';
	?>	



</body>
</html>