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
	<title>Shuttle Driver Exam</title>
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
	
	
	<form action="shuttleExamCompleted.php" method="post">
		<!--Header uses submitBtn class for similar appearance-->
		<div class="submitBtn"><h1 class="button">Shuttle Driver Exam</h1></div>
		<div class="question">
			<h3>As a shuttle driver your position is important because?</h3>
			<input type="radio" name="q1" value="a">You are the first and last contact with our customer<br>
			<input type="radio" name="q1" value="b">You are the one responsible for customer receipts<br>
		</div>
		
		<div class="question">
			<h3>Is it part of your job to give customers instruction about shuttle service back to the airport?</h3>
			<input type="radio" name="q2" value="a">Yes<br>
			<input type="radio" name="q2" value="b">No<br>
		</div>
		
		<div class="question">
			<h3>Why is it important to know the terminal locations at the airport?</h3>
			<input type="radio" name="q3" value="a">In case you ever need to fly out of the airport that you work at<br>
			<input type="radio" name="q3" value="b">In order to give directions to customers<br>
			<input type="radio" name="q3" value="c">To allow for expeditious drop off and pick-up<br>
		</div>
		
		<div class="question">
			<h3>Is it important to offer luggage assistance to the customer?</h3>
			<input type="radio" name="q4" value="a">No!  Heavy lifting can cause injury<br>
			<input type="radio" name="q4" value="b">No the customer should be able to do this themselves<br>
			<input type="radio" name="q4" value="c">Yes, we should always offer assistance with their luggage<br>
			<input type="radio" name="q4" value="d">Yes, but only if they are friendly and you think you can get a tip<br>
		</div>
		
		<div class="question">
			<h3>Is it important to have everyone sitting before moving the shuttle?</h3>
			<input type="radio" name="q5" value="a">Yes, safety first<br>
			<input type="radio" name="q5" value="b">No, it's ok for people to stand as long as they can hold on to railings or seat backs<br>

		</div>
		
		<div class="question">
			<h3>Is it ok to leave a tip jar in sight even if not soliciting a tip?</h3>
			<input type="radio" name="q6" value="a">No, never put out a tip jar or ask for a tip<br>
			<input type="radio" name="q6" value="b">Yes, you deserve it<br>
			<input type="radio" name="q6" value="c">You may have a small tip jar in sight but may not ask for tips<br>
			<input type="radio" name="q6" value="d">No, only a sign that says "tips appreciated" is acceptable<br>
		</div>
		
		<div class="question">
			<h3>May the shuttles have talk radio channels on?</h3>
			<input type="radio" name="q7" value="a">Yes, it is good for conversation<br>
			<input type="radio" name="q7" value="b">Yes, but only during voting month or important news broadcasts<br>
			<input type="radio" name="q7" value="c">No, talk radio may be played but political dialogue with customers is fine<br>
			<input type="radio" name="q7" value="d">No, no talk radio or hot topics of conversation may be discussed with customers<br>
		</div>
		
		<div class="question">
			<h3>The shuttle driver is responsible for:</h3>
			<input type="radio" name="q8" value="a">Ensuring the shuttle is clean and properly fuelled<br>
			<input type="radio" name="q8" value="b">Ensuring that the shuttle is in a safe working condition and that communication equipment is maintained<br>
			<input type="radio" name="q8" value="c">Driving the shuttle to pick up lunch at a nearby restaurant<br>
			<input type="radio" name="q8" value="d">Ensuring the shuttle is clean, properly fuelled, in safe working condition, and that communication equipment is maintained<br>
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