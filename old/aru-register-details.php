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
										<h2>1. Basic Information</h2>
										
										<label>First Name*</label>
										<input type="text" value="" />
										
										<label>Middle Names</label>
										<input type="text" value="" />
										
										<label>Last Name*</label>
										<input type="text" value="" />
										
										<label>Maiden Name</label>
										<input type="text" value="" />
										
										<label>Date of Birth*</label>
										<div id="dobFields">
											<div class="dobField">
												<input type="text" value="" />
											</div>
											<div class="dobField">
												<input type="text" value="" />
											</div>
											<div class="dobField">
												<input type="text" value="" />
											</div>
										</div>
									
										<h2>2. Aluminati Account</h2>
										
										<label>Username*</label>
										<input type="text" value="" />
										<div class="availability">
											Availability:
										</div>
										
										<label>Password*</label>
										<input type="text" value="" />
										
										<label>Confirm Password*</label>
										<input type="text" value="" />
										
										<h2>3. Account Security</h2>
										
										<label>Alternative Email*</label>
										<input type="text" value="" />
										
										<label>Confirm Email*</label>
										<input type="text" value="" />
										
										<label>Security Question*</label>
										<input type="text" value="" />
										
										<label>Security Answer*</label>
										<input type="text" value="" />
										
										<h2>4. Service Policies</h2>
										
										<p>Please read and then check the boxes to confirm acceptance of the following:</p>
										
										<div class="acceptance">
											<a href="#">Privacy Policy</a>
											<input type="radio" value="true" />
											<a href="#">Terms and Conditions</a>
											<input type="radio" value="true" />
										</div>
										
										<button class="ang-button createAccount">CREATE ACCOUNT</button>
									</form>
								</div>
							</div>
							<div class="featureText ang-twocol-2">
								<h1><span>I already have an account</span></h1>
								<div class="ang-content">
									<form>
										<label>Username*</label>
										<input type="text" value="" />
										
										<label>Password*</label>
										<input type="text" value="" />
										
										<button class="ang-button">LOGIN</button>
									</form>
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