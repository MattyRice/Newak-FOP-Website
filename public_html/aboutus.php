<?php
session_start();

define('MyConst', TRUE);

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $session = $_SESSION["user_id"];

    include('databaselogin.php');

    $conn = mysqli_connect($servername, $db_user, $db_pass, $database);

    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }

    $query = "SELECT * FROM logins WHERE session = '$session'";

    $data = mysqli_query($conn, $query);

    if (!$data) {
        $status_err = "Failed to connect";
    } else {
        $rows = mysqli_fetch_assoc($data);

        if ($rows >= 1) {
            if ($rows['officer'] == 1) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newark FOP About Us</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>



    <div class="container">
        <div class="jumbotron jumbotron-fluid" id="hero">
            <!-- you can also add something like style="min-height: 70vh;" to the div above -->
            <div class="container">
                <h1 class="display-4">About Us</h1>
                <p class="lead"> The Newark Fraternal Order of Police Lodge #12 is an active Union office that represents about 850 active police officers and over 700 retirees. We protect our officers rights in incidents where an officer has taken a legal action while on or off duty. We negotiate for their benefits, salaries and work schedules.
                    Along with just being an active lodge. We also have great support from within our communities that become associate members and show their support for our law enforcement community.
                    With their support we donate to various organizations.</p>
            </div>
        </div>
    </div>

    <div class="seal"><img src="seal.png" class="logo1"><img src="logo.png" class="pol"><img src="plogo.png"></div>

    <!-- </div> -->

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <h2>
        <center>MEET THE TEAM</center>
    </h2>


    <div class="team_img">
        <div class="mem">
            <center>President</center>
            <img src="pres.jpg">
            <div class="contact">
                James Stewart Jr.
                <br>
                <A HREF="mailto:stewee68@comcast.net ">stewee68@comcast.net</A>
                <br>
                732-991-0689
            </div>
        </div>
        <div class="mem">
            <center>Vice President</center>
            <img src="vp.jpg">
            <div class="contact">
                Walter Melvin
                <br>
                <A HREF="mailto:wal6425@aol.com "> wal6425@aol.com </A>
                <br>
                973-642-0390
            </div>
        </div>
        <div class="mem">
            <center>Treasurer</center>
            <img src="tres.jpg">
            <div class="contact">
                Ariel Cortez
                <br>
                <A HREF="mailto:acortez@newarkfop.com  "> acortez@newarkfop.com </A>
                <br>
                973-642-0390
            </div>
        </div>
        <div class="mem">
            <center>Secretary</center>
            <img src="sec.jpg">
            <div class="contact">
                Daniel P. Eames
                <br>
                <A HREF="mailto: nwrkfop@aol.com  "> nwrkfop@aol.com </A>
                <br>
                973-642-0390
            </div>
        </div>
        <div class="mem">
            <center>Office Manager</center>
            <img src="om.jpg">
            <div class="contact">
                Robert D'Angelo
                <br>
                <A HREF="mailto: nwrkfop@aol.com  "> nwrkfop@aol.com </A>
                <br>
                973-642-0390
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>


    </div>
    <br>
    <br>

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <h2>
        <center>NEWARK F.O.P GALLERY</center>
    </h2>

    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item">

            <li class="im">
                <img src="IMG_1863.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1864.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1865.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1866.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1867.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1868.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1869.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1870.jpg" />
            </li>
        </div>


        <div class="item">
            <li class="im">
                <img src="IMG_1871.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1872.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1873.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1874.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1875.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1876.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1877.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1879.jpg" />
            </li>
        </div>

        <div class="item">
            <li class="im">
                <img src="IMG_1881.jpg" />
            </li>
        </div>



    </div>


    </div>

    <div class="footer">
        <div class="footer-image">
            <img class="seniorprojectlogo" src="seniorprojectlogo.png">
        </div>
        <div class="footer-bottom">
            Copyright &copy; 2020, All Rights Reserved.<br> Rutgers Newark Computer Science
        </div>
    </div>

</body>

</html>