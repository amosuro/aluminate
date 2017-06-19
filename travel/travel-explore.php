<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="../_/js/gmapsCustom.js"></script>
	</head>
	<body>
		<?php 
			$active = "Search"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-travel.php' ?>
			<div id="ang-wrapper">
				<?php include '../_/inc/sidebar-travel-explore.php' ?>
				<section>
					<!-- start: panels -->
					<div id="ang-mainContent">
						<!-- start: Keywords -->
						<div id="ang-pSkeywords" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>Keywords</h1>
							</div>
							<div class="ang-pContent">
								<form id="ang-keywordSearch" action="travel-results.php">
									<input type="text" value="Search for a location" name="keywordSearch" class="ang-keywordSearch" />
									<button action="travel-travel-results.php">Search</button>
								</form>
							</div>
						</div>
						<!-- end: Keywords -->
						
						<!-- start: hostTypes -->
						<div id="ang-pSHostTypes" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>Host types</h1>
							</div>
							<div class="ang-pContent">
								<div class="ang-searchBigCategory">
									<ul>
										<li><a href="travel-results.php">I'm looking for a place to stay</a></li>
										<li><a href="travel-results.php">I'd like to meet for coffee</a></li>
										<li><a href="travel-results.php">I'd like to meet for a drink</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end: hostTypes -->
						
						<!-- start: Professions -->
						<div id="ang-pSoccupation" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>Occupation</h1>
							</div>
							<div class="ang-pContent">
								<ul>
									<li><a href="#ang-tProfession" class="ang-button">Profession</a></li>
									<li><a href="#ang-tEmployer" class="ang-button">Employer</a></li>
									<li><a href="#ang-tIndustry" class="ang-button">Industry</a></li>
								</ul>
								<div id="ang-tProfession">
									<div class="ang-occupationCol">
										<dl>
											<dt><a href="travel-results.php">Director [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Web Designer [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Math Teacher [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Systems Admin [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Clerk [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Sales Advisor [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Principle [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Portfolio Manager [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Senior Analyst [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Secretary [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Consultant [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Chemistry Teacher [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Junior Associate [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Headmaster [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">General Manager [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Lecturer [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Tutor [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Business Analyst [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Deputy Director [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Consultant [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Web Developer [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Architect [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Builder [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Fashion Designer [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Illustrator [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Lawyer [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Forensic Scientist [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Pilot [<span>4</span>]</a></dt>
										</dl>
									</div>
								</div>
								<div id="ang-tEmployer">
									<div class="ang-occupationCol">
										<dl>
											<dt><a href="travel-results.php">British Telecom [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Souther Electric [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Natwest Bank PLC [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Aluminati [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">HPB Management [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">RBS [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Vodafone [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Sky [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Google [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Apple [<span>4</span>]</a></dt>
										</dl>
									</div>
								</div>
								<div id="ang-tIndustry">
									<div class="ang-occupationCol">
										<dl>
											<dt><a href="travel-results.php">Education [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Law [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Business [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Web [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Fashion Design [<span>4</span>]</a></dt>
										</dl>
										<dl>
											<dt><a href="travel-results.php">Engineering [<span>4</span>]</a></dt>
										</dl>
									</div>
								</div>
							</div>
						</div>
						<!-- end: Professions -->
						
						<!-- start: Continents -->
						<div id="ang-pSContinents" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>Locations</h1>
							</div>
							<div class="ang-pContent">
								<div class="ang-searchBigCategory">
									<ul>
										<li><a href="#">Asia</a></li>
										<li><a href="#">Africa</a></li>
										<li><a href="#">North America</a></li>
										<li><a href="#">South America</a></li>
										<li><a href="#">Antartica</a></li>
										<li><a href="#">Europe</a></li>
										<li><a href="#">Australia/Oceania</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end: Continents -->
					</div>
					<!-- end: panels -->
				</section>
			</div>
			<?php include '../_/inc/footer.php' ?>
		</div>
		<?php include '../_/inc/lightbox-map.php' ?>
		<?php include '../_/inc/lightbox-mentor.php' ?>
		<?php include '../_/inc/lightbox-message.php' ?>
	</body>
</html>