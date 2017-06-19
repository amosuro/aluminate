$(document).ready(function (){	
	function travelEventMap() {
		var myLatlng = new google.maps.LatLng(95.1, 16.0);
	
		//Create an object variable containing set of properties, to pass to the map
		var myOptions = {
			zoom: 2,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		 
		// Intializing map by calling constructor
		map = new google.maps.Map(document.getElementById("ang-eventMap"), myOptions);
		
		// Initializing variable with location name</pre>
		var address = 'london';
		 
		// Creating new object of class Geocoder
		var geocoder = new google.maps.Geocoder();
		 
		geocoder.geocode( { 'address': address}, function(results, status) {
			// Get latlng for the given location name
			var latlang = results[0].geometry.location;
			 
			// Set given location as center of the map
			map.setCenter(latlang);
			 
			// Place marker
			var marker = new google.maps.Marker({
				map: map,
				position: latlang
			});
			
			// Create info window. In content you can pass simple text or html code.
			var infowindow = new google.maps.InfoWindow({
				content: "<div class='ang-gmapsInfo'><div><h1>General Meeting</h1><p>Lawyer</p><p>Shoreditch, London</p></div></div>"
			});
			 
			// Add listner for marker. You can add listner for any object. It is just an example in which I am specifying that infowindow will be open on marker mouseover
			google.maps.event.addListener(marker, "click", function() {
				infowindow.open(map, marker);
			});
		});
	}
	travelEventMap();
	
});