<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Just Cause 4 | Freeland">
	<meta name="description" content="Just Cause 4 is avaliable for free at Freeland, Just Cause 4 sees rogue hero Rico Rodriguez land in Solis to hunt down the truth about his past">
	<meta name="keyword" content="Just Cause 4, just cause, Just Cause 4 walkthrough, Just Cause 4 free download, Just Cause 4 campaign, Just Cause 4 mission list, Just Cause 4 cheat codes, Just Cause 4 muiltiplayer">
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
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/game/pcgame/jc4/jc41.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
							<?php
								$sql='SELECT * FROM article WHERE a_id=68';
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
								$sql='SELECT * FROM article WHERE a_id=68';
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
								$sql='SELECT * FROM article WHERE a_id=68';
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
• OS: Windows 7 SP1 with Platform Update for Windows 7 (64-bit versions only)<br>
• Processor: Intel Core i5-2400 @ 3.1 GHz | AMD FX-6300 @ 3.5 GHz or better<br>
• Memory: 8 GB RAM<br>
• Graphics: NVIDIA GeForce GTX 760 (2GB VRAM or better) | AMD R9 270 (2GB VRAM or better)<br>
• Storage: 59 GB available space<p></p>
<p>Recommended:<br>
• OS: Windows 10 (64-bit versions only)<br>
• Processor: Intel Core i7-4770 @ 3.4 GHz | AMD Ryzen 5 1600 @ 3.2 GHz or equivalent<br>
• Memory: 16 GB RAM<br>
• Graphics: NVIDIA GeForce GTX 1070 (6GB VRAM or better) | AMD Vega 56 (6GB VRAM or better)<br>
• Storage: 59 GB available space</p>
										
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
												$sql='SELECT * FROM article WHERE a_id=68';
													$result = mysqli_query($con, $sql);
													while($row = mysqli_fetch_array($result)) 
													{
														echo "".$row['a_title']."";
														
													}
											?>
											</a></h3>
											<ul class="post-meta">
												<li><a href="#"><i class="fa fa-user"></i>Uploaded by: AZ</a></li>
												<li><i class="fa fa-calendar-o"></i> Uploaded on: 6 Dec, 2018</li>
												
											</ul>
										</div>
									</div>
									
									<div class="embed-responsive embed-responsive-16by9 post-thumbnail">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lfek7Kcq16g" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										<div class="wp-tab-content-wrapper">Welcome to Solis, a huge South American world home of conflict, oppression and extreme weather conditions. Just Cause 4 sees rogue hero Rico Rodriguez land in Solis to hunt down the truth about his past, at any costs. Strap into your wingsuit, equip your fully customizable grappling hook, and get ready to bring the thunder. Soar through the skies with your wingsuit – Skydive, Base Jump and Free Dive with no limits. Fight your enemies under extreme weather conditions, including treacherous tornadoes and tropical lightning storms, taking the iconic Just Cause action to insane new heights.<p></p>
<p>Use extreme weather events to your advantage thanks to never seen before in-game physics. Spearhead the rebellion and defeat the Black Hand, a hi-tech private military organisation. Face off against Gabriela Morales – your most fierce, capable, and unpredictable adversary yet. Uncover the truth of Rico’s father’s past life on Solís’ and its extreme weather. Explore the remote South American country of Solís, home of conflict, secrets, and danger. Enjoy 100 square kilometres of exotic playground, from rainforest to desert, via snowy mountain peaks. Discover a plethora of wonders as you explore the world of Solís from bustling cities to rural grasslands.</p></div>				
									</div>
									<div id="ss"></div>
									<h3><b><a>Screen Shots:</a></b></h3>
									<div class="img-responsive">
										<img src="img/game/pcgame/jc4/jc41.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/jc4/jc42.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/jc4/jc43.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/jc4/jc44.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/jc4/jc45.jpg">
									</div>	
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/game/pcgame/jc4/jc45.jpg);">
							<div class="overlay">
								<div class="title">
								<?php
								$sql='SELECT * FROM article WHERE a_id=68';
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
								<span class="font-size-13">Avalanche Studios</span>
								
								<div class="bold text-uppercase margin-top-40">Publisher</div>
								<span class="font-size-13">Square Enix</span>
								
								<div class="bold text-uppercase margin-top-35">Release Date</div>
								<span class="font-size-13">5 Dec, 2018</span>
								
								<div class="bold text-uppercase margin-top-35">Setup</div>
								<span class="font-size-13">Just Cause 4-CPY</span>
								
								<div class="bold text-uppercase margin-top-35">Size</div>
								<span id="dw" class="font-size-13">51.4 GB</span>
								
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
								$sql='SELECT * FROM article WHERE a_id=68';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								Download Links</h5>
							  </div>
							  <div class="modal-body">
								<a href="https://filecrypt.cc/Container/875B305102.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC - GDrive (51.4 GB)</a>
								<a href="https://filecrypt.cc/Container/2F5EA37140.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC - UpToBox (51.4 GB)</a>
								<a href="https://filecrypt.cc/Container/DF35F5731D.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC - UPLOADED (51.4 GB)</a>
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
									$sql='SELECT * FROM article WHERE a_category="adventure" ORDER BY a_id desc LIMIT 5';
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