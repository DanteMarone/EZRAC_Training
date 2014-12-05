<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
?>

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>EZ - Intro to Kiosk</title>

		<meta name="description" content="Everything you'll need to know to start your job as a Kiosk Agent">
		<meta name="author" content="Donerys Cuevas & Dante Marone">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		 
		<link rel="stylesheet" href="../css/reveal.min.css">
		<link rel="stylesheet" href="../css/theme/EZ.css" id="theme">
		<link rel="stylesheet" href="../css/theme/EZAdtl.css">
		
		<script src="../imagePlay.js" type="text/javascript"></script>

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="../lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = 'css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>
		

		<!--[if lt IE 9]>
		<script src="../lib/js/html5shiv.js"></script>
		<![endif]-->
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

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h3>Intro to</h3>
					<h1>Kiosk Agent / Return Agent</h1>
				</section>
				
				<section>
					<h2>Navigating This Presentation</h2>
					<p>Use the arrows on your keyboard to navigate left and right through the slides<br><img src="../resources/arrowsKeyboard.png"></p><br>
					<p class="fragment roll-in">You can also use the arrows in the bottom right to advance or replay slides</p>
				</section>
				
				<section>
					<div class="floatLeft">
						<h2>You will be tested</h2>
						<p>This training is accompanied by a test that you must score 100% on to pass.</p><br>
						<p>Feel free to take notes as you progress through the training modules - you can use your notes on the test.</p>
					</div>
					<div class="floatRight">
						<img src="../resources/EZTraining.png">
					</div>
				</section>

				<section>
					<h2>Your Job: Overview</h2>
						<ul>
							<li class="fragment roll-in">Welcome the renter with a smile</li>
							<li class="fragment roll-in">Provide excellent customer service</li>
							<li class="fragment roll-in">Check out keys to renters</li>
							<li class="fragment roll-in">Check in keys from renters and close out their contracts</li>
							<li class="fragment roll-in">Ensure all keys are in TSD</li>
							<li class="fragment roll-in">Check sitting vehicles periodically</li>
							<li class="fragment roll-in">Ensure all vehicles placed on the ready line pass our company vehicle standards</li>
							<li class="fragment roll-in">Ensure all paperwork is filed by return date</li>
						</ul>
						<img src="../resources/handKeys.png" style="position: absolute; top: 23%; left:80%;">
				</section>
				
				<section>
					<h2>Your Job: Overview</h2>
					<ul>
						<li class="fragment roll-in">Ensure all elite fleet vehicles are properly prepared (sales signs)</li>
						<li class="fragment roll-in">Maintain kiosk return/pickup area in accordance to company image</li>
						<li class="fragment roll-in">Ensure accident reports are properly completed and filed with superiors</li>
						<li class="fragment roll-in">Ensure GPS units and car seats are properly accounted for</li>
					</ul>
				</section>
				
				<section>
					<h2>Be Friendly!</h2>
					<p>Your job is very important as you are the first and last face a customer sees.</p>
					<img src="../resources/smile.png">
					<p>First and last impressions are key to customer retention!</p>
				</section>
				
				<section>
					<h2>Your Job: Customer Pick-Up</h2>
					<div class="floatRight">
						<ul>
							<li class="fragment roll-in">Welcome the renter with a smile</li>
							<li class="fragment roll-in">Check that the keys and the rental agreement match</li>
							<li class="fragment roll-in">Explain any particulars of the vehicle</li>
							<li class="fragment roll-in">Remind the renter that their rental agreement acts as the registration and must remain in the vehicle at all times.</li>
						</ul>
					</div>
					<div class="floatLeft">
						<img src="../resources/goodbyeAgent.png">
					</div>
				</section>
				
				<section>
					<h2>Your Job: On Customer Return</h2>
					<ul>
						<li class="fragment roll-in">Welcome the renter with a smile</li>
						<li class="fragment roll-in">Check in the vehicle when the renter is ready</li>
						<li class="fragment roll-in">Ask the renter for the original rental agreement</li>
					</ul>
					<img src="../resources/smileButterfly.png" width="40%">
				</section>
				
				<section>
					<h2>Kiosk Procedures: Opening Shifts</h2>
					<ul>
						<li class="fragment roll-in">At the start of your shift ensure you have all the supplies needed for your shift</li>
						<li class="fragment roll-in">Check your sitting vehicles and ensure they match your keys that are available</li>
						<li class="fragment roll-in">Ensure daily reports are printed
							<ul>
								<li class="fragment roll-in">Reservation Manifest</li>
								<li class="fragment roll-in">Units Available</li>
								<li class="fragment roll-in">Units Due In</li>
							</ul></li>
						<li class="fragment roll-in">View the forecast for your shift</li>
					</ul>
					<img src="../resources/openSign.png" style="position: absolute; top: 50%; left: 55%;">
				</section>
				
				<section>
				<h2>Reservation Manifest</h2>
					<p>The reservation manifest is used to show what class of vehicle has been booked and at what time</p><br>
					<p>Use this report to determine what vehicles need to be stocked on the ready line and at what time</p>
				</section>
								
				
				<section>
				<h2>Units Available Report</h2>
					<p>The units available report shows what units are available at your location for rent<p>
				</section>
				
				<section>
					<h2>Units Due In</h2>
					<p>The units due in report will show what vehicles you should expect to be returned today</p></br>
					<p>Use this report to determine when you may need to call for help in manning the kiosk</p>
				</section>
				
				
				<section>
					<h2>Your Job: On Pick-Up</h2>
					<div class="floatLeft" style="width: 60%;">
						<ul>
							<li class="fragment roll-in">Welcome the renter with a smile</li>
							<li class="fragment roll-in">The renter will have 2 copies of their agreement
								<ul>
									<li class="fragment roll-in">Signed copy stays with you</li>
									<li class="fragment roll-in">Renter keeps the unsigned copy</li>
								</ul></li>
							<li class="fragment roll-in">Identify the unit that is assigned to the contract and retrieve the keys</ul>
							<li class="fragment roll-in">Circle the Unit Number on the contract to ensure you are giving the correct key</li>
						</ul>
					</div>
					<div class="floatRight" style="width: 39%;">
						<img src="../resources/welcomeAgent.png">
					</div>
				</section>
				
				<section>
					<h2>Your Job: On Pick-Up - Continued</h2>
					<ul>
						<li class="fragment roll-in">Seperate the key from the check out slip
						<ul>
							<li class="fragment roll-in">Have the renter sign the check out slip to signify that they have received the keys to the vehicle</li>
							<li class="fragment roll-in">The top copy is attached to the copy of the rental agreement we keep on file</li>
						</ul></li>
						<li class="fragment roll-in">Give the renter the key and clear instructions on how to fill out the check-out slip if they find damage and to get to the space that the vehicle is parked in</li>
						<li class="fragment roll-in">Have the renter check the vehicle and only use the codes listed to mark damage to the vehicle if present</li>
					</ul>
				</section>
				
				<section>
					<h2>Kiosk Sales Opportunities</h2>
					<p>There are many opportunities as a kiosk agent to generate revenue for the company and for yourself</p>
					<ul>
						<li class="fragment roll-in">Greet your renter with a personalized approach, creating a positive welcoming environment</li>
						<li class="fragment roll-in">Listen and observe your renter; they send buying signals that we miss if we do not pay attention</li>
						<li class="fragment roll-in">Many times people do not ask in fear of bothering or holding up an employee.  Make your customer feel welcome to ask questions.</li>
					</ul>
				</section>
				
				<section>
				<h2>Kiosk Sales Opportunities</h2>
					<div style="float: left; width: 75%;">
						<p>Examples of kiosk sales opportunities:</p>
						<ul>
							<li class="fragment roll-in">Adding a driver</li>
							<li class="fragment roll-in">Adding a child seat</li>
							<li class="fragment roll-in">Adding a GPS</li>
							<li class="fragment roll-in">Adding pre-paid fuel</li>
							<li class="fragment roll-in">Adding the E-Z Toll option</li>
							<li class="fragment roll-in">Upgrades - one of the most unique opportunities for kiosk sales is to show off our magnificent fleet!</li>
						</ul>
					</div>
					<div style="float: right; width: 25%;">
						<img src="../resources/piggyPay.png" width="100%">
					<div>
					<p>You write your own paycheck!</p>
				</section>
				
				<section>
					<h2>Observation</h2>
					<p>By listening and observing your renter you will be able to better understand their needs and gain insight into potential sales opportunities</p>
				</section>
				
				<section>
					<p>Be on the lookout for:</p>
					<ul>
						<li class="fragment roll-in">Body language</li>
						<li class="fragment roll-in">Physical needs</li>
						<li class="fragment roll-in">Travel companions</li>
						<li class="fragment roll-in">Quantity of bags the customer will be fitting in the vehicle (will it fit?)</li>
					</ul>
					<img src="../resources/magnifier.png">
				</section>
				
				<section>
					<p>Actively Listen:</p>
						<div style="float: left; width: 70%;">
						<ul>
							<li class="fragment roll-in">Listen for clues to your renter's needs</li>
							<li class="fragment roll-in">Give your renter your undivided attention (minimizing side-talk with your coworkers)</li>
							<li class="fragment roll-in">Never interrupt</li>
							<li class="fragment roll-in">Keep your response appropriate to the renter's comments</li>
							<li class="fragment roll-in">Be sure to confirm your understanding</li>
						</ul>
					</div>
					<div style="float: right; width: 29%; margin-top: 100px;">
						<img src="../resources/listen.png">
					</div>
				</section>
					
				<section>
					<h2>Kiosk Upgrades</h2>
					<p>Upgrades at the kiosk will be your greatest source of commission</p><br>
					<p>Ensure that when performing a vehicle upgrade or any add-ons at the kiosk that you reprint the contract showing the new totals and get the renter to sign.<br>
					<p>Ensure that you are authorizing more payment for the increase in charges</p>
				</section>
				
				<section>
					<h2>Additional Drivers</h2>
					<p>One of the options renters often forget to add, until they reach the kiosk, is additional drivers</p><br>
					<p>Ensure that when adding an additional driver or any add-ons at the kiosk that you reprint the contract showing the new totals and get the renter to sign.<br>
					<p>Ensure that you are authorizing more payment for the increase in charges</p>
				</section>
				
				<section>
					<h2>Car Seats</h2>
					<p class="fragment roll-in">When issuing car seats ensure that the car-seat option has been checked on the rental agreement. Determine what type of car seat will be required by the renter.</p>
					<p class="fragment roll-in">There are three kinds of car seats:</p>
					<ul>
						<li class="fragment roll-in">IN: rear facing, for infants up to one year old.</li>
						<li class="fragment roll-in">BA: toddler seat, five point harness(1-4 years old, weighing no more than 40lbs)</li>
						<li class="fragment roll-in">BO: Booster seat for children over 5 years of age</li>			
					</ul>
					<img src="../resources/rearCarSeat.png" width="10%">
					<img src="../resources/toddlerCarSeat.png" width="10%">
					<img src="../resources/boosterCarSeat.png" width="10%">
				</section>
				
				<section>
					<h2>Car Seats</h2>
					<p class="fragment roll-in">All car seats must be installed by the customer.  Under no circumstances can an E-Z Rent-A-Car employee install a car seat due to legal liabilities.</p><br>
					<p class="fragment roll-in">Inspect all car seats to ensure they are within the expiration date listed on the side before issuing to the renter<p><Br>
					<p>Never give a renter a stained or smelly car seat</p>
				</section>
				
				<section>
					<h2>Renters with Disabilities</h2>
					<div class="floatLeft" style="font-size: .8em;">
						<p>You may have a renter with disabilities that asks about the availability of hand controls for our rentals</p>
						<p>Yes, we do have vehicles with hand controls.</p>
						<p>If a renter has not made a request at least 72 hours prior to vehicle pick-up we will be unable to accommodate them as the hand controls must be installed by a certified mechanic.</p>	
					</div>
					<div class="floatRight">
						<img src="../resources/disabled.jpg">
					</div>
				</section>
				
				<section>
					<h2>On Pick-Up: Vehicle Check-Out Slip</h2>
					<ul>
						<li class="fragment roll-in">Each vehicle will have a vehicle check-out slip attached to the keys</li>
						<li class="fragment roll-in">Ensure that the driver has completed their part:
							<ul>
								<li class="fragment roll-in">Today's date</li>
								<li class="fragment roll-in">Space #</li>
								<li class="fragment roll-in">Car#</li>
								<li class="fragment roll-in">Mileage Out</li>
								<li class="fragment roll-in">Gas Out</li>
								<li class="fragment roll-in">Driver's name is listed in remarks</li>
							</ul>
				</section>
				
				<section>
					<div class="floatRight">
						<p class="fragment roll-in">The kiosk agent will:</p>
						<ul>
									<li class="fragment roll-in">Enter the Contract#</li>
									<li class="fragment roll-in">Print the renter's Name</li>
									<li class="fragment roll-in">Ensure the renter signs for receipt of keys</li>
						</ul>
					</div>
					<div class="floatLeft">
						<img src="../resources/keyAgent.png">
					</div>
				</section>
				
				<section>
					<div style="float: left; width:40%;">Blank Slip<img src="../resources/vehicleCheck-OutSlip.png"></div>
					<div style="float: right; width:40%;">Slip Complete<img src="../resources/vehicleCheck-OutSlip_Complete.png"></div>
				</section>
				
				<section>
					<p>The renter must now do a full walk around. When time permits, walk the renter to the vehicle.  If any damage not already marked on the check-out slip is discovered the renter must mark the damage, using the damage codes, on the slip and return to the kiosk. The Kiosk Agent will keep the yellow copy of the check-out slip and the renter will keep the pink. If no new damage is found the renter may proceed to their destination.</p><br>
					<p>If the renter finds damage not listed on the Check-Out slip but would like to keep the vehicle you must mark damage in TSD.</p>
				</section>
				
				<section>
					<h2>Your Job: On Return</h2>
					<ul>
						<li class="fragment roll-in">Welcome the renter with a smile!</li>
						<li class="fragment roll-in">Remember, this is your last opportunity to WOW our customers.</li>
						<li class="fragment roll-in">Follow the return process quickly and thoroughly.</li>
					</ul>
					<img src="../resources/smileAgent.png" style="border-radius: 50%;">
				</section>
				
				<section>
					<h2>Be Quick</h2>
					<div class="floatLeft" style="font-size: .8em;">
						<ul>
							<li class="fragment roll-in">Do not rush the customer as they collect their personal belongings, however, let them know that you are ready when they are.</li>
							<li class="fragment roll-in">Our renters need expedient service as many have flights to catch or are on tight schedules.  Be as quick as you can without compromising the level of service renters have come to expect from E-Z Rent-A-Car.</li>
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/superAgent.png">
					</div>
				</section>
				
				<section>
					<div style="float: left; width: 50%;">
						<h2>On Return: Body Damage Identification (BDI)</h2>
						<ul>
							<li class="fragment roll-in">The return agent will visually inspect the vehicle and determine the level of damage (if any).</li>
							<li class="fragment roll-in">The Return Agent will walk around the vehicle starting at the front and moving to their left, stopping at the driver side door to greet the renter.</li>
						</ul>
					</div>
					<div style="float: right; width: 50%;">
						<img class="fragment roll-in" src="../resources/arrowTop.png">
						<img src="../resources/vehicle.png" style="position: relative; top:-80px;">
						<img class="fragment roll-in" src="../resources/arrowBottom.png" style="position: relative; top:-120px;">
					</div>
				</section>

				<section>
					<h2>On Return</h2>
					<p>Check:</p>
					<ul>
						<li class="fragment roll-in">Fuel level (and charge accordingly)</li>
						<li class="fragment roll-in">Maintenance lights on the dash</li>
						<li class="fragment roll-in">Mileage</li>
						<li class="fragment roll-in">Stains, burns, or damage to seats</li>
						<li class="fragment roll-in">New external damage</li>
						<li class="fragment roll-in">Keys, and ensure they are collected</li>
						<li class="fragment roll-in">Remind renter to check for personal belongings</li>
						<li class="fragment roll-in">Ensure return of GPS and child seats</li>
						<li class="fragment roll-in">Windows are up to inspect for cracks and chips</li>
						<li class="fragment roll-in">Mismatched tires</li>
						<li class="fragment roll-in">Hold notes, turn-backs, and safety recalls</li>
					</ul><br>
					<p class="fragment roll-in">It is against company policy for an employee to touch or handle any firearms or illegal substances left in a vehicle.  Please alert your manager or supervisor on duty immediately.</p>
					<img src="../resources/dashLights.jpg" style="position: absolute; top: 15%; left: 70%;">
				</section>
				
				<section>
					<div class="floatLeft" style="width: 60%;">
						<h2>Lost & Found</h2>
						<p>When picking up dirty vehicles:</p>
						<ul>
							<li class="fragment roll-in">Check both the front and back seats of the vehicle for customer property</li>
							<li class="fragment roll-in">Check for E-Z Rent-A-Car equipment such as GPS units</li>
						</ul>
						<br><br>
						<p class="fragment roll-in">If any items are found, turn the item into your supervisor with the unit number of the vehicle that the item came from</p>
					</div>
					<div class="floatRight" style="width: 39%">
						<img src="../resources/lostAndFound.png">
					</div>
				</section>
				
				<section>
					<div style="width: 70%; float: left;">
						<p>If the iPad can not be used on return or if there is damage to the vehicle this information is used to fill out a new Vehicle Check-In Slip which will be attached to the closed rental agreement</p>
					</div>
					<img src="../resources/vehicleCheck-OutSlip.png">
				</section>
				
				<section>
					<p>Look over the car for damage.  The most common places for damage are:</p>
					<ul>
						<li class="fragment roll-in">Windows (look for small cracks and chips)</li>
						<li class="fragment roll-in">Tires (sometimes they’ve had a flat and still have the spare on)</li>
						<li class="fragment roll-in">Bumpers (from minor fender benders)</li>
						<li class="fragment roll-in">Ensure all vehicle equipment (keyless entry remote, charging equipment, spare tires, etc…) are still with the vehicle.</li>
					</ul>
				</section>
				
				<section>
					<p>If you realize there is a dent, scratch, or damage ask the renter if there were any problems with the vehicle and compare with any damage listed on the check out slip.</p>
					<br>
					<p>The tools at your disposal for telling if damage is pre-existing are:</p>
					<ul>
						<li class="fragment roll-in">The original check-out slip</li>
						<li class="fragment roll-in">Risk Claims Report</li>
						<li class="fragment roll-in">TSD</li>
					</ul>
					<img src="../resources/maintenanceMan.png">
				</section>
				
				<section>
					<div>
						<div style="float: left; width: 60%;">
							<h2>Pre-Existing Damage Search: Check-Out Slip</h2>
							<p>The original damage slip contains damage discovered by both the driver on drop off and the renter on pick up.  Damage that was pre-existing <span style="text-decoration: underline;">should</span> be located on the check-out slip.</p>
						</div>
						<div style="float: right;"><img src="../resources/vehicleCheck-OutSlip_Complete.png"></div>
					</div>
				</section>
				
				<section>
					<h2>Pre-existing Damage Search: Risk Claims</h2>
					<img src="../resources/risk.png">
				</section>
				
				<section>
					<ol>
						<li class="fragment roll-in">Navigate to the company's intranet page<p>http://intranet/</p></li>
						<li class="fragment roll-in">Click the link for the Risk department</li>
						<li class="fragment roll-in">Click '[NEW!] Existing Claim Lookup'</li>
						<li class="fragment roll-in">Input the vehicle number</li>
						<li class="fragment roll-in">Click 'Search'</li>
					</ol>
				</section>
				
				<section>
					<div>
						<img class="playButton" src="../resources/playButton.png">
						<img class="imageHide" src="../resources/riskClaims.gif">
					<div>
				</section>
				
				<section>
					<p>The last three damages will be listed in order of latest first</p>
					<br>
					<p>Scroll down to see pictures of damages</p>
				</section>
				
				<section>
					<h2>Body Damage</h2>
					<ul>
						<li class="fragment roll-in">If body damage is not pre-existing, the renter will have to fill out an Incident Report</li>
						<li class="fragment roll-in">If the renter insists that they have done no damage to the vehicle, inform them to include that information on the incident report</li>
						<li class="fragment roll-in">If the renter has any questions, please direct them to the Risk Management department at:</li>
					</ul>
					<h3 class="fragment roll-in"> 407-888-0508</h3>
				</section>
				
				<section>
					<div style="width: 50%; float: left;">
						<h2>Accident Report</h2>
						<div style="background-color: #ff0000; height: 50px; width: 50px; color: #ffffff; text-indent: 2em;">Required</div>
						<div style="background-color: #0000ff; height: 50px; width: 50px; color: #ffffff; text-indent: 2em; line-height: 50px;">Required&nbsp;if&nbsp;applicable</div>
						<br>
						All other fields must be completed or marked N/A
					</div>
					<img src="../resources/accidentReport.png" height="600px">
				</section>
				
				<section>
					<h2> Accident Report</h2>
					<p>After completing the Incident/Accident Report, damage must be listed in TSD under the notes section for a vehicle</p>
				</section>
				
				<section>
					<h2> Accident Report</h2>
					<p>All completed paperwork is attached together and placed inside the vehicle on the dashboard:
					<ul>
						<li class="fragment roll-in">Rental agreement</li>
						<li class="fragment roll-in">Check-out slip</li>
						<li class="fragment roll-in">Check-in slip</li>
						<li class="fragment roll-in">Singed incident report</li>
						<li class="fragment roll-in">Copy of license and insurance card</li>
					</ul></p>
					<p>The agent that handles claims at your location will expect all paperwork to be on the dashboard</p>
				</section>
				
				<section>
					<h2>Checking Your Sitting</h2>
					<p>Your sitting will show what vehicles are available for rent at your location.  You should always have keys for each of the vehicles on your sitting list</p>
					<img src="../resources/readyLine.jpg" width="25%">
				</section>
				
					
				<section>
					<img src="../resources/keyrack.png">
					<ul>
						<li class="fragment roll-in">Check each key on your key rack against the sitting list in TSD sorted by stall<p>(If your location does not list keys in TSD, match the keys up at your location to your sitting available vehicles</p></li>
						<li class="fragment roll-in">Any discrepancy between the key rack and TSD should be handled accordingly</li>
						<li class="fragment roll-in">Any units that show up with holds should be checked with management</li>
						<li class="fragment roll-in">Check your sitting frequently!</li>
					</ul>
				</section>

				<section>
					<h2>Closing a Rental Agreement</h2>
					<p>Rental agreements should be closed via the iPad unless there is damage or your ipad is not functioning</p>
					<img src="../resources/ipad.png" style="-webkit-transform: rotate(90deg);
						-moz-transform: rotate(-90deg);
						-o-transform: rotate(-90deg);
						-ms-transform: rotate(-90deg);
						transform: rotate(-90deg); width: 30%;">
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad01.png" width="400px" height="300px">
					<p>The iPad’s Home Screen: At the bottom there are two icons. The icon that says ‘Rental.NET’ is the full version that is used on the computers. The second icon is for the TSD Mobile Menu. For returns, use the TSD Mobile icon.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad02.png" width="600px" height="400px">
					<p>If you ever see this warning, just click 'Continue'
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad03.png">
					<p>Log in using the same username and password you use for TSD on the computers</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad04.png">
					<p>You should be brought to this screen. Tap ‘Return R/A’</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad05.png">
					<p>This is the Rental Agreement List page. The rentals listed on this page are in order of expected return time. You may not be able to find them directly from this screen. If so, tap ‘Search’.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad06.png">
					<p>You can search for contracts by R/A #, VIN number, plate number, or unit #</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad07.png"  width="700px" height="500px">
					<p>If there is a broadcast note on the contract, it will be displayed.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad08.png"  width="700px" height="500px">
					<p>Record the fuel and mileage and press Continue.</p>
					<p>This is very important as it may result in undercharging or overcharging customers if not done properly.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad09.png">
					<p>The charges for the contract will be displayed. Click Save. Here comes the important part!</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad10.png">
					<p>Do not hit ‘Done’ at this point! You still have to take a signature! Tap ‘Print Receipt’.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad11.png">
					<p>You will be prompted about opening a pop-up. Click ‘Allow’.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad12.png">
					<p>A new tab will open with the receipt page. Tap on the red ‘Sign’ button and a signature area will pop up</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad13.png"   width="600px" height="400px">
					<p>Have the renter sign, either with their finger, or the stylus pen attached to the iPad. Then click ‘Save’ (the gray button) and then ‘Save’ again (blue button).</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad14.png">
					<p>A printable copy of the receipt will be shown. If the customer wants a paper receipt, follow the steps listed in the section below. Otherwise, hit the small X to close the tab that says ‘ShowFile.aspx’.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad15.png">
					<p>You will be brought back to this screen. Tap ‘Done’ to complete the return.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad16.png">
					<p>Tap the menu button circled in red above.</p>
					
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad17.png">
					<p>Tap 'Print'</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad18.png">
					
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad19.png">
					<p>Choose the correct printer, then tap the ‘Printer Options’ button.</p>
					
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad20.png">
					<p>Finally, tap the ‘Print’ button. The receipt should now be printing out at the kiosk.</p>
					
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad21.png">
					<p>Tap the X circled in red above.</p>
				</section>
				<section>
					<img src="../resources/ipadreturns/ipad22.png">
					<p>You will be brought back to this screen. Tap ‘Done’ to complete the return.</p>
				</section>
				
				<section>
					<img src="../resources/ipadreturns/ipad23.png">
					<p>The return is complete, and the Rental Agreement List will be shown again.</p>
				</section>
				
				<section>
					<div style="float: left; width: 55%;">
						<h2>Making Units Available</h2>
						<p>As soon as vehicles are parked in the ready line it is the kiosk agent's responsibility to make sure keys are entered into TSD <h4>promptly</h4></p>
						<p>You will have to do this throughout the day</p>
						<p>Never make a unit available that is not properly tagged or if the tag is damaged or unreadable</p>
					</div>
					<div style="float: right; width: 40%;">
						<img src="../resources/keyTag.png">
					</div>
				</section>
				
				<section>
					<div style="width: 55%; float: left;">
						<h2>Vehicle Safety</h2>
						<ul>
							<li class="fragment roll-in">Always operate vehicles in a safe manner.  This is especially important when picking up a vehicle from our return areas</li>  
							<li class="fragment roll-in">When parking vehicles always ensure there is enough room to walk around them and enter/exit</li>
							<li class="fragment roll-in">It's never ok to 'bump bumpers'</li>
							<li class="fragment roll-in">It is against company policy to use a cell phone or electronic device when operating a motor vehicle</li>
						</ul>
					</div>
					<div style="width: 40%; float: right;">
						<img src="../resources/safetyPolice.png">
					</div>
				</section>
				
				<section>
					<p>E-Z Rent-A-Car policy requires all employees must:
					<ul>
						<li class="fragment roll-in">Wear company issued ID</li>
						<li class="fragment roll-in">Carry driver's license when operating motor vehicles</li>
						<li class="fragment roll-in">Not be under the influence of any mind altering substances while on duty (E-Z Rent-A-Car is a drug free work place)</li>
						<li class="fragment roll-in">Always maintain a lawful speed and follow the rules of the road when driving a vehicle</li>
					</ul>
					<div class="fragment roll-in"><img src="../resources/driveCrazy.png"><p style="float: right;">Never drive in an unsafe manner while in a company vehicle</p></div>
				</section>
				
				<section>
					<h2>Accidents</h2>
					<div class="floatRight">
						<p class="fragment roll-in">If you are involved in an accident, it is E-Z Rent-A-Car policy to immediately inform your manager on duty and an accident report must be filed</p><br>
						<p class="fragment roll-in">If you are involved in an accident off property you must immediately call both the police to obtain a police report and a manager on duty</p><br>
					</div>
					<div class="floatLeft">
						<img src="../resources/accident.jpg">
						<p class="fragment roll-in">Any employee involved in an accident may be suspended pending an investigation</p><br>
					</div>
				</section>
				
				<section>
					<h2>Frequently Asked Questions</h2>
					<h5 class="fragment roll-in">What do I do if I want to extend my vehicle rental</h5>
					<li class="fragment roll-in">Contact the location directly or call the customer service department to extend your contract over the phone (cash rentals must be done in person).</li>
					<h5 class="fragment roll-in">Are there any fees for extending my rental or returning my rental early?</h5>
					<li class="fragment roll-in">No, you will only be charged for the days (24 hour period) you used the vehicle.</li>
					<h5 class="fragment roll-in">May I return the vehicle to another location?</h5>
					<li class="fragment roll-in">Yes, however, in most locations there is an additional drop fee.</li>
					<h5 class="fragment roll-in">What do I do if I have a break down?</h5>
					<li class="fragment roll-in">Call our customer service department. Remind the customer that they are responsible for flat tires and dead batteries.</li>
					<img src="../resources/question.png" style="position: absolute; top: 0%; right: 0%; width: 15%;">
				</section>
				
				<section>
					<h5 class="fragment roll-in">Do I have to return the vehicle full of fuel?</h5>
					<li class="fragment roll-in">If the customer has not prepaid for fuel they must refuel within 10 miles of the airport.</li>
					<h5 class="fragment roll-in">When will my deposit be returned to my account?</h5>
					<li class="fragment roll-in">E-Z Rent-A-Car releases your deposit immediately upon return.  However, it may take your bank 3 to 10 business days to release the funds.</li>
					<h5 class="fragment roll-in">Can anyone drive this vehicle?</h5>
					<li class="fragment roll-in">No, only renters listed on the contract.  However, you may add on additional drivers at any E-Z Rent-A-Car location.</li>
					<h5 class="fragment roll-in">May I smoke in the vehicle</h5>
					<li class="fragment roll-in">We have a non-smoking policy in all of our vehicles and there is a heafty fee for any renter that smokes in the vehicle</li>
				</section>
				
				<section>
						<img src="../resources/confetti.gif" style="width: 100%; position: absolute; top: 0; left: 0;">
						<h2>Congratulations!</h2>
						<p>This concludes the basic training for your position as a Kiosk Agent / Return Agent</p><br>
						<p>There is much more to learn though On the Job Training and experience in the field</p><br>
						<p>If you have any questions don’t hesitate to ask your supervisor</p><br>
						<p>Feel free to reference this training if ever you have questions</p>
						<a href="../Quizzes/kioskExam.php" class="button">Take the Exam</a>
						
				</section>
				
			</div>

		</div>

		<script src="../lib/js/head.min.js"></script>
		<script src="../js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: false,
				slidenumber: true,
				hideAddressBar: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Parallax scrolling
				// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
				// parallaxBackgroundSize: '2100px 900px',

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: '../lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: '../plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '../plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '../plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: '../plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: '../plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
