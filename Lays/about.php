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
					<div class="col-sm-4">
						<div class="panel">
							<div class="panel-heading">
								<div class="panel-title">WHO WE ARE</div>
							</div>
							<div class="panel-body">
								<img src="images/about-img.jpg" alt="Item"/>
								<p>Lay's is the brand name for a number of potato chip varieties as well as the name of the company that founded the chip brand in the U.S. in 1932. Lay's has been owned by PepsiCo since 1965. Lay's is the company's primary brand with the exception of limited markets where other brands are utilized (Walkers in the United Kingdom and Ireland, Smith's in Australia, Chipsy[1] in Egypt, Poca in Vietnam, Tapuchips in Israel,[2] Margarita in Colombia, Sabritas in Mexico and, formerly, Hostess in Canada). It is also called Frito-Lay</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel">
							<div class="panel-heading">
								<div class="panel-title">OUR HISTORY</div>
							</div>
							<div class="panel-body">
								<p>
									<div style="color:#0000ff">1998-</div>
									<div>The company was founded in 1998, </div>
								</p>
								<p>
									<div style="color:#0000ff">2002-</div>
									<div>It became hugely expanding</div>
								</p>

							</div>
						</div>
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
	</body>
</html>