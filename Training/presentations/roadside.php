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

		<title>EZ - Roadside Assistance</title>

		<meta name="description" content="Roadside Assistance">
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
					<h3>Providing the best</h3>
					<h1>Roadside Assistance</h1>
					<img src="../resources/roadsideAssistance.jpg">
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
					<h2>Roadside Assistance Overview</h2>
					<p>There are several steps to a breakdown:</p>
					<div class="floatLeft">
						
						<ol>	
							<li class="fragment roll-in">Call for roadside assistance is received</li>
							<li class="fragment roll-in">Information gathered</li>
							<li class="fragment roll-in">Required tools and paperwork assembled</li>
							<li class="fragment roll-in">Driver dispatched</li>
							<li class="fragment roll-in">Roadside assistance completed</li>
							<li class="fragment roll-in">Customer satisfaction ensured</li>
							<li class="fragment roll-in">Return to base</li>
						</ol>
					</div>
					<div class="floatRight">
						<img src="../resources/smileAgent.png">
					</div>
				</section>
				
				<section>
					<h2>Receiving the Call</h2>
					<div class="floatRight">
						<li class="fragment roll-in">Roadside assistance calls are handled in a prompt manner</li>
						<li class="fragment roll-in">In most locations kiosk agents, counter agents, as well as managers and supervisors are responsible for handling roadside assistance calls</li>
						<li class="fragment roll-in">Never blind transfer a roadside assistance call: ensure that the call reaches a live person before transferring the call</li>
					</div>

					<div class="floatRight">
						<img src="../resources/smileCall.png">
					</div>
				</section>
				
				<section style="text-align: left;">
					<p>When receiving a call:</p>
					<li class="fragment roll-in">Ask for the customer's name</li>
					<li class="fragment roll-in">Ask if the customer is in a safe place</li>
					<li class="fragment roll-in">Ask the customer for a phone number to reach them in the event that you are disconnected</li>
					<li class="fragment roll-in">Ask the customer for the rental agreement number or the unit number on the back of the vehicle's key
					<p class="fragment roll-in" style="text-align: center; font-size: .75em;">(Note if they have purchased roadside assistance when you look up their contract)</p></li>
					<li class="fragment roll-in">Ask the customer to describe the problem</li>
					<img src="../resources/cordlessPhone.png" style="position: absolute; top: 0; left: 90%; width: 30%;">
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
