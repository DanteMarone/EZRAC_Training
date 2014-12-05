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
	<title>Kiosk Exam</title>
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
	
	
	<form action="kioskExamCompleted.php" method="post">
		<div class="submitBtn"><h1>Kiosk Agent Exam</h1></div>
		<div class="question">
			<h3>1. Who fills out the vehicle check out slip if a renter finds new damage?</h3>
			<input type="radio" name="q1" value="a">The customer<br>
			<input type="radio" name="q1" value="b">The kiosk agent<br>
			<input type="radio" name="q1" value="c">The return agent<br>
			<input type="radio" name="q1" value="d">It doesn't matter<br>
		</div>
		
		<div class="question">
			<h3>2. Who is responsible for installing a child seat?</h3>
			<input type="radio" name="q2" value="a">The customer<br>
			<input type="radio" name="q2" value="b">The kiosk agent<br>
			<input type="radio" name="q2" value="c">It's already installed<br>
			<input type="radio" name="q2" value="d">Anyone can do this<br>
		</div>
		
		<div class="question">
			<h3>3. How do you handle a customer who has not pre-paid for fuel and is retuning the vehicle at ¾ full?</h3>
			<input type="radio" name="q3" value="a">Inform renter of fee<br>
			<input type="radio" name="q3" value="b">Add on fee to rental agreement and inform the renter<br>
			<input type="radio" name="q3" value="c">Call manager<br>
			<input type="radio" name="q3" value="d">Send the customer to the counter<br>
		</div>
		
		<div class="question">
			<h3>4. After we have processed an accident report for a customer who should the customer call for updates?</h3>
			<input type="radio" name="q4" value="a">The location manager of the branch that the accident report was filed at<br>
			<input type="radio" name="q4" value="b">The Risk department<br>
		</div>
		
		<div class="question">
			<h3>5. If a customer has a vehicle that has damage that has not been marked on the check-out slip and insists they did not do it, where should you look to confirm that it was previous damage?</h3>
			<input type="radio" name="q5" value="a">Unit Inquiry<br>
			<input type="radio" name="q5" value="b">[NEW!] Existing Claims Lookup<br>
			<input type="radio" name="q5" value="c">Notes in TSD<br>
			<input type="radio" name="q5" value="d">Notes in TSD or [NEW!] Existing Claims Lookup<br>
		</div>
		
		<div class="question">
			<h3>6. How often should you check your sitting?</h3>
			<input type="radio" name="q6" value="a">Only at the end and beginning of the day<br>
			<input type="radio" name="q6" value="b">Frequently<br>
		</div>
		
		<div class="question">
			<h3>7. During your shift you will be required to file your rental agreements in order by___________?</h3>
			<input type="radio" name="q7" value="a">Alphabetical order<br>
			<input type="radio" name="q7" value="b">Numerical order<br>
			<input type="radio" name="q7" value="c">Pick up date <br>
			<input type="radio" name="q7" value="d">Return date<br>
		</div>
		
		<div class="question">
			<h3>8. Name the optional services that may be added by the kiosk or return agent at pickup?</h3>
			<input type="radio" name="q8" value="a">Kiosk Upgrade<br>
			<input type="radio" name="q8" value="b">Kiosk Prepaid Fuel<br>
			<input type="radio" name="q8" value="c">Kiosk EZ Tolls<br>
			<input type="radio" name="q8" value="d">All of the above<br>
		</div>
		
		<div class="question">
			<h3>9. Describe the process for your location for lost and found items?</h3>
			<input type="radio" name="q9" value="a">Attach rental agreement copy to item and send to manager<br>
			<input type="radio" name="q9" value="b">Attach rental agreement copy to item and send to corporate<br>
			<input type="radio" name="q9" value="c">Put in a locker in the kiosk and wait for customer to call<br>
			<input type="radio" name="q9" value="d">Give to lead driver<br>
		</div>
		
		<div class="question">
			<h3>10. When checking in a vehicle how will the customer receive there receipt?</h3>
			<input type="radio" name="q10" value="a">By mail<br>
			<input type="radio" name="q10" value="b">Must go to the counter to sign and print<br>
			<input type="radio" name="q10" value="c">There original is the receipt<br>
			<input type="radio" name="q10" value="d">Email or print from kiosk printer (using iPad when possible)<br>
		</div>
		
		<div class="question">
			<h3>11. Choose the vehicle check-out slip that is filled out correctly on customer pick up:</h3>
			<input type="radio" name="q11" value="a"><img src="checkOutSlipA.png">
			<input type="radio" name="q11" value="b"><img src="checkOutSlipB.png"><br>
		</div>
		
		<div class="question">
			<h3>12. If a customer refuses responsibility for new damage we:</h3>
			<input type="radio" name="q12" value="a">Have the customer notate on the accident report that they have done no damage to the vehicle<br>
			<input type="radio" name="q12" value="b">Do not fill out the accident report<br>
			<input type="radio" name="q12" value="c">Apologize to the customer and continue closing their rental<br>
		</div>
		
		<div class="question">
			<h3>13. All the vehicles in our fleet are non-smoking vehicles.  Where is this posted?</h3>
			<input type="radio" name="q13" value="a">On the rental agreement<br>
			<input type="radio" name="q13" value="b">Inside the vehicle<br>
			<input type="radio" name="q13" value="c">On the reverse side of the key chain<br>
			<input type="radio" name="q13" value="d">All of the above<br>
		</div>
		
		<div class="question">
			<h3>14. When doing upgrades or adding additional services at the kiosk, is it necessary to reprint the rental agreement and have the customer sign?</h3>
			<input type="radio" name="q14" value="a">Yes, the agreement must be reprinted and signed by the customer.<br>
			<input type="radio" name="q14" value="b">No, this is not necessary.  Mark the new information on their original contract.<br>
		</div>
		
		<div class="question">
			<h3>15. If a customer is checking in a vehicle and has no questions or changes to his final bill, when is it OK to not use the iPad?</h3>
			<input type="radio" name="q15" value="a">Always<br>
			<input type="radio" name="q15" value="b">If the customer purchased roadside assistance<br>
			<input type="radio" name="q15" value="c">Never<br>
			<input type="radio" name="q15" value="d">If the iPad is inoperable<br>
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