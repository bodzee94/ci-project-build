<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('admin/phpscripts/init.php');

		$tbl = "tbl_about";
		$getAbout = getAll($tbl);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Chantry Island - About</title>
</head>

<body>
  <?php
    include ('nav.php');
   ?>

  <!--Events Top Section-->
  <section class="row top-container">
    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 container">
    <div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
      <h2 class="content-header sec-text">About Chantry Island</h2>
        <hr class="small sec-text" id="society-hr">
        <p class="sec-text">
            Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.
          </p>
          <a href="bookings.php" class="btn btn-custom">Book a Tour</a>
          <a href="bookings.php" class="btn btn-custom">View Schedule</a>
    </div>
  </section>



    <?php
       if(!is_string($getAbout)){
           while($row = mysqli_fetch_array($getAbout)){
            echo  "<section class=\"row about-container\">";
    echo "<h3 class=\"content-header infotitle1\">{$row['about_section_1_title']}</h3>";
    echo "<div class=\"col-xs-10 col-md-7 col-xs-offset-1 col-md-offset-1\">";
    echo "<figure>";
      echo "<img src=\"images/island_water.png\" class=\"img-responsive\" alt=\"Aeriel View of Island\">";
      echo "<figcaption>photo by: James Swartz</figcaption>";
      echo "</figure>";

               echo "<p class=\"sec-text about2\">{$row['about_s1_p2']}</p>";


    echo "</div>";
    echo "<div class=\"col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0\">";
     echo "<p class=\"sec-text about1\">{$row['about_s1_p1']}</p>";
      echo "<figure>";
      echo "<img src=\"images/island_water_2.png\" class=\"img-responsive\" alt=\"the island two\">";
       echo "<figcaption>photo by: Karen Smith</figcaption>";
       echo "</figure>";
  echo   "</div>";


echo "</section>";

echo "<section class=\"row about-container\">";
  echo "<h3 class=\"content-header infotitle2\">{$row['about_section_2_title']}</h3>";
  echo "<div class=\"col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1\">";
  echo "<p class=\"sec-text about3\">{$row['about_s2_p1']}</p>";
  echo "</div>";
  echo "<div class=\"col-xs-10 col-xs-offset-1 col-md-2 col-md-offset-0\">";
    echo "<img src=\"images/lighthouse.jpg\" class=\"img-responsive\" alt=\"Chantry Island Lighthouse\">";
    echo  "<figcaption>photo by: Vicki Tomori</figcaption>";
echo "</div>";
  echo "<div class=\"col-xs-10 col-xs-offset-1 col-md-4 col-xs-offset-0\">";
    echo "<p class=\"sec-text about4\">{$row['about_s2_p2']}</p>";
    echo "</div>";
    echo "</section>";

echo "<section class=\"row about-container\">";
echo "<h3 class=\"content-header infotitle3\">{$row['about_section_3_title']}</h3>";
  echo "<div class=\"col-xs-12 col-md-6 col-md-offset-1\">";
    echo "<p class=\"sec-text about5\">{$row['about_birdText']}</p>";
  echo "</div>";

  echo "<div class=\"col-xs-12 col-md-4\">";
    echo "<img src=\"images/birds.jpg\" class=\"img-responsive\" alt=\"bird sanctuary photo\">";
     echo "<figcaption>photo by: Nancy Calder</figcaption>";
  echo "</div>";
  echo "</section>";

echo "<section class=\"row about-container\">";
  echo "<h3 class=\"content-header\">Beautiful Sunsets</h3>";
  echo "<div class=\"col-xs-12 col-md-10 col-md-offset-1 center\">";
    echo "<img src=\"images/sunset.png\" class=\"img-responsive\" alt=\"sunset photo\">";

  echo "</div>";
  echo "</section>";



  }
}else{
  echo "<p>{$getAbout}</p>";
}
?>


  <?php
    include 'footer.php';
   ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/aboutreq.js"></script>
</body>
</html>
