<?php
	
	session_start();
	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	}
	
?>






<!DOCTYPE html>
<html>
<head>
	<title>Rail payani-Home</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	<link rel="stylesheet" href="3dflip.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar">
			<div class="left">
			
			</div>
			
			<div class="right">
					<a href="logout.php">Log-Out</a>
			</div>
					<h1><center>Rail Payani</center></h1>
		
		</div>















	<div class="container">
	<div class="item">
		<div class="front">
				<i class="fa fa-home" aria-hidden="true">
					
				</i>
			</div>
		<div class="back">
				<a href="index.php">Home</a>
			</div>
		</div>
	<div class="item">
		<div class="front">
				<i class="fa fa-ticket" aria-hidden="true">
					
				</i>
			</div>
		<div class="back">
				<a href="book.php">Ticket Booking</a>
			</div>
		</div>
	<div class="item">
		<div class="front">
				<i class="fa fa-calendar" aria-hidden="true">
					
				</i>
			</div>
		<div class="back">
				<a href="schedule.php">Train Schedule</a>
			</div>
		</div>
	<div class="item">
		<div class="front">
				<i class="fa fa-comments-o" aria-hidden="true">
					
				</i>
			</div>
		<div class="back">
				<a href="feedback.php">Feedback</a>
			</div>
		</div>
	<div class="item">
		<div class="front">
				<i class="fa fa-user" aria-hidden="true">
					
				</i>
			</div>
		<div class="back">
				<a href="about.php">About Us</a>
			</div>
		</div>
	</div>

<center>
		
			
	<div id="footer"><center><big><b>
COPYRIGHTS	&copy; 2020|DESIGNED BY MOULI TECHNOLOGIES PVT LTD.
</big></b></center></div>
	</body>
	</html>