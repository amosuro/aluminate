<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Profile"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-core.php' ?>
			<div id="ang-wrapper">
				<?php include '../_/inc/sidebar-view.php' ?>
				<section>
					<div id="ang-mainContent">
						<!-- start: memberStatus -->
						<div id="ang-status" class="ang-statusShow">
							<h1>Significant Events</h1>
							<div id="ang-statusList">
								<ul>
									<li>
										<a href="#" class="ang-button">12/10/2011</a>
										<span class="ang-sGradient"><p>Katie and I have just had a baby boy!</p></span>
									</li>
									<li>
										<a href="#" class="ang-button">30/11/2011</a>
										<span class="ang-sGradient"><p>Richard has changed his Location to Edinburgh, Scotland</strong></p></span>
									</li>
									<li>
										<a href="#" class="ang-button">14/01/2012</a>
										<span class="ang-sGradient"><p>Wedding has been confirmed for 31st June 2012, very excited!</p></span>
									</li>
									<li>
										<a href="#" class="ang-button">31/03/2012</a>
										<span class="ang-sGradient"><p>Richard changed his Job Title to Head of Finance</p></span>
									</li>
								</ul>
							</div>
							<div id="ang-statusNav">
								<a href="#" class="ang-statusOlder"><img src="../_/img/icons/status-arrow-up.png" alt="Newer statuses" /></a>
								<a href="#" class="ang-statusNewer"><img src="../_/img/icons/status-arrow-down.png" alt="Older statuses" /></a>
							</div>
						</div>
						<!-- end: memberStatus -->
						<!-- start: profile tabs -->
						<div id="ang-profileTabs">
							<ul>
								<li><a href="#" class="ang-current">Personal</a></li>
								<li><a href="#">Mentor</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Intellects</a></li>
							</ul>
						</div>
						<!-- end: profile tabs -->
						<!-- start: profile panels -->
						<div id="ang-panels">
							<!-- start: summary -->
							<div id="ang-pSummary" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Summary</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>Sales and Marketing management has been a source and a medium, tapping on the skills that I achieved when I was doing MBA, here I could implement what I learned and could see the theory in practice.</p>
									<p>Have been in the Learning and Development department for just over two and half years but was exposed to almost all the aspects of the department. A trainer for technical aspect of the process of HSBC Auto Finance for HSBC...<a href="#">read more &raquo;</a></p>
								</div>
							</div>
							<!-- end: summary -->
							<!-- start: employment -->
							<div id="ang-pEmployment" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Professional History</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<div id="ang-employmentNav">
									<a href="#" class="ang-recent">Recent</a>
									<div id="ang-employmentList">
										<ul>
											<li><a href="#ang-employer-1" class="ang-button ang-grey ang-current">2012</a></li>
											<li><a href="#ang-employer-2" class="ang-button ang-grey">2011</a></li>
											<li><a href="#ang-employer-3" class="ang-button ang-grey">2010</a></li>
											<li><a href="#ang-employer-4" class="ang-button ang-grey">2009</a></li>
											<li><a href="#ang-employer-5" class="ang-button ang-grey">2008</a></li>
										</ul>
									</div>
									<a href="#" class="ang-older">Older</a>
								</div>
								<div id="ang-employer-1" class="ang-employer">
									<h1>Financial Advisor</h1>
									<h2>Goldman Sachs</h2>
									<h3>January 2010 - Present</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim. Suspendisse pulvinar ipsum nec dolor interdum consectetur.</p>
									<h1>Web Designer</h1>
									<h2>HPB Management</h2>
									<h3>January 2011 - August 2011</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim. Suspendisse pulvinar ipsum nec dolor interdum consectetur.</p>
								</div>
								<div id="ang-employer-2" class="ang-employer">
									<h1>Junior Accountant</h1>
									<h2>British Telecom</h2>
									<h3>January 2008 - October 2009</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim.</p>
								</div>
								<div id="ang-employer-3" class="ang-employer">
									<h1>Intern</h1>
									<h2>AIG</h2>
									<h3>November 2009 - January 2009</h3>
									<p>Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim.</p>
								</div>
							</div>
						</div>
						<!-- end: employment -->
						<!-- start: university -->
						<div id="ang-pUniversity" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>University</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<dl>
									<dt>University</dt>
									<dd>University College London</dd>
								</dl>
								<dl>
									<dt>Course</dt>
									<dd>Economics</dd>
								</dl>
								<dl>
									<dt>Year Started</dt>
									<dd>2005</dd>
								</dl>
								<dl>
									<dt>Year Graduated</dt>
									<dd>2008</dd>
								</dl>
							</div>
						</div>
						<!-- end: university -->
						</div>
						<!-- end: profile panels -->
					</div>
				</section>
			</div>
			<?php include '../_/inc/footer.php' ?>
		</div>
		<?php include '../_/inc/lightbox-map.php' ?>
		<?php include '../_/inc/lightbox-mentor.php' ?>
		<?php include '../_/inc/lightbox-message.php' ?>
	</body>
</html>