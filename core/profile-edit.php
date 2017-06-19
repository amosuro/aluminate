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
				<?php include '../_/inc/sidebar-edit.php' ?>
				<section>
					<div id="ang-mainContent">
						<!-- start: memberStatus -->
						<div id="ang-memberStatus">
							<h1>Hi <strong>Ashley</strong>, what have you been up to?</h1>
							<form>
								<input type="text" value="Just moved to Cambridge to start a new job" />
								<button>Update</button>
							</form>
							<a href="#">[ <span>Recent Updates</span> ]</a>
						</div>
						<div id="ang-status">
							<h1>Significant Events</h1>
							<div id="ang-statusList">
								<ul>
									<li>
										<a href="#" class="ang-button">18/06/2012</a>
										<span class="ang-sGradient"><p>Just got engaged</p></span>
									</li>
									<li>
										<a href="#" class="ang-button">12/05/2012</a>
										<span class="ang-sGradient"><p>Getting Married in three months</p></span>
									</li>
									<li>
										<a href="#" class="ang-button">11/02/2012</a>
										<span class="ang-sGradient"><p>Joined HPB Management</p></span>
									</li>
									<li>
										<a href="#" class="ang-button">10/02/2012</a>
										<span class="ang-sGradient"><p>Started working as a freelance Web designer</p></span>
									</li>
								</ul>
							</div>
							<div id="ang-statusNav">
								<a href="#" class="ang-statusNewer"><img src="../_/img/icons/status-arrow-up.png" alt="Newer statuses" /></a>
								<a href="#" class="ang-statusOlder"><img src="../_/img/icons/status-arrow-down.png" alt="Older statuses" /></a>
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
									<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
								</div>
								<div class="ang-pContent ang-normalMode">
									<p>Sales and Marketing management has been a source and a medium, tapping on the skills that I achieved when I was doing MBA, here I could implement what I learned and could see the theory in practice.</p>
									<p>Have been in the Learning and Development department for just over two and half years but was exposed to almost all the aspects of the department. A trainer for technical aspect of the process of HSBC Auto Finance for HSBC...<a href="#">read more &raquo;</a></p>
								</div>
								<!-- Edit Mode -->
								<div class="ang-pContent ang-editMode">
									<form>
										<textarea>Sales and Marketing management has been a source and a medium, tapping on the skills that I achieved when I was doing MBA, here I could implement what I learned and could see the theory in practice. Have been in the Learning and Development department for just over two and half years but was exposed to almost all the aspects of the department. A trainer for technical aspect of the process of HSBC Auto Finance for HSBC</textarea>
										<label>Allow users to see my summary</label>
										<input type="checkbox" value="" />
										<button class="ang-resetEdit">Reset</button>
										<button class="ang-cancelEdit ang-red">Cancel</button>
										<button class="ang-saveEdit ang-green">Save</button>
									</form>
								</div>
								<!-- End Edit Mode -->
							</div>
							<!-- end: summary -->
							<!-- start: employment -->
							<div id="ang-pEmployment" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Professional History</h1>
								<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
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
									<h1>Web Designer</h1>
									<h2>Aluminati Network Group</h2>
									<h3>January 2012 - Present</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim. Suspendisse pulvinar ipsum nec dolor interdum consectetur.</p>
									<h1>Web Designer</h1>
									<h2>HPB Management</h2>
									<h3>January 2011 - August 2011</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim. Suspendisse pulvinar ipsum nec dolor interdum consectetur.</p>
								</div>
								<div id="ang-employer-2" class="ang-employer">
									<h1>UI Designer</h1>
									<h2>Aluminati Network Group</h2>
									<h3>January 2012 - Present</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim.</p>
								</div>
								<div id="ang-employer-3" class="ang-employer">
									<h1>Graphic Designer</h1>
									<h2>Aluminati Network Group</h2>
									<h3>January 2012 - Present</h3>
									<p>Vestibulum tortor tortor, vestibulum sit amet tristique ut, scelerisque eu arcu. Vivamus tempus aliquet tellus tempor dignissim.</p>
								</div>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<div>
										<p><strong>Employment 1</strong></p>
										<label>Position</label>
										<input type="text" value="Web Designer" />
										<label>Company</label>
										<input type="text" value="Aluminati Network Group" />
										<label>Start Date</label>
										<input type="date" value="04/01/2012" />
										<label>End Date</label>
										<input type="date" value="N/A" />
									</div>
									<a href="#" class="ang-removeEmployer"><img src="../_/img/icons/remove.png" alt="Remove an employer" /></a>
									<div>
										<p><strong>Employment 2</strong></p>
										<label>Position</label>
										<input type="text" value="Web Designer" />
										<label>Company</label>
										<input type="text" value="Aluminati Network Group" />
										<label>Start Date</label>
										<input type="date" value="04/01/2012" />
										<label>End Date</label>
										<input type="date" value="N/A" />
									</div>
									<div class="ang-newEmployer">
										<p><strong>Employment 3</strong></p>
										<label>Position</label>
										<input type="text" value="Web Designer" />
										<label>Company</label>
										<input type="text" value="Aluminati Network Group" />
										<label>Start Date</label>
										<input type="date" value="04/01/2012" />
										<label>End Date</label>
										<input type="date" value="N/A" />
									</div>
									<a href="#" class="ang-addEmployer"><img src="../_/img/icons/add.png" alt="Add another employer" /></a>
									<label>Allow users to see my employment info</label>
									<input type="checkbox" value="" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<!-- end: employment -->
						<!-- start: university -->
						<div id="ang-pUniversity" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>University</h1>
								<a href="#" class="ang-editPanel"><img src="../_/img/icons/edit-panel.png" alt="Edit section" /></a>
							</div>
							<div class="ang-pContent ang-normalMode">
								<dl>
									<dt>University</dt>
									<dd>Anglia Ruskin University</dd>
								</dl>
								<dl>
									<dt>Course</dt>
									<dd>Graphic &amp; Web Design</dd>
								</dl>
								<dl>
									<dt>Year Started</dt>
									<dd>2008</dd>
								</dl>
								<dl>
									<dt>Year Graduated</dt>
									<dd>2011</dd>
								</dl>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<label>University</label>
									<input type="text" value="Anglia Ruskin University" />
									<label>Course</label>
									<input type="text" value="Graphic & Web Design" />
									<label>Allow users to see my course studied</label>
									<input type="checkbox" value="" />
									<label>Year Started</label>
									<input type="text" value="2008" />
									<label>Allow users to see my year started</label>
									<input type="checkbox" value="" />
									<label>Year Graduated</label>
									<input type="text" value="2011" />
									<label>Allow users to see my year graduated</label>
									<input type="checkbox" value="" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
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