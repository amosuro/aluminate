<!DOCTYPE html>
<html>
	<head>
		<?php include '_/inc/header.php' ?>
	</head>
	<body>
		<?php 
			$active = "Inbox"
		 ?>
		<?php include '_/inc/nav.php' ?>
		<div id="ang-wrapper">
			<?php include '_/inc/sidebar.php' ?>
			<section>
				<div id="ang-mainContent">
					<div id="ang-inboxNav">
						<a href="#" class="ang-button ang-lbInboxShow">Compose</a>
						<a href="#" class="ang-button">Inbox</a>
						<a href="#" class="ang-button">Drafts</a>
						<form>
							<input type="text" value="Search your inbox..." />
							<button>Search</button>
						</form>
					</div>
					<div id="ang-pInbox" class="ang-panelWide">
						<div class="ang-pHeader ang-sGradient">
							<h1>Inbox</h1>
						</div>
						<div class="ang-pContent">
							<table id="">
							<!-- Table header -->
								<thead>
									<tr class="ang-tblHeader">
										<th>From</th>
										<th>Subject</th>
										<th>Date</th>
									</tr>
								</thead>
								<tbody>
									<tr class="ang-inboxUnread">
										<td><img src="_/img/icons/inbox-mentor.png" alt="Mentor" /><a href="view-profile.php">Adam Becker</a></td>
										<td>Hey, looks like we were in the same class together!</td>
										<td>28 Jan</td>
									</tr>
									<tr class="ang-inboxUnread">
										<td><a href="view-profile.php">Daniel Oldfield</a></td>
										<td>Last year's graduation</td>
										<td>23 Jan</td>
									</tr>
									<tr>
										<td><a href="view-profile.php">Mike Downey</a></td>
										<td>How are you doing since the graduation?</td>
										<td>22 Dec 2011</td>
									</tr>
									<tr>
										<td><img src="_/img/icons/inbox-mentor.png" alt="Mentor" /><a href="view-profile.php">Tope Ola</a></td>
										<td>2008 graduates meet up!</td>
										<td>10 Dec 2011</td>
									</tr>
								</tbody>
							</table>
							<div class="ang-inboxMessage">
								<div class="ang-content">
									<div><a href="#" class="ang-button ang-closeMessage">Back to Inbox</a></div>
									<h1><strong>Subject:</strong> How are you doing since the Graduation?</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dolor tortor. Aenean vel laoreet est. Duis elit erat, sagittis a bibendum sed, porttitor quis nibh. Nulla sed massa sed leo dictum molestie non in nunc. Nam pulvinar arcu sollicitudin urna condimentum rhoncus. Duis a tellus augue, non aliquet leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
									<div><a href="#composeMessage" class="ang-button ang-green ang-replyMessage">Reply</a></div>
								</div>
							</div>
							<div id="ang-composeMessage" class="ang-composeMessage">
								<div class="ang-content">
									<form>
										<div class="ang-ComposeTo">
											<img src="_/img/photo/richard-thumb.png" alt="Ashley Mosuro" />
											<div>
												<span>To:</span>
												<span><strong>Ashley Mosuro</strong></span>
												<input type="text" value="Subject" />
											</div>
										</div>
										<textarea>Type your message here</textarea>
										<div>
											<button class="ang-red ang-closeMessage">Cancel</button>
										</div>
										<div>
											<button class="ang-grey ang-closeMessage">Save</button>
											<button class="ang-green ang-closeMessage">Send</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include '_/inc/footer.php' ?>
		<?php include '_/inc/lightbox-map.php' ?>
		<?php include '_/inc/lightbox-mentor.php' ?>
		<?php include '_/inc/lightbox-message.php' ?>
	</body>
</html>