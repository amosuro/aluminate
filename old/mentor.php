<!DOCTYPE html>
<html>
	<head>
		<?php include '_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Mentor"
		 ?>
		<?php include '_/inc/nav.php' ?>
		<div id="ang-wrapper">
			<?php include '_/inc/sidebar.php' ?>
			<section>
				<div id="ang-mainContent">
					<div id="ang-mentorStatus">
						<h1>
							My Mentor Dashboard
							<span><a href="mentor-profile.php" class="ang-toggleMentor">(View Mentor Profile)</a></span>
						</h1>
					</div>
					<div id="ang-pSearchResults" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Search for Mentors/Mentees</h1>
						</div>
						<div class="ang-pContent">
							<form id="ang-keywordSearch" action="results.php">
								<input type="text" value="Search for a mentor's name, keywords, industry or profession" name="keywordSearch" class="ang-keywordSearch">
								<a href="results.php" class="ang-button">Search</a>
							</form>
						</div>
					</div>
					<div id="ang-panels">
						<div class="ang-panel ang-pMainMentor">
							<div class="ang-pHeader ang-sGradient">
								<h1>My Mentors</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb7.png" alt="Mentee">
									<div>
										<p>David Mantell</p>
										<em>Started 24/10/2012</em>
									</div>	
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Cancel Mentor</span>
											<span class="finishMentor">Finish Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb2.png" alt="Mentee">
									<div>
										<p>Noemi Chagoya</p>
										<em>Started 24/10/2012</em>
									</div>
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Cancel Mentor</span>
											<span class="finishMentor">Finish Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Loraine Brannum <em>(Completed 24/10) + 4</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jessie Sohn <em>(Completed 24/10) + 4</em></p>
									</div>	
								</a>
							</div>
						</div>
						<div class="ang-panel ang-pMainMentor">
							<div class="ang-pHeader ang-sGradient">
								<h1>My Mentees</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb8.png" alt="Mentee">
									<div>
										<p>Jason Wright</p>
										<em>Started 24/10/2012</em>
									</div>	
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Cancel Mentor</span>
											<span class="finishMentor">Finish Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb4.png" alt="Mentee">
									<div>
										<p>Allan Oscar</p>
										<em>Started 24/10/2012</em>
									</div>
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Cancel Mentor</span>
											<span class="finishMentor">Finish Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb5.png" alt="Mentee">
									<div>
										<p>Sofia Bayliss</p>
										<em>Started 24/10/2012</em>
									</div>
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Cancel Mentor</span>
											<span class="finishMentor">Finish Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->	
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb6.png" alt="Mentee">
									<div>
										<p>Allie Baumgarten</p>
										<em>Started 24/10/2012</em>
									</div>
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Cancel Mentor</span>
											<span class="finishMentor">Finish Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-cancelled">
									<div>
										<p>Allan Harari <em>(Cancelled 24/10)</em></p>
									</div>	
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Ted Southwell <em>(Completed 24/10) + 4</em></p>
									</div>	
								</a>
							</div>
						</div>
						<div class="ang-panel ang-pMainMentor">
							<div class="ang-pHeader ang-sGradient">
								<h1>Mentors I have requested</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb2.png" alt="Mentee">
									<div>
										<p>Clinton Farrier</p>
										<em>Requested 24/10/2012</em>
									</div>
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb.png" alt="Mentee">
									<div>
										<p>Guy Durfey</p>
										<em>Requested 24/10/2012</em>
									</div>
								</a>
							</div>
						</div>
						<div class="ang-panel ang-pMainMentor">
							<div class="ang-pHeader ang-sGradient">
								<h1>Mentees requesting to be mentored</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb3.png" alt="Mentee">
									<div>
										<p>Jami Westendorf</p>
										<em>Requested 24/10/2012</em>
									</div>
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor ang-toolTip" onclick="window.location='view-mentor-profile.php'" title="View Mentor">View Mentor</span>
											<span class="messageMentor ang-toolTip" onclick="window.location='inbox.php'" title="Message Mentor">Message Mentor</span>
											<span class="cancelMentor ang-toolTip" title="Accept Mentor">Accept Mentor</span>
											<span class="finishMentor ang-toolTip" title="Decline Mentor">Decline Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb4.png" alt="Mentee">
									<div>
										<p>Rosalinda Broadhurst</p>
										<em>Requested 24/10/2012</em>
									</div>	
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Accept Mentor</span>
											<span class="finishMentor">Decline Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb5.png" alt="Mentee">
									<div>
										<p>Jeanie Basden</p>
										<em>Requested 24/10/2012</em>
									</div>
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Accept Mentor</span>
											<span class="finishMentor">Decline Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
								<a href="view-profile.php" class="ang-mentorBox ang-active">
									<img src="_/img/photo/mentorThumb6.png" alt="Mentee">
									<div>
										<p>Cody Deere</p>
										<em>Requested 24/10/2012</em>
									</div>	
									<!-- Mentor Actions -->
									<div class="ang-mentorActions">
										<div class="ang-mActions">
											<span class="viewMentor" onclick="window.location='view-mentor-profile.php'">View Mentor</span>
											<span class="messageMentor" onclick="window.location='inbox.php'">Message Mentor</span>
											<span class="cancelMentor">Accept Mentor</span>
											<span class="finishMentor">Decline Mentor</span>
										</div>
									</div>
									<!-- End Mentor Actions -->
								</a>
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