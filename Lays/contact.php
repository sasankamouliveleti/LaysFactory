<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-before-login.php"); ?>
			<div class="row" style="margin-top:80px;">
				<div class="container text-justify">
					<div class="col-lg-10">
						<h2>LIVE SUPPORT</h2>
						<h4>24 hours | 7 days a week | 365 days a year    </h4>
						<p>The chips made here are very much delicious</p>
					</div>
					<div class="col-lg-2">
						<center><img src="images/contact.png" alt="Contact Us"/></center>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-lg-8" style="margin-bottom:10px;">
						<h2>CONTACT US</h2>
						<form role="form" action="contact_script.php" method="POST">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" required = "true">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input class="form-control" name="e-mail" required = "true">
								<?php echo $_GET['m1'];?>
							</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="5" name="message" required = "true"></textarea>
							</div>
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-lg-4">
						<h2>Company Information :</h2>

						<p>16-9-77/201,Old Malakpet,Hyderabad</p>
						<p>India</p>

						<p>Email: chips@gmail.com</p>
						<p>Follow on: Facebook, Twitter<p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-123-000000</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("modal.php"); ?>
		</div>
	</body>
</html>