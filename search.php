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
	<meta name="title" content="Freeland Search">
	<meta name="description" content="Search any type of content at freeland, if your desired content is not available please contact to admin.">
	<meta name="keyword" content="free games, cracked games, games, cracks, crack only, free software, steam, xbox free games, ps4 free games, free softwares, crack softwares, latest cracks, free movies, movies, top movies, top 90s movies, best movies, netflix free, netflix free account, pakistani movies free download, free hd movies, bollywood movies, free hollywood movies">
	<meta name="author" content="AZ">
	<title>Freeland Search</title>
<body class="fixed-header" id="home" onLoad="disableClick()">

	<!-- /header -->
	
	<div class="modal-search">
		<div class="container">
			<form method="POST" action="../search">
				<input type="text" name="search" class="form-control" placeholder="Search Games...">
				<input type="submit" name="submit"  id="but" value="search" />
				<input type="reset"  id="but" value="reset">
				<i class="fa fa-times close"></i>
			</form>
		</div>
	</div><!-- /.modal-search -->
	
	<!-- wrapper -->
	<div id="wrapper">	
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/cover/cover-game.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title"><a href="games">GAMES</a></div>
					
						
				</div>
			</div>
		</section>
		
		
		
		<section class="bg-grey-50 padding-top-30">
			<div class="container">
				<div class="row">
					
						
						<div class="panel panel-default panel-post">
							<div class="panel-body">
								<div class="caption">
								<h3 class="card-title" id="ajaax" STYLE="font-family:Montserrat;color:black;">
								<?php
									if (isset($_POST['submit']))
									{
										$search = mysqli_real_escape_string($con, $_POST['search']);
										$sql = "SELECT * FROM article WHERE a_keyword LIKE '%$search%' ORDER BY a_id desc";
										$result = mysqli_query($con, $sql);
										$queryResult = mysqli_num_rows($result);
										
										if ($queryResult == 1)
										{
											echo "<div>".$queryResult." result found!</div><br>";
										}
										else
										{
											echo "<div>".$queryResult." results found!</div><br>";
										}
										
										if ($queryResult > 0)
										{
											while ($row = mysqli_fetch_assoc($result))
											{
												echo "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>";
										echo "<div class='card'>";
										echo "<div class='card-img pag list-inline'>";
										echo "<div id='img_div'>";
												echo "<a href='gamefiles/".$row{'a_title'}.".php?'><img src='admin/images/".$row['a_cover']."' width='580' height='326'></a>";
												echo "<div class='caption'>
												<h3 class='card-title' STYLE='font-family:Montserrat;color:black;font-size:14px;overflow-wrap:break-word; white-space: nowrap; text-overflow: ellipsis;overflow: hidden;'>
												<a href='gamefiles/".$row{'a_title'}.".php? data-toggle='tooltip' target='blank' title=".$row['a_title']."'>".$row['a_title']."</h3></div></a>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
												
											}
										}
										else if (!isset($_POST["submit"])) {
											//otherwise send to the login page
											header("location: index.php");
											// prevent resof of the page from running if user is not logged in
											exit();
										}
										else
										{
											echo "<p>There are no results</p>";
											echo "<h4>Or may be you are searching any software or movie.</h4>";
											echo "<h5>Click <a href='software'>Here</a> to go to Software Section</h5>";
											echo "<h5>Click <a href=''>Here</a> to go to Movie Section</h5>";
										}
									}
								?>
								
							</div>
							</div>
							
						</div>
						
						
					</div>
					
					
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper -->
	
	<!-- footer -->
	<?php
	include 'footer.php';
	?>	

</body>
</html>