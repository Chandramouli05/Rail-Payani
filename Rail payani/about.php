<!DOCTYPE html>
<html>
<head>
	<title>Rail payani-booking</title>
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
	<link rel="stylesheet" href="css/style2.css">
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
 
 <br/>
 <br/>
 <br/>
 <br/>
		
About Rail Payani.<br/>
<br/>
What is this website? Who built it? <br/>

Why did you build it? <br/>
<br/>
What do you want to do with it? <br/>
<br/>
How YOU can help! <br/>
<br/>
What is this website? Who built it?<br/>
<br/>
I hope the "what" part is pretty self-explanatory. <br/>This website holds up to the minute statistics on all Regional Rail trains is running.This is actually storing the data, and serving up the reports. 

The front end consists of Slim PHP for request routing, Bootstrap for the UI, and CanvasJS for the graphing.<br/> The back end consists of Splunk for data storage and report generation and Redis for caching the results of longer running queries. The source code for all of this is up on GitHub. 

As for the "who", my name is Douglas Muth.<br/> I am a software egnineer who lives in Ardmore and takes Regional Rail into Center City for work.<br/> 

How to get in touch with me?<br/> Email works pretty well: doug.<br/>muth AT gmail DOT com and dmuth AT dmuth DOT org both work.<br/> You can also find me on Twitter and Facebook. 
Why did you build it?<br/>

One particular week, I noticed that the train I took home wasn't just late every day, but as I would refresh the status page, it kept getting later and later. As someone who runs a Splunk cluster professionally, I thought it would be nice if I could get a graph that shows how late that train is over time, and perhaps see if there is a bottleneck somewhere in SEPTA's system. That prompted me to build a MVP entirely in Splunk. That leads us to... 
What do you want to do with it?<br/>
First, I wanted to provide this as a public service to the other riders of  Regional Rail. <br/>I hope they find the train reports and station reports as useful as I did. 

<br/>Second, I am hoping to be able to share these analytics with  so that they can use them to build better train schedules, and better evaluate which trains arrive on time, and which trains need improvement. <br/>


<br/>It wouldn't be too difficult to expand on what's here to search for trains that are chronically late (candidates for having their schedule changed?) or to find "ripple effects" where one train being late impacts multiple other trains. 

I am also toying with the idea of tracking weather conditions (rainfall, temperate, and wind) integrating them with some of the train lateness graphs to look for correlations. <br/>This could be used to predict the overall lateness of trains and aid with future planning efforts. 
<br/>How YOU can help!<br/>
I'll be blunt--I'm decent at back-end systems engineering, but when it comes to front-end and UI/UX... I'm a little out of my league there. <br/>If you're a designer, UX specialist, or have other front-end experience, please drop me a line. <br/>I'd love some guidance on the front end and layout of this site from someone who knows these things better than I. :-) 

Data scientists, I'd love to hear from you too! I have train data going back several months, and I'm sure that someone smarter than me can come up with some neat graphs to generate from it. <br/>Just hit me up, and I'll be happy to provide it. <br/>
<br/>

- mini project done by<br/>
<br/>
Devil Linux<br/>
<br/>
1. S.Chandramouli<br/>
<br/>
2.K.Sivakumar<br/>
<br/>
3.E.Lawrence Neopolean<br/>
<br/>



</b></a>
</div>
</body>
</html>