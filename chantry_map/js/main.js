(function() {
	var map = new google.maps.Map(document.querySelector('.map-wrapper')), 
	preloader = document.querySelector('.preload-wrapper'),

	// import the geocode API
	geocoder = new google.maps.Geocoder(),
	geocodeButton = document.querySelector('.geocode'),

   

	// directions display
	directionsService = new google.maps.DirectionsService(),
   directionsDisplay = new google.maps.DirectionsRenderer;
	locations = [],
	
	marker = [];

	function initMap(position) {

		// save our location A
		locations[0] = { lat: position.coords.latitude, lng: position.coords.longitude };

		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);
		calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });

		map.setCenter({lat: 44.499891, lng: -81.373547});
		map.setZoom(18);

		marker = new google.maps.Marker({
			position: {lat: 44.499891, lng: -81.373547}, 
			map: map, 
			title: "Hello World"
			
				
		});
		
		google.maps.event.addListener(marker,'click',function() {
    var pos = map.getZoom();
    map.setZoom(20);
    map.setCenter(marker.getPosition());
    window.setTimeout(function() {map.setZoom(pos);},3000);
  });
  

		preloader.classList.add("hide-preloader");
	}

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log("WE were on a break!");
	}

	function handleError(){
		console.log("something went wrong");
	}

	function codeAddress(){
		var address = document.querySelector('.address').value;

		//success callback
		geocoder.geocode({'address' : address}, function(results, status){
			if (status == google.maps.GeocoderStatus.OK) {
				// push location into array
				locations[1] = { lat: results[0].geometry.location.lat(),
						lng: results[0].geometry.location.lng()
						};

				map.setCenter(results[0].geometry.location);

				if (marker) {
					marker.setMap(null);
					
					marker = new google.maps.Marker({
						map: map,
						position: results[0].geometry.location
					});

				calcRoute(results[0].geometry.location);
				
				} else {
					console.log('Geocode was not successful for the following reason ',status);
				}
			}
		});
	}

	function calcRoute(codedLoc) {
		var request = {
			origin: locations[1],
			destination: locations[0] = {lat: 44.499891, lng: -81.373547},
			travelMode: 'DRIVING'
		};

		directionsService.route(request, function(response, status) {
			if (status == 'OK') {
				directionsDisplay.setDirections(response);
			} 
		});
	}
	
	
	function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
          origin: locations[1], // Haight.
         destination: locations[0] = {lat: 44.499891, lng: -81.373547},  // Ocean Beach.
          // Note that Javascript allows us to access the constant
          // using square brackets and a string value as its
          // "property."
          travelMode: google.maps.TravelMode[selectedMode]
        }, function(response, status) {
          if (status == 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
	
	
	
	
	

	geocodeButton.addEventListener('click', codeAddress, false);
	
	
	

	//initMap();
 })();