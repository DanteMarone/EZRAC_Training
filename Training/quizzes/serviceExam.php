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
	<title>Service Agent Exam</title>
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
	
	
	<form action="serviceExamCompleted.php" method="post">
		<div class="submitBtn"><h1>Service Agent Exam</h1></div>
		
		<div class="question">
			<h3>1. What statement best describes your role as a Service Agent?</h3>
			<input type="radio" name="q1" value="a">I'm in charge of cleaning the vehicles<br>
			<input type="radio" name="q1" value="b">My role is getting the cars through the cleaning bay quick<br>
			<input type="radio" name="q1" value="c">My role is providing our customers with vehicles that are clean and mechanically sound in a expedient and safe manner<br>
			<input type="radio" name="q1" value="d">My role is not mentioned here<br>
		</div>
		
		<div class="question">
			<h3>2. When cleaning the interior of a vehicle, I must check:</h3>
			<input type="radio" name="q2" value="a">Trunk<br>
			<input type="radio" name="q2" value="b">Consoles<br>
			<input type="radio" name="q2" value="c">Glove compartment<br>
			<input type="radio" name="q2" value="d">Under and behind seats<br>
			<input type="radio" name="q2" value="e">All of the above</br>
		</div>
		
		<div class="question">
			<h3>3. How many cleaning cloths should I have?</h3>
			<input type="radio" name="q3" value="a">One - used on all surfaces<br>
			<input type="radio" name="q3" value="b">Two - one for glass and one for other surfaces<br>
			<input type="radio" name="q3" value="c">Three - One for glass, one for consoles, and one for the dashboard<br>
		</div>
		
		<div class="question">
			<h3>4. What is the process of vacuuming floor mats?</h3>
			<input type="radio" name="q4" value="a">Vacuum them inside the vehicle<br>
			<input type="radio" name="q4" value="b">Vacuum them outside the vehicle<br>
			<input type="radio" name="q4" value="c">Shake them out thoroughly - do not vacuum</br>
			<input type="radio" name="q4" value="d">Do whatever is quickest</div>
		
		<div class="question">
			<h3>5. A vehicle that smells like smoke should be:</h3>
			<input type="radio" name="q5" value="a">Left with windows opened, on ready line<br>
			<input type="radio" name="q5" value="b">Put aside for additional cleaning<br>
		</div>
		
		<div class="question">
			<h3>6. When parking a vehicle on the ready line, which seatbelts should be left buckled?</h3>
			<input type="radio" name="q6" value="a">Just the driver's seat belt should be left buckled<br>
			<input type="radio" name="q6" value="b">All seat belts should be left buckled<br>
			<input type="radio" name="q6" value="c">No seatbelts should be left buckled<br>
			<input type="radio" name="q6" value="d">All except the driver's seat belt should be left buckled</br>
		</div>
		
		<div class="question">
			<h3>7. Radio should be left on and the volume lowered when parking in the ready line.</h3>
			<input type="radio" name="q7" value="a">True - Leave the radio on at a comfortable level and station<br>
			<input type="radio" name="q7" value="b">False - Turn the radio all the way off<br>
		</div>
		
		<div class="question">
			<h3>8. Choose the vehicle check-out slip that is filled out correctly when delivered to the kiosk:</h3>
			<input type="radio" name="q8" value="a"><img src="checkOutSlipC.png">
			<input type="radio" name="q8" value="b"><img src="checkOutSlipD.png"><br>
		</div>
		
		<div class="question">
			<h3>9. Never put a vehicle on the ready line if:</h3>
			<input type="radio" name="q9" value="a">Tire pressure light is on<br>
			<input type="radio" name="q9" value="b">Check engine light is on<br>
			<input type="radio" name="q9" value="c">Vehicle smells of smoke<br>
			<input type="radio" name="q9" value="d">The key fob does not function correctly<br>
			<input type="radio" name="q9" value="e">There are cracks in rear view or side mirrors<br>
			<input type="radio" name="q9" value="f">All of the above<br>
		</div>
		
		<div class="question">
			<h3>10. When cleaning seat pockets/glove compartments/under seats/etc...</h3>
			<input type="radio" name="q10" value="a">Always look before you touch - visually inspect for dangerous items before reaching your hand in<br>
			<input type="radio" name="q10" value="b">Grab and go - quickly grab trash and debris without looking to save valuable time<br>
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