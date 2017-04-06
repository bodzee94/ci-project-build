<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<title>Chantry Island - Home</title>
</head>

<body>
  <?php
    include 'nav.php';
   ?>

  <!--Marine Heritage Society Section-->
  <section class="row top-container">
    <div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 container">
      <div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
      <h2 class="content-header sec-text">Marine Heritage Society</h2>
        <hr class="small sec-text" id="society-hr">
          <p class="sec-text">The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors. They are also winner of the 2010 "Locals Know" Canada wide competition.
Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.
          </p>
          <a href="bookings.php" class="btn btn-custom">Book a Tour</a>
          <a href="bookings.php" class="btn btn-custom">View Schedule</a>
    </div>
  </section>

  <!--Promo video section-->
  <section class="container video-container">
    <div class="row">
    	<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 nopadding">
    	   <!-- For 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
          <video width="854" height="480" poster="video/promo_thumbnail.png" controls>
            <source src="video/ci_promo.mp4" type="video/mp4">
            <source src="video/ci_promo.avi" type="video/avi">
            <source src="video/ci_promo.ogv" type="video/ogv">
            Please update to a browser version that supports video.
          </video>
        </div>
      </div>
    </div>
  </section>

    <!--Intro "touring" Section with image carousel-->
  <section class="row" id="tourSec">
	  <div class="container">
		  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"><!-- Carousel -->
			  <ol class="carousel-indicators"><!-- Indicators -->
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			<div class="carousel-inner"><!-- Wrapper div for slides -->
			  <div class="item active">
			    <img src="images/island_aerial.jpg" alt="First slide"><!-- Static Header -->
              <div class="carousel-text text-center hidden-md hidden-lg cartextsmall" style="margin-top: -10px;">
                <h3>
                <strong>Chantry Island - Southampton, ON</strong>
                </h3>
                  <p class="hidden-xs">As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron.</p>
                <br>
                  <a class="btn car-btn2" href="bookings.php">Book A Tour</a><a class="btn car-btn2" href="about.php">Learn More</a>
              </div>

            <div class="carousel-text hidden-xs hidden-sm">
              <div class="col-md-12 text-center car-intext">
                <h3>
                <strong>Chantry Island - Southampton, ON</strong>
                </h3>

                    <h4>
                    <span>As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron.</span>
                    </h4>

                        <div>
                          <a class="btn car-btn" href="gallery.php">Photo Gallery</a><a class="btn car-btn" href="contact.php">Get Directions</a></div>
                        </div>
                    </div>
			    </div>

          <div class="item">
			    	<img src="images/island_water.jpg" alt="Second slide">
            <div class="carousel-text text-center hidden-md hidden-lg cartextsmall">
              <h3>
              <strong>Touring The Island</strong>
              </h3>
                <p class="hidden-xs">During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.</p>
              <br>
                <a class="btn car-btn2" href="bookings.php">Book A Tour</a><a class="btn car-btn2" href="about.php">Learn More</a>
            </div>

			    	  <div class="carousel-text hidden-xs hidden-sm">
                <div class="col-md-12 text-center car-intext">
                  <h3>
                  <strong>Touring The Island</strong>
                  </h3>

                    <h4>
                      <span>During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.</span>
                    </h4>

                        <div>
                        <a class="btn car-btn" href="gallery.php">Photo Gallery</a><a class="btn car-btn" href="contact.php">Get Directions</a></div>
                        </div>
                  </div>
			    </div>

			    <div class="item">
			    	<img src="images/island_aerial_2.jpg" alt="Third slide">
            <div class="carousel-text text-center hidden-md hidden-lg cartextsmall">
              <h3>
              <strong>Lighthouse & Cottage</strong>
              </h3>
                <p class="hidden-xs">Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds</p>
              <br>
                  <a class="btn car-btn2" href="restoration.php">Learn More</a><a class="btn car-btn2" href="donations.php">Make A Donation</a>
            </div>
              <div class="carousel-text hidden-xs hidden-sm">
                <div class="col-md-12 text-center car-intext">
                  <h3>
                  <strong>The Lighthouse & Cottage</strong>
                  </h3>

                    <h4>
                      <span id="car3text">Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds</span>
                    </h4>

                    <div>
                      <a class="btn car-btn" href="restoration.php">Learn More</a><a class="btn car-btn" href="donations.php">Make A Donation</a></div>
                    </div>
                </div>
			        </div>
			    </div>

			<!-- Left/Right controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    <span class="icon-prev"></span>
			</a>

			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		     <span class="icon-next"></span>
			</a>
		</div><!-- end of overall carousel div -->
	 </div>
</section>

<?php
  include 'footer.php';
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
