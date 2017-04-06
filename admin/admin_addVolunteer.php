<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
		confirm_logged_in();

	$tbl = 'tbl_volunteers';
	$catQuery = getAll($tbl);


	if(isset($_POST['submit'])) {

	$volunteer_name = $_POST['volunteer_name'];
	$volunteer_title = $_POST['volunteer_title'];
	$volunteer_date_started = $_POST['volunteer_date_started'];


	$uploadVols = addVol($volunteer_name,$volunteer_title,$volunteer_date_started);
	$message = $uploadVols;
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
	<title>Add Volunteers</title>
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
		<h1 class="content-header sec-text">Update Volunteer List</h1>
			<hr class="small sec-text" id="society-hr">
	</div>
	</section>

	<div class="container" id="admin_editvols">

  <section class="whitebox admin" id="editvols">

<h1>Add A Volunteer:</h1><br>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addVolunteer.php" method="post" enctype="multipart/form-data">
<label>Volunteer Name:</label><br>
<input type="text" name="volunteer_name" value="" size="32"><br><br>
<label>Volunteer Title:</label><br>
<input type="text" name="volunteer_title" value="" size="32"><br><br>
<label>Date Started:</label><br>
<input type="text" name="volunteer_date_started" value="" size="32"><br><br>


<input class="btn btn-custom submit" type="submit" name="submit" value="Add Volunteer">
</form>
<br><a href="../admin_index.php" class="ul linkhover text-center">Back to Admin Panel</a>
</section>
</div>


      <?php
        include('../adminFooter.php');
        ?>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="../js/bootstrap/bootstrap.min.js"></script>
				<script src="../js/main.js"></script>

</body>
</html>
