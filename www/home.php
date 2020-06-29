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
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Newark FOP Lodge #12</title>
		<link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
<!-- Banner -->
	<div class="banner">
		<img class="banner-image" src="fopbanner.jpg">
	</div>
<!-- /Banner -->


<!-- Services Logo -->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <div class="main_container">

	<div class="heading">SERVICES</div>

		<div align="center" class="services">
<!-- /Services Logo -->


			<!-- Important Links Box -->
			<div class="service1">
				<h1>Important Links</h1>
						<br>
						<hr>
					<div>
						<a href="http://npd.newarkpublicsafety.org/index.php" target="_blank">Newark Police Department</a>
						<hr>
						<a href="https://www.newarknj.gov/" target="_blank">City of Newark</a>
						<hr>
						<a href="https://www.nj.gov/treasury/pensions/pension-active-pers.shtml">New Jersey PERS</a>
						<hr>
						<a href="https://www.dol.gov/general/topic/labor-relations">US Dept. Of Labor</a>
						<hr>
						<a href="https://nleomf.org/">National Law Enforcement Officers Memorial</a>
						<hr>
					</div>
			</div>
			<!-- /Important Links Box -->


			<!-- Action Center Box -->
			<div class="service2">
				<h1>Action Center</h1>
					<br>
					<img class="foplogoimage" src="njfop1.jpg">
					<br>
					<a href="https://njfop.com/" target="_blank">New Jersey Fraternal Order of Police</a>
					<!-- 	<a href="New Jersey Fraternal Order of Police"><img class="tomimage" src="tomcop.jpg"></a> -->
					<!-- 	<p>We are the Newark Fratern
					al Order of Police Lodge #12</p> -->
					<img class="foplogoimage" src="foplogo.jpg">
					<br>
					<a href="https://www.fop.net/" target="_blank">National Fraternal Order of Police</a>
			</div>
			<!-- /Action Center Box -->


			<!-- Union Active Box -->
			<div class="service3">
				<h1>NJ FOP Announcements</h1>
				<!-- start sw-rss-feed code -->
				<script type="text/javascript">
				<!--
				rssfeed_url = new Array();
				rssfeed_url[0]="https://njfop.org/news/";  
				rssfeed_frame_width="300";
				rssfeed_frame_height="240";
				rssfeed_scroll="off";
				rssfeed_scroll_step="6";
				rssfeed_scroll_bar="on";
				rssfeed_target="_blank";
				rssfeed_font_size="12";
				rssfeed_font_face="";
				rssfeed_border="on";
				rssfeed_css_url="";
				rssfeed_title="off";
				rssfeed_title_name="";
				rssfeed_title_bgcolor="#3366ff";
				rssfeed_title_color="#fff";
				rssfeed_title_bgimage="";
				rssfeed_footer="off";
				rssfeed_footer_name="rss feed";
				rssfeed_footer_bgcolor="#fff";
				rssfeed_footer_color="#333";
				rssfeed_footer_bgimage="";
				rssfeed_item_title_length="50";
				rssfeed_item_title_color="#666";
				rssfeed_item_bgcolor="#fff";
				rssfeed_item_bgimage="";
				rssfeed_item_border_bottom="on";
				rssfeed_item_source_icon="off";
				rssfeed_item_date="off";
				rssfeed_item_description="on";
				rssfeed_item_description_length="120";
				rssfeed_item_description_color="#666";
				rssfeed_item_description_link_color="#333";
				rssfeed_item_description_tag="off";
				rssfeed_no_items="0";
				rssfeed_cache = "3bc9f3bd71410e1651cb9b07108836a8";
				//-->
				</script>
				<script type="text/javascript" src="https://feed.surfing-waves.com/js/rss-feed.js"></script>
				<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. -->
				<div style="color:#ccc;font-size:10px; text-align:right; width:275px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div>
				<!-- end sw-rss-feed code -->

			</div>
			<!-- /Union Active Box -->
		</div>



		<div class="below-services">

		</div>

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