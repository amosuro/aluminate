<!DOCTYPE html>
<html>
	<head>
		<link href="_/css/anglia.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<!-- HTML WRAP START -->
		<div id="htmlwrap">
			<!-- ANGLIA RUSKIN HEADER START -->
			<div id="header">
				<div id="logo">
					<h1><a href="/ruskin/en/home.html">Anglia Ruskin University</a></h1>
				</div>
				<div id="header-content">
					<div id="shortlinks">
						<ul>
							<li><a href="http://www.anglia.ac.uk/ruskin/en/home/central/alumassoc.html" target="_blank"  title="Alumni Relations">Alumni Relations</a></li>
							<li><a href="http://www.anglia.ac.uk/ruskin/en/home/central/alumassoc.html" title="Development">Development</a></li>
							<li><a href="http://www.anglia.ac.uk/ruskin/en/home/microsites/honorary.html" target="_blank"  title="Honorary Award Holders">Honorary Award Holders</a></li>
							<li><a href="http://www.anglia.ac.uk/ruskin/en/home.html" target="_blank"  title="Your University">Your University</a></li>	
							<li><a href="http://www.anglia.ac.uk/ruskin/en/home/central/alumassoc/keepintouch.html" title="Contact Us">Contact Us</a></li>			
							<li class="none">
								<form name="gs" method="get" action="http://search.anglia.ac.uk/search" title="site-search">
									<label for="words" class="hidden">Enter search terms to search the Anglia Ruskin University website</label>						
									<input type="text" id="words" name="q"/>									
									<input type="hidden" name="entqr" value="3"/>
									<input type="hidden" name="sort" value="date:D:L:d1"/>
									<input type="hidden" name="output" value="xml_no_dtd"/>
									<input type="hidden" name="ud" value="1"/>
									<input type="hidden" name="oe" value="UTF-8"/>
									<input type="hidden" name="ie" value="UTF-8"/>
									<input type="hidden" name="filter" value="0"/>
									<input type="hidden" name="client" value="core_search_frontend"/>
									<input type="hidden" name="proxystylesheet" value="core_search_frontend"/>
									<input type="hidden" name="site" id="all" value="WWW-Anglia"/>
									<input type="submit" id="subby" name="subby" value="Search"/>
								</form>
							</li>
						</ul>
					</div>
					<div id="deptheadings">
						<h1><span class="nowrap">Alumni Network Directory</span></h1>
					</div>
				</div>
			</div>
			<!-- ANGLIA RUSKIN HEADER END -->
			
			<!-- MAIN WRAP START -->
			<div id="mainwrap">
				<div id="showimage"></div>
				<div id="main-navigation-menu">
					<ul>
						<li id="home"><a href="http://www.anglia.ac.uk" title="Home">Home</a></li>
						<li id="register"><a href="#" title="Register">Register</a></li>
						<li id="contactus"><a href="mailto:alumni@anglia.ac.uk" title="Contact Us">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<!-- MAIN WRAP END -->
			
			<!-- SIDEBAR START -->
			<div id="mainmenupane">
				<h1><span>Login</span></h1>
				<form>
					<input type="text" value="Username" name="Username" />
					<input type="password" value="Password" name="Password" />
					<button class="ang-button">LOGIN</button>
					<div>
						<a href="#">Forgot Password?</a>
						<a href="#">Normal Login</a>
					</div>
				</form>
			</div>
			<!-- SIDEBAR END -->
			
			<!-- MAIN CONTENT START -->
			<div id="contentpane">
				<div id="centralpane">
					<div id="contentstart">
						<div id="maincontentblockdept">
							<h1>Welcome to your new Alumni Network Directory</h1>
							<div class="featureText ang-twocol-1">
								<h1><span>Anglia Ruskin Online Directory Registration</span></h1>
								<div class="ang-content">
									<form>
										<h2>Anglia Ruskin Verification</h2>
										
										<label>Student Number*</label>
										<input type="text" value="" />
										
										<label>Matriculation Year*</label>
										<input type="text" value="" />
										
										<label>Graduation Year*</label>
										<input type="text" value="" />
										
										<label>Course*</label>
										<input type="text" value="" />
										
										<button class="ang-button verify">VERIFY</button>
									</form>
								</div>
							</div>
							<div class="featureText ang-twocol-2">
								<h1><span>Hello Ashley!</span></h1>
								<div class="ang-content">
									<h2>Aluminati Account: <span>ashleytest</span></h2>
									<p>Your Aluminati account is your master username and password here and provides an umbrella under which all your services are kept.</p>
									<p>You can login using your Aluminati account at any time to see the status of your services and new applications such as this one.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- MAIN CONTENT END -->
			
			<!-- FOOTER START -->
			<?php include '_/inc/footer.php' ?>
			<!-- FOOTER END -->
			
		</div>
		<!-- HTML WRAP END -->
	</body>
</html>