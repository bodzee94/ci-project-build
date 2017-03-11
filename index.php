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
  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <h2 class="hide">Main Navigation</h2>
    <div class="container-fluid">

      <!-- mobile navigation -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation menu</span>
              Menu<i class="fa fa-bars"></i>
        </button>
          <a class="navbar-brand" href="index.php"><img src="images/MHS_logo.png" alt="Marine Heritage Society Logo" id="MHSlogo"></a><!--swap out for img tag for logo-->
      </div>

      <!-- desktop/tablet navigation -->
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
            <a href="contact.php">Contact</a>
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

    </div><!-- closing nav containers -->
  </nav>

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
			    <img src="images/southampton_aerial.jpg" alt="First slide"><!-- Static Header -->
            <div class="carousel-text hidden-xs">
              <div class="col-md-12 text-center">
                <h3>
                Touring <strong>Chantry Island</strong>
                </h3>
                  <br>
                    <h4>
                    <span>As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron.</span>
                    </h4>
                      <br>
                        <div>
                          <a class="btn btn-custom btn-sm btn-min-block" href="#">Bookings</a><a class="btn btn-custom btn-sm btn-min-block" href="#">Gallery</a></div>
                        </div>
                    </div>
			    </div>

          <div class="item">
			    	<img src="images/island_aerial.jpg" alt="Second slide">
			    	  <div class="carousel-text hidden-xs">
                <div class="col-md-12 text-center">
                  <br>
                    <h4>
                      <span>During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.</span>
                    </h4>
                      <br>
                        <div>
                          <a class="btn btn-custom btn-sm btn-min-block" href="#">News</a><a class="btn btn-custom btn-sm btn-min-block" href="#">Restoration</a></div>
                        </div>
                  </div>
			    </div>

			    <div class="item">
			    	<img src="images/island_aerial_2.jpg" alt="Third slide">
              <div class="carousel-text hidden-xs">
                <div class="col-md-12 text-center">
                  <br>
                    <h4>
                      <span>Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds</span>
                    </h4>
                    <br>
                    <div>
                      <a class="btn btn-custom btn-sm btn-min-block" href="#">Events</a><a class="btn btn-custom btn-sm btn-min-block" href="#">Donations</a></div>
                    </div>
                </div>
			        </div>
			    </div>

			<!-- Left/Right controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- end of overall carousel div -->
	 </div>
</section>

<?php
  include 'footer.php';
 ?>

<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>
