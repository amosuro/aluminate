$('html').addClass('ang-js');
$(document).ready(function (){
	// Styleswitcher to demonstrate various skins
	$(function()
		{
			// Call stylesheet init so that all stylesheet changing functions 
			// will work.
			$.stylesheetInit();
			
			// This code loops through the stylesheets when you click the link with 
			// an ID of "toggler" below.
			$('#ang-toggler').bind(
				'click',
				function(e)
				{
					$.stylesheetToggle();
					return false;
				}
			);
			
			// When one of the styleswitch links is clicked then switch the stylesheet to
			// the one matching the value of that links rel attribute.
			$('.ang-styleswitch').bind(
				'click',
				function(e)
				{
					$.stylesheetSwitch(this.getAttribute('rel'));
					return false;
				}
			);
		}
	);
	
	// Tooltips (Used throughout the web app)
	function toolTips() {
		$('.ang-toolTip').hover(
			function() {
			this.tip = this.title;
			$(this).append(
				'<p class="ang-toolTipWrapper">'
				+this.tip+
				'</p>'
			);
			this.title = "";
			this.width = $(this).width();
			$(this).find('.ang-toolTipWrapper').css({left:this.width})
			$('.ang-toolTipWrapper').fadeIn(300);
		},
		function() {
			$('.ang-toolTipWrapper').fadeOut(100);
			$(this).find('.ang-toolTipWrapper').remove();
				this.title = this.tip;
			}
		);
	}
	toolTips();
	
	// Notification dropdown in topbar
	function notificationDropdown() {
		$('#ang-popNotificationIcon').hide();
		var clicked = false;
		$('#ang-notificationIcon a').click(function() {
			var clicked = true;
			$('#ang-popNotificationIcon').toggle();
			if (clicked == true) {
			$('#ang-popNotificationIcon').delay(15000).fadeOut(1500);
			return false;
		}
		});
		// Hide pop out if user clicks away from it
		$('body, #ang-moduleIcon a, #ang-login a').click(function() {
			$('#ang-popNotificationIcon').hide();
		});
		
	}
	notificationDropdown();
	
	// Current module dropdown in topbar
	function currentModule() {
		$('#ang-popModuleIcon').hide();
		var clicked = false;
		$('#ang-moduleIcon a').click(function() {
			var clicked = true;
			$('#ang-popModuleIcon').toggle();
			if (clicked == true) {
			$('#ang-popModuleIcon').delay(15000).fadeOut(1500);
			return false;
		}
		});
		// Hide pop out if user clicks away from it
		$('body, #ang-notificationIcon a, #ang-login a').click(function() {
			$('#ang-popModuleIcon').hide();
		});
		
	}
	currentModule();
	
	// Allows the user's name in top right to slide down to reveal CTAs
	function topBarExpand() {
		$('#ang-popLogin').hide();
		var clicked = false;
		$('#ang-login a').click(function() {
			var clicked = true;
			$('#ang-popLogin').toggle();
			if (clicked == true) {
			$('#ang-popLogin').delay(15000).fadeOut(1500);
			return false;
		}
		});
		// Hide pop out if user clicks away from it
		$('body, #ang-moduleIcon a, #ang-notificationIcon a').click(function() {
			$('#ang-popLogin').hide();
		});
		
	}
	topBarExpand();
	
	// Displays the page names underneath each menu item on hover
	function navHover() {
		$('a.ang-nHome:not(.ang-current)').hover(
		function () {$('.ang-nHoverHome').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverHome').css({'visibility' : 'hidden', 'background-color' : '#1B7AA6'});}
		);
		$('a.ang-nProfile:not(.ang-current)').hover(
		function () {$('.ang-nHoverProfile').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverProfile').css({'visibility' : 'hidden'});}
		);
		$('a.ang-nSearch:not(.ang-current)').hover(
		function () {$('.ang-nHoverSearch').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverSearch').css({'visibility' : 'hidden'});}
		);
		$('a.ang-nMentor:not(.ang-current)').hover(
		function () {$('.ang-nHoverMentor').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverMentor').css({'visibility' : 'hidden'});}
		);
		$('a.ang-nInbox:not(.ang-current)').hover(
		function () {$('.ang-nHoverInbox').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverInbox').css({'visibility' : 'hidden'});}
		);
		$('a.ang-nAccount:not(.ang-current)').hover(
		function () {$('.ang-nHoverAccount').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverAccount').css({'visibility' : 'hidden'});}
		);
		$('a.ang-nEvents:not(.ang-current)').hover(
		function () {$('.ang-nHoverEvents').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverEvents').css({'visibility' : 'hidden'});}
		);
		$('a.ang-nGroups:not(.ang-current)').hover(
		function () {$('.ang-nHoverGroups').css({'visibility' : 'visible', 'background-color' : '#1B7AA6'});},
		function () {$('.ang-nHoverGroups').css({'visibility' : 'hidden'});}
		);		
	}
	navHover();

	function currentNav() {
		if ($('a.ang-nHome').hasClass('ang-current')) {
			$('.ang-nHoverHome').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nProfile').hasClass('ang-current')) {
			$('.ang-nHoverProfile').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nSearch').hasClass('ang-current')) {
			$('.ang-nHoverSearch').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nSearch').hasClass('ang-current')) {
			$('.ang-nHoverSearch').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nMentor').hasClass('ang-current')) {
			$('.ang-nHoverMentor').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nInbox').hasClass('ang-current')) {
			$('.ang-nHoverInbox').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nAccount').hasClass('ang-current')) {
			$('.ang-nHoverAccount').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nEvents').hasClass('ang-current')) {
			$('.ang-nHoverEvents').css({'visibility' : 'visible'})
		}
		if ($('a.ang-nGroups').hasClass('ang-current')) {
			$('.ang-nHoverGroups').css({'visibility' : 'visible'})
		}
	}
	currentNav();
	
	function sbActions() {
		$('.ang-favoriteShow').click(function() {
			$('.ang-favouriteProfile').toggle();
		});
	}
	sbActions();
	
	// Removes the value inside the input fields on focus 
	function inputFocus() {
		var originalValues = new Array();
		$("input, textarea").focus(function() {
		if (!originalValues[this.id]) {
		originalValues[this.id] = $(this).val()
		}
		if ( $(this).val()==originalValues[this.id]) {
		$(this).val('');
		}
		});
		$("input, textarea").blur(function() {
		if ( $(this).attr("value")=="") {
		$(this).val(originalValues[this.id]); 
		}
		});
	}
	inputFocus();
	
	// This function was created to void any anchor links which don't link to a page
	function voidLinks() {
		$('#ang-subNav a, .ui-tabs-nav').click(function() {
			return false;
		});
	}
	voidLinks();
	
	// This function was created to solve the browser compatibility with the css 'last-child', I've used it a number of times over the site
	function lastChildren() {
		$('#ang-popNotificationIconContent > a:last-child').addClass('ang-last-child');
		$('#ang-popModuleIconContent > a:last-child').addClass('ang-last-child');
		$('#ang-popLoginContent > a:last-child').addClass('ang-last-child');
		$('#ang-pDecade .ang-decadesCol:last-child').addClass('ang-last-child');
		$('#ang-accordionContainer > div:last-child').addClass('ang-last-child');
		$('#ang-pSoccupation ul li:last-child').addClass('ang-last-child');
		$('#ang-pSoccupation > .ang-pContent > div:last-child').addClass('ang-last-child');
		$('.ang-result:last-child').addClass('ang-last-child');
		$('.ang-editMode form div:last-child').addClass('ang-last-child');
		$('#ang-pInbox table tr td:last-child').addClass('ang-last-child');
		$('#ang-pInbox table tr:last-child').addClass('ang-last-child');
		$('.ang-composeMessage form > div:last-child').addClass('ang-last-child');
		$('.ang-composeMessage form > div > button:last-child').addClass('ang-last-child');
		$('.ang-sbActionBar ul li:last-child').addClass('ang-last-child');
		$('.ang-editMode input[type="checkbox"]:last-child').addClass('ang-last-child');
		$('#ang-feed li:last-child').addClass('ang-last-child');
		$('#ang-profileTabs ul li:last-child').addClass('ang-last-child');
		$('#ang-profileTabs ul li a:last-child').addClass('ang-last-child');
	}
	lastChildren();
	
	// Same as above, but opposite
	function firstChildren() {
		$('#ang-popNotificationIconContent > a:first-child').addClass('ang-first-child');
		$('#ang-popModuleIconContent > a:first-child').addClass('ang-first-child');
		$('.ang-employer > h1:first-child').addClass('ang-first-child');
		$('#ang-mainContent > .ang-panelWide:first-child').addClass('ang-first-child');
		$('.ang-locationsCol:first-child').addClass('ang-first-child');
		$('#ang-pInbox table tr:first-child').addClass('ang-first-child');
		$('#ang-pInbox table tr td:first-child').addClass('ang-first-child');
		$('#ang-sysMessages > div:first-child').addClass('ang-first-child');
		$('.ang-sbActionBar ul li:first-child').addClass('ang-first-child');
		$('#ang-lbMentor .ang-mentorTypes label:first-child').addClass('ang-first-child');
		$('.ang-statNotifications a:first-child').addClass('ang-first-child');
		$('#ang-profileTabs ul li:first-child').addClass('ang-first-child');
		$('#ang-sbFilterAccord li:first-child').addClass('ang-first-child');
		$('#ang-topBar > ul li:first-child').addClass('ang-first-child');
	}
	firstChildren();
	
	function nthChildren() {
		$('.ang-panelThird:nth-child(3n)').addClass('ang-nth-3');
	}
	nthChildren();
	
	// This is a fix for the problem floating divs side by side in two columns without explicitly adding two columns (essential for the two column layouts)
	function floatDivs() {
		var left_col_height = 0;
		var right_col_height = 0;
		var panels = $('.ang-panel, .ang-panelHalf');
		for (var i = 0; i < panels.length; i++) {
		    if (left_col_height > right_col_height) {
		        right_col_height+=
		            panels.eq(i).addClass('ang-rightFloat').outerHeight(true);
		    }
		    else {
		        left_col_height+= panels.eq(i).outerHeight(true);
		    }
		}
	}
	floatDivs();
	
	// Handles the hiding and showing of all lightboxes on the site
	function lightboxContainer() {
		// Hide lbContainer
		$(".ang-lbContainer").hide();
		
		// Display map lightbox on click (Map)
		$(".ang-lbMapShow").click(function() {
			$(".ang-lbFade").show();
			$("#ang-lbMap").fadeIn(300);
			return false;
		});
		
		// Display map lightbox on click (Mentor)
		$(".ang-lbMentorShow").click(function() {
			$(".ang-lbFade").show();
			$("#ang-lbMentor").fadeIn(300);
			return false;
		});
		
		// Display inbox lightbox on click
		$(".ang-lbInboxShow").click(function() {
			$(".ang-lbFade").show();
			$("#ang-composeMessageLb").fadeIn(300);
			$("#ang-lbInbox").fadeIn(300);
			return false;
		});
		
		// Display add events lightbox on click
		$(".ang-lbEventAddShow").click(function() {
			$(".ang-lbFade").show();
			$("#ang-composeMessageLb").fadeIn(300);
			$("#ang-lbEventAdd").fadeIn(300);
			return false;
		});
		
		// Display view events lightbox on click
		$(".ang-lbEventViewShow").click(function() {
			$(".ang-lbFade").show();
			$("#ang-composeMessageLb").fadeIn(300);
			$("#ang-lbEventView").fadeIn(300);
			return false;
		});

		// Display view events lightbox on click
		$(".ang-lbRequestDetailsShow").click(function() {
			$(".ang-lbFade").show();
			$("#ang-lbRequestDetails").fadeIn(300);
			$("#ang-lbRequestDetails").fadeIn(300);
			return false;
		});
		
		// Close lbcontainer
		$(".ang-lbHide, .ang-lbFade").click(function() {
			$(".ang-lbFade").hide();
			$(".ang-lbContainer").fadeOut(300);
			return false;
		});
	}
	lightboxContainer();
	
	// Function for jCarousel Lite, a small plugin which handles the  scrolling functionality in Status panel
	function jcarousel() {
		// Status jCarousel
		$("#ang-statusList").jCarouselLite({
		    btnNext: ".ang-statusNewer",
		    btnPrev: ".ang-statusOlder",
		    vertical: true,
		    visible: 3
		});
		$("#ang-status").hide();
		$("#ang-memberStatus > a").click(function() {
			$("#ang-status").slideToggle(500);
		});
		
		// Employment jCarousel
		$("#ang-employmentNav").jCarouselLite({
		    btnNext: ".ang-older",
		    btnPrev: ".ang-recent",
		    visible: 5
		});
		$( "#ang-pEmployment > .ang-pContent" ).tabs();
		
		// Year jCarousel
		$("#ang-accordionScroller").jCarouselLite({
		    btnNext: ".ang-yearOlder",
		    btnPrev: ".ang-yearNewer",
		    visible: 3
		});
		$("#ang-accordionContainer li:odd").find("dt").addClass("ang-odd");
		
		// Featured Guide
		$("#ang-featuredGuides").jCarouselLite({
			btnNext: ".ang-pHeaderNew",
		    btnPrev: ".ang-pHeaderOld",
		    auto: 10000,
		    speed: 2000,
		    visible: 1
		});
	}
	jcarousel();
	
	// Jquery UI Tabs functionality goes here
	function uiTabs() {
		$( "#ang-pSoccupation > .ang-pContent" ).tabs();
	}
	uiTabs();
	
	// This function was mainly created for demo purposes to show how the functionality works when editing panels
	function editPanels() {
		
		// ----------- Profile Edit Page
		
		// Summary Panel
		$('#ang-pSummary .ang-editPanel').click(function() {
			$('#ang-pSummary .ang-normalMode').hide();
			$('#ang-pSummary .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pSummary .ang-editMode').hide();
			$('#ang-pSummary .ang-normalMode').show();
			return false;
		});
		// University Panel
		$('#ang-pUniversity .ang-editPanel').click(function() {
			$('#ang-pUniversity .ang-normalMode').hide();
			$('#ang-pUniversity .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pUniversity .ang-editMode').hide();
			$('#ang-pUniversity .ang-normalMode').show();
			return false;
		});
		// Location Panel
		$('#ang-pLocation .ang-editPanel').click(function() {
			$('#ang-pLocation .ang-normalMode').hide();
			$('#ang-pLocation .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pLocation .ang-editMode').hide();
			$('#ang-pLocation .ang-normalMode').show();
			return false;
		});
		// Employment Panel
		$('#ang-pEmployment .ang-editPanel').click(function() {
			$('#ang-pEmployment .ang-normalMode').hide();
			$('#ang-pEmployment .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pEmployment .ang-editMode').hide();
			$('#ang-pEmployment .ang-normalMode').show();
			return false;
		});
		
		// ----------- Account Page
		
		// Email Panel
		$('#ang-pEmail .ang-editPanel').click(function() {
			$('#ang-pEmail .ang-normalMode').hide();
			$('#ang-pEmail .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pEmail .ang-editMode').hide();
			$('#ang-pEmail .ang-normalMode').show();
			return false;
		});
		// Location Panel
		$('#ang-pLocation .ang-editPanel').click(function() {
			$('#ang-pLocation .ang-normalMode').hide();
			$('#ang-pLocation .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pLocation .ang-editMode').hide();
			$('#ang-pLocation .ang-normalMode').show();
			return false;
		});
		
		// ----------- Mentor Profile
		
		// Mentor Services Panel
		$('#ang-pMentorServices .ang-editPanel').click(function() {
			$('#ang-pMentorServices .ang-normalMode').hide();
			$('#ang-pMentorServices .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pMentorServices .ang-editMode').hide();
			$('#ang-pMentorServices .ang-normalMode').show();
			return false;
		});
		// Recent Mentees Panel
		$('#ang-pRecentMentees .ang-editPanel').click(function() {
			$('#ang-pRecentMentees .ang-normalMode').hide();
			$('#ang-pRecentMentees .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pRecentMentees .ang-editMode').hide();
			$('#ang-pRecentMentees .ang-normalMode').show();
			return false;
		});
		// Mentor Expertise Panel
		$('#ang-pMentorTagList .ang-editPanel').click(function() {
			$('#ang-pMentorTagList .ang-normalMode').hide();
			$('#ang-pMentorTagList .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pMentorTagList .ang-editMode').hide();
			$('#ang-pMentorTagList .ang-normalMode').show();
			return false;
		});
		// Mentor Bio Panel
		$('#ang-pMentorBio .ang-editPanel').click(function() {
			$('#ang-pMentorBio .ang-normalMode').hide();
			$('#ang-pMentorBio .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pMentorBio .ang-editMode').hide();
			$('#ang-pMentorBio .ang-normalMode').show();
			return false;
		});
		
		// ----------- Travel Profile
		
		// Travel Summary Panel
		$('#ang-pTravelBio .ang-editPanel').click(function() {
			$('#ang-pTravelBio .ang-normalMode').hide();
			$('#ang-pTravelBio .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pTravelBio .ang-editMode').hide();
			$('#ang-pTravelBio .ang-normalMode').show();
			return false;
		});
		// Travel Services Panel
		$('#ang-pTravelServices .ang-editPanel').click(function() {
			$('#ang-pTravelServices .ang-normalMode').hide();
			$('#ang-pTravelServices .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pTravelServices .ang-editMode').hide();
			$('#ang-pTravelServices .ang-normalMode').show();
			return false;
		});
		// Travel Tags Panel
		$('#ang-pTravelTagList .ang-editPanel').click(function() {
			$('#ang-pTravelTagList .ang-normalMode').hide();
			$('#ang-pTravelTagList .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pTravelTagList .ang-editMode').hide();
			$('#ang-pTravelTagList .ang-normalMode').show();
			return false;
		});
		
		// Travel Groups - AboutGroup
		$('#ang-pAboutGroup .ang-editPanel').click(function() {
			$('#ang-pAboutGroup .ang-normalMode').hide();
			$('#ang-pAboutGroup .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pAboutGroup .ang-editMode').hide();
			$('#ang-pAboutGroup .ang-normalMode').show();
			return false;
		});
		// Travel Groups - GroupLocation
		$('#ang-pHostLocation .ang-editPanel').click(function() {
			$('#ang-pHostLocation .ang-normalMode').hide();
			$('#ang-pHostLocation .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pHostLocation .ang-editMode').hide();
			$('#ang-pHostLocation .ang-normalMode').show();
			return false;
		});
		// Travel Groups - GroupLocation
		$('#ang-pGroupLocation .ang-editPanel').click(function() {
			$('#ang-pGroupLocation .ang-normalMode').hide();
			$('#ang-pGroupLocation .ang-editMode').show();
			return false;
		});
		$('.ang-saveEdit, .ang-cancelEdit').click(function() {
			$('#ang-pGroupLocation .ang-editMode').hide();
			$('#ang-pGroupLocation .ang-normalMode').show();
			return false;
		});
		
	}
	editPanels();
	
	// Used to demo how adding an employer will work
	function addEmployer() {
		$('.ang-addEmployer').click(function() {
			$('.ang-newEmployer').slideDown().effect("highlight", {}, 2000);;
			return false;
		});
	}
	addEmployer();
	
	// Displays the overlay buttons when hovering over a user's profile pic
	function userPicMessage() {
		$('#ang-userPic, .ang-overlayBtns').hover(
			function () {
				$('.ang-overlayBtns').show();
			},
			function () {
				$('.ang-overlayBtns').hide();
			}
		);
	}
	userPicMessage();
	
	// Mainly used to display the decade comparisons on Stats page
	function progressBar() {
		$( ".ang-pb2010s" ).progressbar({
			value: 37
		});
		$( ".ang-pb2000s" ).progressbar({
			value: 56
		});
		$( ".ang-pb1990s" ).progressbar({
			value: 78
		});
		$( ".ang-pb1980s" ).progressbar({
			value: 65
		});
		$( ".ang-pb1970s" ).progressbar({
			value: 31
		});
	}
	progressBar();
	
	// This function deals with all inbox functionality
	function inboxView() {
		$('#ang-pInbox table tr:not(.ang-tblHeader)').click(function() {
			$(this).addClass('selected');
			$('#ang-pInbox table tr:not(.ang-selected)').hide();
			$('#ang-pInbox .ang-inboxMessage').show();
		});
		$('.ang-closeMessage').click(function(){
			$('.ang-inboxMessage').hide();
			$('.ang-composeMessage').hide();
			$('#ang-pInbox table tr').show();
			$('#ang-pInbox table tr').removeClass('ang-selected');
		});
		$('.ang-replyMessage').click(function(){
			$('.ang-composeMessage').slideDown(500);
		});
	}
	inboxView();
	
	// Cancel Mentor Tags
	function mentorTags() {
		$('.ang-tagListEdit ul li').hover(
			function () {
				$(this).find('span').show();
			},
			function () {
				$(this).find('span').hide();
			}
		);
	}
	mentorTags();
	
	// Allows the user's name in top right to slide down to reveal CTAs
	function mentorActions() {
		$('.ang-mentorBox').hover(
			function () {
				$(this).find('.ang-mentorActions').show();
			},
			function () {
				$(this).find('.ang-mentorActions').hide();
			}
		);
	}
	mentorActions();
	
	function oddActivityFeeds() {
		$('#ang-feed li:odd').addClass('ang-odd');
	}
	oddActivityFeeds();
	
	function tableHover() {
		$('#ang-EventList tbody tr').hover(
			function() {
				$(this).children('td').addClass('ang-tdHovered');
			},
			function() {
				$(this).children('td').removeClass('ang-tdHovered');
			}
		)
	}
	tableHover();
	
	function filterAccordion() {
		$('#ang-sbFilterAccord').accordion({
			header: " > li",
			collapsible: true,
			autoHeight: false 
		});
	}
	filterAccordion();

	function inputKeyup() {
		$('#ang-travelLargeSearch input, #ang-lookingFor input').keyup(function() {
		  $('#ang-travelLargeSearch button, #ang-lookingFor button').addClass('ang-green');
		  $(this).css({ 'border' : '1px solid #278C00', 'background-color' : '#CFFCCD' })
		});
	}
	inputKeyup();

	function profileSwitch() {
		$('.ang-switch-label-on').click(function () {
			$('.ang-panelWide, .ang-panel').fadeOut(500);
		});
		$('.ang-switch-label-off').click(function () {
			$('.ang-panelWide, .ang-panel').fadeIn(500);
		});
	}
	profileSwitch();
});
