<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

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
	<title>Edit Tour Schedule</title>
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
		<h1 class="content-header sec-text">Update Tour Schedule</h1>
			<hr class="small sec-text" id="society-hr">
	</div>
	</section>

	<div class="container" id="admin_editsched">

  <section class="whitebox admin" id="editsched">

<h1>Update Schedule and Rates</h1>
<p>Select a month or option to update:</p><span class="hidden-xs hidden-sm"><br></span>


<div id="schedButtons">
<ul id="schedOptions">
	<li><a class="linkhover" href="editmay.php">May</a></li>
		<li><a class="linkhover" href="editjune.php">June</a></li>
	<li><a class="linkhover" href="editjuly.php">July</a></li>
	<li><a class="linkhover" href="editaugust.php">August</a></li>
	 <li><a class="linkhover" href="editseptember.php">September</a></li><span class="hidden-xs hidden-sm"><br><br><br></span>
		<li><a class="linkhover" href="editTBO.php">Tour Base Spring Hours</a></li>
		<li><a class="linkhover" href="editTBO2.php">Tour Base Summer Hours</a></li>
			<li><a class="linkhover" href="editTourinfo.php">Update Tour Information</a></li>
</ul>
</div>



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
