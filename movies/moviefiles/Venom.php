<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<!-- /header -->
	
	<div class="modal-search">
		<div class="container">
			<form method="POST" action="../search">
				<input type="text" name="search" class="form-control" placeholder="Search Movies or Tv Series...">
				<input type="submit" name="submit"  id="but" value="search" />
				<input type="reset"  id="but" value="reset">
				<i class="fa fa-times close"></i>
			</form>
		</div>
	</div><!-- /.modal-search -->
	
	<!-- wrapper -->
	<div id="wrapper">	
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/movImages/venom/v3.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
						<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_title']."";
										
									}
							?>
					</div>	
				</div>
			</div>
		</section>
		
		<section class="bg-white no-padding hidden-xs border-bottom-1 border-grey-300" style="height: 54px">
			<div class="tab-select text-center sticky">
				<div class="container">
					<ul class="nav nav-tabs">
						<li><a href="../index" ><i class="fa fa-film"></i>Movies & Tv Series</a></li>
						<li class="active" ><a href="#home">
							<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_title']."";
										
									}
							?>
						</a></li>
						<li><a href="#dw" ><i class="fa fa-download"></i>Watch/Download</a></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="bg-grey-50 padding-top-30">
			<div class="container">
				<div class="row">
					<div class="col-md-8 padding-right-20">
						
						<div class="panel panel-default panel-post">
							<div class="panel-body">
								<div class="post">
									<div class="post-header post-author">
										<a href="#" class="author" data-toggle="tooltip" title="admin"><img src="img/user/az.jpg" alt=""></a>
										<div class="post-title">
											<h3><a href="#">
												<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_title']."";
										
									}
							?>
											</a></h3>
											<ul class="post-meta">
												<li><a href="#"><i class="fa fa-user"></i>Uploaded by: AZ</a></li>
												<li><i class="fa fa-calendar-o"></i> Uploaded on: 25 Nov, 2018</li>
												
											</ul>
										</div>
									</div>
									
									<div class="embed-responsive embed-responsive-16by9 post-thumbnail">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/u9Mv98Gr5pY" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake's experiments, Eddie's body merges with the alien Venom -- leaving him with superhuman strength and power. Twisted, dark and fueled by rage, Venom tries to control the new and dangerous abilities that Eddie finds so intoxicating.			
									</div>
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/movImages/venom/v1.png);">
							<div class="overlay">
								<div class="title">
									<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_title']."";
										
									}
							?>
								</div>
									
									
								<div class="bold text-uppercase margin-top-40">Movie/Series Name</div>
								<span class="font-size-13">
									<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_title']."";
										
									}
							?>
								</span>
								
								<div class="bold text-uppercase margin-top-40">Imdb Rating</div>
								<span class="font-size-13">
									<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_irating']."";
										
									}
							?>
								</span>
								
								<div class="bold text-uppercase margin-top-35">Quality</div>
								<span id="dw" class="font-size-13">
									<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_quality']."";
										
									}
							?>
								</span>
								
								<div class="bold text-uppercase margin-top-35">Language</div>
								<span class="font-size-13">
									<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_language']."";
										
									}
							?>
								</span>
									
								<div class="description">		
									<a href="
									<?php
								$sql='SELECT * FROM movies WHERE m_id=1';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['m_link']."";
										
									}
									?>
									" 
									class="btn btn-block btn-primary margin-top-40" target="_blank">Download</a>
								</div>
							</div>
						</div>
						
						<!--download links-->

						
						<div class="widget widget-list">
							<div class="tab-select border-bottom-1 border-grey-300">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tabs1" data-toggle="tab">Related Posts</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<ul class="tab-pane fade in active" id="tabs1">
									<?php
									$sql='SELECT * FROM movies';
									$result = mysqli_query($con, $sql);
									$number_of_results = mysqli_num_rows($result);
									$sql='SELECT * FROM movies WHERE m_category="hollywood" ORDER BY m_id desc LIMIT 5';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
									echo "<li>";
										echo "<a href='".$row{'m_title'}.".php?' class='thumb'><img src='../admin/Mimages/".$row['m_cover']."'></a>";
										echo "<div class='widget-list-meta'>";
										echo "<h4 class='widget-list-title'><a href='".$row{'m_title'}.".php?'>".$row['m_title']."</a></h4>";		
										echo "</div>";
									echo "</li>";
									}
									?>	
								</ul>
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