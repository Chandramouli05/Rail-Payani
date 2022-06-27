<html>
	<head>
		<title>Rail Payani-Schedule</title>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
		<script src="schedule.js"></script>
		<link href="css/style1.css" rel="stylesheet">
	</head>
	<body>
	<div class="navbar">
			<div class="left">
			
			</div>
			
			<div class="right">
					<a href="index.php">Home</a>
					
					<a href="book.php">Ticket Booking</a>
					
					<a href="schedule.php">Train Schedule</a>
					
					<a href="about.php">About Us</a>
					
					<a href="feedback.php">Feedback</a>

					<a href="logout.php">Log-Out</a>
			</div>
					<h1><center>Rail Payani</center></h1>
		
		</div>
		
		<div class="container">
		
          <input type="button" onclick="retrieveData('All Trains');" value="List all trains" class="button"><br/>
		  <br/>
		  <br/>
          <input type="button" onclick="retrieveData('All Stations');" value="List all stations" class="button"><br/>
		  <br/>
		  <br/>
          <input type="button" onclick="retrieveData('Summary Stats');" value="Show Summary Stats" class="button"><br/>
		  <br/>
		  <br/>
          <input type="button" onclick="retrieveData('View Details');" value="See Train Details (Train #200)" class="button">
		  
		  
        <div id="data-display">
		
		
        </div>
		
		
		
		
		
		
		
		
		
		</div>

			
	
	
	
	

		
	</body>
	
</html>
