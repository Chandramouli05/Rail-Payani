<html>
	<head>
		<title>Rail Payani-sign up</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar">
			<div class="left">
				<img src="logo.png">
			</div>
			
		<h1><center>Rail Payani</center></h1>
	</div>
	
	<div class="form-box">
	<h1><center>Sign-Up</center></h1>
		<form action="" method="POST">			
			<a><b>Mail-ID:</b></a><br>
			<br>
			<input type="e-mail" name="username" placeholder="Enter your mail address"  class="input"><br>
			
			
			<a><b>Password:</b></a><br>
			<br>
			<input type="password" name="password" placeholder="Enter the new password"  class="input"><br>
		
			
			
			
			<input type="submit" name="Submit" value="Sign-up" class="button">
		</form>
	</div>


		
	</body>
	
</html>


<?php
	include('connect.php');
	if($_POST['Submit']){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$conn->query("INSERT INTO `users`(`username`,`password`) VALUES('$username','$password')");
	}


?>