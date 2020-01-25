<?php
	include 'header.php';
?>	

<body class="fixed-header" onLoad="disableClick()">

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
		<section class="hero hero-games height-300 section parallax bg1" style="background-image: url(../img/slideshow/4.jpg);">
		<?php
	include '../parallexGame.php';
?>
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title bold" STYLE="font-family:Montserrat">Games</div>
					<p>All games available at freeland are 100% cracked and free, before installation make sure your antivirus is off and if any game is not available at Freeland then contact to admin asap.</p>
				</div>
			</div>
		</section>
		
		<section class="padding-top-25 no-padding-bottom border-bottom-1 border-grey-300">
			<div class="container">
				<div class="headline">
					<h4>Recent Games</h4>
				</div>
			</div>
		</section>
		
		<section class="bg-grey-50" id="ajaax">
			<div class="container">
				<div class="row">
								
								<?php
										include 'connect_to_mysql_pdo.php';	
									$dynamic_list = "";
												if(isset($_GET["cat"])){
													$res = $dbh->prepare("SELECT * FROM article WHERE a_category=? ORDER BY a_id desc");
													$res->execute([$_GET["cat"]]);
												}
												else{
													$res = $dbh->prepare("SELECT * FROM article");
													$res->execute();
												}
												$productCount = $res->rowCount();
												if ($productCount > 0) {
													while ($row = $res->fetch()) {
														$product_id = $row['a_id'];
														$product_name = $row['a_title'];
														
														
														
														$dynamic_list .= '
														<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
															<div class="card">
																<div class="card-img pag list-inline">
															<div class="thumbnail">
																<a href="../gamefiles/'.$product_name.'.php?id='.$product_id.' target="_blank"">
																<img src="../admin/images/'.$row['a_cover'].'" alt="" width="580" height="326">
																</a>
																<div class="caption">
																	
																	<h4 class="card-title" STYLE="font-family:Montserrat;color:black;font-size:14px;overflow-wrap:break-word; white-space: nowrap; text-overflow: ellipsis;overflow: hidden;">
																	<a href="../gamefiles/'.$product_name.'.php?id='.$product_id.' target="_blank" ">'.$product_name.'</a>
																	</h4>
																	
																</div>
															</div>
															</div>
															</div>
														</div>';
													}
												}
												else {
													$dynamic_list = "Sorry! Content is not available";
												}
												$dbh = null;
									
									
									?>
								<p><?php echo $dynamic_list; ?> </p>
							
				</div>
								
			</div>
		</section>

	
	<!-- footer -->
	<?php
	include 'footer.php';
	?>	

</body>
</html>