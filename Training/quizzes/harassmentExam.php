<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="quiz.css">
	<title>Harassment Exam</title>
</head>
<body>

	<div id="topbar">
		<div id="quote">"The Best Training In Car Rental!"</div>
	</div>
	
	<div id="titlebar">
		<img src="../ezlogo.png" id="logo">
		
		<!--Header buttons -->
		<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?> <a href="http://intranet/training/main.php" class="topButton">Main Page</a><a href="http://intranet/training/account.php" class="topButton">Account</a><a href="http://intranet/training/logout.php" class="topButton">Logout</a></div>
	</div>
	
	
	<form action="harassmentExamCompleted.php" method="post">
		<div class="submitBtn"><h1>Preventing Harassment in the Workplace Exam</h1></div>
		<div class="question">
			<h3>1. I understand that sexual harassment is prohibited by the law and by E-Z Rent-A-Car policy.</h3>
			<input type="radio" name="q1" value="a">True<br>
			<input type="radio" name="q1" value="b">False<br>
		</div>
		
		<div class="question">
			<h3>2. I understand that harassment or discrimination basied on sex, race, color, religion, national origin, age, disability, ancestry, or any other characteristic protected by federal, state, or local law is unlawful and violates E-Z Rent-A-Car policy.</h3>
			<input type="radio" name="q2" value="a">True<br>
			<input type="radio" name="q2" value="b">False<br>

		</div>
		
		<div class="question">
			<h3>3. I understand that sexual harassment includes unwanted advances, romantic interest, or other unwelcome conduct that may be verbal, visual, or physical.</h3>
			<input type="radio" name="q3" value="a">True<br>
			<input type="radio" name="q3" value="b">False<br>
		</div>
		
		<div class="question">
			<h3>4. I understand that a serious form of sexual harassment includes offering job benefits in exchange for sexual favors or alternatively threatening a person's job if they do not agree to the offer.</h3>
			<input type="radio" name="q4" value="a">True<br>
			<input type="radio" name="q4" value="b">False<br>
		</div>
		
		<div class="question">
			<h3>5. I understand that it is unlawful and a violation of E-Z Rent-A-Car policy to retaliate against someone who resists unwanted behavior, files a compliant about harassment or perceived harassment, or participates in an investigation.</h3>
			<input type="radio" name="q5" value="a">True<br>
			<input type="radio" name="q5" value="b">False<br>
		</div>
		
		<div class="question">
			<h3>6. I understand that I may be subject to disciplinary action up to and possibly including termination if I engage in unlawful discrimination or harassment.</h3>
			<input type="radio" name="q6" value="a">True<br>
			<input type="radio" name="q6" value="b">False<br>
		</div>
		
		
		<!--User information-->
		<div class="userInfo">
			<div style="float: left; line-height: 30px;">Last 6 of social:<br>First Name:<br>Last Name:<br>Location:<br></div>
			<div style="float: left; line-height: 30px;">
				 <input type="number" name="employeeID" required="required" value="<?php echo $_SESSION['last6']; ?>"><br>
				 <input type="textbox" name="firstName" required="required" value="<?php echo $_SESSION['firstname']; ?>"><br> 
				 <input type="textbox" name="lastName" required="required" value="<?php echo $_SESSION['lastname']; ?>"><br>
				 <div><?php echo $_SESSION['location']; ?></div>
				 <input type="hidden" name="location" value="<?php echo $_SESSION['location']; ?>">
			</div>
			<div>Please ensure your personal information is correct before clicking the 'Grade My Exam' button to receive your grade.  If you do not pass you may retake the quiz after consulting the training slides.</div>
		</div>
		
		<!--Submit Button-->
		<div class="submitBtn">
			<input type="submit" value="Grade My Exam" class="button">
		</div>
	</form>
</body>
</html>