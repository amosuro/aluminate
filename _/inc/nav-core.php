<nav id="ang-topBar" class="ang-mGradient">
	<h1 id="ang-moduleIcon" class="mentorModule">
		<a href="#" title="Aluminate Core">
			<span class="ang-moduleName">Aluminate Core</span>
			<span class="ang-moduleArrow"><img src="../_/img/icons/nav-arrowDown.png" alt="Expand"></span>
		</a>
	</h1>
	<div id="ang-notificationIcon">
		<a href="#"><span>2</span></a>
	</div>
	<ul>
		<li><a href="index.php" class="ang-nHome <?php if($active == "Home") { ?>ang-current<?php }; ?>">Home</a></li>
		<li><a href="profile-edit.php" class="ang-nProfile <?php if($active == "Profile") { ?>ang-current<?php }; ?>">Profile</a></li>
		<li><a href="results.php" class="ang-nSearch <?php if($active == "Search") { ?>ang-current<?php }; ?>">Search</a></li>
		<div id="ang-navHover">
			<span class="ang-mGradientR ang-nHoverHome">Home</span>
			<span class="ang-mGradientR ang-nHoverProfile">Profile</span>
			<span class="ang-mGradientR ang-nHoverSearch">Search</span>
		</div>
	</ul>
	<div id="ang-login">
		<a href="#">Universal Menu</a>
	</div>
	<div id="ang-topBarSearch">
		<form action="results.php" method="">
			<input type="text" name="search" value="Search for alumni">
		</form>
	</div>
	<!-- Hidden elements -->
	<div id="ang-popNotificationIcon">
		<div id="ang-popNotificationIconContent" class="ang-mGradientR">
			<a href="#" class="ang-coreModule">
				<span class="ang-notifFeed"><strong>Amy Richards</strong> sent you a message</span>
			</a>
			<a href="#" class="ang-coreModule ang-last-child">
				<span class="ang-notifFeed">System updated to version 2.0</span>
			</a>
		</div>
	</div>
	<div id="ang-popModuleIcon">
		<div id="ang-popModuleIconContent" class="ang-mGradientR">
			<a href="../mentoring/index.php" title="Aluminate Mentoring" class="ang-coreModule">
				<span class="ang-moduleName">Mentoring</span>
			</a>
			<a href="../travel/index.php" title="Aluminate Travel" class="ang-travelModule">
				<span class="ang-moduleName">Travel Network</span>
			</a>
			<a href="../intellects/index.php" title="Aluminate Intellects" class="ang-intellectsModule">
				<span class="ang-moduleName">Intellects</span>
			</a>
			<a href="../professions/index.php" title="Professionals Search" class="ang-profModule">
				<span class="ang-moduleName">Prof. Search</span>
			</a>
		</div>
	</div>
	<div id="ang-popLogin">
		<div id="ang-popLoginContent" class="ang-mGradientR">
			<a href="account.php" class="ang-coreModule">
				<span class="ang-notifFeed">My Account</span>
			</a>
			<a href="../core/index.php" class="ang-coreModule">
				<span class="ang-notifFeed">Logout</span>
			</a>
		</div>
	</div>
	<!-- Hidden elements -->
</nav>