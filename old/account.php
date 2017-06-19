<!DOCTYPE html>
<html>
	<head>
		<?php include '_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Account"
		 ?>
		<?php include '_/inc/nav.php' ?>
		<div id="ang-wrapper">
			<section>
				<div id="ang-sysMessages">
					<div class="ang-success">
						<ul>
							<li>Password successfully changed</li>
						</ul>
					</div>
					<div class="ang-error">
						<ul>
							<li>Email address failed</li>
						</ul>
					</div>
				</div>
			</section>
			<?php include '_/inc/sidebar.php' ?>
			<section>
				<div id="ang-mainContent">
					<div id="ang-panels">
						<div id="ang-pPassword" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Password</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<form>
									<label><strong>Current</strong> Password</label>
									<input type="password" value="password" />
									<label><strong>New</strong> Password</label>
									<input type="password" value="password" class="ang-success" />
									<label><strong>Confirm</strong> New Password</label>
									<input type="password" value="password" />
								</form>
							</div>
						</div>
						<div id="ang-pEmail" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Email/Web</h1>
								<a href="#" class="ang-editPanel"><img src="_/img/icons/edit-panel.png" alt="Edit section" /></a>
							</div>
							<div class="ang-pContent ang-normalMode">
								<form>
									<label>Website</label>
									<input type="text" value="www.aluminati.net" />
									<label><strong>New</strong> Email Address<span class="ang-error">Invalid Email Address</span></label>
									<input type="text" value="ashley!!*aluminati.net" class="ang-error" />
									<label><strong>Confirm</strong> Email Address</label>
									<input type="text" value="ashley@aluminati.net" />
								</form>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<p><strong>Privacy Settings</strong></p>
								<form>
									<label>Allow users to see my website</label>
									<input type="checkbox" value="" />
									<label>Allow users to see my email address</label>
									<input type="checkbox" value="" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<div id="ang-pSecurity" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Security Question</h1>
							</div>
							<div class="ang-pContent ang-normalMode">
								<form>
									<label>Security Question</label>
									<input type="text" value="My First school?" />
									<label>Security <strong>Answer</strong></label>
									<input type="text" value="Cornelius Vermuyden School" />
									<label><strong>Confirm</strong> Answer</label>
									<input type="text" value="Cornelius Vermuyden School" />
								</form>
							</div>
						</div>
						<div id="ang-pLocation" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Location</h1>
								<a href="#" class="ang-editPanel"><img src="_/img/icons/edit-panel.png" alt="Edit section" /></a>
							</div>
							<div class="ang-pContent ang-normalMode">
								<form>
									<label>Address Line 1</label>
									<input type="text" value="35 Tayberry Close" />
									<label>Address Line 2</label>
									<input type="text" value="Red Lodge" />
									<label>City</label>
									<input type="text" value="Bury St Edmunds" />
									<label>County</label>
									<input type="text" value="Suffolk" />
									<label>Postcode</label>
									<input type="text" value="IP28 8FW" />
								</form>
							</div>
							<!-- Edit Mode -->
							<div class="ang-pContent ang-editMode">
								<p><strong>Privacy Settings </strong></p>
								<form>
									<label>Allow users to see my address</label>
									<input type="checkbox" value="" />
									<label>Allow users to find me on a map</label>
									<input type="checkbox" value="" />
									<button class="ang-resetEdit">Reset</button>
									<button class="ang-cancelEdit ang-red">Cancel</button>
									<button class="ang-saveEdit ang-green">Save</button>
								</form>
							</div>
							<!-- End Edit Mode -->
						</div>
						<div id="ang-pProfilePic" class="ang-panel">
							<div class="ang-pHeader ang-sGradient">
								<h1>Profile Picture</h1>
							</div>
							<div class="ang-pContent">
								<form>
									<label>Upload a photo of yourself</label>
									<input type="file" value="Browse your files" />
									<img src="_/img/photo/ashley-pic.png" alt="Current Photo" class="ang-currentPhoto" />
								</form>
								<div id="ang-picProgress">
									<div class="ang-picBar"></div>
								</div>
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