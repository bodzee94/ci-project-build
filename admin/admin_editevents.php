<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
		confirm_logged_in();

	$tbl = 'tbl_events';
	$catQuery = getAll($tbl);

	if(isset($_POST['submit'])) {

	$event_month = $_POST['event_month'];
		$event_day = $_POST['event_day'];
		$event_title = $_POST['event_title'];
			$event_details = $_POST['event_details'];


	$uploadEvent = addEvent($event_month,$event_day,$event_title,$event_details);
	$message = $uploadEvent;
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Edit Events Page</title>
	</head>
	<body>
		 <header>
			<?php
				include('../adminNav.php');
				?>
	</header>

	<section class="row top-container">
	<div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 container">
		<div class="container center logo-con"><img src="../images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
		<h1 class="content-header sec-text">Edit Events Page</h1>
			<hr class="small sec-text" id="society-hr">
	</div>
	</section>

	<div class="container" id="admin_editevents">

	<section class="whitebox admin" id="editevents">

	<h1 class="text-center">Add An Event:</h1>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_editevents.php" method="post" enctype="multipart/form-data" id="eventsForm">
<label>Event Month:</label><br>
<input type="text" name="event_month" value="" size="32"><br><br>
<label>Event Day:</label><br>
<input type="text" name="event_day" value="" size="32"><br><br>
<label>Event Title:</label><br>
<input type="text" name="event_title" value="" size="32"><br><br>
<label>Event Details:</label><br>
<input type="text" name="event_details" value="" size="32"><br><br>

<input class="btn btn-custom submit" type="submit" name="submit" value="Add Event">
</form>

<br>
</section>
<div class="text-center"><a href="../admin_index.php" class="linkhover ul white">Back to Panel</a></div><br>
</div>

<?php
	include('../adminFooter.php');
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>
