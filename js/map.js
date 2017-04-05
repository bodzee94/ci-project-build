// JavaScript Document
(function() {
	     function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 44.499891, lng: -81.373547}
        });
		
		var lighthouse = 'icons/lighthouse.svg';
  var lighthouseMarker = new google.maps.Marker({
    position: {lat: 44.490068, lng:  -81.403973},
    map: map,
    icon: lighthouse,
	title: "Chantry Island, Southampton Ontario",
	label: "Chantry Island, Southampton Ontario",
	 })
	 
	 
	 var tourbase = 'icons/anchor.svg';
  var baseMarker = new google.maps.Marker({
    position: {lat: 44.492580, lng:  -81.371946}, 
    map: map,
    icon: tourbase,
	title: "Chantry Island Tour Base",
	label: "Tour Base"
	 })
	 
	 
		
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('map-panel');
        control.style.position = 'relative';
		control.style.top = '0';
		control.style.zIndex = '5';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
       
        document.getElementById('destination-input').addEventListener('change', onChangeHandler);
		
		
		 new AutocompleteDirectionsHandler(map);
      }



      
	  
	  
	   function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
       this.destinationPlaceId = null;
        this.travelMode = 'DRIVING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

         this.setupClickListener('changemode-driving', 'DRIVING');
		this.setupClickListener('changemode-walking', 'WALKING');
		 this.setupClickListener('changemode-bicycling', 'BICYCLING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
       

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

     AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        }); 

      }; 

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };
		
		
      
	  function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('origin-input').value;
        var end = document.getElementById('destination-input').value;
		
		/*if (marker) {
			marker.setMap(null);
		} */
		
        directionsService.route({
          origin: start,
          destination: {lat: 44.499891, lng: -81.373547},
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
	
      }
	  

	
//initMap();
 })();	
 
 