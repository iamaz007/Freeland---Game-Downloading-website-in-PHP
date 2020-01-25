<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Monster Hunter World | Freeland">
	<meta name="description" content="Download Monster Hunter World for free from Freeland and enjoy the as a hunter, you’ll take on quests to hunt monsters in a variety of habitats.">
	<meta name="keyword" content="Monster Hunter World crack, Monster Hunter World codex, Monster Hunter World free download, free games, steam crack">
	<meta name="author" content="AZ">
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
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/game/pcgame/mhuw/mhw5.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
							<?php
								$sql='SELECT * FROM article WHERE a_id=66';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
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
						<li><a href="../games" ><i class="fa fa-gamepad"></i> Games</a></li>
						<li class="active" ><a href="#home">
						<?php
								$sql='SELECT * FROM article WHERE a_id=66';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
							?>
						</a></li>
						<li><a href="#ss" ><i class="fa fa-image"></i> Images</a></li>
						<li><a href="#dw" ><i class="fa fa-download"></i> Download</a></li>
						<li><a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-file"></i> System Requirments</a></li>
					</ul>
				</div>
			</div>
		</section>
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
					<h5 style="color:black;" class="modal-title" id="exampleModalLongTitle">
							<?php
								$sql='SELECT * FROM article WHERE a_id=66';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
							?>
					Windows System Requirments</h5>
				  </div>
						  <div class="container" style="color:black;">
							<div class="row">
								<div class="col-md-9 padding-right-20">
										Minimum:<br>
• Requires a 64-bit processor and operating system<br>
• OS: WINDOWS® 7, 8, 8.1, 10 (64-bit required)<br>
• Processor: Intel® Core™ i5-4460, 3.20GHz or AMD FX™-6300<br>
• Memory: 8 GB RAM<br>
• Graphics: NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x (VRAM 2GB)<br>
• Storage: 20 GB<br>
• Sound Card: DirectSound (DirectX® 9.0c)<br>
Additional Notes: 1080p/30fps when graphics settings are set to “Low”<p></p>
<p>Recommended:<br>
• Requires a 64-bit processor and operating system<br>
• OS: WINDOWS® 7, 8, 8.1, 10 (64-bit required)<br>
• Processor: Intel® Core™ i7 3770 3.4GHz or Intel® Core™ i3 8350 4GHz or AMD Ryzen™ 5 1500X<br>
• Memory: 8 GB RAM<br>
• Graphics: NVIDIA® GeForce® GTX 1060 (VRAM 3GB) or AMD Radeon™ RX 570 (VRAM 4GB)<br>
• Storage: 20 GB<br>
Additional Notes: 1080p/30fps when graphics settings are set to “High”</p>
										
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
								</div>		
							</div>	
								
						</div>	
						
				</div>	  
			  </div>
			</div>
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
												$sql='SELECT * FROM article WHERE a_id=66';
													$result = mysqli_query($con, $sql);
													while($row = mysqli_fetch_array($result)) 
													{
														echo "".$row['a_title']."";
														
													}
											?>
											</a></h3>
											<ul class="post-meta">
												<li><a href="#"><i class="fa fa-user"></i>Uploaded by: AZ</a></li>
												<li><i class="fa fa-calendar-o"></i> Uploaded on: 2 Dec, 2018</li>
												
											</ul>
										</div>
									</div>
									
									<div class="embed-responsive embed-responsive-16by9 post-thumbnail">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ro6r15wzp2o" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										<div class="wp-tab-content-wrapper">Welcome to a new world!<br>
Take on the role of a hunter and slay ferocious monsters in a living, breathing ecosystem where you can use the landscape and its diverse inhabitants to get the upper hand. Hunt alone or in co-op with up to three other players, and use materials collected from fallen foes to craft new gear and take on even bigger, badder beasts!<p></p>
<p>As a hunter, you’ll take on quests to hunt monsters in a variety of habitats.<br>
Take down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.</p>
<p>In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.</p></div>				
									</div>
									<div id="ss"></div>
									<h3><b><a>Screen Shots:</a></b></h3>
									<div class="img-responsive">
										<img src="img/game/pcgame/mhuw/mhw1.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/mhuw/mhw2.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/mhuw/mhw3.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/mhuw/mhw4.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/mhuw/mhw5.jpg">
									</div>	
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/game/pcgame/mhuw/mhw1.jpg);">
							<div class="overlay">
								<div class="title">
								<?php
								$sql='SELECT * FROM article WHERE a_id=66';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								</div>
									
								<div class="bold text-uppercase">Platform</div>
								<span class="label label-primary">PC</span>
									
								<div class="bold text-uppercase margin-top-40">Developer</div>
								<span class="font-size-13">Capcom</span>
								
								<div class="bold text-uppercase margin-top-40">Publisher</div>
								<span class="font-size-13">Capcom</span>
								
								<div class="bold text-uppercase margin-top-35">Release Date</div>
								<span class="font-size-13">10 Aug, 2018</span>
								
								<div class="bold text-uppercase margin-top-35">Setup</div>
								<span class="font-size-13">Monster Hunter World-CODEX</span>
								
								<div class="bold text-uppercase margin-top-35">Size</div>
								<span id="dw" class="font-size-13">19.5 GB</span>
								
								<div class="bold text-uppercase margin-top-35">Crack by</div>
								<span class="font-size-13">CODEX</span>
								
								<div class="description">		
									<a href="" class="btn btn-block btn-primary margin-top-40" data-toggle="modal" data-target="#exampleModal">Download</a>
								</div>
							</div>
						</div>
						
						<!--download links-->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
								<?php
								$sql='SELECT * FROM article WHERE a_id=66';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								Download Links</h5>
							  </div>
							  <div class="modal-body">
								<a href="https://filecrypt.cc/Container/5C81CF14F5.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC (19.5 GB)</a>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
						
						<div class="widget widget-list">
							<div class="tab-select border-bottom-1 border-grey-300">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tabs1" data-toggle="tab">Related Posts</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<ul class="tab-pane fade in active" id="tabs1">
									<?php
									$sql='SELECT * FROM article';
									$result = mysqli_query($con, $sql);
									$number_of_results = mysqli_num_rows($result);
									$sql='SELECT * FROM article WHERE a_category="action" ORDER BY a_id desc LIMIT 5';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
									echo "<li>";
										echo "<a href='".$row{'a_title'}.".php?' class='thumb'><img src='../admin/images/".$row['a_cover']."'></a>";
										echo "<div class='widget-list-meta'>";
										echo "<h4 class='widget-list-title'><a href='".$row{'a_title'}.".php?'>".$row['a_title']."</a></h4>";		
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