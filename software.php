<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	

<body class="fixed-header" onLoad="disableClick()">
	<!-- /header -->
	
	<div class="modal-search">
		<div class="container">
			<form method="POST" action="search">
				<input type="text" name="search" class="form-control" placeholder="Search Games...">
				<input type="submit" name="submit"  id="but" value="search" />
				<input type="reset"  id="but" value="reset">
				<i class="fa fa-times close"></i>
			</form>
		</div>
	</div><!-- /.modal-search -->
	
	<!-- wrapper -->
	<div id="wrapper">
		<section class="hero hero-games height-300 section parallax bg1" style="background-image: url(img/slideshow/soft.jpg);">
		<?php
	include 'parallexGame.php';
?>
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title bold" STYLE="font-family:Montserrat"><a href="software">SOFTWARES</a></div>
					<p>All softwares available at freeland are 100% cracked and free, before installation make sure your antivirus is off and if any software is not available at Freeland then contact to admin.</p>
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
		
		<section class="bg-grey-50" id="ajaax">
			<div class="container">
				<div class="row">
								
								<?php
									// define how many results you want per page
									$results_per_page = 12;
									// find out the number of results stored in database
									$sql='SELECT * FROM software';
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
									$sql='SELECT * FROM software ORDER BY id desc LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "<div class='col-lg-12 col-md-4 col-sm-6 col-xs-12' id='pagination_data'>";
										echo "<div class='card'>";
										
										
												
												echo "<div class='caption'>
												<h3 class='card-title' STYLE='font-family:Montserrat;color:black;font-size:14px;overflow-wrap:break-word; white-space: nowrap; text-overflow: ellipsis;overflow: hidden;'>
												<a href='".$row{'link'}." target=_blank'>".$row['title']."</h3></div></a>";
											 
											 
											  echo "</div>";
											  echo "</div>";
									}
									
									?>
								
							
				</div>
								<ul class="pagination margin-top-20">
									<li><a href="?page=1">First</a></li>
									<li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
										<a href="<?php if($page <= 1){ echo ''; } else { echo "?page=".($page - 1); } ?>">Prev</a>
									</li>
								</ul>
								<ul class="pagination margin-top-20" style="float:right;">								
									<li class="<?php if($page >= $number_of_pages){ echo 'disabled'; } ?>">
										<a href="<?php if($page >= $number_of_pages){ echo ''; } else { echo "?page=".($page + 1); } ?>">Next</a>
									</li>
									<li><a href="?page=<?php echo $number_of_pages; ?>">Last</a></li>
								</ul>
			</div>
		</section>

	
	<!-- footer -->
	<?php
	include 'footer.php';
	?>	

</body>
</html>