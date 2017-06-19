<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="../_/js/gmapsTravelDash.js"></script>
	</head>
	<body>
		<?php 
			$active = "Home"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-travel.php' ?>
			<div id="ang-wrapper">
				<section>
					<!-- start: dashboardIntro -->
					<div id="ang-dashboardIntro" class="ang-travelIntro">
						<header>
							<h1 class="ang-bebas">Find yourself a travel host</h1>
						</header>
						<form action="" method="" id="ang-travelLargeSearch">
							<input type="text" value="Where do you want to go?" />
							<button>Go!</button>
						</form>
					</div>
					<!-- end: dashboardIntro -->
					
					<div id="ang-travelMap"></div>
					
					<!-- start: featuredGuide -->
					<div id="ang-pFeaturedGuide" class="ang-panelFull">
						<div class="ang-pHeader ang-sGradient">
							<h1>Featured Guide</h1>
							<div class="ang-carouselNav">
								<a href="#" class="ang-pHeaderOld">Old</a>
								<a href="#" class="ang-pHeaderNew">New</a>
							</div>
						</div>
						<div class="ang-pContent">
							<div id="ang-featuredGuides">
								<ul>
									<li>
										<a href="#"><img src="../_/img/photo/featuredGuide-1.png" /></a>
										<div>
											<h1>Great welcome to the City of London!</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet lacinia fringilla. In commodo metus a eros ultrices elementum. Vestibulum eu lacus lacus, eu sollicitudin nulla. Mauris placerat eleifend nunc, quis aliquet urna mattis vel. Phasellus quis enim erat, ut laoreet nibh. Phasellus tristique felis rhoncus dui blandit et semper massa dapibus. Suspendisse ut diam ipsu meu lacus lacus, eu sollicitudin nulla. Mauris placerat eleifend nunc, quis  tristiqueal iquet eu sollicitudamet<a href="#">...more.</a></p>
											<p class="ang-featuredAuthor">By <a href="#">Eddie Wallace</a> | Hosted by <a href="#">Mark Ridges</a> | Located in <a href="#">London</a></p>
										</div>
									</li>
									<li>
										<a href="#"><img src="../_/img/photo/featuredGuide-1.png" /></a>
										<div>
											<h1>Great welcome to the City of London!</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet lacinia fringilla. In commodo metus a eros ultrices elementum. Vestibulum eu lacus lacus, eu sollicitudin nulla. Mauris placerat eleifend nunc, quis aliquet urna mattis vel. Phasellus quis enim erat, ut laoreet nibh. Phasellus tristique felis rhoncus dui blandit et semper massa dapibus. Suspendisse ut diam ipsu meu lacus lacus, eu sollicitudin nulla. Mauris placerat eleifend nunc, quis  tristiqueal iquet eu sollicitudamet<a href="#">...more.</a></p>
											<p class="ang-featuredAuthor">By <a href="#">Eddie Wallace</a> | Hosted by <a href="#">Mark Ridges</a> | Located in <a href="#">London</a></p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end: featuredGuide -->
					
				</section>
			</div>
			<?php include '../_/inc/footer.php' ?>
		</div>
		<?php include '../_/inc/lightbox-map.php' ?>
		<?php include '../_/inc/lightbox-mentor.php' ?>
		<?php include '../_/inc/lightbox-message.php' ?>
	</body>
</html>