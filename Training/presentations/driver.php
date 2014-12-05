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

		<title>EZ - driver</title>

		<meta name="description" content="Excellent Vehicle Condition">
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
		
		<style>
		.floatRight{
		width: 48%;
		float: right;
		}

		.floatLeft{
			width: 48%;
			float: left;
		}
		</style>
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
					<h3>Driver Guidelines</h3>
					<h1>Excellent Vehicle Condition</h1>
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
						<h2>Your Role</h2>
					<ul>	
						<li class="fragment roll-in">As a driver you play a vital role in our organization.</li>
						<li class="fragment roll-in">Your main duties are to ensure fantastic vehicle presentation and efficient delivery of vehicles to and from service, maintenance, and renter pick up areas.</li>
						<li class="fragment roll-in">At times you will also have to drive to assist passengers with breakdowns</li>
					</ul>
					<img src="../resources/driver.jpg">
				</section>
				
				<section>
					<div class="floatLeft">
						<ul>	
							<li class="fragment roll-in">There will be times that renters may ask for your assistance.  If you are unable to assist them, ensure that the renter is properly directed to an E-Z Rent-A-Car employee who will.</li>
							<li class="fragment roll-in">Always offer service with a smile.</li>
							<li class="fragment roll-in">Remember: The customer’s time is valuable. </li>
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/smileElectric.png">
					</div>
				</section>
						
				
				<section>
					<h2>Driver Responsibilities</h2>
					<div class="floatRight">
						<ul>
							<li class="fragment roll-in">Presentation</li>
							<li class="fragment roll-in">Checking for service lights</li>
							<li class="fragment roll-in">Fueling vehicles</li>
							<li class="fragment roll-in">Body damage inspection </li>
							<li class="fragment roll-in">Completing check-out slip</li>
							<li class="fragment roll-in">Transporting vehicles to and from return area, service area, off site maintenance areas, and parking on ready line</li>
							<li class="fragment roll-in">Driving to and assisting renters in the event of a break down</li>
						</ul>
					</div>
					<div class="floatLeft">
						<img src="../resources/uniformAgent.png">
					</div>
				</section>
				
				<section>
					<h2>Customer Service</h2>
					<div class="floatLeft" style="font-size: .75em;">
						<p class="fragment roll-in">When picking up a vehicle to be cleaned, if the renter is still at the vehicle, make eye contact, greet them with a smile, and inquire if you may take the vehicle to be cleaned.  Wish the renter a wonderful day and proceed.</p>
						<p class="fragment roll-in">There will be times that renters may ask for your assistance.  If you are unable to assist them, ensure that the renter is properly directed to an E-Z Rent-A-Car employee who will.</p>
						<p class="fragment roll-in">Always offer service with a smile.</p>
					</div>
					<div class="floatRight">
						<img src="../resources/smile.png">
					</div>
				</section>
				
				<section>
					<h2>Driver</h2>
					<div class="floatLeft">
						<ul>
							<li class="fragment roll-in">You will perform regular non-mechanical maintenance services such as:
								<ul>
								<li class="fragment roll-in">Checking and maintaining tire pressure</li>
								<li class="fragment roll-in">Ensuring all maintenance lights are off</li>
								<li class="fragment roll-in">Gassing the vehicle, in a timely and safe manner. </li> 
								</ul></li>
							<li class="fragment roll-in">You will also identify and report any vehicle damage.</li>						
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/oilCheck.jpg">
					</div>
					<p class="fragment roll-in">Essential duties and responsibilities will vary by location</p>
				</section>
				
				<section>
					<h2>Body Damage Inspection</h2>
					<ul>
						<li class="fragment roll-in">The cost of Insurance and Vehicle damage is one of the largest costs in doing business in the car rental industry.  Your job in helping to control this cost is to consistently follow E-Z Rent-A-Car’s procedures that we outline in the Standard Operating Procedures and in the following examples.</li>
						<li class="fragment roll-in">Before delivering a vehicle to the ready line please inspect and document the details of the vehicle’s condition and look for new vehicle damage. </li>
						<li class="fragment roll-in">Before picking up a vehicle from the return line and transporting it to the service bay, check the vehicle for damage.</li>
						<img src="../resources/moneyBags.png" style="position: absolute; top: 70%; left: 85%; width: 10%;">
					</ul>
				</section>
				
				<section>
					<div class="floatLeft">
						<p>In other words: <span style="text-decoration: underline;">Any time you move a vehicle you must first check for new vehicle damage.</span></p>
						<li class="fragment roll-in">Start at the front of the vehicle and walk around to your left</li>
						<li class="fragment roll-in">Check for dents, scratches, and cracks</li>
						<li class="fragment roll-in">Report any vehicle damage to the kiosk or a supervisor or you own it.</li> 
					</div>
					<div class="floatRight">
						<img class="fragment roll-in" src="../resources/arrowTop.png">
						<img src="../resources/vehicle.png" style="position: relative; top:-80px;">
						<img class="fragment roll-in" src="../resources/arrowBottom.png" style="position: relative; top:-120px;">
					</div>
				</section>
				
				<section>
					<h2>Vehicle Check Out Slip</h2>
					<div style="float: left; width: 40%;">
						<img src="../resources/vehicleCheck-OutSlip.png">
					</div>
					<div style="float: right; width: 55%;">
						<ul>
							<li class="fragment roll-in">Each vehicle will need a Vehicle Check-out Slip attached to the keys.</li>
							<li class="fragment roll-in">The following fields must be completed by the driver before presenting the keys to the counter agent/kiosk
							<ul>
								<li class="fragment roll-in">Today’s date</li>
								<li class="fragment roll-in">Space #</li>
								<li class="fragment roll-in">Car #</li>
								<li class="fragment roll-in">Mileage Out (Important!)</li>
								<li class="fragment roll-in">Gas Out</li>
							</ul></li>
							</ul>
					</div>
				</section>
				
				<section>
					<div style="float: left; width: 55%;">
						<ul>
							<li class="fragment roll-in">Any dents or damages must be marked using the following codes on the vehicle diagram:
							<ul>
								<li class="fragment roll-in">X – Dents</li>
								<li class="fragment roll-in">M – Missing</li>
								<li class="fragment roll-in">O – Scratches</li>
							</ul></li>
							<li class="fragment roll-in">Sign your name in the remarks section</li>
							<li class="fragment roll-in">Remember, these are carbon copies. Please do not fold or scratch</li>
						</ul>
					</div>
					<div style="float: left; width: 40%;">
						<img src="../resources/vehicleCheck-OutSlip_Complete.png">
					</div>
				</section>
				
				<section>
					<div style="width: 55%; float: left;">
						<h2>Key Tags</h2>
						<p>It's very important that all keys have a key tag attached.</p>
						<p>If the vehicle is missing a key tag or the key tag is damaged or unreadable, notify a supervisor to get it replaced.</p>
					</div>
					<div style="width: 40%; float: right;">
						<img src="../resources/keyTag.png">
					</div>
				</section>
				
				<section>
					<h2>Look before you touch!</h2>
					<p class="fragment roll-in">Always visually check under seats / seat pockets / glove compartments / etc... before reaching inside as the renter may have left something dangerous:</p>
						<ul>
							<li class="fragment roll-in">Syringes/Needles</li>
							<li class="fragment roll-in">Firearms</li>
							<li class="fragment roll-in">Narcotics</li>
							<li class="fragment roll-in">Exotic Animals</li>
						</ul>
						<img src="../resources/warning.png" style="position: absolute; top: 50%; right: 20%; width: 15%;">
					<p class="fragment roll-in">Never touch firearms or narcotics left in a vehicle.  Inform your supervisor immediately.</p>
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
					<h2>Final Vehicle Presentation</h2>
					<ul>
						<li class="fragment roll-in">Fasten Seat Belts (except the driver's seatbelt) – This signifies that the vehicle was serviced and the safety restraints are in working condition</li>
						<li class="fragment roll-in">Turn the radio off</li>
						<li class="fragment roll-in">Ensure the windows are rolled all the way up
						<li class="fragment roll-in">Adjust climate control settings to appropriate levels for weather conditions</li>
						<li class="fragment roll-in">Park vehicles according to your location guidelines</li>
						<li class="fragment roll-in">The exterior of the vehicle should be in clean condition upon delivery</li>
					</ul>
				</section>
				
				<section>
					<div class="floatRight">
						<h2>Excellence is the only option</h2>
						<p class="fragment roll-in">How well you do your job directly affects opinions of our company</p>
						<br>
						<p class="fragment roll-in">Ensure everything is perfect for our renters before delivery</p>
					</div>
					<div class="floatLeft">
						<img src="../resources/survey.png">
					</div>
				</section>
				
				<section>
					<h2>Roadside Assistance / Breakdowns</h2>
					<div class="floatRight">
						<p class="fragment roll-in">Part of the responsibility of the service agent is providing prompt road side assistance to our customers</p><br>
						<p class="fragment roll-in">Always offer road side assistance with a smile.  Apologize to the renter for their inconvenience and assure them that <br>E-Z Rent-A-Car understands the value of their time</p><br>
					</div>
					<div class="floatRight" style="font-size: .75em;">
						<img src="../resources/vehiclePush.jpg">
						<p class="fragment roll-in">More information on vehicle breakdown procedures can be found in the vehicle breakdown module</p>
					</div>
				</section>
				
				<section>
					<div style="width: 55%; float: left;">
						<h2>Vehicle Safety</h2>
						<ul>
							<li class="fragment roll-in">Always operate vehicles in a safe manner.  This is especially important when picking up a vehicle from our return areas</li>  
							<li class="fragment roll-in">Upon return renters are very often in a rush to meet their flights, many renters are running behind and less vigilant of what goes on around them.</li>
						</ul>
					</div>
					<div style="width: 40%; float: right;">
						<img src="../resources/safetyPolice.png">
					</div>
				</section>
				
				<section>
					<h2>Vehicle Safety</h2>
					<div class="floatRight" style="font-size: .75em;">
						<ul>
								<li class="fragment roll-in">When parking vehicles always ensure there is enough room to walk around them and enter/exit</li>
								<li class="fragment roll-in">It's never ok to 'bump bumpers'</li>
								<li class="fragment roll-in">It is against company policy to use a cell phone, electronic device, or smoke when operating a motor vehicle</li>
								<li class="fragment roll-in">Smoking is only permitted in the designated smoking area</li>
						</ul>
					</div>
					<div class="floatLeft">
						<img src="../resources/noPhone.png" width="75%">
						<p style="font-size: .75em;">Always maintain a lawful speed and follow the rules of the road and the CONRAC when driving a vehicle</p>
					</div>
				</section>
				
				<section>
					<h2>Gassing Vehicles</h2>
						<ul>
								<li class="fragment roll-in">The use of cell phones is not permitted in the area of refuelling or while driving company vehicles</li>
								<li class="fragment roll-in">Cell phones are permitted only in the designated areas</li>
								<li class="fragment roll-in">No smoking is permitted near the gasoline tanks or while pumping gasoline</li>
								<li class="fragment roll-in">Smoking is only permitted in the designated areas</li>
						</ul>
				</section>
				
				<section>
					<p>E-Z Rent-A-Car policy requires all employees must:
					<ul>
						<li class="fragment roll-in">Wear company issued ID</li>
						<li class="fragment roll-in">Carry driver's license when operating motor vehicles</li>
						<li class="fragment roll-in">Not be under the influence of any mind altering substances while on duty (E-Z Rent-A-Car is a drug free work place)</li>
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
					<h2>Carwash Safety</h2>
					<ul>
						<li class="fragment roll-in">Drive the vehicle through the car wash at a speed no greater than 5MPH</li>
						<li class="fragment roll-in">When exiting the car wash check your surroundings before proceeding:
							<ul>
								<li class="fragment roll-in">Come to a full stop</li>
								<li class="fragment roll-in">Look left for oncoming traffic / pedestrians</li>
								<li class="fragment roll-in">Look right for oncoming traffic / pedestrians</li>
								<li class="fragment roll-in">It's better to wait a few seconds than pull out and collide with someone or something</li>
							</ul></li>
					</ul><br><br>
					<p class="fragment roll-in">Following safety procedures will eliminate potential damage to vehicles, pedestrians, and you!</p>
				</section>
				
				<section>
					<h2>Maintenance</h2>
					<div class="floatLeft" style="width: 70%;">
						<ul>
							<li class="fragment roll-in">Be sure to check for:
								<ul>
									<li class="fragment roll-in">Any interior dashboard lights</li>
									<li class="fragment roll-in">Wind shield washer fluid routinely</li>
								</ul></li>
							<li class="fragment roll-in">Check all tires for wear and air pressure
								<ul>
									<li class="fragment roll-in">Ensuring the safety of our renters is a high priority.  Vehicles with excessive wear on the tires can cause dangerous driving conditions.</li>
									<li class="fragment roll-in">Visually inspect tires to see if they are in need of air and for tread.</li>
								</ul></li>
						</ul>
					</div>
					<div class="floatRight" style="width:29%;">
						<img src="../resources/dashLights.jpg">
					</div>
				</section>
				
				<section>
					<p>Never put a vehicle on the ready line when:</p>
					<ul>
						<li class="fragment roll-in">Any of the dashboard lights are on</li>
						<li class="fragment roll-in">Tire tread does not meet guidelines</li>
						<li class="fragment roll-in">Smells of smoke</li>
						<li class="fragment roll-in">Severely stained seats</li>
						<li class="fragment roll-in">AC/heat is not functioning</li>
						<li class="fragment roll-in">Not all seatbelts are working properly</li>
						<li class="fragment roll-in">Fuel gage is not marked full(by location)</li>
						<li class="fragment roll-in">Mechanically unsound</li>
						<li class="fragment roll-in">Any interior lights not working</li>
						<li class="fragment roll-in">Missing any part of vehicle (bumper ,headlight, ect...)</li>
						<li class="fragment roll-in">Audio system not functioning</li>
					</ul>
					<img src="../resources/maintenanceMan.png" style="position: absolute; top: 15%; left: 60%;">
				</section>
				
				<section>
					<p>When parking clean and ready vehicles:</p>
					<ul>
						<li class="fragment roll-in">Always abide by the rules of the road and CONRAC rules</li>
						<li class="fragment roll-in">Always maintain the lawful speed limit</li>
						<li class="fragment roll-in">Park the vehicle in in accordance to your location guidelines.</li>
						<li class="fragment roll-in">Always be vigilant of any renter and or co-workers in your area and practice safety first!</li>
						<li class="fragment roll-in">Be informed as to the staging of your location’s vehicles.   Nicer vehicles should be showcased in full view of the renters.</li>
						<li class="fragment roll-in">Know where your location stored different vehicles: Hard hold, maintenance, sold, and accident vehicles</li>
						<li class="fragment roll-in">Pay attention to what vehicles are needed in the ready line area and inform your supervisor.</li>
						<li class="fragment roll-in">Never use a cell phone or electronic devices or smoke when operating a vehicle.</li>
					</ul>
				</section>
				
				<section>
					<p>E-Z Rent-A-Car is committed to providing our renters with vehicles that are clean, safe, and mechanically sound</p>
					<img src="../resources/carCheck.png">
					<p>You are the last check in ensuring our renters get the vehicles they deserve</p>
				</section>
				
				<section>
					<img src="../resources/confetti.gif" style="width: 100%; position: absolute; top: 0; left: 0;">
					<h2>CONGRATULATIONS!</h2>
					<p>This concludes the basic training for your position as a Driver</p>
					<br>
					<p>There is much more to learn through on the job training and experience in the field</p>
					<br>
					<p>If you have any questions don’t hesitate to ask your supervisor</p>
					<br>
					<p>Feel free to reference this training at any time</p>
					
					
					<a href="../Quizzes/driverExam.php" class="button">Take the Exam</a>
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
