<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="quiz.css">
	<title>Safety Complete</title>
</head>
<body>

	<div id="topbar">
		<div id="quote">"The Best Training In Car Rental!"</div>
	</div>
	
	<div id="titlebar">
		<img src="../ezlogo.png" id="logo">
	</div>

	<div class="wrapper">

		<?php
		// Create connection
		$con=mysqli_connect("10.23.16.194:3306","root","0nth3r0cks","training");

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL database: " . mysqli_connect_error();
		}

		$date = date("m/d/y");

		//form variables
		$id = mysqli_real_escape_string($con, $_POST['employeeID']);
		$firstname = mysqli_real_escape_string($con, $_POST['firstName']);
		$firstname = strtoupper ($firstname);
		$lastname = mysqli_real_escape_string($con, $_POST['lastName']);
		$lastname = strtoupper($lastname);
		$location = mysqli_real_escape_string($con, $_POST['location']);
		$language = mysqli_real_escape_string($con, $_POST['language']);


		
			//add record to database
			$sql="INSERT INTO safety_ack (employeeID, firstname, lastname, date, location)
			VALUES ('$id', '$firstname', '$lastname', '$date', '$location')";

			if (!mysqli_query($con,$sql)) {
			  die('Error: ' . mysqli_error($con));
			}
			else{
			echo "
			<div class=\"question\" style=\"width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878; background-image: url('../resources/certificateBG.png'); background-color: #ffffff; background-size: 100%;\">
				<div style=\width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878; background-color: #ffffff;\"><br><br><br>
				   <span style=\"font-size:50px; font-weight:bold\">Certificate of Completion</span>
				   <br><br>
				   <span style=\"font-size:25px\"><i>This is to certify that</i></span>
				   <br><br>
				   <span style=\"font-size:30px; text-decoration: underline;\"><b>" . $firstname . " " . $lastname . "</b></span><br/><br/>
				   <span style=\"font-size:25px\"><i>has completed the</i></span> <br/><br/>
				   <span style=\"font-size:45px\">Safety Training</span><br/><br/>
				   <span style=\"font-size:25px; text-decoration: underline;\"><i>Signed: Donerys Cuevas</i></span><br>
				   <span style=\"font-size:15px\"><i>Training and Sales Manager</i></span><br>
				   <span style=\"font-size:px\"><i>dated</i> " . $date . "</span><br>
				</div>
			</div>
			<div style=\"color: #ffffff;\">A record of your achievement has been saved. There is no need to print this page.</div>
			<a href=\"http://intranet.ezrac.com/training/main.php\" style=\"margin-right: auto; margin-left: auto;\"><div class=\"button\" style=\"margin-right: auto; margin-left: auto;\">Back to the main page</div></a>";
		}
	


		mysqli_close($con);
		?>
	</div>
</body>
</html>