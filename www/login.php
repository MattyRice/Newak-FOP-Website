<?php
	session_start();

	define('MyConst', TRUE);

	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
	    $session = $_SESSION["user_id"];

	    include('databaselogin.php');

	    $conn = mysqli_connect($servername, $db_user, $db_pass, $database);

	    if(!$conn) {
	    	die("Connection failed" . mysqli_connect_error());
	    }

	    $query = "SELECT * FROM logins WHERE session = '$session'";

	    $data = mysqli_query($conn, $query);

	    if(!$data) {
	    	$status_err = "Failed to connect";
	    } else {
	    	$rows = mysqli_fetch_assoc($data);
	      
		    if($rows >= 1) {
		    	if($rows['officer'] == 1) {
		    		header('Location: police.php');
		    	} else {
		    		header('Location: memberpage.php');
		    	}
			}
		}
	} else {
		require('nav.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Newark FOP Login</title>
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>

	<div class="banner">
		<img class="banner-image" src="fopbanner.jpg">

	</div>


<div class="login">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <div class="main_container">
<h1 class= "login-header">
	<center>MEMBER LOGIN</center></h1>

  </div>

  <?php
		$username = $password = $session = $wrong = $status_err = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = test_input($_POST["username"]);
			$password = $_POST["password"];
			$pass = md5($password);

			include('databaselogin.php');

			$conn = mysqli_connect($servername, $db_user, $db_pass, $database);

			if(!$conn) {
				die("Connection failed" . mysqli_connect_error());
			}

			$query = "SELECT * FROM logins WHERE username = '$username'";

			$data = mysqli_query($conn, $query);

			if(!$data) {
				$status_err = "Failed to connect";
			} else {
				$rows = mysqli_fetch_assoc($data);
				
				if($rows >= 1) {
					if ($pass == $rows['password']) {
					    $session = $_SESSION["user_id"] = session_id();

						$update_query = "UPDATE logins SET session = '$session' WHERE username = '$username'";

						$data2 = mysqli_query($conn, $update_query);

						if(!$data2) {
							$status_err = "Failed to connect";
						} else {
							if ($rows['officer'] == 1) {
								header("Location: police.php");
							} else {
								header("Location: memberpage.php");
							}
						}
					} else {
						$wrong = "Incorrect username or password";
					}
				}
			}

			mysqli_close($conn);
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
  
  <div class="login-form">
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    <label for="username"><h3>USERNAME:</h3></label>
	    <input type="text" id="username" name="username" placeholder="Username"/><br>

	    <label for="password"><h3>PASSWORD:</h3></label>
	    <input type="password" id="password" name="password" placeholder="Password"/><br>

	    <input type="submit" value="Login" class="login-button"/><br>
	    <span class="error"><i><?php echo $wrong;?></i></span>
	    <br>
	    <a href="signup.php" class="sign-up">SIGN UP!</a>
	    <br>
	    <a href="forgot.php" class="no-access">FORGOT USERNAME OR PASSWORD?</a>
	</form>
  </div>
</div>
<center>
	<img src="FOP.jpg" alt="center image" height="200" width="200">
</center>
<!-- Footer -->
<div class="footer">
	<div class="footer-image">
		<img class="seniorprojectlogo" src="seniorprojectlogo.png">
	</div>
	<div class="footer-bottom">
		Copyright &copy; 2020, All Rights Reserved.<br> Rutgers Newark Computer Science
	</div>
</div>
	<!-- /Footer -->
</body>
</html>