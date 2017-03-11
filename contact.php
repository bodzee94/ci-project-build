<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Chantry Island - Contact</title>
</head>

<body>
  <?php
    include 'nav.php';
   ?>

   <!--Marine Heritage Society Section-->
  <section class="row text-center" id="contactSec">
    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 container">
    <div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
      <h2 class="content-header sec-text">Contact Us</h2>
        <hr class="small sec-text" id="society-hr">
        <p class="sec-text"> Contact us for more information about Chantry Island and our tours. We look forward to hearing from you.</p>    </div>
  </section>

  <section class="row" id="mapSec">
    <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
      <h3>Location</h3>
        <p>86 Saugeen St. <br>
          Southampton, Ontario, ON. <br>
          N0H 2L0 </p>
      <h3>Directions</h3>
        <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</p>
    </div>
    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45535.932460670585!2d-81.39708863040225!3d44.49475329980938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8829cfbc0ee0d0c9%3A0x9f95e0d6cd37c1e4!2sSouthampton%2C+ON!5e0!3m2!1sen!2sca!4v1488331049761" width="650" height="450" allowfullscreen></iframe></div>
  </section>

  <section class="row centered-form text-center">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Send us a Message</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <label>To:</label>
			    		<input type="text" name="last_name" id="last_name" class="form-control input-sm text-center" placeholder="chantryisland@bmts.com" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <label>Your Name:</label>
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm text-center" placeholder="Your Name" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
                            <label>Your Email:</label>
			    				<input type="email" name="email" id="email" class="form-control input-sm text-center" placeholder="Enter Your Email" required>
			    			</div>

                <div class="form-group">
                <label>Phone Number:</label>
			   <input type="text" name="phone" id="number" class="form-control input-sm text-center" placeholder="Enter Your Phone Number" required>
			    			</div>

                             <div class="form-group">
                             <label>Subject:</label>
			    				<input type="text" name="subject" id="subject" class="form-control input-sm text-center" placeholder="Subject" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
                                    <label>Message:</label>
			<textarea name="text" id="message" class="form-control input-sm text-center" placeholder="Write Your Message Here" maxlength="140" rows="6" required>
			</textarea>
			    					</div>
			    				</div>
			    			</div>

			    			<input type="submit" value="submit" class="btn btn-custom-alt text-center">

			    		</form>
			    	</div>
	    		</div>
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
