<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Batman Arkham Origins | Freeland">
	<meta name="description" content="Download Batman Arkham Origins free from Freeland with out any virus or any broken link.">
	<meta name="keyword" content="Batman Arkham Origins, Batman Arkham Origins walkthrough, Batman Arkham Origins dlc, Batman Arkham Origins remastered">
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
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/game/pcgame/batao/batao7.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
							<?php
								$sql='SELECT * FROM article WHERE a_id=75';
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
								$sql='SELECT * FROM article WHERE a_id=75';
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
								$sql='SELECT * FROM article WHERE a_id=75';
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
										<h5>• OS: 32-bit: Vista, Win 7, Win 8</h5>
										<h5>• CPU: Intel Core 2 Duo, 2.4 GHz / AMD Athlon X2, 2.8 GH</h5>
										<h5>• RAM: 2 GB</h5>
										<h5>• Graphics: NVIDIA GeForce 8800 GTS / AMD Radeon HD 3850 or better with 512 MB of VRAM</h5>
										<h5>• HARD DRIVE: 20 GB</h5>
										
										<p>Recommended:<br>
										• OS:64-bit: Vista, Win 7, Win 8<br>
										• Processor:Intel Core i5-750, 2.67 GHz / AMD Phenom II X4 965, 3.4 GHz<br>
										• Memory:4 GB RAM<br>
										• Graphics:NVIDIA GeForce GTX 560 / AMD Radeon HD 6950 or better with 768 MB+ of VRAM (DirectX 11 Compatible)<br>
										• Hard Drive Space:20 GB<br>
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
												$sql='SELECT * FROM article WHERE a_id=75';
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
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9pnK8akbd2M" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										<div class="wp-tab-content-wrapper">Batman: Arkham Origins features an expanded Gotham City and introduces an original prequel storyline set several years before the events of Batman: Arkham Asylum and Batman: Arkham City, the first two critically acclaimed games of the franchise. Taking place before the rise of Gotham City’s most dangerous criminals, the game showcases a young and unrefined Batman as he faces a defining moment in his early career as a crime fighter that sets his path to becoming the Dark Knight. As the story unfolds, players will meet many important characters for the first time and forge key relationships.<p></p>
<p>The official Complete Edition includes:<br>
• Batman: Arkham Origins (main game)<br>
• Batman: Arkham Origins – Cold, Cold Heart (DLC)<br>
• Batman: Arkham Origins – Initiation (DLC)<br>
• Batman: Arkham Origins – New Millennium Skins Pack (DLC)<br>
• Batman: Arkham Origins – Infinite Earths Skin Pack (DLC)<br>
• Batman: Arkham Origins – Black Mask Challenge Pack (DLC)<br>
• Batman: Arkham Origins – Online Supply Drop 1 (DLC)<br>
• Batman: Arkham Origins – Online Supply Drop 2 (DLC)</p>
<p>Repack Features:<br>
• Language: English<br>
• Repack Size: 9.58 GB<br>
• Game Size: 15.8 GB<br>
• Size Required: 16.0 GB<br>
• Video Quality: Untouched<br>
• Audio Quality: Untouched<br>
• Texture Quality: Untouched<br>
• Includes: All DLCs</p></div>				
									</div>
									<div id="ss"></div>
									<h3><b><a>Screen Shots:</a></b></h3>
									<div class="img-responsive">
										<img src="img/game/pcgame/batao/batao1.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batao/batao2.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batao/batao3.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batao/batao4.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/batao/batao5.jpg">
									</div>	
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/game/pcgame/batao/batao6.jpg);">
							<div class="overlay">
								<div class="title">
								<?php
								$sql='SELECT * FROM article WHERE a_id=75';
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
								<span class="font-size-13">Splash Damage</span>
								
								<div class="bold text-uppercase margin-top-40">Publisher</div>
								<span class="font-size-13">Warner Bros</span>
								
								<div class="bold text-uppercase margin-top-35">Release Date</div>
								<span class="font-size-13">25 Oct, 2013</span>
								
								<div class="bold text-uppercase margin-top-35">Setup</div>
								<span class="font-size-13">Batman Arkham Origins Complete Edition Repack-CorePack</span>
								
								<div class="bold text-uppercase margin-top-35">Size</div>
								<span id="dw" class="font-size-13">9.60 GB</span>
								
								<div class="bold text-uppercase margin-top-35">Crack by</div>
								<span class="font-size-13">n/a</span>
								
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
								$sql='SELECT * FROM article WHERE a_id=75';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								Download Links</h5>
							  </div>
							  <div class="modal-body">
								<a href="http://filecrypt.cc/Container/1C89272763.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC (9.60 GB)</a>
								<a href="https://goo.gl/zogyYZ" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PS3 (13 GB)</a>
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