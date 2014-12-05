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

		<title>EZ - Shuttle Driver</title>

		<meta name="description" content="Excelent Shuttle Service">
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
					<h3>Your guide to:</h3>
					<h1>Excellent Shuttle Service</h1>
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
					<div class="floatLeft" style="font-size: .80em;">
						<p>In many E-Z Rent-A-Car locations, the beginning and ending to an enjoyable rental experience begins with the shuttle service. The following standards of service have been established to help us maintain the highest level of satisfaction:</p>
						<ul>
							<li class="fragment roll-in">Always be as prompt as possible</li>
							<li class="fragment roll-in">Always welcome the renter with a smile</li>
							<li class="fragment roll-in">Always offer and provide appropriate assistance</li>
							<li class="fragment roll-in">Always thank the renter for renting with E-Z Rent-A-Car</li>
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/ezBus.png" style="margin-top: 50%;">
					</div>
				</section>
				
				<section>
					<h2>Always be as prompt as possible</h2>
					<ul>
						<li class="fragment roll-in">Part of delivering prompt service is providing accurate and specific estimates to the amount of time the renter will wait for pickup.</li>
						<li class="fragment roll-in">Renters should always be given specific directions as where to wait for the shuttle</li>
						<li class="fragment roll-in">It is imperative that we fully explain the return shuttle process during the rental pickup process to ensure the renter's timely return to the airport</li>
						<li class="fragment roll-in">Knowledge of airline terminal locations allow for expeditious drop off and pickup</li>
					</ul>
					<img src="../resources/stopwatch.png" style="position: absolute; top: -5%; left: -10%; width: 15%;">
				</section>
				
				<section>
					<h2>Always greet the Renter with a smile</h2>
					<ul>
						<li class="fragment roll-in">Shuttle bus drivers are one of the first representatives of E-Z Rent-A-Car that a renter encounters</li>
						<img src="../resources/smile.png" style="position: relative; left: 50%; margin-left: -150px;">
						<li class="fragment roll-in">An enthusiastic greeting and a smiling face will go along way to ensuring the satisfaction of the renter</li>
					</ul>
				</section>
				
				<section>
					<h2>Always offer and provide appropriate assistance</h2>
					<ul>
						<li class="fragment roll-in">When a renter is picked up by an E-Z Rent-A-Car shuttle he or she should always be offered assistance with their luggage</li>
						<li class="fragment roll-in">This assistance should always be offered again when the renter is dropped off at our location</li>
					</ul>
				</section>
				
				<section>
					<h2>Always thank the renter for renting with E-Z Rent-A-Car</h2>
					<ul>
						<li class="fragment roll-in">A strong ending to a renter's experience is as important, or even more important, to the successful impression of that experience</li>
						<li class="fragment roll-in">Do not ask or expect gratuity
						<ul>
							<li class="fragment roll-in">There should not be any signage or money in sight of the renter to induce gratuity</li>
							<li class="fragment roll-in">If you are offered a tip, you have earned it by following the above procedures</li>
						</ul></li>
					</ul>
				</section>
				
				
				<section>
					<h2>Shuttle Driver Responsibilities</h2>
					<ul>
						<li class="fragment roll-in">You are responsible for the cleanliness of your bus</li>
						<li class="fragment roll-in">Never have inappropriate music or talk radio on</li>
						<li class="fragment roll-in">Utilize etiquette and professionalism during all customer interactions</li>
						<li class="fragment roll-in">Always ensure your vehicle is being properly serviced</li>
						<li class="fragment roll-in">Ensure your vehicle is properly fuelled</li>
						<li class="fragment roll-in">Ensure communication equipment (walkie-talkies) are properly functioning and that volume is appropriate</li>
						<li class="fragment roll-in">Communicate effectively with other drivers and dispatchers to ensure effective service</li>
					</ul>
				</section>
				
				<section>
					<h2>Customer Service</h2>
					<div class="floatLeft" style="font-size: .75em;">
						<p class="fragment roll-in">When on duty you should always be in company uniform with name badge and company ID displayed.</p>
						<p class="fragment roll-in">There will be times that renters may ask for your assistance.  If you are unable to assist them, ensure that the renter is properly directed to an E-Z Rent-A-Car employee who will.</p>
						<p class="fragment roll-in">Always offer service with a smile.</p>
					</div>
					<div class="floatRight">
						<img src="../resources/uniformAgent.png">
					</div>
				</section>
				
				<section data-transition="fade" data-background="../resources/EZDriver.png">
					<div style="float: right; margin-top: -100px; background-color: #ffffff; padding: 20px; box-shadow: 5px 5px 0px #074f97;"><h2>driver dialogue</h2><span style="color: #074f97;">(to rental facility)</span></div>
					<br><br><br><br><br><br><br>
					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">Hello everyone my name is __________ (greet the renter with a smile). On behalf of E-Z Rent-A-Car I'd like to welcome you to <span style="text-decoration: underline;">LOCATION</span>.  The shuttle ride to the rental facility will take about _______ minutes.</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">Right now I'd like to take a few minutes to discuss a few safety precautions.  I ask that you remain seated until we reach our destination and that you do not eat, drink, or smoke while on the shuttle.</div></div>

					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">On return please give yourself enough time to return your rental car, take the shuttle ride back to the airport, and check-in and board your flight on schedule.</div></div>

					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">Our buses run every _______ minutes to and from the airport.</div></div>

					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">We will be pulling up to the rental facility in about two minutes.  Please remain in your seat until we come to a complete stop.  I will be unloading all of your belongings and instructing you on your next step.</div></div>

					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">Thank you for using E-Z Rent-A-Car and I look forward to seeing you on return. (Smile Smile Smile)</div></div>
				</section>
				
				<section data-transition="fade" data-background="../resources/EZDriver2.png">
					<div style="float: right; margin-top: -100px; background-color: #ffffff; padding: 20px; box-shadow: 5px 5px 0px #074f97;"><h2>driver dialogue</h2><span style="color: #074f97;">(to airport)</span></div>
					<br><br><br><br><br><br><br>
					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">Welcome back.  My name is ________ and I will be driving you to the airport.  Please make yourselves comfortable.  I will be happy to load your luggage for you.  We will be departing as soon as everyone has entered the shuttle.</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">The ride to the airport is approximately 8 minutes.  Please enjoy the view of our city.</div></div>

					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">We are now approaching the airport.  Please remain in your seat until we come to a complete stop.  I will be unloading all of the luggage.  Please take a moment to ensure that all of your luggage has been collected from the shuttle.</div></div>

					<div class="fragment roll-in" style="position: absolute; top: 100%; "><div class="fragment fade-out" style="background-color: #ffffff; color: #074f97; border-radius: 10%; padding: 5%; border: 5px solid #074f97;">Thank you for using E-Z Rent-A-Car and I look forward to seeing you on your next trip. (Smile Smile Smile)</div></div>
				</section>
				
				<section>
					
					<div class="floatLeft">
					<h2>Safety Tips</h2>
						<ul>
							<li class="fragment roll-in">Maintain a lawful speed</li>
							<li class="fragment roll-in">Follow the rules of the road</li>
							<li class="fragment roll-in">Always wear your seat belt</li>
							<li class="fragment roll-in">Slow to a complete stop before making a turn</li>
							<li class="fragment roll-in">Always perform safe lifting procedures when helping renters with their luggage</li>
						</ul>
						<br><br>
						
					</div>
					
					<div class="floatRight">
						<img src="../resources/safetyPolice.png">
						<p class="fragment roll-in" style="font-size: .75em;">It is your responsibility to get the renter to and from the airport in a safe and comfortable environment</p>
					</div>
				</section>
				
				<section>
					<h2>Never</h2>
					<ul>
						<li class="fragment roll-in">Never move a vehicle until all doors are shut and seatbelts are fastened</li>
						<li class="fragment roll-in">Never board or offboard passengers on the traffic side</li>
						<li class="fragment roll-in">Never board passengers through any entry way except the door</li>
						<li class="fragment roll-in">Never transport anyone except E-Z Rent-A-Car customers and employees</li>
						<li class="fragment roll-in">Never drive faster than the posted speed limit</li>
					</ul>
				</section>
				
				<section>
					<p>E-Z Rent-A-Car policy requires all employees must:
					<ul style="font-size: .8em;">
						<li class="fragment roll-in">Wear company issued ID</li>
						<li class="fragment roll-in">Carry driver's license when operating motor vehicles</li>
						<li class="fragment roll-in">Not be under the influence of any illegal drugs or alcohol while on duty (E-Z Rent-A-Car is a drug free work place)</li>
						<li class="fragment roll-in">Shuttle drivers are required to have an updated FMSCA certification available on request from the DOT</li>
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
						<img src="../resources/confetti.gif" style="width: 100%; position: absolute; top: 0; left: 0;">
						<h2>Congratulations!</h2>
						<p>This concludes the basic training for your position as a Shuttle Driver</p><br>
						<p>There is much more to learn though On the Job Training and experience in the field</p><br>
						<p>If you have any questions don’t hesitate to ask your supervisor</p><br>
						<p>Feel free to reference this training if ever you have questions</p>
						
						<a href="../Quizzes/shuttleExam.php" class="button">Take the Exam</a>
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
