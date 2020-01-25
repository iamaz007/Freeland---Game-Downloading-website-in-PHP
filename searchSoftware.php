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
					<div class="page-title bold" STYLE="font-family:Montserrat"><a href="software">SOFTWARES</a></div>
					<p>All softwares available at freeland are 100% cracked and free, before installation make sure your antivirus is off and if any software is not available at Freeland then contact to admin asap.</p>
				</div>
			</div>
		</section>
		
		<section class="padding-top-25 no-padding-bottom border-bottom-1 border-grey-300">
			<div class="container">
				<div class="headline">
					<h4>All Softwares</h4>
					<form method="POST" action="searchSoftware">
						<div class="row">
							<div >
								<input type="text" name="search" class="form-control" placeholder="Search Software...">
								<input type="submit" name="ssubmit"  id="sbut" value="search">
							</div>	
						</div>	
					</form>	
				</div>
			</div>
		</section>
		
		<style>
			#sbut
			{
				float:right;
				border:0;
				margin:1rem 0;
				width:auto;
				text-transform:uppercase;
				cursor:pointer;
			}
			#sbut:hover
			{
				background-color:#269abc;
				border-color:#1b6d85;
				color:white;
			}
		</style>
		
		
		
		<section class="bg-grey-50 padding-top-30">
			<div class="container">
				<div class="row">
					
						
						<div class="panel panel-default panel-post">
							<div class="panel-body">
								<div class="caption">
								<h3 class="card-title" id="ajaax" STYLE="font-family:Montserrat;color:black;">
								<?php
									if (isset($_POST['ssubmit']))
									{
										$search = mysqli_real_escape_string($con, $_POST['search']);
										$sql = "SELECT * FROM software WHERE keyword LIKE '%$search%' ORDER BY id desc";
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
												echo "<div class='col-lg-12 col-md-4 col-sm-6 col-xs-12'>";
										echo "<div class='card'>";
										echo "<div class='card-img pag list-inline'>";
										echo "<div id='img_div'>";
												
												echo "<div class='caption'>
												<h3 class='card-title' STYLE='font-family:Montserrat;color:black;font-size:14px;overflow-wrap:break-word; white-space: nowrap; text-overflow: ellipsis;overflow: hidden;'>
												<a href='".$row{'link'}." target=_blank'>".$row['title']."</h3></div></a>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
											  echo "</div>";
												
											}
										}
										else if (!isset($_POST["ssubmit"])) {
											//otherwise send to the login page
											header("location: index.php");
											// prevent resof of the page from running if user is not logged in
											exit();
										}
										else
										{
											echo "There are no results";
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