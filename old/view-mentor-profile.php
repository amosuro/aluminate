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
			<?php include '_/inc/sidebar-mentor.php' ?>
			<section>
				<div id="ang-mainContent">
					<div id="ang-mentorStatus">
						<h1>David Mantell's Mentor Profile <span><a href="view-profile-david.php">(View Personal Profile)</a></h1>
					</div>
					<div id="ang-panels">
						<div id="ang-pSummary" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Mentor Summary</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<p>Sales and Marketing management has been a source and a medium, tapping on the skills that I achieved when I was doing MBA, here I could implement what I learned and could see the theory in practice.</p>
								<p>Have been in the Learning and Development department for just over two and half years but was exposed to almost all the aspects of the department. A trainer for technical aspect of the process of HSBC Auto Finance for HSBC...<a href="#">read more &raquo;</a></p>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<textarea>Sales and Marketing management has been a source and a medium, tapping on the skills that I achieved when I was doing MBA, here I could implement what I learned and could see the theory in practice. Have been in the Learning and Development department for just over two and half years but was exposed to almost all the aspects of the department. A trainer for technical aspect of the process of HSBC Auto Finance for HSBC</textarea>
									<label>Allow users to see my mentor summary</label>
									<input type="checkbox" value="" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>

						<div id="ang-pMentorServices" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Mentor Services</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<p><strong>Currently Mentoring</strong>: 2 out of 10 alumni</p>
								<p>You can contact me for the following mentoring services:</p>
								<form>
									<label><img src="_/img/icons/yes.png" alt="Yes" />Advice via email</label>
									<label><img src="_/img/icons/yes.png" alt="Yes" />Advice via telephone</label>
									<label><img src="_/img/icons/yes.png" alt="Yes" />Work shadowing</label>
									<label><img src="_/img/icons/no.png" alt="No" />Work experience opportunities</label>
									<label><img src="_/img/icons/no.png" alt="No" />Work internship opportunities</label>
								</form>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<label>Advice via email</label>
									<input type="checkbox" value="Email" />
									<label>Advice via telephone</label>
									<input type="checkbox" value="Telephone" />
									<label>Work shadowing</label>
									<input type="checkbox" value="Work Shadowing" />
									<label>Work experience opportunities</label>
									<input type="checkbox" value="Work Experience" />
									<label>Work internship opportunities</label>
									<input type="checkbox" value="Work Internship" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<div id="ang-pMentorTagList" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Expertise</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<p><strong>Main Expertise:</strong> Web Design</p>
								<div class="ang-tagList">
									<ul>
										<li>Web Design</li>
										<li>Web Development</li>
										<li>Graphic Design</li>
										<li>jQuery</li>
										<li>HTML</li>
										<li>CSS</li>
										<li>PHP</li>
										<li>jQuery</li>
										<li>HTML</li>
										<li>CSS</li>
										<li>PHP</li>
										<li>Wordpress</li>
										<li>Web Design</li>
										<li>Graphic Design</li>
										<li>jQuery</li>
										<li>HTML</li>
										<li>jQuery</li>
										<li>HTML</li>
										<li>CSS</li>
										<li>PHP</li>
										<li>CSS</li>
										<li>PHP</li>
										<li>Wordpress</li>
										<li>jQuery</li>
										<li>HTML</li>
										<li>CSS</li>
										<li>PHP</li>
									</ul>
								</div>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<input type="text" value="Your main area of expertise">
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<div id="ang-pRecentMentees" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Mentor History</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<p><strong>Currently Mentoring</strong>: 2 out of 10 alumni</p>
								<p><strong>Completed Mentors:</strong></p>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Rosalinda Broadhurst <em>(Completed 24/10) + 2</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Rosalinda Broadhurst <em>(Completed 24/10) + 2</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Completed 24/10) + 4</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Rosalinda Broadhurst <em>(Completed 24/10) + 2</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Completed 24/10) + 4</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Rosalinda Broadhurst <em>(Completed 24/10) + 2</em></p>
									</div>	
								</a>
								<a href="view-mentor-profile.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Completed 24/10) + 4</em></p>
									</div>	
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include '_/inc/footer.php' ?>
		<?php include '_/inc/lightbox-map.php' ?>
		<?php include '_/inc/lightbox-mentor.php' ?>
	</body>
</html>