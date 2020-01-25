<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Batman Arkham City | Freeland">
	<meta name="description" content="Download Batman Arkham City free from Freeland with out any virus or any broken link.">
	<meta name="keyword" content="Batman Arkham City, Batman Arkham City walkthrough, Batman Arkham City dlc, Batman Arkham City remastered">
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
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/game/pcgame/batac/batac1.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
							<?php
								$sql='SELECT * FROM article WHERE a_id=74';
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
								$sql='SELECT * FROM article WHERE a_id=74';
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
								$sql='SELECT * FROM article WHERE a_id=74';
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
										<b>Minimum:</b>
										<h5>• OS: Windows XP, Vista, 7</h5>
										<h5>• CPU: Intel Core 2 Duo 2.4 GHz or AMD Athlon X2 4800+</h5>
										<h5>• RAM: 2 GB</h5>
										<h5>• Graphics: ATI 3850HD 512 MB or NVIDIA GeForce 8800 GT 512MB</h5>
										<h5>• HARD DRIVE: 20 GB</h5>
										
										
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
												$sql='SELECT * FROM article WHERE a_id=74';
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
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/muCtJsy-d9w" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										<div class="wp-tab-content-wrapper">Batman: Arkham City builds upon the intense, atmospheric foundation of Batman: Arkham Asylum, sending players flying through the expansive Arkham City – five times larger than the game world in Batman: Arkham Asylum – the new maximum security “home” for all of Gotham City’s thugs, gangsters and insane criminal masterminds. Featuring an incredible Rogues Gallery of Gotham City’s most dangerous criminals including Catwoman, The Joker, The Riddler, Two-Face, Harley Quinn, The Penguin, Mr. Freeze and many others, the game allows players to genuinely experience what it feels like to be The Dark Knight delivering justice on the streets of Gotham City.<p></p>
<p>The Official GOTY Edition Includes:<br>
• Batman: Arkham City (main game)<br>
• Batman: Arkham City – Catwoman Pack (DLC)<br>
• Batman: Arkham City – Nightwing Bundle Pack (DLC)<br>
• Batman: Arkham City – Robin Bundle Pack (DLC)<br>
• Batman: Arkham City – Harley Quinn’s Revenge (DLC)<br>
• Batman: Arkham City – Challenge Map Pack (DLC)<br>
• Batman: Arkham City – Arkham City Skins Pack (DLC)</p>
<p>Batman: Arkham City – Game of the Year Edition packages new gameplay content, seven maps, three playable characters, and 12 skins beyond the original retail release:</p>
<p>• Maps: Wayne Manor, Main Hall, Freight Train, Black Mask, The Joker’s Carnival, Iceberg Long, and Batcave<br>
• Playable Characters: Catwoman, Robin and Nightwing<br>
• Skins: 1970s Batsuit, Year One Batman, The Dark Knight Returns, Earth One Batman, Batman Beyond Batman, Animated Batman, Sinestro Corps Batman, Long Halloween Catwoman, Animated Catwoman, Animated Robin, Red Robin and Animated Nightwing </p></div>				
									
									<p>Repack Features:<br>
• Based on Batman.Arkham.City.Game.of.The.Year.Edition.MULTi9-PROPHET ISO (17,873,442,816 bytes)<br>
• Game version: v1.1.0.0, all DLCs included<br>
• 100% Lossless &amp; MD5 Perfect: all files are identical to originals after installation<br>
• NOTHING ripped, NOTHING re-encoded<br>
• Selective download feature: you may skip downloading and installing of language packs you don’t need<br>
• Significantly smaller archive size (compressed from 16.6 to 11.2/11.3 GB for any single language)<br>
• Installation takes 15-30 minutes (depending on your system)<br>
• After-install integrity check so you could make sure that everything installed properly<br>
• HDD space after installation: up to 19 GB<br>
• Repack by FitGirl</p>
									</div>
									
									<div id="ss"></div>
									<h3><b><a>Screen Shots:</a></b></h3>
									<div class="img-responsive">
										<img src="img/game/pcgame/batac/batac1.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batac/batac2.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batac/batac3.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batac/batac4.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batac/batac5.jpg">
									</div>	
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/game/pcgame/batac/batac5.jpg);">
							<div class="overlay">
								<div class="title">
								<?php
								$sql='SELECT * FROM article WHERE a_id=74';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								</div>
									
								<div class="bold text-uppercase">Platform</div>
								<span class="label label-primary">PC</span>
								<span class="label label-success">PS3</span>
									
								<div class="bold text-uppercase margin-top-40">Developer</div>
								<span class="font-size-13">Rocksteady Studios</span>
								
								<div class="bold text-uppercase margin-top-40">Publisher</div>
								<span class="font-size-13">Warner Bros</span>
								
								<div class="bold text-uppercase margin-top-35">Release Date</div>
								<span class="font-size-13">8 Sep, 2012</span>
								
								<div class="bold text-uppercase margin-top-35">Setup</div>
								<span class="font-size-13">• Batman Arkham City Game of The Year Edition MULTi9-PROPHET</span><br>
								<span class="font-size-13">• Batman Arkham City Game of The Year Edition MULTi9 Repack By FitGirl</span>
								
								<div class="bold text-uppercase margin-top-35">Size</div>
								<span id="dw" class="font-size-13">• 16.6 GB</span><br>
								<span id="dw" class="font-size-13">• 11.2 GB</span>
								
								<div class="bold text-uppercase margin-top-35">Crack by</div>
								<span class="font-size-13">PROPHET</span>
								
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
								$sql='SELECT * FROM article WHERE a_id=74';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								Download Links</h5>
							  </div>
							  <div class="modal-body">
								<a href="http://filecrypt.cc/Container/F360B381F7.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC (16.6 GB)</a>
								<a href="https://filecrypt.cc/Container/39BED691BD.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC - Fitgirl Repack (11.2 GB)</a>
								<a href="https://goo.gl/dQjOqG" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PS3 (9.6 GB)</a>
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