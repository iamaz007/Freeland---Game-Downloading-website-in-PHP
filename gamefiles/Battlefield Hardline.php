<?php
	include 'dbh.php';
?>	
<?php
	include 'header.php';
?>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Battlefield Hardline | Freeland">
	<meta name="keyword" content="Battlefield Hardline free download, Battlefield Hardline crack download, codex cracks, fitgirl direct download lins">
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
		<section class="hero height-350 hero-game img-responsive" style="background-image: url(img/game/pcgame/bfh/bfh6.jpg)">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">
							<?php
								$sql='SELECT * FROM article WHERE a_id=63';
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
								$sql='SELECT * FROM article WHERE a_id=63';
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
								$sql='SELECT * FROM article WHERE a_id=63';
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
• Operating System: 64-bit version of Windows at least Vista SP2 (with KB971512 Update) or newer<br>
• Processor: At least an Athlon II/Phenom II 2.8 GHz or Intel Core i3/i5 2.4GHz<br>
• RAM/Memory: 4 GB<br>
• Graphics Card: At least an ATI 5770 with 1GB of Graphics Memory or an NVidia GTX260 with 896MB of Graphics Memory<br>
• Hard Drive: 60 GB<br>
<p>Recommended:<br>
• Operating System: Windows 8 64-BIT (with KB971512 Update)<br>
• Processor: At least an Intel Quad-Core CPU or AMD Six-Core CPU<br>
• RAM/Memory:8 GB<br>
• Graphics Card: At least an AMD 290 or NVidia GTX760<br>
• Hard Drive: At least 60 GB of space free<br></p>
									
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
												$sql='SELECT * FROM article WHERE a_id=63';
													$result = mysqli_query($con, $sql);
													while($row = mysqli_fetch_array($result)) 
													{
														echo "".$row['a_title']."";
														
													}
											?>
											</a></h3>
											<ul class="post-meta">
												<li><a href="#"><i class="fa fa-user"></i>Uploaded by: AZ</a></li>
												<li><i class="fa fa-calendar-o"></i> Uploaded on: 1 Dec, 2018</li>
												
											</ul>
										</div>
									</div>
									
									<div class="embed-responsive embed-responsive-16by9 post-thumbnail">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yWVPoUCxAC4" allowfullscreen></iframe>
									</div>
									<h3><b>Description:</b></h3>
									<div class="wp-tab-content">		
										<div class="wp-tab-content-wrapper">Welcome to your new playground.<p></p>
<p>Take on the role of Nick Mendoza in an intense story of revenge, as a new addition to the Battlefield series strikes out in a dramatically new direction. As the young detective, you’ll head out on a cross-country vendetta against those you once trusted on the force.</p>
<p>Inspired by emotionally charged TV crime drama, you’ll use advanced weaponry and powerful vehicles to deliver your own justice, while you’ll be able to form your own crew and wreak citywide destruction in the game’s vast multiplayer modes.</p>
<p>Turn enemies into fresh road kill, or blow past cops on a loot-laden motorcycle. Shoot out the inside of a subterranean grow-lab, blow open a gleaming bank vault or blast apart a Los Angeles car dealership. Battlefield Hardline is fast, fresh and intense.</p></div>				
									</div>
									<div id="ss"></div>
									<h3><b><a>Screen Shots:</a></b></h3>
									<div class="img-responsive">
										<img src="img/game/pcgame/bfh/bfh1.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/bfh/bfh2.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/bfh/bfh3.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/bfh/bfh4.jpg">
									</div><br>
									<div class="img-responsive">
										<img src="img/game/pcgame/bfh/bfh5.jpg">
									</div>	
								</div>
							</div>
							
						</div>
						
						
					</div>
					
					<div class="col-md-4 padding-left-20">
						<div class="widget widget-game" style="background-image: url(img/game/pcgame/bfh/bfh7.jpg);">
							<div class="overlay">
								<div class="title">
								<?php
								$sql='SELECT * FROM article WHERE a_id=63';
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
								<span class="label label-warning">PS4</span>
									
								<div class="bold text-uppercase margin-top-40">Developer</div>
								<span class="font-size-13">Visceral Games</span>
								
								<div class="bold text-uppercase margin-top-40">Publisher</div>
								<span class="font-size-13">Electronic Arts</span>
								
								<div class="bold text-uppercase margin-top-35">Release Date</div>
								<span class="font-size-13">Mar 17, 2015</span>
								
								<div class="bold text-uppercase margin-top-35">Setup</div>
								<span class="font-size-13">Battlefield Hardline-CPY</span>
								
								<div class="bold text-uppercase margin-top-35">Size</div>
								<span id="dw" class="font-size-13">40.1 GB</span>
								
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
								$sql='SELECT * FROM article WHERE a_id=63';
									$result = mysqli_query($con, $sql);
									while($row = mysqli_fetch_array($result)) 
									{
										echo "".$row['a_title']."";
										
									}
								?>
								Download Links</h5>
							  </div>
							  <div class="modal-body">
								<a href="http://filecrypt.cc/Container/2EDAF8BE7D.html" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PC (40.1 GB)</a>
								<a href="https://goo.gl/ZHPZAM" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PS3 (13.5 GB)</a>
								<a href="http://bit.ly/2K5X97U" class="btn btn-block btn-primary margin-top-40" target="_blank">Download For PS4 (42.1 GB)</a>
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
									$sql='SELECT * FROM article WHERE a_category="shooting" ORDER BY a_id desc LIMIT 5';
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