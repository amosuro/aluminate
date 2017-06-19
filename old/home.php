<!DOCTYPE html>
<html>
	<head>
		<?php include '_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Home"
		 ?>
		<?php include '_/inc/nav.php' ?>
		<div id="ang-wrapper">
			<?php include '_/inc/sidebar.php' ?>
			<section>
				<div id="ang-mainContent">
				<div id="ang-panels">
					<div id="ang-mentorStats" class="ang-panel">
						<div class="ang-pHeader ang-sGradient">
							<h1>Mentor Stats</h1>
						</div>
						<div class="ang-pContent ang-normalMode">
							<p>Your current Mentor score is:</p>
							<h2>7</h2>
							<div class="ang-statNotifications">
								<a href="mentor.php"><strong>2</strong> mentee requests pending</a>
								<a href="mentor.php"><strong>5</strong> mentor request sent</a>
								<a href="mentor.php"><strong>2</strong> mentor spaces free</a>
							</div>
							<a href="inbox.php" class="ang-msgNotifications"><strong>You have 2 new messages</strong></a>
							<a href="mentor-profile.php" class="ang-editNotifications">Edit Mentor Profile</a>
						</div>
					</div>
					<div id="ang-Mentored" class="ang-panel">
						<div class="ang-pHeader ang-sGradient">
							<h1>Mentor/Mentee Activity</h1>
						</div>
						<div class="ang-pContent ang-normalMode">
							<a href="view-profile.php" class="ang-mentorBox ang-active ang-activeCompress">
								<div>
									<p>Jason Wright <em>(Started 24/10)</em></p>
								</div>	
							</a>
							<a href="view-profile.php" class="ang-mentorBox ang-active ang-activeCompress">
								<div>
									<p>Noemi Chagoya <em>(Started 24/10)</em></p>
								</div>	
							</a>
							<a href="view-profile.php" class="ang-mentorBox ang-finished">
								<div>
									<p>Loraine Brannum <em>(Completed 24/10) + 4</em></p>
								</div>	
							</a>
							<a href="view-profile.php" class="ang-mentorBox ang-cancelled">
								<div>
									<p>Jessie Sohn <em>(Cancelled 24/10)</em></p>
								</div>	
							</a>
							<a href="view-profile.php" class="ang-mentorBox ang-active ang-activeCompress">
								<div>
									<p>James Davis <em>(Started 24/10)</em></p>
								</div>	
							</a>
						</div>
					</div>
				</div>
				<div id="ang-pFavouriteFeed" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Activity Feed</h1>
						</div>
						<div class="ang-pContent">
							<ul id="ang-feed">
								<li>
									<img src="_/img/photo/mentorThumb.png" alt="Ashley Mosuro" />
									<div>
										<h2>Guy Durfey</h2>
										<p>Rhoncus, pellentesque placerat elit ridiculus sagittis et aenean augue nunc pellentesque parturient adipiscing nunc</p>
									</div>
								</li>
								<li>
									<img src="_/img/photo/mentorThumb2.png" alt="Ashley Mosuro" />
									<div>
										<h2>Jami Westendorf</h2>
										<p>Rhoncus, pellentesque placerat elit ridiculus sagittis et aenean augue nunc pellentesque parturient adipiscing nunc</p>
									</div>
								</li>
								<li>
									<img src="_/img/photo/mentorThumb3.png" alt="Ashley Mosuro" />
									<div>
										<h2>Rosalinda Broadhurst</h2>
										<p>Rhoncus, pellentesque placerat elit ridiculus sagittis et aenean augue nunc pellentesque parturient adipiscing nunc</p>
									</div>
								</li>
							</ul>
							<a href="activity-feed.php" class="ang-viewAllFeeds">View all</a>
						</div>
					</div>
					<div id="ang-pDecade" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Graduation Years</h1>
						</div>
						<div class="ang-pContent">
							<h1>Number of Alumni per decade</h1>
							<div id="ang-decades">
								<div class="ang-decadesCol">
									<dl>
										<dt>2010s</dt>
										<dd><div class="ang-pb2010s"></div><span>245</span></dd>
									</dl>
									<dl>
										<dt>2000s</dt>
										<dd><div class="ang-pb2000s"></div><span>255</span></dd>
									</dl>
									<dl>
										<dt>1990s</dt>
										<dd><div class="ang-pb1990s"></div><span>267</span></dd>
									</dl>
									<dl>
										<dt>1980s</dt>
										<dd><div class="ang-pb1980s"></div><span>269</span></dd>
									</dl>
									<dl>
										<dt>1970s</dt>
										<dd><div class="ang-pb1970s"></div><span>234</span></dd>
									</dl>
								</div>
								<div class="ang-decadesCol">
									<h1>The majority of registered alumni, <strong>43%</strong>, graduated in the 1990s.</h1>
								</div>
							</div>
						</div>
					</div>
					<div id="ang-pTopOccupations" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Alumni Occupations</h1>
						</div>
						<div class="ang-pContent">
							<div id="ang-occupationsChart"></div>
						</div>
					</div>
					<!-- Not going to use this
					<div id="ang-pTopLocations" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Alumni Locations</h1>
						</div>
						<div class="ang-pContent">
							<div class="ang-locationsCol">
								<h1>The majority of registered Alumni currently live in <strong>London</strong>, <strong>Essex</strong> and <strong>Coventry.</strong></h1>
							</div>
							<div class="ang-locationsCol ang-chartDiv">
								<div id="ang-locationsChart"></div>
							</div>
						</div>
					</div>
					-->
				</div>
			</section>
		</div>
		<?php include '_/inc/footer.php' ?>
		<?php include '_/inc/lightbox-map.php' ?>
	</body>
</html>