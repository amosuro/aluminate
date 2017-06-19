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
			<?php include '../_/inc/nav-mentor.php' ?>
			<div id="ang-wrapper">
				<?php include '../_/inc/sidebar-mentor-view.php' ?>
				<section>
					<div id="ang-mainContent">
						<!-- start: profile tabs -->
						<div id="ang-profileTabs">
							<ul>
								<li><a href="#">Personal</a></li>
								<li><a href="#" class="ang-current">Mentor</a></li>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Intellects</a></li>
							</ul>
						</div>
						<!-- end: profile tabs -->
						<!-- start: profile panels -->
						<div id="ang-panels">
							<!-- start: mentorBio -->
							<div id="ang-pMentorBio" class="ang-panelWide">
								<div class="ang-pHeader ang-sGradient">
									<h1>Mentor Summary</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>I have over 4 years experience planning, designing and developing websites for a number of corporate clients. I am able to provide help with those looking to start out in the web design industry, focusing on areas such as the fundamentals of graphic design, user interface design, design to build and many front-end development languages. I like to break my mentors down in small stages, so that it doesn't all seem too overwhelming for beginners, but for more experienced mentees we can focus on the areas you are looking to improve on.</p>
									<p><strong>Ideal mentees</strong></p>
									<p>I'm looking to mentor somebody who is enthusiastic about design, and comes from a design-related background. The mentee should also have some basic knowledge of front-end web development.</p>
								</div>
							</div>
							<!-- end: mentorBio -->
							<!-- start: mentorServices -->
							<div id="ang-pMentorServices" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Mentor Services</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>You can contact me for the following mentoring services:</p>
									<form>
										<label><img src="../_/img/icons/yes.png" alt="Yes" />Advice via email</label>
										<label><img src="../_/img/icons/yes.png" alt="Yes" />Advice via telephone</label>
										<label><img src="../_/img/icons/yes.png" alt="Yes" />Work shadowing</label>
										<label><img src="../_/img/icons/no.png" alt="No" />Work experience opportunities</label>
										<label><img src="../_/img/icons/no.png" alt="No" />Work internship opportunities</label>
									</form>
								</div>
							</div>
							<!-- end: mentorServices -->
							<!-- start: recentMentees -->
							<div id="ang-pRecentMentees" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Mentor History</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p><strong>Currently Mentoring</strong>: 2 out of 10 alumni</p>
									<p><strong>Completed Mentors:</strong></p>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Jeanie Basden <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Jeanie Basden <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Jeanie Basden <em>(Completed 24/10)</em></p>
										</div>	
									</a>
								</div>
							</div>
							<!-- end: recentMentees -->
							<!-- start: mentorTagList -->
							<div id="ang-pMentorTagList" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Expertise</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p><strong>Main Expertise:</strong> Web Design</p>
									<div class="ang-tagList ang-tagList">
										<ul>
											<li>Web Design<span></span></li>
											<li>Web Development<span></span></li>
											<li>Graphic Design<span></span></li>
											<li>jQuery<span></span></li>
											<li>HTML<span></span></li>
											<li>CSS<span></span></li>
											<li>PHP<span></span></li>
											<li>jQuery<span></span></li>
											<li>HTML<span></span></li>
											<li>CSS<span></span></li>
											<li>PHP<span></span></li>
											<li>Wordpress<span></span></li>
											<li>Web Design<span></span></li>
											<li>Graphic Design<span></span></li>
											<li>jQuery<span></span></li>
											<li>HTML<span></span></li>
											<li>jQuery<span></span></li>
											<li>HTML<span></span></li>
											<li>CSS<span></span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end: mentorTagList -->
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