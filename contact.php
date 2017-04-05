<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Chantry Island - Map Location</title>
</head>

<body>
  <?php
    include 'nav.php';
   ?>
   
<!--  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <h2 class="hide">Main Navigation</h2>
    <div class="container-fluid">

      <!-- mobile navigation 
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation menu</span>
              Menu<i class="fa fa-bars"></i>
        </button>
          <a class="navbar-brand" href="index.php"><img src="images/MHS_logo.png" alt="Marine Heritage Society Logo" id="MHSlogo"></a><!--swap out for img tag for logo
      </div>

      <!-- desktop/tablet navigation 
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">About</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li>
                  <a href="about.php">About</a>
                </li>
                <li>
                  <a href="news.php">News</a>
                </li>
                <li>
                  <a href="events.php">Events</a>
                </li>
                <li>
                  <a href="restoration.php">Restoration</a>
                </li>
              </ul>
          </li>
          <li>
            <a href="bookings.php">Book A Tour</a>
          </li>
            <li>
            <a href="contact.php">Location</a>
          </li>
          <li>
            <a href="gallery.php">Gallery</a>
          </li>

          <li>
            <a href="donations.php">Donations</a>
          </li>
          <li>
            <a href="#"><img src="images/login.svg" alt="Admin Login Button" id="loginIcon"></a>
          </li>
        </ul>
      </div>
    </div><!-- closing nav containers 
  </nav>  -->


<section class="row text-center" id="contactSec">
    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 container">
    <div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
      <h1 class="content-header sec-text">Find Us</h1>
        <hr class="small sec-text" id="society-hr">
        <p class="sec-text" style="font-size: 1.4em;"> Enter your address or postal code in the map below to get directions to the Chantry Island Tour Base. We look forward to see you!</p>
        <p style="font-size: 1.3em;"><strong>Our Address:</strong></p>
          <p style="color: white; font-size: 1.3em;">86 Saugeen St. <br>
          Southampton, Ontario, ON. <br>
          N0H 2L0 </p>
            </div>
  </section>

 





 <div id="map-panel">
   
  
   <input id="origin-input" class="controls" type="text"
        placeholder="Enter Your Postal Code">

    <input id="destination-input" class="controls" type="text"
        placeholder="Chantry Island, Southampton">

    <div id="mode-selector" class="controls">
    
    <input type="radio" name="type" id="changemode-driving" checked="checked">
      <label for="changemode-driving"><img src="icons/drive.svg" alt="Walking" width="50"></label>
      
      <input type="radio" name="type" id="changemode-walking">
      <label for="changemode-walking"><img src="icons/walk.svg" alt="Walking" width="50"></label>
      
      
      <input type="radio" name="type" id="changemode-bicycling">
      <label for="changemode-bicycling"><img src="icons/bike.svg" alt="Walking" width="50"></label>
      

      <input type="radio" name="type" id="changemode-transit">
      <label for="changemode-transit"><img src="icons/bus.svg" alt="Walking" width="50"></label>
      
      

    </div>
    </div>
   
   
   
    
   
    
     <div style="height:100%; width:100%;" id="mapWrapper">
    <div id="map"></div>
    </div>
    
  <div id="right-panel">
  	<h1 style="text-align: center;">Directions:</h1>
    <p style="text-align: center;">Please enter your address above to get directions to our Tour Base.</p>
  </div>
    
    
    
    
    
    
   <script>
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
		
	/*	if (marker) {
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
	  
    </script> 
    
    
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgLtAB9zgzoikGtNvZj-qYa6V9z3IN1ao&callback=initMap&libraries=places">
    </script>
  
 
      <?php
        include 'footer.php';
       ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>