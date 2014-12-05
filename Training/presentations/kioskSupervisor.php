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

		<title>EZ - Kiosk Supervisor</title>

		<meta name="description" content="Kiosk Supervisor">
		<meta name="author" content="Donerys Cuevas & Dante Marone">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
					<h1>Kiosk Supervisor</h1>
				</section>
				
				<section>
					<h2>Navigating This Presentation</h2>
					<p>Use the arrows on your keyboard to navigate left and right through the slides<br><img src="../resources/arrowsKeyboard.png"></p><br>
					<p class="fragment roll-in">You can also use the arrows in the bottom right to advance or replay slides</p>
				</section>
				
				<section>
				<h2>Your Role</h2>
				As a kiosk supervisor your position is extremely important in implementing the smooth flow of the pick-up and return areas.<br><br>		
				
				You are the immediate supervisor of the kiosk agents.  You are the "go to" person for questions and problems.<br><br>
				
				<h4>What does this mean?</h4>
				It means that you are the nucleus of our operation and how well you manage the kiosk directly impacts our operation as a whole.
				
				<img src="../resources/atom.png" style="width: 30%; ">
				</section>
				
				<section>
					<h2>Responsibilities</h2>
					<p>In addition to performing normal kiosk duties you have a number of other responsibilities</p>
					<p>These responsibilities are detailed on the following pages</p>
				</section>
				
				<section>
					<h2>meal breaks</h2>
					<p>Ensure all employees take their breaks.</p>
					<p>You are responsible for maintaining coverage during employee breaks.</p>
					<img src="../resources/break.png">
					<p>E-Z Rent-A-Car requires all full time employees takes a 30 minute meal break.  If an employee is hourly this break must be taken off the clock.</p>
				</section>
				
				<section>
					<h2>Vehicle Standards</h2>
					<p>Ensure that vehicles are sent back to the turnaround bay if not up to standards for:</p>
					<p>Cleanliness<p>
					<p>Mechanical Failures<p>
					<p>Broken Headlights / Tail lights<p>
					<p>Significant damage<p>
					<img src="../resources/carCheck.png">
				</section>
				
				<section>
					<h2>Check the Reservation Manifest</h2>
					<p>Be vigilant as to the vehicles that are needed throughout the day in connection with the reservation manifest.</p>
					<p>Communicate with lead drivers/manager as to the needs of the ready line.</p>
					<img src="../resources/readyLine.jpg" width="50%">
				</section>
				
				<section>
					<h2>Staging</h2>
					<p>Ensure the staging of our Elite Fleet vehicles is excellent.</p>
					<img src="../resources/eliteFleet.jpg" width="40%">
					<p>Luxury vehicles should be parked towards the front in full view of customers with sales signage visible.</p>
				</section>
				
				<section>
					<h2>Ensure cleaning is carried out</h2>
					<p>While it's not your job to do the cleaning, it is your job to make sure the cleaning is complete.  Here are some tips:</p>
					<div style="text-align: left;">
					<li>Have each employee pick up after themselves</li>
					<li>Assign a specific place for personal belongings out of view</li>
					<li>No food or drink in sight of customers</li>
					<li>Sweeping and cleaning a little thorough out the day will make cleaning much easier</li>
					<li>Windex the windows to keep them streak and mark free</li>
					<li>Child car seats should be stored neatly</li>
					</div>
				</section>
				
				<section>
					<h2>Car Seats</h2>
					<p>Ensure there are enough car seats available</p>
					<p>Double check the expiration dates on car seats to ensure full compliance</p>
					<div><img src="../resources/boosterCarSeat.png"><img src="../resources/rearCarSeat.png"><img src="../resources/toddlerCarSeat.png"></div>
					<p>Don't ever let a car seat that isn't up to our standards to be rented to a customer</p>
				</section>
				
				<section>
				<h2>Problem Vehicles</h2>
					<p>If you have a problem vehicle that isn't rentable, ensure the vehicle is handled appropriately.</p>
					<p>Call the manager on duty and let them know:</p>
					<div style="text-align: left">
						<li>Unit number of vehicles</li>
						<li>Issue / type of hold (Removal of vehicles that are on hard hold, sold, turn backs, maintenance, recalls, etc.)</li>
					</div><br>
					<p>Vehicles on the lot that do not start or have mechanical problems that make them unrentable, call the fleet supervisor/manager.</p>
					<p>These vehicles should be removed so they are not taking up space.</p>
				</section>
				
				<section>
					<h2>Finishing Touch</h2>
					<p>Last minute detailing of any vehicles, especially during rush hour windows, Armor All,  etc..</p>
					<img src="../resources/wash.png">
					<p>In the event that you see a vehicle with dirty windows or a luxury vehicle without Armor All on the wheels it is your responsibility to follow through with these duties, especially when tight on vehicles</li>
				
				</section>
				
				<section>
				<h2>Maintaining Flow</h2>
					<p>Maintain a  smooth flow through the pick-up/return areas.</p>
					<img src="../resources/EZMonk.png" width="30%">
					<p>When there are many dirty cars in the garage or your area you must make sure these vehicles are placed in a manner that does not block traffic and to make a safe environment until the vehicles can be removed</p>
				</section>
				
				<section>
				<h2>Uniforms</h2>
				<p>It is your responsibility to ensure employees are in proper uniform at all time and are wearing the proper identification such as E-Z Rent-A-Car badges and airport issued IDs.</p>
				<img src="../resources/uniformAgent.png" width="10%">
				<p>If an employee comes without the proper uniform, please notify the manager on duty.  This will result in a write up and may result in the employee being sent home.</p>
				</section>
				
				<section>
				<h2>Training and assigning new hires</h2>
				<p>When there is a new hire in the kiosk it is your responsibility to ensure they are properly trained.</p>  
				<img src="../resources/EZTraining.png" width="30%">
				<p>This may mean taking them under your wing or having them shadow an employee that you trust to mentor them.</p>
				</section>
				
				<section>
				<h2>Organizing Paperwork</h2>
				<p>Contracts should be filed by return date with check-in/check-out slips attached.</p>
				<img src="../resources/paperwork.png" width="30%">
				<p>All accident reports must be properly filled out and all paperwork is attached.</p>
				</section>

				
				<section>
					<h2>Damage</h2>
					<p>Insure that all employees are following correct procedure for identifying damage.</p>
					<img src="../resources/accident.jpg" width="30%">
					<p>Ensure that when damage is found it is handled accordingly and that all required paperwork is completed in full</p>
				</section>
				
				<section>
					<img src="../resources/leaderVboss.png" style="border: 5px solid #ffffff;">
					<p>At E-Z Rent-A-Car we only have leaders</p>
				</section>
				
				<section>
					<h2>your only option is success</h2>
					<p>If you follow the guidelines that were put forth in this training, you are on your way to becoming a great kiosk supervisor.<br>
					<p>Empower yourself and your employees to be the strongest links in the chain.</p>
					<img src="../resources/chain.png"><br>
					<a href="http://intranet/training/main.php" class="button">Back to the Main Page</a>
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