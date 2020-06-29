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
            require('policenav.php');
          } else {
            require('membernav.php');
          }
      }
    }
  } else {
    require('nav.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Newark FOP Donate</title>
  <link rel="stylesheet" type="text/css" href="donatestyle.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="banner">
		<img class="banner-image" src="fopbanner.jpg">
	</div>

<div class="box">
    <div class="auto-slider">
      <ul class ="auto-slider_content">
        <li><img src="newarkpoliceresize.jpg" alt="Picture 1"></li>
        <li><img src="newarkpolice2resize.jpg" alt="Picture 2"></li>
        <li><img src="newarkpolice3resize.jpg" alt="Picture 3"></li>
      </ul>
    </div>
    <div class="text">
      <div class="heading">DONATE</div>
      <p>Your donations to our lodge will enable <br>us to continue
        to serve the officers<br> and the community in which we serve.</p>
        <p>Any amount is greatly appreciated.<br> The Newark Fraternal Order of Police<br> and its members thank you<br> for your continued support.</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick" />
          <input type="hidden" name="hosted_button_id" value="B3R7ELF3XXBSC" />
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button"  />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>
    </div>
</div>
  
</body>
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

</html>
