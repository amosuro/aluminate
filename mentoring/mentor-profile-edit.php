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
				<?php include '../_/inc/sidebar-mentor-edit.php' ?>
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
							<div id="ang-switchContainer">
								<h1>Would you like to be a mentor?</h1>
								<div class="ang-mainSwitch">
							      <input type="radio" class="ang-switch-input" name="view" value="week" id="ang-week" checked>
							      <label for="ang-week" class="ang-switch-label ang-switch-label-off">YES</label>
							      <input type="radio" class="ang-switch-input" name="view" value="month" id="ang-month">
							      <label for="ang-month" class="ang-switch-label ang-switch-label-on">NO</label>
							      <span class="ang-switch-selection"></span>
							    </div>
							</div>
							<!-- start: mentorBio -->
							<div id="ang-pMentorBio" class="ang-panelWide">
								<div class="ang-pHeader ang-sGradient">
									<h1>Mentor Summary</h1>
									<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>I have over 4 years experience planning, designing and developing websites for a number of corporate clients. I am able to provide help with those looking to start out in the web design industry, focusing on areas such as the fundamentals of graphic design, user interface design, design to build and many front-end development languages. I like to break my mentors down in small stages, so that it doesn't all seem too overwhelming for beginners, but for more experienced mentees we can focus on the areas you are looking to improve on.</p>
									<p><strong>Ideal mentees</strong></p>
									<p>I'm looking to mentor somebody who is enthusiastic about design, and comes from a design-related background. The mentee should also have some basic knowledge of front-end web development.</p>
								</div>
								<!-- Edit Mode -->
								<div class="ang-pContent ang-editMode">
									<form>
										<textarea>I have over 4 years experience planning, designing and developing websites for a number of corporate clients. I am able to provide help with those looking to start out in the web design industry, focusing on areas such as the fundamentals of graphic design, user interface design, design to build and many front-end development languages. I like to break my mentors down in small stages, so that it doesn't all seem too overwhelming for beginners, but for more experienced mentees we can focus on the areas you are looking to improve on.</textarea>
										<p><strong>My ideal mentees would be:</strong></p>
										<textarea>I'm looking to mentor somebody who is enthusiastic about design, and comes from a design-related background. The mentee should also have some basic knowledge of front-end web development.</textarea>
										<button class="ang-resetEdit">Reset</button>
										<button class="ang-cancelEdit ang-red">Cancel</button>
										<button class="ang-saveEdit ang-green">Save</button>
									</form>
								</div>
								<!-- End Edit Mode -->
							</div>
							<!-- end: mentorBio -->
							<!-- start: mentorServices -->
							<div id="ang-pMentorServices" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Mentor Services</h1>
									<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
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
								<!-- Edit Mode -->
								<div class="ang-pContent ang-editMode">
									<form>
										<label>Maximum mentees to mentor</label>
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<input type="checkbox" value="Email" />
										<label>Advice via email</label>
										<input type="checkbox" value="Telephone" />
										<label>Advice via telephone</label>
										<input type="checkbox" value="Work Shadowing" />
										<label>Work shadowing</label>
										<input type="checkbox" value="Work Experience" />
										<label>Work experience opportunities</label>
										<input type="checkbox" value="Work Internship" />
										<label>Work internship opportunities</label>
										<button class="ang-resetEdit">Reset</button>
										<button class="ang-cancelEdit ang-red">Cancel</button>
										<button class="ang-saveEdit ang-green">Save</button>
									</form>
								</div>
								<!-- End Edit Mode -->
							</div>
							<!-- end: mentorServices -->
							<!-- start: recentMentees -->
							<div id="ang-pRecentMentees" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Mentor History</h1>
									<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
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
								<!-- Edit Mode -->
								<div class="ang-pContent ang-editMode">
									<form>
										<label>Maximum mentees to mentor</label>
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<button class="ang-resetEdit">Reset</button>
										<button class="ang-cancelEdit ang-red">Cancel</button>
										<button class="ang-saveEdit ang-green">Save</button>
									</form>
								</div>
								<!-- End Edit Mode -->
							</div>
							<!-- end: recentMentees -->
							<!-- start: mentorTagList -->
							<div id="ang-pMentorTagList" class="ang-panel">
								<div class="ang-pHeader ang-sGradient">
									<h1>Expertise</h1>
									<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p><strong>Main Expertise:</strong> Web Design</p>
									<div class="ang-tagList ang-tagListEdit">
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
								<!-- Edit Mode -->
								<div class="ang-pContent ang-editMode">
									<form>
										<input type="text" value="Your main area of expertise">
										<input type="text" value="Add tags (separate by commas)" />
										<button class="ang-resetEdit">Reset</button>
										<button class="ang-cancelEdit ang-red">Cancel</button>
										<button class="ang-saveEdit ang-green">Save</button>
									</form>
								</div>
								<!-- End Edit Mode -->
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