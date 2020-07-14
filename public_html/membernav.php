<?php
if (!defined('MyConst')) {
	die('Direct access not permitted');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="home.php">
				<img src="images/logo.png" width="50" height="50" alt="NewarkFOPLogo">
			</a>

			<div class="navbar-header navbar-header-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-left">
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="aboutus.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="events.php">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="donate.php">Donate</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Member Name
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
							<a class="dropdown-item" href="memberpage.php" id="memName"></a>
							<a class="dropdown-item" href="reset.php" style="padding-left: 24px;">Change Password</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="logout.php" style="">Log Out</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

</body>

</html>