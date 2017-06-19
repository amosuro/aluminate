<!DOCTYPE html>
<html>
	<head>
		<?php include '../_/inc/header.php' ?>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="../_/js/gmapsEvent.js"></script>
	</head>
	<body>
		<?php 
			$active = "Groups"
		 ?>
		<div id="ang-pageWrap">
			<?php include '../_/inc/nav-travel.php' ?>
			<div id="ang-wrapper">
				<?php include '../_/inc/sidebar-travel-group.php' ?>
				<section>
					<!-- start: panels -->
					<div id="ang-mainContent">
						<!-- start: Event Map -->
						<div id="ang-pSEventMap" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>Search groups by map</h1>
							</div>
							<div class="ang-pContent">
								<div id="ang-eventMap"></div>
							</div>
						</div>
						<!-- end: Event Map -->
						
						<!-- start: Event Table -->
						<div id="ang-pSEventTable" class="ang-panelWide">
							<div class="ang-pHeader ang-sGradient">
								<h1>List of groups</h1>
							</div>
							<div class="ang-pContent">
								<table id="ang-EventList" summary="List of Travel Network Events">
									<thead>
										<tr>
											<th scope="col">Group</th>
											<th scope="col">Location</th>
											<th scope="col">Date</th>
										</tr>
									</thead>
									<tbody>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
										</tr>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
										</tr>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
										</tr>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
										</tr>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
										</tr>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
										</tr>
										<tr onclick="window.location='travel-group-view.php'">
											<td>CU Bulgarian Society</td>
											<td>Sofia, Bulgaria</td>
											<td>20/10/2012</td>
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