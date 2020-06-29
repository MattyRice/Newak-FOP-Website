<?php
	if(!defined('MyConst')) {
	   die('Direct access not permitted');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<!-- Navigation Bar -->
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<div class="whiteBlueBG">
				<div class="row">
					<div class="col-sm-5 col-md-5"><img class="img-fluid" style="max-width: 80px;" src="images/FOP.jpg" alt="NJFOP Graphic" usemap="#Map" class="img-responsive">
						<map name="Map">
							<area shape="rect" coords="4,3,49,47" href="https://www.nj.gov" target="_blank" alt="State of New Jersey Web site">
							<area shape="rect" coords="55,3,181,16" href="https://www.nj.gov" target="_blank" alt="State of New Jersey Web site">
							<area shape="rect" coords="53,17,329,50" href="https://www.nj.gov/oag" target="_blank" alt="New Jersey Office of the Attorney General Web site">
						</map>
						<a href="index.shtml" title="New Jersey State Police Home Page"><img src="images/header-njsp-left.png" alt="New Jersey State Police Web site" class="img-responsive"></a> </div>
					<div class="col-sm-7 col-md-7 pull-right">
						<div class="seek" style="padding-right:5px;padding-top:2px;">
							<div class="input-group" style="width: 50%;">
								<input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
								<span class="input-group-append">
									<div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
								</span>
							</div>
							<div class="oagLogo"><a href="https://www.nj.gov/oag" target="_blank"><img src="images/oag-logo-right1.png" alt="New Jersey Office of the Attorney General Web site" class="img-responsive"></a></div>
							<!--OAG Logo-->
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<div class="container-fluid">
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
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Member Name
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
									<a class="dropdown-item" href="memberpage.php" style="">Member Page</a>
									<a class="dropdown-item" href="reset.php" style="padding-left: 24px;">Change Password</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="logout.php" style="">Log Out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
</body>
</html>