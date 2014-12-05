<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="quiz.css">
	<title>Kiosk Exam</title>
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

	//form variables
		$id = mysqli_real_escape_string($con, $_POST['employeeID']);
		$firstname = mysqli_real_escape_string($con, $_POST['firstName']);
		$firstname = strtoupper ($firstname);
		$lastname = mysqli_real_escape_string($con, $_POST['lastName']);
		$lastname = strtoupper($lastname);
		$location = mysqli_real_escape_string($con, $_POST['location']);
		$language = mysqli_real_escape_string($con, $_POST['language']);
		$mgr = mysqli_real_escape_string($con, $_POST['mgr']);

	//get student answers from form
	$q1 = mysqli_real_escape_string($con, $_POST['q1']);
	$q2 = mysqli_real_escape_string($con, $_POST['q2']);
	$q3 = mysqli_real_escape_string($con, $_POST['q3']);
	$q4 = mysqli_real_escape_string($con, $_POST['q4']);
	$q5 = mysqli_real_escape_string($con, $_POST['q5']);
	$q6 = mysqli_real_escape_string($con, $_POST['q6']);
	$q7 = mysqli_real_escape_string($con, $_POST['q7']);
	$q8 = mysqli_real_escape_string($con, $_POST['q8']);
	
	$numQuestions = 6;
	if($mgr == 1) $numQuestions = 8;
	$numCorrect = 0;
	$score = 0;
	$date = date("m/d/y");



	//answer key
	$a1 = a;
	$a2 = a;
	$a3 = a;
	$a4 = a;
	$a5 = a;
	$a6 = a;
	$a7 = a;
	$a8 = a;



	//check questions vs answer key
	if($q1 == $a1){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q1";
	}

	if($q2 == $a2){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q2";
	}

	if($q3 == $a3){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q3";
	}

	if($q4 == $a4){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q4";
	}

	if($q5 == $a5){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q5";
	}

	if($q6 == $a6){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q6";
	}
	
	if($q7 == $a7 && $mgr == 1){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q7";
	}
	
	if($q8 == $a8 && $mgr == 1){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q8";
	}
	
	

	$score = $numCorrect / $numQuestions * 100;

	
	if($score >= 100){
		//add record to database
		$sql="INSERT INTO harassment_quiz (employeeID, firstname, lastname, date, location)
		VALUES ('$id', '$firstname', '$lastname', '$date', '$location')";
		
		//if it's the manager version, insert into the manager db instead
		if($mgr == 1){
			$sql="INSERT INTO harassment_mgr_quiz (employeeID, firstname, lastname, date, location)
			VALUES ('$id', '$firstname', '$lastname', '$date', '$location')";
		}

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
				   <span style=\"font-size:45px\">Preventing Harassment Training</span><br/><br/>
				   <span style=\"font-size:15px\">with score of <b>" . $score . "!</b></span> <br/><br/><br/><br/>
				   <span style=\"font-size:25px; text-decoration: underline;\"><i>Signed: Donerys Cuevas</i></span><br>
				   <span style=\"font-size:15px\"><i>Training and Sales Manager</i></span><br><br><br>
				   <span style=\"font-size:px\"><i>dated</i> " . $date . "</span><br>
				</div>
			</div>
			<div style=\"color: #ffffff;\">A record of your achievement has been saved. There is no need to print this page.</div>
			<a href=\"../main.php\" style=\"margin-right: auto; margin-left: auto;\"><div class=\"button\" style=\"margin-right: auto; margin-left: auto;\">Back to the main page</div></a>";
		}
	}
	else{
		//if spanish
		if($language == "spanish"){
			echo "<div class='question'>";
			echo "<p>" . $firstname . " " . $lastname . " de " . $location . "</p>";
			echo "recibi&oacute; " . $numCorrect . " de " . $numQuestions;
			echo "<br>Usted no pas&oacute;. Por favor, int&eacute;ntalo de nuevo.";
			echo "<br>" . date("m/d/y");
			echo "<br><a href=\"http://intranet/training/quizzes/harassmentExam_es.php\"><div class=\"button\">De Nuevo al Examen</div></a>";
			echo "<br><a href=\"http://intranet/training/presentations/harassment_es.php\"><div class=\"button\">De Nuevo a la Presentation</div></a>";
			echo "</div>";
		}
		
		//if english
		else{
			echo "<div class='question'>";
			echo "<p>" . $firstname . " " . $lastname . " of " . $location . "</p>";
			echo "you scored " . $numCorrect . " of " . $numQuestions;
			echo "<br> You did not pass.  Please try again.";
			echo "<br>" . date("m/d/y");
			echo "<br><a href=\"http://intranet/training/quizzes/harassmentExam.php\"><div class=\"button\">Back to the exam</div></a>";
			echo "<br><a href=\"http://intranet/training/presentations/harassment.php\"><div class=\"button\">Back to the presentation</div></a>";
			echo "</div>";
		}
	}

	mysqli_close($con);
	?>
	
	</div>

</body>
</html>