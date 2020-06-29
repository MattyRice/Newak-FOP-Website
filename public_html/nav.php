<?php
if (!defined('MyConst')) {
	die('Direct access not permitted');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>
	<!-- Header -->
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<div class="row">
				<div class="col-sm-5 col-md-5 pull-left"><img class="img-fluid" style="max-width: 80px;" src="images/FOP.jpg" alt="NJFOP Graphic" usemap="#Map" class="img-responsive">
					<div class="col-sm-7 col-md-7 pull-right">
						<div class="seek" style="padding-right:5px;padding-top:2px;">
							<div class="input-group" style="width: 50%;">
								<input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
								<span class="input-group-append">
									<div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="aboutus.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Meet the Team</a>
								<a class="dropdown-item" href="#">Gallery</a>
							</div>
						<li class="nav-item">
							<a class="nav-link" href="events.php">Events</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="donate.php">Donate</a>
						</li>

					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
				</div>
				</li>
				</ul>
			</div>
		</nav>
	</div>
	</div>
</body>

</html>