<!DOCTYPE html>
<html>
	<head>
		<?php include '_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Search"
		 ?>
		<?php include '_/inc/nav.php' ?>
		<div id="ang-wrapper">
			<?php include '_/inc/sidebar.php' ?>
			<section>
				<div id="ang-mainContent">
					<h1><a href="search.php">&laquo; Return to Search</a></h1>
					<div id="ang-pSearchResults" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Search Results</h1>
						</div>
						<div class="ang-pContent">
							<form id="ang-keywordSearch" action="results.php">
								<input type="text" value="Search for a name, country, email address or course" name="keywordSearch" class="ang-keywordSearch" />
								<button>Search</button>
								<div>
									<select>
										<option>Graduation</option>
										<option>2012</option>
										<option>2011</option>
										<option>2010</option>
										<option>2009</option>
										<option>2008</option>
									</select>
									<select>
										<option>Profession</option>
										<option>Lawyer</option>
										<option>Web Developer</option>
										<option>Fashion Designer</option>
										<option>Architect</option>
										<option>Math Teacher</option>
									</select>
									<select>
										<option>Industry</option>
										<option>Digital</option>
										<option>Law</option>
										<option>Design</option>
										<option>Education</option>
										<option>Online</option>
									</select>
									<a href="#" class="ang-button ang-green">Filter</a>
									<a class="ang-prevPage" href="#">Prev</a>
									<span>[ 1/2 ]</span>
									<a class="ang-nextPage" href="#">Next</a>
								</div>
							</form>
							<div id="ang-results">
								<ul>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
									<li class="ang-result">
										<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" class="ang-rThumb" />
										<div class="ang-rDetails">
											<h1><a href="view-profile.php">Jason Wright</a></h1>
											<h2>Economics</h2>
											<p><em>Financial Advisor</em></p>
											<p>Goldman Sachs</p>
										</div>
										<div class="ang-rActions">
											<a href="#" class="ang-button ang-grey">Message</a>
											<a href="#" class="ang-button ang-grey">Profile</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include '_/inc/footer.php' ?>
		<?php include '_/inc/lightbox-map.php' ?>
	</body>
</html>