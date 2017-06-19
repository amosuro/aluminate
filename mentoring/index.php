<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Home"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-mentor.php' ?>
			<div id="ang-wrapper">
				<section>
					<!-- start: dashboardIntro -->
					<div id="ang-dashboardIntro">
						<div class="ang-col1">
							<div id="ang-lookingFor">
								<form action="" method="">
									<h1 class="ang-bebas">Looking for a mentor?</h1>
									<input type="text" name="mentorSearch" value="Interests, profession, location..." />
									<button>Find</button>
								</form>
							</div>
						</div>
						<div class="ang-col2">
							<ul id="ang-activityFeed">
								<li class="ang-tagMentor">Richard Brown is now mentoring Adewaleosun Moyout</li>
								<li class="ang-tagMessage">Nathan Skinner sent you a message</li>
								<li class="ang-tagMentor">Richard Brown is now mentoring Adewaleosun Moyout</li>
								<li class="ang-tagMentor">Matthew Huyt sent you a mentor request</li>
								<a href="#" class="ang-sbShowMore">Show more</a>
							</ul>
						</div>
					</div>
					<!-- end: dashboardIntro -->
					<!-- start: dashboardPanels -->
					<div id="ang-panelsFull">
						<!-- start: activeMentors -->
						<div id="ang-pActiveMentors" class="ang-panelHalf">
							<div class="ang-pHeader ang-sGradient">
								<h1>Your mentors</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<ul class="ang-largeMentorFeed">
									<li>
										<a href="#"><img src="../_/img/photo/mentorThumb130-1.png" alt="Martha Stuart" /></a>
										<section>
											<header>
												<hgroup>
													<h2>Martha Stuart</h2>
													<h3>Web Developer</h3>
													<h4>Started 7 days ago</h4>
												</hgroup>
												<p>PHP, MySQL, Subversion, Javascript, Usability...</p>
											</header>
											<div class="ang-largeMentorActions">
												<a href="mentor-profile-view.php" class="ang-button">View Profile</a>
												<a href="#" class="ang-button ang-lbInboxShow">Send a message</a>
											</div>
										</section>
									</li>
									<li>
										<a href="#"><img src="../_/img/photo/mentorThumb130-2.png" alt="Martha Stuart" /></a>
										<section>
											<header>
												<hgroup>
													<h2>Martha Stuart</h2>
													<h3>Web Developer</h3>
													<h4>Started 7 days ago</h4>
												</hgroup>
												<p>PHP, MySQL, Subversion, Javascript, Usability...</p>
											</header>
											<div class="ang-largeMentorActions">
												<a href="mentor-profile-view.php" class="ang-button">View Profile</a>
												<a href="#" class="ang-button ang-lbInboxShow">Send a message</a>
											</div>
										</section>
									</li>
								</ul>
								<a href="mentor-results.php" class="ang-sbShowMore">View more</a>
							</div>
						</div>
						<!-- end: activeMentors -->
						<!-- start: activeMentees -->
						<div id="ang-pActiveMentees" class="ang-panelHalf">
							<div class="ang-pHeader ang-sGradient">
								<h1>Your mentees</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<ul class="ang-largeMentorFeed">
									<li>
										<a href="#"><img src="../_/img/photo/mentorThumb130-3.png" alt="Martha Stuart" /></a>
										<section>
											<header>
												<hgroup>
													<h2>Martha Stuart</h2>
													<h3>Web Developer</h3>
													<h4>Started 7 days ago</h4>
												</hgroup>
												<p>PHP, MySQL, Subversion, Javascript, Usability...</p>
											</header>
											<div class="ang-largeMentorActions">
												<a href="mentor-profile-view.php" class="ang-button">View Profile</a>
												<a href="#" class="ang-button ang-lbInboxShow">Send a message</a>
											</div>
										</section>
									</li>
									<li>
										<a href="#"><img src="../_/img/photo/mentorThumb130-1.png" alt="Martha Stuart" /></a>
										<section>
											<header>
												<hgroup>
													<h2>Martha Stuart</h2>
													<h3>Web Developer</h3>
													<h4>Started 7 days ago</h4>
												</hgroup>
												<p>PHP, MySQL, Subversion, Javascript, Usability...</p>
											</header>
											<div class="ang-largeMentorActions">
												<a href="mentor-profile-view.php" class="ang-button">View Profile</a>
												<a href="#" class="ang-button ang-lbInboxShow">Send a message</a>
											</div>
										</section>
									</li>
								</ul>
								<a href="mentor-results.php" class="ang-sbShowMore">View more</a>
							</div>
						</div>
						<!-- end: activeMentees -->
						<!-- start: dashboard three column layout -->
						<div id="ang-panelsThreeCol">
							<!-- start: suggestedMentors -->
							<div id="ang-pSuggestedMentors" class="ang-panelThird">
								<div class="ang-pHeader ang-sGradient">
									<h1>Suggested Mentors</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb2.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb3.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb4.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="mentor-results.php" class="ang-sbShowMore">View more</a>
								</div>
							</div>
							<!-- end: suggestedMentors -->
							<!-- start: recommendedMentors -->
							<div id="ang-pRecommendedMentors" class="ang-panelThird">
								<div class="ang-pHeader ang-sGradient">
									<h1>Recommended Mentors</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb5.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb6.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb7.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="mentor-results.php" class="ang-sbShowMore">View more</a>
								</div>
							</div>
							<!-- end: recommendedMentors -->
							<!-- start: newMentors -->
							<div id="ang-pNewMentors" class="ang-panelThird">
								<div class="ang-pHeader ang-sGradient">
									<h1>New Mentors</h1>
								</div>
								<div class="ang-pContent ang-normalMode">
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb2.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb3.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb4.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="javascript:void(0)" class="ang-mentorBox ang-active">
										<img src="../_/img/photo/mentorThumb5.png" alt="Mentee">
										<div>
											<p>David Mantell</p>
											<em>Started 7 days ago</em>
										</div>	
										<!-- Mentor Actions -->
										<div class="ang-mentorActions">
											<div class="ang-mActions">
												<span class="viewMentor" onclick="window.location='mentor-profile-view.php'">View Mentor</span>
												<span class="messageMentor ang-lbInboxShow">Message Mentor</span>
												<span class="cancelMentor">Cancel Mentor</span>
												<span class="finishMentor">Finish Mentor</span>
											</div>
										</div>
										<!-- End Mentor Actions -->
									</a>
									<a href="mentor-results.php" class="ang-sbShowMore">View more</a>
								</div>
							</div>
							<!-- end: newMentors -->
						</div>
						<!-- end: dashboard three column layout -->
					</div>
					<!-- end: dashboardPanels -->
				</section>
			</div>
			<?php include '../_/inc/footer.php' ?>
		</div>
		<?php include '../_/inc/lightbox-map.php' ?>
		<?php include '../_/inc/lightbox-mentor.php' ?>
		<?php include '../_/inc/lightbox-message.php' ?>
	</body>
</html>