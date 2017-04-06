<section class="row sub-footer">
   <h3 class="hide">Additional Information:</h3>
    <div class="col-xs-6 col-md-3 sub-footer-con thumbnail">
      <h4>Saugeen Shores</h4>
        <p class="prim-text">The Saugeen Shores website is shared between the municipality and the local Chamber of Commerce. Let this website help you plan your visit when you come to tour Chantry Island.
        </p>
    </div>

    <div class="col-xs-6 col-md-3 sub-footer-con thumbnail">
      <h4>Bruce County Museum &amp; Cultural Centre</h4>
        <p class="prim-text">The Bruce County Museum and Cultural Centre offers a journey through thousands of years of natural and human history. Check out their awesome Marine Gallery.
        </p>
    </div>

    <div class="col-xs-6 col-md-3 sub-footer-con thumbnail">
      <h4>Explore the Bruce &amp; Lighthouse Tour</h4>
        <p class="prim-text">Explore the Bruce is the Official Travel web site of Bruce County, one of the most spectacular all season destinations in Ontario. Check out this link for more Lighthouse Destinations.
        </p>
        <p class="prim-text">Also, enjoy the Bruce Coast Lighthouse tour.
        </p>
    </div>

    <div class="col-xs-6 col-md-3 sub-footer-con thumbnail">
      <h4>Southampton Tennis Club</h4>
        <p class="prim-text">The Southampton Tennis Club is a thriving seasonal tennis club on the sunny shores of Lake Huron. Visit our website for more information.
        </p>
    </div>
  </section><!--end of sub-footer-->

  <!--Start of main footer-->
  <footer>
    <div class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <h3>Chantry Island</h3>
            <ul>
          	  <li><p> <a href="tel:5197975862">Call: 519-797-5862</a> <br> <a href="tel:18667975862">Toll Free: 1-866-797-5862</a>
              Marine Heritage Society<br>Box 421<br>Southhampton, Ontario<br>Canada, N0H 2L0</p></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <h3>Home &amp; About</h3>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="admin_login.php">Admin Sign In</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="restoration.php">Restorations</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="events.php">Events</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <h3>Booking &amp; Contact</h3>
            <ul>
             	<li><a href="bookings.php">Booking Info</a></li>
              <li><a href="bookings.php">Schedule &amp; Rates</a></li>
              <li><a href="contact.php">Maps</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <h3>Gallery &amp; Donations</h3>
            <ul>
              <li><a href="gallery.php">Chantry Island Gallery</a></li>
              <li><a href="gallery.php">Volunteers</a></li>
              <li><a href="donations.php">Donate Today</a></li>
            </ul>
          </div>

          <!--<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <ul class="social">
              <li> <a href="#"> <i class=" fa fa-facebook"></i></a></li>
              <li> <a href="#"> <i class="fa fa-twitter"></i></a></li>
              <li> <a href="#"> <i class="fa fa-google-plus"></i></a></li>
              <li> <a href="#"> <i class="fa fa-pinterest"></i></a></li>
              <li> <a href="#"> <i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>-->

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

            <h3>Contact Us</h3>
            <?php

            ini_set('display_errors',1);
            error_reporting(E_ALL);

           if (isset ($_POST["index_email"]) && isset ($_POST["index_number"]) && isset ($_POST["index_subject"]) && isset ($_POST["index_message"])) {

           $index_email = $_POST["index_email"];
           $index_number = $_POST["index_number"];
           $index_subject = $_POST["index_subject"];
           $index_message = $_POST["index_message"];


           if (!empty($index_email) && !empty($index_number) && !empty($index_subject) && !empty($index_message)) {
             if (strlen($index_email)>70 || strlen($index_number)>15) {
               echo "<p style='color:red; font-size: 16px; font-weight: bold;'>*Maximum Characters Exceeded For Some Fields. Please Try Again.*</p>";

             } else {
           $to = "msusi4@uwo.ca";
           $subject = 'Chantry Island Contact Form Submitted: '.$index_subject;
           $body = $index_email."\n".$index_number."\n".$index_subject."\n".$index_message;
          $headers = 'From: '.$index_email;

           if (@mail($to, $subject, $body, $headers)) {
             echo "<p style='color:white; font-size: 12px; font-weight: bold; margin-bottom: 15px;'>Thank You For Contacting Us! We have received your contact form and will do our best to respond within 24 business hours via email or phone.</p>";
           } else {
             echo "<p style='color:red; font-size: 16px; font-weight: bold; margin-bottom: 15px;'>Sorry, An Error Occurred. Please Try Again.</p>";
           }
             }

           } else {
             echo "<p style='color:red; font-size: 16px; font-weight: bold; margin-bottom: 15px;'>*Please Fill Out All Required Fields*</p>";
           }
           }


           ?>
            <ul>
              <li>
                <div class="input-append contact-box text-center">
                  <form role="form" id="contactUs" action="index.php" method="post">
    			    			<div class="form-group">
                      <label>Enter Your Email:</label>
                        <input type="email" name="index_email" id="email" class="form-control input-sm text-center" placeholder="chantryisland@bmts.com" required>
                    </div>

                    <div class="form-group">
    			            <input type="text" name="index_number" id="number" class="form-control input-sm text-center" placeholder="Enter Your Phone Number" required>
    			    			</div>

                    <div class="form-group">
    			    				<input type="text" name="index_subject" id="subject" class="form-control input-sm text-center" placeholder="Subject" required>
    			    			</div>

    			    			<div class="row">
    			    				<div class="col-xs-12 col-sm-12 col-md-12">
    			    					<div class="form-group">
    			                 <textarea name="index_message" id="message" class="form-control input-sm text-center" maxlength="140" rows="6" required>
    			                 </textarea>
    			    					</div>
    			    				</div>
    			    			</div>
                    <input type="submit" value="submit" class="btn btn-custom-alt text-center">
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>  <!--End of main footer-->

    <!--Start of copyright footer-->
    <div class="footer-bottom">
      <div class="container">
        <p class="pull-left">Copyright © Chantry Island 2017. All right reserved.</p>
      </div>
    </div><!--end of copyright footer-->
  </footer>
