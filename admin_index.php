<?php
	require_once("admin/phpscripts/init.php");
	//confirm_logged_in();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>MHS Admin Panel</title>
</head>
<body>
	   <header>
      <?php
        include('nav.php');
        ?>
 </header>

 <section class="row top-container">
 	<div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 container">
 		<div class="container center logo-con"><img src="images/MHS_logo.png" id="MHSlogoMobile" alt="Marine Heritage Foundation Logo"></div>
 		<h1 class="content-header sec-text">MHS Admin Panel</h1>
 			<hr class="small sec-text" id="society-hr">
 	</div>
 </section>


<div class="container" id="admin_index">

	<section id="adminIndex" class="whitebox admin">
		<div id="phpGreeting">
	<span id="greeting">Welcome </span><span id="php"><?php echo $_SESSION['user_name']; ?>!</span><br><br>

    <p class="inline"><strong>The current date is:</strong> <?php $date = date('Y-m-d');	$time = time('h'); echo $date;?></p>

    <p class="inline"><strong> Your last session was:</strong> <?php echo $_SESSION['user_lastlogin']; ?> </p>
</div>
    <h1>What would you like to do?</h1>

		<div id="adminButtons">
		<ul id="adminOptions">
		  <li><a class="linkhover" href="admin_createuser.php">Create User</a></li>
		    <li><a class="linkhover" href="admin_edituser.php">Edit User</a></li>
		  <li><a class="linkhover" href="admin/admin_editabout.php">Edit About Page Text</a></li>
			<li><a class="linkhover" href="admin/admin_editrest.php">Edit Restoration Page Text</a></li><span class="hidden-xs hidden-sm"><br><br><br></span>
			 <li><a class="linkhover" href="admin/admin_editnews.php">Update News Table</a></li>
			  <li><a class="linkhover" href="admin/admin_editevents.php">Add An Event</a></li>
				<li><a class="linkhover" href="admin/admin_editsched.php">Update Schedule</a></li>
				  <li><a class="linkhover" href="admin/admin_addphotos.php">Add Gallery Photos</a></li>
					<li><a class="linkhover" href="admin/admin_addVolunteer.php">Add A Volunteer</a></li>
		</ul>
	</div>
   </section>
</div>

    <div class="btn btn-custom ul text-center"><a href="admin_login.php">Log Out</a></div>
<br>

      <?php
        include('footer.php');
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
