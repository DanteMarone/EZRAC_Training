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

		<title>Preventing Harassment in the Workplace</title>

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
		
		<style>
			body{
				background: url("../resources/swoop.png");
				background-size: 100%;
				background-repeat: no-repeat;
			}
			
		</style>
		

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
					<h3>E-Z Rent-A-Car</h3>
					<h1>Preventing Harassment In the workplace</h1>
					
				</section>
				
				<section>
					<h2>Navigating This Presentation</h2>
					<p>Use the arrows on your keyboard to navigate left and right through the slides<br><img src="../resources/arrowsKeyboard.png"></p><br>
					<p class="fragment roll-in">You can also use the arrows in the bottom right to advance or replay slides</p>
				</section>
				
				<section style="background-color: #ffffff; color: #000000;">
					<div style="float: left;">
						<h2>Pretest</h2>
						<p style="font-size: .75em">Please tick true or false for each</p>
						<p>A hostile environment allows the company to get more work completed?  <input type="checkbox">T or <input type="checkbox">F</p>
						<p>I am not responsible for a hostile environment.   <input type="checkbox">T or <input type="checkbox">F</p>
						<p>Being a male, a female cannot cause me to have a hostile environment?  <input type="checkbox">T or <input type="checkbox">F</p>
						<p>Only the supervisor(s) will have to go to court over a hostile environment law suit.  <input type="checkbox">T or <input type="checkbox">F</p>
						<p>Diversity in the work place is not important to the agency’s goals.   <input type="checkbox">T or <input type="checkbox">F</p>
					</div>
				</section>
				
				<section>
					<p>A hostile work environment serves no good purpose and interferes with E-Z Rent-a-Car's progress.</p>
					<br>
					<p>The prevention/ elimination of Harassment is <br><h2>EVERYONE'S</h2> responsibility.</p>
				</section>
				
				<section>
					<p>We must <span style="font-size: 1.5em;">LEARN</span> what to do</p>
					<br>
					<p>Do not become the next news story!</p>
					<br>
					<p style="margin-left: 25%">Or worse</p>
					<br>
					<p style="background-color: #1c5ba8; margin: 0 auto; width:50%; border: 5px solid #ffffff;">The next <span style="text-decoration: underline; color: #ff0000; font-size: 1.5em;">COURT</span> case</p>

				</section>
				
				<section style="text-align: left">
					<h2>COURSE OBJECTIVES:</h2>
					<p>Realize the significance of E-Z Rent-A-Car's policies and the law.</p>
					<br>
					<p><span style="text-decoration: underline;">For every employee to KNOW</span> they have a right to work in a respectful environment.</p>
					<br>
					<p>Cause self-examination of attitudes, beliefs, and actions toward those who are different.</p>
					<br>
					<p>Know the different types of harassment.</p>
				</section>
				
				<section>
					<h2>COURSE OBJECTIVES cont.</h2>
					<p>Understand whose job it is to <span style="color: #ff0000; text-decoration: underline;">STOP</span> harassment.</p>
					<br>
					<p>Understand what is expected when harassment occurs.</p>
					<br>
					<p>know HOW to deal with harassment when it happens</p>
				</section>
				
				

				<section>
					<p>Everyone should be familiar with the legal consequences of harassment.</p>
					<br><br>
							 <p>If you are not</p>
					<br><br>
					<p>PLEASE — seek assistance from the company in reviewing the laws.	</p>
				</section>
				
				<section>
					<h2>E-Z Rent-A-Car POLICIES REGARDING TYPES OF HARASSMENT INCLUDE:</h2>
					<br>
					<br>
					<ul style="float: left; margin-left: 25%;">
						<li>Workplace free from unlawful conduct like discrimination and harassment.</li>
						<li>Responsibilities</li>
						<li>Types of harassment</li>
						<li>Reporting procedures</li>
						<li>Consequences</li>
					</ul>
				</section>

				
				<section>
				<h2>Just WHAT type behavior is unacceptable in the work place?</h2>
				<p class="fragment fade-in"><span class="fragment fade-out">A pat on the back?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">A married couple kissing in front of coworkers?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">Flirting?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">Political posters?</span></p>
				<p class="fragment fade-in"><span class="fragment fade-out">Jokes about religion?</span></p>
				<h3 class="fragment fade-in">There is no clear answer to this question</h3>
				</section>
				
				<section>
					<p>What is the most common type of harassment in today’s work place?</p>
					<br>
					<h1 class="fragment roll-in"><img src="../resources/sexualHarassment.jpg" width="50%"><br>SEXUAL HARASSMENT</h1>

				</section>
				
				<section>
					<h2>TYPES OF HARASSMENT</h2>
					<li>Quid Pro Quo</li>
					<li>Hostile Environment</li>
					<li>Same Sex</li>
					<li>Non-Employee</li>
					<li>Third Party</li>
					<li>Retaliation</li>
					<br>
					<p>Among others</p>
					
				</section>
				
				<section>
					<h2>QUID PRO quo HARASSMENT</h2>
					<p style="color: #ff0000;">Blatant - even one occurance is considered illegal</p>
					<br>
					<p>Quid pro quo means "this for that" and is harassment involving someone with authority over the victim, using his or her position to gain sexual favors.
					<br>
					<br>
					Example:
					<br>
					A supervisor demands sexual favors in return for better treatment of a subordinate, or threatens the subordinate with firing, demotion, or transfer unless sexual favors are given.

				</section>
				
				<section>
					<h2>HOSTILE ENVIRONMENT HARASSMENT</h2>
					<p style="color: #ff0000;">Less obvious, but often the foundation for charges of sexual harassment.</p>
					<br>
					Example:
					<br>
					If behavior of a sexual nature creates an offending, intimidating, or hostile work environment for another employee it is sexual harassment. 
				</section>

				<section>
					<h2>HOSTILE ENVIRONMENT HARASSMENT</h2>
					 <p>Courts are likely to find an illegal hostile work environment where there is:</p>
					<p style="color: #ff0000; float: left;">Pornography</p>                            <p style="color: #ff0000; float: right; clear: right;">Vulgar Language</p>
                      <p style="color: #ff0000; float: right; clear: right;">Embarrassing Questions</p>
					<p style="color: #ff0000; float: left;">Sexual Touching</p>                       <p style="color: #ff0000; float: right; clear: right;">Sexual Jokes</p>
					<p style="color: #ff0000; float: left;">Degrading Comments</p>              <p style="color: #ff0000; clear: both;">Sexual Propositions</p>

				</section>
				
				<section>
					<h2>Slippery Slope</h2>
					<img src="../resources/slipperySlope.png">
				</section>
				
				<section style="font-size: .9em">
					<h2>Cyberharassment</h2>
					<img src="http://intranet.ezrac.com/training/resources/chat.png" style="float: right; width: 30%; border-radius: 10px; margin: 3%;">
					<p><br>Emails, comments, and photos you post online can gain a life of their own and come back to haunt you.</p>
					<p>If someone sends you an offensive email, text message, or instant message, don't forward it even if you think that the recipient will enjoy it.</p>
					<p>Keep in mind, it's not just workplace activities that can become a problem.  Think carefully about how activities you participate in outside the workplace can spill over into the workplace.</p>
					<p>
				</section>
				
				<section style="font-size: .9em">
					<h2>Cyberharassment</h2>
					<img src="http://intranet.ezrac.com/training/resources/chat2.png" style="width: 30%; float: left; border-radius: 10px;">
					<div style="width: 65%; float: right;">
						<p>Be aware of harassment online and via electronic means such as:</p>
						<ul style="float: left;">
							<li>Text messages
							<li>Facebook and other Social Media
							<li>Online forums
							<li>Instant Messages
							<li>Email
						</ul>
					</div>
					<p style="clear: both;">Cyber harassment can cause a hostile workplace and create animosity between co-workers</p><br>
					<p style="clear: both;">Harassment online <span style="text-decoration: underline;">IS</span> harassment.</p>
				</section>
				
				<section>
					<h2>Severe or Pervasive</h2>
					<p>The conduct of the harasser must be either severe or pervasive to be classified as harassment.</p>
					<br><br>
					<p>Although a single unwanted request for a date or one sexually suggestive comment might offend you and or be inappropriate, it may not be sexual harassment.  However, a number of relatively minor separate incidents may add up to harassment if the incidents affect your work environment.</p>
				</section>
				
				<section>
					<h2>Of a Non-Sexual Nature</h2>
					<p>Non-sexual conduct may also be sexual harassment if you are harassed because you are female, rather than male, or because you are male, rather than female.</p>
					<br>
					<br>
					<p>For example, it may be sexual harassment if you are a man working as a service agent cleaning cars in an all female team, and you are the only one who's tools are frequently hidden by your female co-workers.</p>
				</section>
				
				<section>
					<h2>Questions to ask yourself</h2>
					<div class="floatLeft">
						<ul style="float: left;">
						<li>How many times did the incidents occur?</li>
						<li>How long has the harassment been going on?</li>
						<li>How many others have been harassed?</li>
						<li>Who were witnesses to the harassment</li>
						</ul>
					</div>
					<div class="floatRight">
						<img src="../resources/sexualHarassment2.jpg">
					</div>
				</section>
				
				<section>
					<h2>SAME-SEX HARASSMENT</h2>
					Male harassment on another male, or female harassment on another female.
					<br>
					<br>
					In 1998 the Supreme Court stated that same-sex harassment is illegal and will not be
					 tolerated.

				</section>
				
				<section>
					<h2>NON-EMPLOYEE HARASSMENT</h2>
					<p>Harassment on the job by a non-employee, e.g. Vendors, Customers or Visitors is NOT excusable behavior.<p>
					<br>
					<br>
					<p>Harassment on the job by a non-employee <span style="text-decoration: underline">CAN</span> lead to harassment charges, just as harassment by employee an would.</p>
				</section>

				<section>
					<h2>THIRD PARTY HARRASSMENT</h2>
					Behavior not found offensive by some employees can facilitate an offensive environment for other employees.    
					<br><br>
					<img src="../resources/3rdParty.jpg"><br>
					Example:
					<br>
					A group of employees talking about each other’s sex lives, ethnic jokes, or religious beliefs in the presence of another person who feels very uncomfortable about such discussion.
				</section>
				
				
				<section>
					<h2>OTHER TYPES OF HARASSEMENT</h2>
					<p style="float: left; clear: left;">Race</p>                        <p style="float: right; clear: right;">Disability</p>
					<p style="float: left; clear: left;">Religion</p>                    <p style="float: right; clear: right;">Sexual Orientation</p>
					<p style="float: left; clear: left;">National Origin</p>        <p style="float: right; clear: right;">Pregnancy</p>
					<p style="float: left; clear: left;">Age</p>                               <p style="float: right; clear: right;">Physical Appearance</p>
								 <p style="clear: both;">Political Affiliation</p>
				</section>
				
				<section>
					<h2>Discrimination and the Law</h2>
					<p>In 1964 Congress passed the Civil Rights Act that prohibited discrimination in the workplace based on 5 protected characteristics:</p>
					<br><br>
					<ul>
						<li>Race</li>
						<li>Color</li>
						<li>Religion</li>
						<li>National Origin</li>
						<li>Sex</li>
					</ul>
				</section>
				
				<section>
					<h2>Added characteristics</h2>
					<p>Over the years this was expanded to include other protected characteristics added by federal, state, and local laws<p>
					<br>
					<li>Disabilities
					<li>Age
					<li>Genetic Information
					<br><br>
					<p>Harassment based on a characteristic is considered discrimination because it discourages employees</p>
				</section>
				
				<section>
					<h2>Race / Color</h2>
					<p>Defined as a person's ancestry or ethnic characteristics<p>
					<img src="../resources/colorHarassment.jpg">
					<p>Because we are all a member of a race or are a certain color, we are all members of this category</p>
					
				</section>
				
				<section>
					<h2>religion</h2>
					<p>is broadly defined as an individual's moral or ethical beliefs.</p>
					<img src="../resources/faith.jpg" width="50%">
					<p>The law provides protection for groups or individuals not belonging to traditionally recognized religions.  To be protected under the law, these beliefs must be sincerely held with the strength of traditional religious values.</p>
				</section>
				
				<section>
					<h2>age</h2>
					<p>Defined as the number of years since a person's birth.</p>
					<img src="../resources/ageDiscrimination.jpg" width="60%">
					<p>Federal law only protects individuals over 40 years of age.</p>
				</section>
				
				<section>
					<h2>Disability</h2>
					<p>Defined as a mental or physical condition that substantially limits one or more major life activities.</p>
					<img src="../resources/disabled.jpg">
					<p>Must significantly interfere with a person's life to be protected by the law</p>
				</section>
				
				<section>
					<h2>Sexual Orientation</h2>
					<p>Defined as someone's sexual preference</p>
					<img src="../resources/orientation.png">
				</section>
				
				<section>
					<h2>Pregnancy</h2>
					<img src="../resources/pregnancy.jpg">
					<p>State and federal laws protect pregnancy (even the potential for pregnancy), childbirth, and related medical conditions.</p>
				</section>
				
				<section>
					<h2>Political Affiliation</h2>
					<p>Treating someone differently based on their political affiliation is illegal</p>
					<img src="../resources/political.jpeg">
					<p>It's best to keep subjects of political matter out of the workplace</p>
				</section>
				
				<section>
					<h2>Physical Appearance</h2>
					<img src="../resources/facialFeatures.jpg">
					<p>What a person looks like.  Hair color facial structure, height, hair type, etc...</p>
				</section>
				
				<section>
					<h2>Veteran / Military Status</h2>
					<img src="../resources/veteran.jpg">
					<p>The law protects discrimination of individuals who have served or serve in our nation's military</p>
				</section>
				
				<section>
					<h2>citizenship status</h2>
					<img src="../resources/residentAlien.gif">
					<p>It is illegal to prohibit employment or promotions based on the basis of citizenship.</p>
				</section>
				
				<section>
					<h2>Retaliation</h2>
					<p>Retaliation occurs when someone is treated unfairly after initiating a harassment complaint</p>
					<br>
					<p>This unfair treatment can come in several forms: shunning, avoiding or ostracising, or giving the cold shoulder</p>
					<br>
					<p>The law is clear: Retaliation is <span style="color: #ff0000;">illegal.</span></p>
					
				
				</section>
				
				<section>
				<h2>The workplace should be a respectable place.</h2>
					<p>We spend a significant amount of time in OUR workplace.<p>
					<br>
					<br>
					<p>Many of our jobs are already stressful without the added stress of harassment.<p>

				</section>
				
				<section>
					<h2>Why Respectful Behavior?</h2>
					<li>No one wants to work in an environment where he or she feels harassed and uncomfortable.</li>
					<br>
					<li>Respectful behavior facilitates more productive employees.</li>
					<br>
					<li>Disrespectful, harassing behavior can cost the perpetrator their job.</li>
				</section>
				
				<section>
				<h2>Why Respectful Behavior?</h2>
				<li>Studies prove that 50% of sexual harassment cases co-workers or peers were the alleged harassers.</li>
					<br>
				<li>Only 26% involved the immediate supervisor.</li>
					<br>
				<li>The 1991 amendment to Title VII of the Civil Rights Act of 1964 allows victims to recover punitive damages.</li>
					<br>
				<li>Harassment lawsuits usually have personal, legal, and financial consequences for the harasser.</li>
				</section>
				
				<section>
				It would be best to:
				<br>
				<br>
				<img src="../resources/stopHarassment.png" style="border: 5px solid #ffffff; width: 50%;">
				</section>
				
				<section>
				THE BUILDING BLOCKS<br><br>
				<div style="background-color: #1c5ba8; padding: 5px; border: 5px solid #ffffff; width:30%; margin: 0 auto;">THE<br>
				 RESPECTFUL WORKPLACE</div>
				 <div style="background-color: #1c5ba8; padding: 5px; width: 40%; margin: 0 auto;">APPRECIATE DIVERSITY</div>
				 <div style="background-color: #1c5ba8; padding: 5px; width: 50%; margin: 0 auto;">ACCEPTING DIFFERENCES</div> 
				 <div style="background-color: #1c5ba8; padding: 5px; width: 75%; margin: 0 auto;">EQUALITY</div>
				 <br>
				 <p>The foundation of equality, accepting our differences, and appreciating our diversity will allow our respectiful workplace to stand</p>
				</section>
				
				<section>
				How do <span style="font-size: 2em; text-decoration: underline;">we</span> stop disrespectful behavior?
				</section>
				
				<section>
					<h1>S<br>
					T<br>
					O<br>
					P<br></h1>
				</section>

				<section>
					<div style="float: left;"><h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<p style="float: left">ource</p>
					<br>
					<br>
					<br>
					<br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">The source of the disrespectful behavior has the responsibility to stop behaving in such a manner.
					<br>
					<br>But, what about <span style="text-decoration: underline;">US</span>?<br><br> Are we part of the problem?   <br><br>Have we added to the disrespectful behavior?</div>
				</section>
				
				<section>
				<div style="float: left;">
				<h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<br>
					<br>
					<br>
					<div style="float: left;">arget</div><br>
					<br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">The Target must help confront the harassment/harasser!  If we are offended by other’s actions or words, we need to let them know and ask them to stop.<br>
					<br>
					<p>Don't be afraid to confront your harasser.</p>
					<br>
					CONDISDER THIS:<br>
					The source of the disrespectful behavior may not even know that his or her behavior is offensive to us.  How can this person correct his or her behavior if he or she is UNAWARE of its impact?</div>
				</section>
				
				<section>
				<div style="float: left;">
				<h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div style="float: left;">bserve</div><br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">Those who observe disrespectful or harassing behavior have a responsibility to stop it when it occurs; and one who notices such is NEVER an innocent bystander!
					<br>
					<br>
					It is simply the correct thing to do.
					<br>
					<br>
					When we observe harassing behavior we may think we should stay out of it and that it is none of our business.  This is the wrong attitude to have.
					<br>
					<br>
					A respectful workplace is everyone's business.</div>
				</section>
				
				<section>
				<div style="float: left;">
				<h1>S<br>
					T<br>
					O<br>
					P<br></h1></div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div style="float: left;">erson in authority</div><br>
					<div style="font-size: .8em; width: 70%; position: absolute; top: 10%; left: 30%;">
					Every person in authority has a duty to keep the workplace free from offensive and harassing behavior.
					<br>
					<br>
					Even if you are not the person's supervisor, you still have a responsibility to stop the harassment if observed or if you receive the complaint.  You open yourself to liability if you receive a complaint and do not properly address it.
					<br>
					<br>
					Each person in authority is crucial to creating a respectful workplace.
					</div>
				</section>
				
				<section>
					<h2>Action Steps for victims</h2>
					<p>What should you do if you are feeling harassed?<p><br>
					<ul style="float: left;">
						<li>Say something right away</li>
						<li>Tell the harasser</li>
						<li>Tell your boss</li>
						<li>Tell your supervisor's boss if your supervisor is the problem</li>
						<li>Get help from HR or anywhere up the "chain of command"</li>
					</ul>					
				</section>
				
				<section>
					<h2>Take Action</h2>
					<p>Take action, don't let the behavior continue.
					<br><br>
					<p>If you are not comfortable telling the harasser directly, contact your boss or human resources for help.
					<br><br>
					<p>The phone numbers for HR and corporate officers can be found in the phonebook on the E-Z Rent-A-Car intranet site:</p>
					<br>
					<h3>http://intranet.ezrac.com/</h3>
				</section>
				
				<section>
				Care about what you say…<br><br>HOW you say it……………<br><br>Before you say it!!!!
				<img src="../resources/speakNoEvil.png">
				</section>
				
				<section>
				<h2>E-Z Rent-A-Car <br>Preventing Harassment in the Workplace</h2>
				<p>We are committed to providing a workplace free from unlawful discrimination, harassment, and retaliation.  The harassment training you've received today is a part of that effort.  Please take the post training quiz to complete your training.</p>
				<br>
				<br>
				<a href="../Quizzes/harassmentExam.php" class="button">Take the Exam</a>
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
