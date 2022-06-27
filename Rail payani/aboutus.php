<!DOCTYPE html>
<html>
<head>
	<title>Rail payani-booking</title>
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
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


<a><b>
 
 
		
About SEPTA Stats
What is this website? Who built it? 
Why did you build it? 
What do you want to do with it? 
How YOU can help! 
What is this website? Who built it?
I hope the "what" part is pretty self-explanatory. This website holds up to the minute statistics on all Regional Rail trains that SEPTA is running. This is accomplished through a Splunk instance downloading data from SEPTA's API, storing the data, and serving up the reports. 

The front end consists of Slim PHP for request routing, Bootstrap for the UI, and CanvasJS for the graphing. The back end consists of Splunk for data storage and report generation and Redis for caching the results of longer running queries. The source code for all of this is up on GitHub. 

As for the "who", my name is Douglas Muth. I am a software egnineer who lives in Ardmore and takes Regional Rail into Center City for work. 

How to get in touch with me? Email works pretty well: doug.muth AT gmail DOT com and dmuth AT dmuth DOT org both work. You can also find me on Twitter and Facebook. 
Why did you build it?
One particular week, I noticed that the train I took home wasn't just late every day, but as I would refresh the status page, it kept getting later and later. As someone who runs a Splunk cluster professionally, I thought it would be nice if I could get a graph that shows how late that train is over time, and perhaps see if there is a bottleneck somewhere in SEPTA's system. That prompted me to build a MVP entirely in Splunk. That leads us to... 
What do you want to do with it?
First, I wanted to provide this as a public service to the other riders of SEPTA Regional Rail. I hope they find the train reports and station reports as useful as I did. 

Second, I am hoping to be able to share these analytics with SEPTA so that they can use them to build better train schedules, and better evaluate which trains arrive on time, and which trains need improvement. 

It wouldn't be too difficult to expand on what's here to search for trains that are chronically late (candidates for having their schedule changed?) or to find "ripple effects" where one train being late impacts multiple other trains. 

I am also toying with the idea of tracking weather conditions (rainfall, temperate, and wind) integrating them with some of the train lateness graphs to look for correlations. This could be used to predict the overall lateness of trains and aid with future planning efforts. 
How YOU can help!
I'll be blunt--I'm decent at back-end systems engineering, but when it comes to front-end and UI/UX... I'm a little out of my league there. If you're a designer, UX specialist, or have other front-end experience, please drop me a line. I'd love some guidance on the front end and layout of this site from someone who knows these things better than I. :-) 

Data scientists, I'd love to hear from you too! I have train data going back several months, and I'm sure that someone smarter than me can come up with some neat graphs to generate from it. Just hit me up, and I'll be happy to provide it. 



AddThis Sharing Sidebar
Share to Facebook

Share to Twitter

Share to Print

Share to Email


More AddThis Share options
















</b></a>






</div>
