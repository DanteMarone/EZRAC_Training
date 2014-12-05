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
	<title>Driver Exam</title>
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
	
	
	<form action="driverExamCompleted.php" method="post">
		<!--Header uses submitBtn class for similar appearance-->
		<div class="submitBtn"><h1 class="button">Driver Exam</h1></div>
		<div class="question">
			<h3>In your role as a driver, which option best describes your main duties?</h3>
			<input type="radio" name="q1" value="a">Rushing cars back and forth to the airport<br>
			<input type="radio" name="q1" value="b">Getting customers to the airport<br>
			<input type="radio" name="q1" value="c">Performing oil changes<br>
			<input type="radio" name="q1" value="d">Ensuring fantastic vehicle presentation and efficient delivery<br>
		</div>
		
		<div class="question">
			<h3>What is the correct process when inspecting a vehicle for damage?</h3>
			<input type="radio" name="q2" value="a">Quickly run around the vehicle and look closely<br>
			<input type="radio" name="q2" value="b">Get in the vehicle and inspect for damage later<br>
			<input type="radio" name="q2" value="c">Start at the front and walk around the vehicle, to your left, inspecting closely for damage<br>
			<input type="radio" name="q2" value="d">It is done for you by the Kiosk Agent<br>
		</div>
		
		<div class="question">
			<h3>When should you return a vehicle that is not rentable?</h3>
			<input type="radio" name="q3" value="a">The check engine light is illuminated<br>
			<input type="radio" name="q3" value="b">The windows will not roll up<br>
			<input type="radio" name="q3" value="c">There is a bald tire<br>
			<input type="radio" name="q3" value="d">All of the above<br>
		</div>
		
		<div class="question">
			<h3>What is the process if I find a personal item in the vehicle (sun glasses, iPad, shoes, etc...)?</h3>
			<input type="radio" name="q4" value="a">You may keep them - Items left in the vehicles are property of E-Z Rent-A-Car and it's employees<br>
			<input type="radio" name="q4" value="b">Send the item to corporate<br>
			<input type="radio" name="q4" value="c">Give the item to a supervisor with the unit number attached to it</br>
			<input type="radio" name="q4" value="d">Store the item in a closet by your works station for when the renter returns
		</div>
		
		<div class="question">
			<h3>If you find a weapon in a vehicle what should you do?</h3>
			<input type="radio" name="q5" value="a">Give it to a manager<br>
			<input type="radio" name="q5" value="b">Alert a manager - do not touch!<br>
			<input type="radio" name="q5" value="c">Remove the weapon from the vehicle so your co-workers or other renters aren't injured by it<br>
			<input type="radio" name="q5" value="d">None of the above are the correct procedure<br>
		</div>
		
		<div class="question">
			<h3>Can you use your cell phone while driving an E-Z Rent-A-Car vehicle?</h3>
			<input type="radio" name="q6" value="a">Yes, as long as it doesn't impair your ability to drive safely<br>
			<input type="radio" name="q6" value="b">No, it is against company policy to use a cell phone or electronic device while on duty<br>
		</div>
		
		<div class="question">
			<h3>If a customer or potential customer asks you a question:</h3>
			<input type="radio" name="q7" value="a">Explain that you only drive cars and can't help them<br>
			<input type="radio" name="q7" value="b">Tell the customer they must go to the counter<br>
			<input type="radio" name="q7" value="c">Smile and assure the customer that you will find an employee that can help them<br>
			<input type="radio" name="q7" value="d">Smile and walk away quietly - if you don't know the answer it's better to not confuse the customer<br>
		</div>
		
		<div class="question">
			<h3>What is the correct speed to move through the wash bay?</h3>
			<input type="radio" name="q8" value="a">15 miles per hour<br>
			<input type="radio" name="q8" value="b">No greater than 5mph<br>
			<input type="radio" name="q8" value="c">As fast as you can, there are a lot of cars to wash<br>
		</div>
		
		<div class="question">
			<h3>What is the policy on ID for drivers?</h3>
			<input type="radio" name="q9" value="a">Must have a valid driver's license<br>
			<input type="radio" name="q9" value="b">Must carry and display e-z rent a car ID<br>
			<input type="radio" name="q9" value="c">Must wear the uniform<br>
			<input type="radio" name="q9" value="d">All of the above are required<br>
			<input type="radio" name="q9" value="e">None of the above are required<br>
		</div>
		
		<div class="question">
			<h3>Who is allowed in the rental vehicles when the vehicle is not on rent?</h3>
			<input type="radio" name="q10" value="a">The driver transporting the vehicle and any employee requiring the use of the vehicle for E-Z Rent-A-Car business is allowed in the vehicle<br>
			<input type="radio" name="q10" value="b">As long as the vehicle is insured anyone can use the vehicle when not on rent<br>
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