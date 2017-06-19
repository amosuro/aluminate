<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Home"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-core.php' ?>
			<div id="ang-wrapper">
				<section>
					<div class="ang-loginLogo">
						<img src="../_/img/misc/mainLogo.png" alt="Aluminate" />
					</div>
					<div id="ang-pLogin">
						<div class="ang-pHeader ang-sGradient">
							<h1>Login</h1>
						</div>
						<div class="ang-loginContent">
							<form action="profile.php">
								<input type="text" value="Username" />
								<input type="password" value="Password" />
								<a href="#">Forgotten password?</a>
								<a href="profile.php" class="ang-button">Login</a>
							</form>
						</div>
						<div id="ang-poweredBy">
							<p>Powered By</p>
							<a href="http://www.aluminati.net/alumni-services/" target="_blank"><img src="../_/img/misc/logo-lrg.png" alt="Powered By Aluminati" /></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</body>
</html>