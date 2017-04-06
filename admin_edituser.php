<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("admin/phpscripts/init.php");
	confirm_logged_in();

   $id = $_SESSION['user_id'];
    $populate = getUser($id);



	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		$result = editUser($fname, $lname, $username, $email, $password, $id);
		$message = $result;
		}



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
	<title>Edit User</title>
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
		<h1 class="content-header sec-text">Edit Admin Account</h1>
			<hr class="small sec-text" id="society-hr">
	</div>
	</section>

<div class="container" id="admin_edituser">

<section class="whitebox admin" id="adminEditUser">

<h1>Edit User</h1>

<div class="formsection">

<h2 class="hidden">Please fill out the fields below.</h2>

<?php if(!empty($message)){echo $message;} ?>


<form action ="admin_edituser.php" method="post" id="adminEdit">

<label>First Name:</label><br>
<input type="text" name="fname" value="<?php echo $populate['user_fname'];?>"><br><br>
<label>Last Name:</label><br>
<input name="lname" type="text" value="<?php echo $populate['user_lname'];?>"><br><br>


<label>Username:</label><br>
<input name="username" type="text" value="<?php echo $populate['user_name'];?>"><br><br>
<label>Email:</label><br>
<input name="email" type="text" value="<?php echo $populate['user_email'];?>"><br><br>


<label>Password:</label><br>
<input name="password" type="text" value="<?php echo $populate['user_hash'];?>">


<input class="btn btn-custom submit" type="submit" name="submit" value="Edit User">

</form>
</div>
</section>
<div class="text-center"><a class="ul white linkhover" href="admin_index.php">Back to Admin Panel</a></div><br>
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
</html>
