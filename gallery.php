<?php

 ini_set('display_errors',1);
    error_reporting(E_ALL);

 require_once('admin/phpscripts/init.php');

   $tbl = "tbl_gallery";
   $getVids = getAll($tbl);

   		$tbl2 = "tbl_volunteers";
   		$getVols = getAll($tbl2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Chantry Island - Gallery</title>
</head>

<body>
  <?php
    include 'nav.php';
   ?>
  <section class="row top-container">
    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 container">
    <div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
      <h2 class="content-header sec-text">Photo Gallery & Volunteer List</h2>
        <hr class="small sec-text" id="society-hr">
          <p class="sec-text">Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.<br>
            You can also find our list of current volunteers at the bottom of the page or by clicking <a href="#volunteers" class="ul linkhov white">here.</a>
          </p>
            <p class="sec-text">
              If you have photos of Chantry Island that you would like to share with us, connect with our <a href="https://www.facebook.com/MarineHeritageSociety/" target="_blank" class="ul linkhov white">Facebook page.</a>
            </p>
    </div>
  </section>

  <section id="gallery">
	<div class="row">
 <div class="col-lg-12">
                <h1 class="text-center title5">Chantry Island Gallery</h1>
                <hr class="hr">
            	</div>

<div class="gal-container">
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#1">
           <img src="images/gallery1.jpg" alt="Thumb 1" class="img-responsive">
        </a>
        <div class="modal fade" id="1" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full1.jpg" alt="Full 1 1" class="img-responsive">
              </div>
                <div class="col-md-12 photographer">
                  <strong>Misc</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#2">
           <img src="images/gallery2.jpg" alt="Thumb 2" class="img-responsive">
        </a>
        <div class="modal fade" id="2" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full2.jpg" alt="Full 2" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: George Plant</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#3">
           <img src="images/gallery3.jpg" alt="Thumb 3" class="img-responsive">
        </a>
        <div class="modal fade" id="3" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
                 <img src="images/full3.jpg" alt="Full 3" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: James Swartz</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#4">
        <img src="images/gallery4.jpg" alt="Thumb 4" class="img-responsive">
        </a>
        <div class="modal fade" id="4" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
                 <img src="images/full4.jpg" alt="Full 4" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Karen Smith</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	<div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#5">
           <img src="images/gallery5.jpg" alt="Thumb 5" class="img-responsive">
        </a>
        <div class="modal fade" id="5" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full5.jpg" alt="Full 5" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Karen Smith</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#6">
           <img src="images/gallery6.jpg" alt="Thumb 6" class="img-responsive">
        </a>
        <div class="modal fade" id="6" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full6.jpg" alt="Full 6" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Nancy Calder</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#7">
           <img src="images/gallery7.jpg" alt="Thumb 7" class="img-responsive">
        </a>
        <div class="modal fade" id="7" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full7.jpg" alt="Full 7" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#8">
           <img src="images/gallery8.jpg" alt="Thumb 8" class="img-responsive">
        </a>
        <div class="modal fade" id="8" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full8.jpg" alt="Full 8" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#9">
           <img src="images/gallery9.jpg" alt="Thumb 9" class="img-responsive">
        </a>
        <div class="modal fade" id="9" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full9.jpg" alt="Full 9" class="img-responsive">
              </div>
              <div class="col-md-12 description">
                <strong>Photographer: Wayne MacDonald</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#10">
           <img src="images/gallery10.jpg" alt="Thumb 10" class="img-responsive">
        </a>
        <div class="modal fade" id="10" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full10.jpg" alt="Full 10" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#11">
           <img src="images/gallery11.jpg" alt="Thumb 11" class="img-responsive">
        </a>
        <div class="modal fade" id="11" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full11.jpg" alt="Full 11" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#12">
           <img src="images/gallery12.jpg" alt="Thumb 12" class="img-responsive">
        </a>
        <div class="modal fade" id="12" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full12.jpg" alt="Full 12" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#13">
           <img src="images/gallery13.jpg" alt="Thumb 13" class="img-responsive">
        </a>
        <div class="modal fade" id="13" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full13.jpg" alt="Full 13" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#14">
           <img src="images/gallery14.jpg" alt="Thumb 14" class="img-responsive">
        </a>
        <div class="modal fade" id="14" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full14.jpg" alt="Full 14" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#15">
           <img src="images/gallery15.jpg" alt="Thumb 15" class="img-responsive">
        </a>
        <div class="modal fade" id="15" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full15.jpg" alt="Full 15" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#16">
           <img src="images/gallery16.jpg" alt="Thumb 16" class="img-responsive">
        </a>
        <div class="modal fade" id="16" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full16.jpg" alt="Full 16" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#17">
           <img src="images/gallery17.jpg" alt="Thumb 17" class="img-responsive">
        </a>
        <div class="modal fade" id="17" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full17.jpg" alt="Full 17" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Vicki Tomori</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#18">
           <img src="images/gallery18.jpg" alt="Thumb 18" class="img-responsive">
        </a>
        <div class="modal fade" id="18" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full18.jpg" alt="Full 18" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Nancy Calder</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#19">
           <img src="images/gallery19.jpg" alt="Thumb 19" class="img-responsive">
        </a>
        <div class="modal fade" id="19" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full19.jpg" alt="Full 19" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Nancy Calder</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    	 <div class="col-md-3 col-sm-4 col-xs-6 gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#20">
           <img src="images/gallery20.jpg" alt="Thumb 20" class="img-responsive">
        </a>
        <div class="modal fade" id="20" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full20.jpg" alt="Full 20" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Karen Smith</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="hidden-xs col-sm-4 hidden-md hidden-lg gal-item">
      <div>
        <a href="#" data-toggle="modal" data-target="#21">
           <img src="images/gallery21.jpg" alt="Thumb 21" class="img-responsive">
        </a>
        <div class="modal fade" id="21" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
              <div class="modal-body">
               <img src="images/full21.jpg" alt="Full 21" class="img-responsive">
              </div>
                <div class="col-md-12 description">
                  <strong>Photographer: Karen Smith</strong>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden-xs col-sm-4 hidden-md hidden-lg gal-item">
     <div>
       <a href="#" data-toggle="modal" data-target="#22">
          <img src="images/gallery22.jpg" alt="Thumb 22" class="img-responsive">
       </a>
       <div class="modal fade" id="22" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
             <div class="modal-body">
              <img src="images/full22.jpg" alt="Full 22" class="img-responsive">
             </div>
               <div class="col-md-12 description">
                 <strong>Photographer: Karen Smith</strong>
               </div>
           </div>
         </div>
       </div>
     </div>
    </div>

    <div class="hidden-xs col-sm-4 hidden-md hidden-lg gal-item">
     <div>
       <a href="#" data-toggle="modal" data-target="#23">
          <img src="images/gallery23.jpg" alt="Thumb 23" class="img-responsive">
       </a>
       <div class="modal fade" id="23" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
             <div class="modal-body">
              <img src="images/full23.jpg" alt="Full 23" class="img-responsive">
             </div>
               <div class="col-md-12 description">
                 <strong>Photographer: James Swartz</strong>
               </div>
           </div>
         </div>
       </div>
     </div>
    </div>

    <div class="hidden-xs col-sm-4 hidden-md hidden-lg gal-item">
     <div>
       <a href="#" data-toggle="modal" data-target="#24">
          <img src="images/gallery24.jpg" alt="Thumb 24" class="img-responsive">
       </a>
       <div class="modal fade" id="24" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
             <div class="modal-body">
              <img src="images/full24.jpg" alt="Full 24" class="img-responsive">
             </div>
               <div class="col-md-12 description">
                 <strong>Photographer: James Swartz</strong>
               </div>
           </div>
         </div>
       </div>
     </div>
    </div>

    <div class="hidden-xs col-sm-4 hidden-md hidden-lg gal-item">
     <div>
       <a href="#" data-toggle="modal" data-target="#25">
          <img src="images/gallery25.jpg" alt="Thumb 25" class="img-responsive">
       </a>
       <div class="modal fade" id="24" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <button type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close gi-1x" aria-hidden="true"></i></button>
             <div class="modal-body">
              <img src="images/full25.jpg" alt="Full 25" class="img-responsive">
             </div>
               <div class="col-md-12 description">
                 <strong>Photographer: James Swartz</strong>
               </div>
           </div>
         </div>
       </div>
     </div>
    </div>











    </div>
    </div>
</section>

<section class="row" id="volunteers">
      <div class="well container">
        <h2 class="content-header prim-text">Our Volunteers</h2>
    <table class="table table-responsive table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Title</th>
          <th>Date Posted</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>Don Nicholson</td>
          <td>Chairman</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Pat O'Connor</td>
          <td>Vice Chairman</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>John Rigby</td>
          <td>Treasurer</td>
          <td>2016-09-30</td>
        </tr>
        <tr>
          <td>Stan Young</td>
          <td>Secretary</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Rick Smith</td>
          <td>Past Chairman</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Ali Kelly</td>
          <td>N/A</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Jane Kramer</td>
          <td>N/A</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Vicki Tomori</td>
          <td>N/A</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Dan Holmes</td>
          <td>N/A</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Dave Wenn</td>
          <td>N/A</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>Ed Braun</td>
          <td>N/A</td>
          <td>2016-06-17</td>
        </tr>
        <tr>
          <td>John Willets</td>
          <td>N/A</td>
          <td>2016-09-30</td>
        </tr>
        <tr>
          <td>Peter Williamson</td>
          <td>Observor</td>
          <td>2016-09-30</td>
        </tr>
        <?php
            if(!is_string($getVols)){
                while($row = mysqli_fetch_array($getVols)){

                echo "<tr>";
                  echo  "<td>{$row['volunteer_name']}</td>";
                    echo "<td>{$row['volunteer_title']}</td>";
                    echo "<td>{$row['volunteer_date_started']}</td>";
                  echo "</tr>";

              }
              }else{
                echo "<p>{$getVols}</p>";
              }
        ?>
      </tbody>
      </table>
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
