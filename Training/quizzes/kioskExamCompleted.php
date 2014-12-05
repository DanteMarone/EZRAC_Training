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

	$numQuestions = 15;
	$numCorrect = 0;
	$score = 0;
	$date = date("m/d/y");

	//form variables
		$id = mysqli_real_escape_string($con, $_POST['employeeID']);
		$firstname = mysqli_real_escape_string($con, $_POST['firstName']);
		$firstname = strtoupper ($firstname);
		$lastname = mysqli_real_escape_string($con, $_POST['lastName']);
		$lastname = strtoupper($lastname);
		$location = mysqli_real_escape_string($con, $_POST['location']);
		$language = mysqli_real_escape_string($con, $_POST['language']);

	//get student answers from form
	$q1 = mysqli_real_escape_string($con, $_POST['q1']);
	$q2 = mysqli_real_escape_string($con, $_POST['q2']);
	$q3 = mysqli_real_escape_string($con, $_POST['q3']);
	$q4 = mysqli_real_escape_string($con, $_POST['q4']);
	$q5 = mysqli_real_escape_string($con, $_POST['q5']);
	$q6 = mysqli_real_escape_string($con, $_POST['q6']);
	$q7 = mysqli_real_escape_string($con, $_POST['q7']);
	$q8 = mysqli_real_escape_string($con, $_POST['q8']);
	$q9 = mysqli_real_escape_string($con, $_POST['q9']);
	$q10 = mysqli_real_escape_string($con, $_POST['q10']);
	$q11 = mysqli_real_escape_string($con, $_POST['q11']);
	$q12 = mysqli_real_escape_string($con, $_POST['q12']);
	$q13 = mysqli_real_escape_string($con, $_POST['q13']);
	$q14 = mysqli_real_escape_string($con, $_POST['q14']);
	$q15 = mysqli_real_escape_string($con, $_POST['q15']);


	//answer key
	$a1 = a;
	$a2 = a;
	$a3 = b;
	$a4 = b;
	$a5 = d;
	$a6 = b;
	$a7 = d;
	$a8 = d;
	$a9 = a;
	$a10 = d;
	$a11 = a;
	$a12 = a;
	$a13 = d;
	$a14 = a;
	$a15 = d;


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

	if($q7 == $a7){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q7";
	}

	if($q8 == $a8){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q8";
	}
	
	if($q9 == $a9){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q9";
	}
	if($q10 == $a10){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q10";
	}

	if($q11 == $a11){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q11";
	}

	if($q12 == $a12){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q12";
	}

	if($q13 == $a13){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q13";
	}

	if($q14 == $a14){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q14";
	}

	if($q15 == $a15){
		$numCorrect = $numCorrect + 1;
	}
	else{
		echo "You missed Q15";
	}

	$score = $numCorrect / $numQuestions * 100;

	
	if($score >= 100){
		//add record to database
		$sql="INSERT INTO kiosk_quiz (employeeID, firstname, lastname, date, location)
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
				   <span style=\"font-size:45px\">Kiosk Agent Training</span><br/><br/>
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
		echo "<div class='question'>";
		echo "<p>" . $firstname . " " . $lastname . " of " . $location . "</p>";
		echo "you scored " . $numCorrect . " of " . $numQuestions;
		echo "<br> You did not pass.  Please try again";
		echo "<br>" . date("m/d/y");
		echo "<br><a href=\"kioskExam.php\"><div class=\"button\">Back to the exam</div></a>";
		echo "<br><a href=\"../presentations/kiosk.php\"><div class=\"button\">Back to the presentation</div></a>";
		echo "</div>";
	}

	mysqli_close($con);
	?>
	
	</div>

</body>
</html>