<!DOCTYPE html>
<html>
<head>
	<title>Rail payani-booking</title>
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	<link rel="stylesheet" href="css/style1.css">
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



<div id="container">
<center>
	<br/>
	<br/><a><b><big>Feedback form</big></b></a>
	<br/>
	<br/>
	<br/>
	
	<form action="feedback.php" method="post">
	<table>
			<tr>
				<td>
				<div style="color:black; padding:40px; padding-left:10px;">
				<a><b>Name:</a></b>
				</td>
				
				<td>
				
				<input type="text" class="form-box" placeholder="enter name" id="name" name="name">	
				</td>
			</tr>
			
			
			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>Designation:</a></b>
				</td>
				
				<td>
				<input type="text" class="form-box" placeholder="Enter designation" id="designation" name="designation">
				</td>
				
			</tr>	
			
			
			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>Street:</a></b>
				</td>
				
				<td>
				<input type="text" class="form-box"  placeholder="Enter your street" id="street" name="street">
				</td>
				
			</tr>	
			
			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>City:</a></b>
				</td>
				
				<td>
				<input type="text" class="form-box" placeholder="Enter your city" id="city" name="city">
				</td>
				
			</tr>	
			
			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>State:</a></b>
				</td>
				
				<td>
				<input type="text" class="form-box"  placeholder="Enter your state" id="state" name="state">
				</td>
				
			</tr>	
			
			
			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>PinCode:</a></b>
				</td>
				
				<td>
				<input type="text" class="form-box" placeholder="Enter the pincode" id="pincode" name="pincode">
				</td>
				
			</tr>

			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>Phone No:</a></b>
				</td>
				
				<td>
				<input type="text" id="phoneno" placeholder="Enter your valid Number" class="form-box" name="phoneno">
				</td>
				
			</tr>	
			
				<tr>
				<td>
				<div  style="color:black; padding:20px;padding-left:10px;">
				<a><b>Email-ID::</a></b>
				</td>
				
				<td>
				<input type="text" class="form-box"  placeholder="Enter your Email-ID" id="emailid" name="emailid">
				</td>
				
			</tr>	
				
			
			
			<tr>
				<td>
				<div style="color:black; padding:20px;padding-left:10px;">
				<a><b>Feedback:</a></b>
				</td>
				
				<td>
				<input type="text" id="feedback"   placeholder="Enter your feedback" class="form-box" name="feedback">
				</td>
				
			</tr>	
				
			
			
			<tr>
				
				<td style="padding:40px;">
					<input type="Submit" value="Submit" class="button" name=""> <td style="padding-right:40px;"><input type="Submit" class="button" value="Reset" name="">
					
				</td>

				
			</tr>
			
			
	</table>
</form>

</center>





</div>
</body>
</html>