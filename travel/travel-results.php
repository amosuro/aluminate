<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="../_/js/gmapsEvent.js"></script>
	</head>
	<body>
		<?php 
			$active = "Search"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-travel.php' ?>
			<div id="ang-wrapper">
				<?php include '../_/inc/sidebar-travel-result.php' ?>
				<section>
					<!-- start: panels -->
					<div id="ang-mainContent">			
						<!-- start: Event Table -->
						<div id="ang-pSEventTable" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>Results</h1>
							</div>
							<div class="ang-pContent">
								<table id="ang-EventList" class="ang-ResultsList" summary="List of Travel Network Results">
									<thead>
										<tr>
											<th>&nbsp;</th>
											<th scope="col">Name</th>
											<th scope="col">Profession</th>
											<th scope="col">Location</th>
											<th scope="col">Features</th>
										</tr>
									</thead>
									<tbody>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
										<tr onclick="window.location='travel-profile-view.php'">
											<td><img src="../_/img/photo/mentorThumb.png" /></td>
											<td>David Mantell</td>
											<td>Web Developer</td>
											<td>London, UK</td>
											<td>Non-smoker, WIFI</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end: Event Table -->
					</div>
					<!-- end: panels -->
				</section>
			</div>
			<?php include '../_/inc/footer.php' ?>
		</div>
		<?php include '../_/inc/lightbox-map.php' ?>
		<?php include '../_/inc/lightbox-mentor.php' ?>
		<?php include '../_/inc/lightbox-message.php' ?>
		<?php include '../_/inc/lightbox-event-add.php' ?>
		<?php include '../_/inc/lightbox-event-view.php' ?>
	</body>
</html>