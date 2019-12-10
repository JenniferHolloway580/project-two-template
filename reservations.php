<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Luce</title>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- meyer-reset is a special css library that overrides all the ugle default css styles that come with html5 -->
	
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- These semantic tags were added to help you get started but you are very welcome to delete any of them and do your own thing -->

	<header>
		<img src="images/luce-logo.png">
	</header>

	<img src="images/green-bar.png" class="green-bar">

	<title>Hamburgers!</title>
    <link rel="stylesheet" href="style.css">
    <header class="nav">
        <div class="icon">
            <div class="hamburger"></div>
        </div>
        <div class="menu-mobile">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="menu.html">Menu</a>
            <a href="hours-location.html">Hours-Location</a>
            <a href="reservations.html">Reservations</a>
        </div>          
    </header>
   
    <!--This is the nav bar for a desktop moniter-->

    <div id="nav">
	    <header class="desktop">
	        <div class="menu-desktop">
	        	<ul>
	            <li><a href="index.html">Home</a></li>
	            <li><a href="about.html">About</a></li>
	            <li><a href="menu.html">Menu</a></li>
	            <li><a href="hours-locations.html">Hours-Location</a></li>
	            <li><a href="reservations.html">Reservations</a></li>
	            </ul>
	        </div>
	    </header>
    </div>

	<!-- Main content here -->

	<div>
		<h2><span>Reservations</span><br><br>
		We take reservations for parties of 8 or more.<br>
		Please call the restaurant at <strong>503.236.7195<br></strong>
		If you are interested in a more catered-style meal for your party, please email info@luceportland.com.
		<br>Please note that we have an auto-gratuity policy of 18% for parties of 6 or more. Also, note that we are<br>
		only able to split or charge up to 4 checks or cards per table.<br>
		Thank you for your understanding</h2>
	</div>

	<img src="images/luce-image-1.png" style="width:75%; margin-top: 350px">


			<div id="content">
				<div class="column3">
					<p style="color:Green; text-align: left;"><strong>CONTACT US:</strong><br><br></p>
					<p style="color:Black; text-align: left;">2140 E Burnside Street<br><br>
					Portland Oregon 97214<br><br>
					503. 236. 7195<br><br>
					info@luceportland.com</p><br><br>
				</div>
				<div class="column3" style="background-color:white;">
					<div id="content2">
						<!--<p style="color:Green; text-align: left;"><strong>MAILING LIST</strong><br><br></p><p style="color:Black; text-align: left;">Your@email.com<br><br><strong>Sign up</strong></p>-->
						<div class="main">
						<div class="first">
						<h3>Sign up for our Newsletter here</h3>
						<form action="reservations.php" id="#form" method="post" name="#form">
						<!--<label>Name :</label>-->
						<input id="name" name="name" placeholder='Your Name' type='text'>
						<!--<label>Email :</label>-->
						<input id="email" name="email" placeholder='Valid Email Address' type='text'>
						<input id='btn' name="submit" type='submit' value='Submit'>
						<!---- Including PHP File Here ---->
						<?php
						include "include/redirect.php";
						?>
						</form>
						</div>
						</div>
					</div>
				</div>
			</div>

	
	<main>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="Stylesheet" href="file:///Users/serenityrose/Documents/GitHub/project-two-template/square1.min.js" type="text/css" />
	<script type="text/javascript" src="scripts/script.js"></script>  

	<!-- Main content here -->
	</main>
	<footer>
		<!-- footer content here -->
		<img id="checkered" src="images/checkered-pattern.png">
	</footer>
	<!-- link for jquery -->
</body>
</html>