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
					<div id="ang-pSstatistics" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Four ways to search for fellow Alumni</h1>
						</div>
						<div class="ang-pContent">
							<nav id="ang-subNav">
								<ul>
									<li><a href="javascript:void(0)" class="ang-button" onclick="goToByScroll('ang-pSkeywords')">Keywords</a></li>
									<li><a href="javascript:void(0)" class="ang-button" onclick="goToByScroll('ang-pSyear')">Graduation</a></li>
									<li><a href="javascript:void(0)" class="ang-button" onclick="goToByScroll('ang-pSoccupation')">Occupation</a></li>
									<li><a href="javascript:void(0)" class="ang-button" onclick="goToByScroll('ang-pSlocation')">Location</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div id="ang-pSkeywords" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Keywords</h1>
						</div>
						<div class="ang-pContent">
							<form id="ang-keywordSearch" action="results.php">
								<input type="text" value="Search for a name, country, email address or course" name="keywordSearch" class="ang-keywordSearch" />
								<a href="results.php" class="ang-button">Search</a>
								<label class="ang-mentorsOnlySearch">Mentors only</label>
								<input type="checkbox" value="Include Mentors" />
							</form>
						</div>
					</div>
					<div id="ang-pSyear" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Graduation Year</h1>
						</div>
						<div class="ang-pContent">
							<div id="ang-yearAccordions">
								<a href="#" class="ang-button ang-yearNewer">Newer</a>
								<div id="ang-accordionScroller">
									<ul id="ang-accordionContainer">
										<li id="ang-d2010s">
											<h1 class="ang-sGradient">2010s</h1>
											<dl>
												<dt><a href="results.php">2012 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2011 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2010 [<span>12</span>]</a></dt>
											</dl>
										</li>
										<li id="ang-d2000s">
											<h1 class="ang-sGradient">2000s</h1>
											<dl>
												<dt><a href="results.php">2009 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2008 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2007 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2006 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2005 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2004 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2003 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2002 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2001 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">2000 [<span>12</span>]</a></dt>
											</dl>
										</li>
										<li id="ang-d1990s">
											<h1 class="ang-sGradient">1990s</h1>
											<dl>
												<dt><a href="results.php">1999 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1998 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1997 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1996 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1995 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1994 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1993 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1992 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1991 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1990 [<span>12</span>]</a></dt>
											</dl>
										</li>
										<li id="ang-d1980s">
											<h1 class="ang-sGradient">1980s</h1>
											<dl>
												<dt><a href="results.php">1989 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1988 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1987 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1986 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1985 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1984 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1983 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1982 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1981 [<span>12</span>]</a></dt>
											</dl>
											<dl>
												<dt><a href="results.php">1980 [<span>12</span>]</a></dt>
											</dl>
										</li>
									</ul>
								</div>
								<a href="#" class="ang-button ang-yearOlder">Older</a>
							</div>
						</div>
					</div>
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
										<dt><a href="results.php">Director [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Web Designer [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Math Teacher [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Systems Administrator [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Clerk [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Sales Advisor [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Principle [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Portfolio Manager [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Senior Analyst [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Secretary [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Consultant [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Chemistry Teacher [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Junior Associate [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Headmaster [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">General Manager [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Lecturer [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Tutor [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Business Analyst [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Deputy Director [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Consultant [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Web Developer [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Architect [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Builder [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Fashion Designer [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Illustrator [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Lawyer [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Forensic Scientist [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Pilot [<span>4</span>]</a></dt>
									</dl>
								</div>
							</div>
							<div id="ang-tEmployer">
								<div class="ang-occupationCol">
									<dl>
										<dt><a href="results.php">British Telecom [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Souther Electric [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Natwest Bank PLC [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Aluminati [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">HPB Management [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">RBS [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Vodafone [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Sky [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Google [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Apple [<span>4</span>]</a></dt>
									</dl>
								</div>
							</div>
							<div id="ang-tIndustry">
								<div class="ang-occupationCol">
									<dl>
										<dt><a href="results.php">Education [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Law [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Business [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Web [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Fashion Design [<span>4</span>]</a></dt>
									</dl>
									<dl>
										<dt><a href="results.php">Engineering [<span>4</span>]</a></dt>
									</dl>
								</div>
							</div>
						</div>
					</div>
					<div id="ang-pSlocation" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Location</h1>
						</div>
						<div class="ang-pContent">
							<form action="results.php" id="ang-locationSearch">
								<input type="text" class="ang-loctionSearch" name="loctionSearch" value="Search for an Alumni">
								<button>Search</button>
							</form>
							<img src="_/img/photo/search-map.png" alt="Search by location" />
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include '_/inc/footer.php' ?>
		<?php include '_/inc/lightbox-map.php' ?>
	</body>
</html>