<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("admin/phpscripts/init.php");

	$ip = $_SERVER["REMOTE_ADDR"];

	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$enteredpass = trim($_POST['password']);
		if($username != "" && $enteredpass != "") {
			$result = logIn($username, $enteredpass, $ip);
			$message = $result;
		}else{
			$message = "<p style='color:red; text-align: center;'>*Please Fill Out All Required Fields*</p>";
		}
	}


?>
<!doctype html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<title>Chantry Island - Admin Login</title>
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
		 <h1 class="content-header sec-text">Content Management System</h1>
			 <hr class="small sec-text" id="society-hr">
	 </div>
 </section>

<div class="container" id="adminLogin">

	<section class="whitebox admin" id="loginSection">
	<h1>Admin Login</h1>
    <?php if(!empty($message)){echo $message;} ?>
	<form id="login" action="admin_login.php" method="post">
    	<label>Username:</label>
    	<input class="box" type="text" name="username" value="" placeholder="Enter Your Username">
    	<label >Password:</label>
    	<input class="box" type="password" name="password" value="" placeholder="Enter Your Password">
    	<input type="submit" class="btn submit" id="loginbut" name="submit" value="LOGIN">
    </form>
    </section>

 </div>

 <footer>
      <?php
        include('footer.php');
        ?>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
