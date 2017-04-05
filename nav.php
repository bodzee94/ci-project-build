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
            <a href="contact.php">Location</a>
          </li>
          <li>
            <a href="gallery.php">Gallery</a>
          </li>

          <li>
            <a href="donations.php">Donations</a>
          </li>
          <li>
            <a href="admin_login.php"><img src="images/login.svg" alt="Admin Login Button" id="loginIcon"></a>
          </li>
        </ul>
      </div>
    </div><!-- closing nav containers -->
  </nav>






<!--<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>-->
</body>
</html>
