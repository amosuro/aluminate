<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="../_/js/gmapsCustom.js"></script>
	</head>
	<body>
		<?php 
			$active = "Profile"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-travel.php' ?>
			<div id="ang-wrapper">
				<?php include '../_/inc/sidebar-travel-view.php' ?>
				<section>
					<div id="ang-mainContent">
						<!-- start: profile tabs -->
						<div id="ang-profileTabs">
							<ul>
								<li><a href="#">Personal</a></li>
								<li><a href="#">Mentor</a></li>
								<li><a href="#" class="ang-current">Travel</a></li>
								<li><a href="#">Intellects</a></li>
							</ul>
						</div>
						<!-- end: profile tabs -->
						<!-- start: profile panels -->
						<div id="ang-panels">
							<!-- start: travelBio -->
							<div id="ang-pTravelBio" class="ang-panelWide">
								<div class="ang-pHeader ang-sGradient">
									<h1>Host Summary</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>I have over 4 years experience planning, designing and developing websites for a number of corporate clients. I am able to provide help with those looking to start out in the web design industry, focusing on areas such as the fundamentals of graphic design, user interface design, design to build and many front-end development languages. I like to break my mentors down in small stages, so that it doesn't all seem too overwhelming for beginners, but for more experienced mentees we can focus on the areas you are looking to improve on.</p>
								</div>
							</div>
							<!-- end: travelBio -->
							<!-- start: hostServices -->
							<div id="ang-pTravelServices" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Host Services</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>I can offer the following travel services:</p>
									<form>
										<label><img src="../_/img/icons/yes.png" alt="Yes" />Accommodation</label>
										<label><img src="../_/img/icons/yes.png" alt="Yes" />For a drink</label>
										<label><img src="../_/img/icons/yes.png" alt="Yes" />For a coffee</label>
									</form>
								</div>
							</div>
							<!-- end: hostServices -->
							<!-- start: recentMentees -->
							<div id="ang-pRecentMentees" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Host History</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p><strong>Completed Hosts:</strong></p>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Jeanie Basden <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Jeanie Basden <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Rosalinda Broadhurst <em>(Completed 24/10)</em></p>
										</div>	
									</a>
									<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
										<div>
											<p>Jeanie Basden <em>(Completed 24/10)</em></p>
										</div>	
									</a>
								</div>
							</div>
							<!-- end: recentMentees -->
							<!-- start: travelTagList -->
							<div id="ang-pTravelTagList" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Feature</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<div class="ang-tagList ang-tagListEdit">
										<ul>
											<li>WIFI<span></span></li>
											<li>Pets<span></span></li>
											<li>Smoker<span></span></li>
											<li>Drinker<span></span></li>
											<li>Couples<span></span></li>
											<li>Whiskey<span></span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end: travelTagList -->
							<!-- start: travelGroups -->
							<div id="ang-pTravelGroups" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>My Groups</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<a href="travel-group-view.php" class="ang-groupBox">
										<div>
											<p>The Cambridge Technopole Group <em>(UK)</em></p>
										</div>	
									</a>
									<a href="travel-group-view.php" class="ang-groupBox">
										<div>
											<p>The Cambridge Technopole Group <em>(UK)</em></p>
										</div>	
									</a>
									<a href="travel-group-view.php" class="ang-groupBox">
										<div>
											<p>The Cambridge Technopole Group <em>(UK)</em></p>
										</div>	
									</a>
									<a href="travel-group-view.php" class="ang-groupBox">
										<div>
											<p>The Cambridge Technopole Group <em>(UK)</em></p>
										</div>	
									</a>
								</div>
							</div>
							<!-- end: travelGroups -->
							<!-- start: hostLocations -->
							<div id="ang-pHostLocation" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Host locations</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<iframe width="297" height="297" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=blacksmiths+london&amp;aq=&amp;sll=51.503264,-0.116073&amp;sspn=0.064647,0.154324&amp;vpsrc=6&amp;ie=UTF8&amp;hq=blacksmiths&amp;hnear=London,+United+Kingdom&amp;t=m&amp;fll=51.526047,-0.044289&amp;fspn=0.129228,0.308647&amp;st=109146043351405611748&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=51.50841,-0.110248&amp;spn=0.129252,0.308647&amp;output=embed"></iframe>
								</div>
								<!-- Edit Mode -->
								<div class="ang-pContent ang-editMode">
									<form>
										<input type="text" value="Add a location" />
										<button class="ang-resetEdit">Reset</button>
										<button class="ang-cancelEdit ang-red">Cancel</button>
										<button class="ang-saveEdit ang-green">Save</button>
									</form>
								</div>
								<!-- End Edit Mode -->
							</div>
							<!-- end: hostLocations -->
							<!-- start: myEvents -->
							<div id="ang-pMyEvents" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>My Hosted events</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<a href="travel-events.php" class="ang-groupBox">
										<div>
											<p>Cambridge Societies' Tours</p>
										</div>
										<a href="travel-events.php" class="ang-groupBox">
											<div>
												<p>Cambridge Societies' Tours</p>
											</div>	
										</a>
										<a href="travel-events.php" class="ang-groupBox">
											<div>
												<p>Cambridge Societies' Tours</p>
											</div>	
										</a>
										<a href="travel-events.php" class="ang-groupBox">
											<div>
												<p>Cambridge Societies' Tours</p>
											</div>	
										</a>
										<a href="travel-events.php" class="ang-groupBox">
											<div>
												<p>Cambridge Societies' Tours</p>
											</div>	
										</a>
									</a>
								</div>
							</div>
							<!-- end: myEvents -->
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