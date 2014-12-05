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

		<title>EZ - Facts</title>

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
					<h1>Getting to Know</h1>
					<img src="../ezlogo.png" width="40%">
				</section>
				
				<section>
					<h2>Navigating This Presentation</h2>
					<p>Use the arrows on your keyboard to navigate left and right through the slides<br><img src="../resources/arrowsKeyboard.png"></p><br>
					<p class="fragment roll-in">You can also use the arrows in the bottom right to advance or replay slides</p>
				</section>
				
				<section>
					<p>At E-Z Rent-A-Car, exceeding customer expectations is what we thrive on.  Providing our customer with a superior customer service experience and warm hospitality is the primary job function of every employee.  Each employee plays a specific role in ensuring our success.</p>
					<img src="../resources/smileAgent.png" style="border-radius: 50%;">
				</section>
				
				<section>
					<h2>A Brief company history and our path</h2>
					<p>E-Z Rent-A-Car is a Florida based corporation offering car rental services to lesiure travellers and the general public.</p>
					<p>We are a privately owned and operated company that was established in Orlando Florida in 1994.</p>
					<p>Since our humble beginnings with a fleet of only 9 vehicles, E-Z Rent-A-Car has experienced unprecedented growth.</p>
				</section>
				
				<section>
					<h2>Locations</h2>
					<div class="floatLeft">
						<p>We currently operate out of 13 locations:</p>
						<ol style="font-size: .75em; line-height: 1em;">
							<li>(MCO) Orlando Airport - 1994&nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(IDR) I-Drive, Orlando - 1995</li>
							<li>(ATL) Atlanta - 1996&nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(MIA) Miami - 1997&nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(DFW) Dallas Fort Worth - 1999&nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(TPA) Tampa - 2000 (<img src="../resources/aeroplane.png"> 2017)</li>
							<li>(FLL) Fort Lauderdale - 2002 &nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(DEN) Denver - 2005</li>
							<li>(LAX) Los Angeles - 2007</li>
							<li>(LAS) Las Vegas - 2011&nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(SEA) Seattle - 2011&nbsp; <img src="../resources/aeroplane.png"></li>
							<li>(SAN) San Diego - 2012 (<img src="../resources/aeroplane.png"> 2015)</li>
							<li>(RSW) Fort Meyers - 2013</li>
						</ol>
					</div>
					<div class="floatRight">
						<img src="../resources/EZRACNation.png">
						<p>We have over 10,000 rental vehicles in our fleet across the USA!</p>
					</div>
				</section>
				
				<section>
					<h2>We're always growing</h2>
					<p>We have several new locations planned for the future:</p>
					<img src="../resources/hawaii.png">
					<img src="../resources/chicago.png">
					<img src="../resources/sanAntonio.png">
					<img src="../resources/Austin.png">
				</section>
				
				<section>
					<h2>Corporate HQ</h2>
					<p>Our corporate headquarters is located in sunny</p>
					<img src="../resources/orlando.jpg">
					<p>2003 McCoy Road</p>
					<p>Orlando, FL 32809</p>
					<p>407-888-0500</p>
				</section>
				
				<section>
				<p>Our Corporate HQ is also home to the following departments:</p>
				<p>Risk </p>
				<p>Reservations Call Center</p>
				<p>Customer Service Call Center</p>
				<p>Rates </p>
				<p>Accounting</p>
				<p>Human Resources</p>
				<p>Information Technology</p>
				<p>Fleet</p>
				</section>
				
				<section>
					<h2>Meet Our Executives</h2>
					<div width="80%">
					<h4>Christine Colarusso</h4> VP of Loss Pervention and Quality Assurance<br><br>
					<h4>Charlie Graham</h4> VP of Business Development</br><br>
					<h4>Mark Murray</h4> Cheif Financial Officer</br>
					</div>
					<img src="../resources/executives.png" style="position: absolute; top: 40%; right: 0;">
				</section>
				
				
				<section>
					<h2>Superior Product Knowledge</h2>
					<div class="floatRight" style="width: 55%;">
					<p>In your role at <br>E-Z Rent-A-Car it is important that you understand the services that <br>E-Z Rent-A-Car offers, the locations of our offices, and the number of vehicles we currently have in our fleet.</p>
					<br>
					<p>The more you know about the company and our operation the stronger <br>E-Z Rent-A-Car becomes!</p>
					</div>
					<img src="../resources/ezStrength.png" style="position: absolute; top: 20%; left: 0; width: 40%;">
				</section>
				
				<section>
					<h2>Discounts</h2>
					<p>At E-Z Rent-A-Car we value our customers, so we provide rental discounts to:</p>
					<div style="text-align: left;">
						<li>Students</li>
						<li>Seniors (50+)</li>
						<li>Teachers</li>
						<li>Military and Government</li>
						<li>Police</li>
						<li>Airline Employees</li>
						<li>E-Z Money Members</li>
					</div><br>
					<p>E-Z Rent-A-Car has a strong social media presence and rewards customers for liking us on facebook!</p>
					<img src="../resources/facebookLike.png" width="20%">
				</section>
				
				<section>
					<h2>E-Z Review</h2>
					<!--<img src="../resources/question.png">-->
					<div class="fragment roll-in" style="position: absolute; top: 80%; left: 10%; width: 80%;"><div class="fragment fade-out">
					<h1>Q:</h1>Do you have a location in Miami?
					</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 80%; left: 10%; width: 80%;"><div class="fragment fade-out">
					<h1>A:</h1>Yes!
					</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 80%; left: 10%; width: 80%;"><div class="fragment fade-out">
					<h1>Q:</h1>Do you give discounts to Senior Citizens?
					</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 80%; left: 10%; width: 80%;"><div class="fragment fade-out">
					<h1>A:</h1>Yes, we give discounts for senior citizens, students, police, military, teachers, airline employees, and members of our E-Z Money program.
					</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 80%; left: 10%; width: 80%;"><div class="fragment fade-out">
					<h1>Q:</h1>Do we have our own reservations call center?
					</div></div>
					
					<div class="fragment roll-in" style="position: absolute; top: 80%; left: 10%; width: 80%;"><div class="fragment fade-out">
					<h1>A:</h1>Yes, our reservations call center is located in Orlando Florida and operates 24/7.
					</div></div>
				</section>
					
				<section>
					<h2>getting to know you</h2>
					<p>Now that you know a little more about E-Z Rent-A-Car, it's time to learn more about your job and about the significance of your role in our company</p><br>
					<a class="button" href="http://intranet/training/main.php">Back to the main page</a>
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