<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Groups"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-travel.php' ?>
			<div id="ang-wrapper">
				<section>
					<!-- start: manageGroups -->
					<div id="ang-manageGroups" class="ang-viewManageGroups">
						<a href="#" class="ang-button ang-green">Suggest a group</a>
					</div>
					<!-- end: manageGroups -->
					
					<!-- start: groupHeader -->
					<div id="ang-groupHeader" class="ang-groupHeaderView">
						<div id="ang-groupHeaderTitle">
							<h1>CU Bulgarian Society</h1>
							<a href="#" class="ang-button">Join group</a>
						</div>
					</div>
					<!-- end: groupHeader -->
					
					<!-- start: groupPanels -->
					<div id="ang-panelsFull">
						<!-- start: aboutGroup -->
						<div id="ang-pAboutGroup" class="ang-panelHalf">
							<div class="ang-pHeader ang-sGradient">
								<h1>About the group</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<p>Pulvinar amet eu. Aliquet! Duis placerat mid magnis habitasse cursus porta cursus porttitor! Auctor ut, magna risus, lorem urna duis urna nunc est scelerisque sit nascetur placerat, dictumst nisi. Enim dis quis adipiscing enim pellentesque, dictumst est rhoncus scelerisque, hac, phasellus parturient dignissim pulvinar sagittis! Mauris in adipiscing? Elementum? Non pid elit placerat est lorem dapibus, purus facilisis, tempor platea velit lectus? Ut! Rhoncus. Urna cursus ut? Elementum turpis nec sagittis rhoncus amet velit lundium natoque elit purus, parturient ac? Dictumst magna porttitor ac, platea, rhoncus habitasse magna, parturient tincidunt, etiam ac a integer? Ac? Placerat elementum? Etiam platea etiam duis augue habitasse adipiscing magna, integer porta nascetur, scelerisque ut. Mauris et pellentesque amet scelerisque scelerisque porttitor vel velit facilisis.</p>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<textarea>Pulvinar amet eu. Aliquet! Duis placerat mid magnis habitasse cursus porta cursus porttitor! Auctor ut, magna risus, lorem urna duis urna nunc est scelerisque sit nascetur placerat, dictumst nisi. Enim dis quis adipiscing enim pellentesque, dictumst est rhoncus scelerisque, hac, phasellus parturient dignissim pulvinar sagittis! Mauris in adipiscing? Elementum? Non pid elit placerat est lorem dapibus, purus facilisis, tempor platea velit lectus? Ut! Rhoncus. Urna cursus ut? Elementum turpis nec sagittis rhoncus amet velit lundium natoque elit purus, parturient ac? Dictumst magna porttitor ac, platea, rhoncus habitasse magna, parturient tincidunt, etiam ac a integer? Ac? Placerat elementum? Etiam platea etiam duis augue habitasse adipiscing magna, integer porta nascetur, scelerisque ut. Mauris et pellentesque amet scelerisque scelerisque porttitor vel velit facilisis.</textarea>
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<!-- end: aboutGroup -->
						
						<!-- start: aboutGroup -->
						<div id="ang-pGroupLocation" class="ang-panelHalf">
							<div class="ang-pHeader ang-sGradient">
								<h1>Group location</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<iframe width="468" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Cambridge&amp;aq=0&amp;oq=camb&amp;sll=52.8382,-2.327815&amp;sspn=15.332639,21.335449&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Cambridge,+United+Kingdom&amp;ll=52.205292,0.12188&amp;spn=0.025248,0.080166&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<form>
									<input type="text" value="Enter your region to plot" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<!-- end: aboutGroup -->
						
						<!-- start: activeMentors -->
						<div id="ang-pActiveMentors" class="ang-panelHalf">
							<div class="ang-pHeader ang-sGradient">
								<h1>Group events</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<ul class="ang-groupEventFeed">
									<li>
										<section>
											<header>
												<hgroup>
													<h2>Cambridge comes to Kiev</h2>
													<h3>Kiev, Ukraine</h3>
													<h4><time datetime="2012-03-20">20/10/2012</time></h4>
												</hgroup>
												<p>Turpis mus rhoncus sociis porttitor odio, habitasse sed magna parturient lacus adipiscing, turpis? In augue ut? A nec ut pellentesque rhoncus arcu...</p>
												<a href="#" class="ang-lbEventViewShow">View event</a>
											</header>
										</section>
									</li>
									<li>
										<section>
											<header>
												<hgroup>
													<h2>Cambridge comes to Kiev</h2>
													<h3>Kiev, Ukraine</h3>
													<h4><time datetime="2012-03-20">20/10/2012</time></h4>
												</hgroup>
												<p>Turpis mus rhoncus sociis porttitor odio, habitasse sed magna parturient lacus adipiscing, turpis? In augue ut? A nec ut pellentesque rhoncus arcu...</p>
												<a href="#" class="ang-lbEventViewShow">View event</a>
											</header>
										</section>
									</li>
								</ul>
								<a href="#"class="ang-button ang-lbEventAddShow ang-green">Add an event</a>
							</div>
						</div>
						<!-- end: activeMentors -->
							
						<!-- start: groupEvents -->
						<div id="ang-pGroupEvents" class="ang-panelHalf">
							<div class="ang-pHeader ang-sGradient">
								<h1>Current members</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="travel-profile-view.php" class="ang-mentorBox ang-finished">
									<div>
										<p>Jeanie Basden <em>(Web Designer, London)</em></p>
									</div>	
								</a>
								<a href="#" class="ang-button">View more</a>
							</div>
						</div>
						<!-- end: recentMentees -->
						
						
					</div>
					<!-- end: groupPanels -->
				</section>
			</div>
			<?php include '../_/inc/footer.php' ?>
		</div>
		<?php include '../_/inc/lightbox-map.php' ?>
		<?php include '../_/inc/lightbox-mentor.php' ?>
		<?php include '../_/inc/lightbox-message.php' ?>
		<?php include '../_/inc/lightbox-event-view.php' ?>
		<?php include '../_/inc/lightbox-event-add.php' ?>
	</body>
</html>