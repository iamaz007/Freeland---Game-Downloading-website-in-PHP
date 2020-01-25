<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Batman Arkham Knight | Freeland">
	<meta name="description" content="Download Batman Arkham Knight free from Freeland with out any virus or any broken link.">
	<meta name="keyword" content="Batman Arkham Knight, Batman Arkham Knight walkthrough, Batman Arkham Knight dlc, Batman Arkham Knight remastered">
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
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/game/pcgame/batak/batak7.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
							<?php
								$sql='SELECT * FROM article WHERE a_id=76';
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
								$sql='SELECT * FROM article WHERE a_id=76';
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
								$sql='SELECT * FROM article WHERE a_id=76';
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
										<div class="wp-tab-content-wrapper">Minimum:<br>
• OS: Win 7 SP1, Win 8.1 (64-bit Operating System Required)<br>
• Processor: Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz<br>
• Memory: 6 GB RAM<br>
• Graphics: Graphics: NVIDIA GeForce GTX 660 (2 GB Memory Minimum) | AMD Radeon HD 7950 (3 GB Memory Minimum)<br>
• Hard Drive: 45 GB<p></p>
<p>Recommended:<br>
• OS: Win 7 SP1, Win 8.1 (64-bit Operating System Required)<br>
• Processor: Intel Core i7-3770, 3.4 GHz | AMD FX-8350, 4.0 GHz<br>
• Memory: 8 GB RAM<br>
• Graphics: NVIDIA GeForce GTX 760 – 3 GB Memory<br>
• Hard Drive: 55 GB</p></div>
										
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
												$sql='SELECT * FROM article WHERE a_id=76';
													$result = mysqli_query($con, $sql);
													while($row = mysqli_fetch_array($result)) 
													{
														echo "".$row['a_title']."";
														
													}
											?>
											</a></h3>
											<ul class="post-meta">
												<li><a href="#"><i class="fa fa-user"></i>Uploaded by: AZ</a></li>
												<li><i class="fa fa-calendar-o"></i> Uploaded on: 19 Jan, 2019</li>
												
											</ul>
										</div>
									</div>
									
									<div class="embed-responsive embed-responsive-16by9 post-thumbnail">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wsf78BS9VE0" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										Batman™: Arkham Knight brings the award-winning Arkham trilogy from Rocksteady Studios to its epic conclusion. Developed exclusively for New-Gen platforms, Batman: Arkham Knight introduces Rocksteady’s uniquely designed version of the Batmobile. The highly anticipated addition of this legendary vehicle, combined with the acclaimed gameplay of the Arkham series, offers gamers the ultimate and complete Batman experience as they tear through the streets and soar across the skyline of the entirety of Gotham City. In this explosive finale, Batman faces the ultimate threat against the city that he is sworn to protect, as Scarecrow returns to unite the super criminals of Gotham and destroy the Batman forever.			
									<p>Included DLCs:<br>
• 1970s Batman Themed Batmobile Skin<br>
• 1989 Movie Batmobile Pack<br>
• 2008 Movie Batman Skin<br>
• 2008 Tumbler Batmobile Pack<br>
• 2016 Batman v Superman Batmobile Pack<br>
• A Flip of a Coin<br>
• A Matter of Family<br>
• Bat-Family Skin Pack<br>
• Batman 1st Appearance Skin<br>
• Batman Classic TV Series Batmobile Pack<br>
• Batman Flashpoint Skin<br>
• Batman: Inc. Skin<br>
• Batman: Noel Skin<br>
• Catwoman’s Revenge<br>
• Crime Fighter Challenge Pack #1<br>
• Crime Fighter Challenge Pack #2<br>
• Crime Fighter Challenge Pack #3<br>
• Crime Fighter Challenge Pack #4<br>
• Crime Fighter Challenge Pack #5<br>
• Crime Fighter Challenge Pack #6<br>
• GCPD Lockdown<br>
• Gotham’s Future Skin Pack<br>
• Harley Quinn Story Pack<br>
• New 52 Skins Pack<br>
• Original Arkham Batman Skin<br>
• Original Arkham Batmobile<br>
• Prototype Batmobile Skin<br>
• Red Hood Story Pack<br>
• Riddler Themed Batmobile Skin<br>
• Robin and Batmobile Skins Pack<br>
• Rocksteady Themed Batmobile Skin<br>
• Season of Infamy: Most Wanted Expansion<br>
• Season Pass<br>
• WayneTech Track Pack</p>
<p>Repack Features:<br>
• Based on Batman.Arkham.Knight.READ.NFO-CPY (72,617,965,568 bytes)<br>
• All released DLCs included and activated<br>
• Game version is: v1.6.2.0<br>
• 100% Lossless &amp; MD5 Perfect: all files are identical to originals after installation<br>
• NOTHING ripped, NOTHING re-encoded<br>
• Selective download: you can skip downloading/installing unnecessary voiceovers packs<br>
• Significantly smaller archive size (compressed from 67.6 to 26.9/27 GB)<br>
• Installation takes 40-90 minutes (depending on your system)<br>
• After-install integrity check so you could make sure that everything installed properly<br>
• HDD space after installation: 52~68 GB (depending on selected languages)<br>
• Use “Language Selector.exe” in game “Binaries\Win64” folder to change the game language<br>
• At least 2 GB of free RAM (inc. virtual) required for installing this repack<br>
• Crack: CPY<br>
• Repack uses pZlib library by Razor12911<br>
• Repack by FitGirl</p>
									</div>
									<div id="ss"></div>
									<h3><b><a>Screen Shots:</a></b></h3>
									<div class="img-responsive">
										<img src="img/game/pcgame/batak/batak1.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batak/batak2.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batak/batak3.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batak/batak4.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batak/batak5.jpg">
									</div>	
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/game/pcgame/batak/batak6.jpg);">
							<div class="overlay">
								<div class="title">
								<?php
								$sql='SELECT * FROM article WHERE a_id=76';
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
								<span class="font-size-13">Rocksteady Studios</span>
								
								<div class="bold text-uppercase margin-top-40">Publisher</div>
								<span class="font-size-13">Warner Bros</span>
								
								<div class="bold text-uppercase margin-top-35">Release Date</div>
								<span class="font-size-13">Batman Arkham Knight-CPY</span>
								
								<div class="bold text-uppercase margin-top-35">Setup</div>
								<span class="font-size-13">• Batman Arkham Knight READ NFO-CPY</span><br>
								<span class="font-size-13">• Batman Arkham Knight Premium Edition MULTi10 Repack By FitGirl</span>
								
								<div class="bold text-uppercase margin-top-35">Size</div>
								<span id="dw" class="font-size-13">• 67.63 GB</span><br>
								<span id="dw" class="font-size-13">• 26.9 GB</span>
								
								<div class="bold text-uppercase margin-top-35">Crack by</div>
								<span class="font-size-13">CPY</span>
								
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
								$sql='SELECT * FROM article WHERE a_id=76';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								Download Links</h5>
							  </div>
							  <div class="modal-body">
								<a href="http://filecrypt.cc/Container/C5E4C56016.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC (67.63 GB)</a>
								<a href="https://filecrypt.cc/Container/2FB396D75C.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC - fitgirl (26.9 GB)</a>
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