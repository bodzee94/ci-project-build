<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Chantry Island - Donations</title>
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
    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 container">
    <div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
      <h2 class="content-header sec-text">Donations</h2>
        <hr class="small sec-text" id="society-hr">
          <p class="sec-text">Since 1997 we have had a tremendous amount of support by donations. If you would like to be included please send a cheque or money order to:
          </p>
          <p class="sec-text">
            <strong>Mailing Address:</strong>
          <br>
            Marine Heritage Society <br>
            Box 421 <br>
            Southampton, Ontario <br>
            Canada, N0H 2L0 <br>
            <br>
            Please specify your Donation Preference: <br>
            <strong>Chantry Island and/or New Tour Boat</strong>
          </p>
          <p class="sec-text">
            We are currently engaged in Fund Raising to support our New Boat, Dock Improvements, and Marine Heritage Projects. <br>
            We will send a tax receipt for all donations $20 and more.
          </p>
          <button class="btn btn-custom">Make a Donation</button>
    </div>
  </section>

  <section class="row" id="schedule">
    <div class="well container">
      <h2 class="content-header prim-text">Donor Category List</h2>
  <table class="table table-responsive table-striped">
    <thead>
      <tr>
        <th>Levels</th>
        <th>Amount</th>
        <th style="width: 36px;"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Shipmate</td>
        <td>$1.00 - $199.00</td>
      </tr>
      <tr>
        <td>Lifesaving Crew</td>
        <td>$200.00 0 $999.00</td>
      </tr>
      <tr>
        <td>Assistant Lighthouse Crew</td>
        <td>$1,000.00 - $4,999.00</td>
      </tr>
      <tr>
        <td>Lighthouse Keepers</td>
        <td>$5,000.00 - $9,999.00</td>
      </tr>
      <tr>
        <td>Captain Lambert's Crew</td>
        <td>$10,000.00 - $25,000.00</td>
      </tr>
      <tr>
        <td>Queen Victoria's Crew</td>
        <td>$25,000.00 plus</td>
      </tr>
    </tbody>
    </table>
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
