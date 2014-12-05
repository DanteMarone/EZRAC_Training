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
		<title>E-Z Training</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="http://intranet/training/css/EZdocument.css" rel="stylesheet" type="text/css">
		
		<!--JQUERY-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
	
	<div id="topbar">
		<div id="quote">"The Best Training In Car Rental!"</div>
	</div>
	
	<div id="titlebar">
		<img src="http://intranet/training/ezlogo.png" id="logo">
		
		<!--Header buttons -->
		<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?>&nbsp;&nbsp;&nbsp;<a href="http://intranet/training/main.php" class="topButton">Main Page</a><a href="http://intranet/training/logout.php" class="topButton">Logout</a></div>
	</div>
	
	<div id="wrapper" style="">
		<div><h1>SAFETY, POLICIES AND PROCEDURES</h1></div>
		<div class="section">

			<H2>INDEX</h2>
			<p>E-Z-RENT-CAR, INC. is committed to providing a safe environment and to fostering the wells-being and health of its employees.</p>
			<p>The safety rules contained on these pages have been prepared for your guidance and protection in your daily work.  Employees are to study these rules carefully, review them often and observe these precautions and good common sense in carrying out their duties.</p>
			<h3>ALL EMPLOYEES</h3>
			Lifting Procedures<br>
			Ladders and Step Ladders<br>
			<br>
			<h3>SERVICE REPRESENTATIVES</h3>
			General Rules<br>
			Fueling Vehicles<br>
			Cleaning/Car Detailing<br>
			Driving Rules<br>
			<br>
			<h3>OFFICE STAFF</h3>
			General Rules<br>
			Video Display Terminal<br>
			<br>
			<h3>SHOP MECHANICS</h3>
			General Rules<br>
			Driving Rules<br>
			Handling Chemicals<br>
			Electrical Power Tools<br>
			Bench Grinders<br>
			Hand Tools<br>
			Pneumatic Tools<br>
			Knives and cutting tools<br>
			Engine Repair<br>
			Brake Work<br>
			Shop Machines<br>
			Hydraulic Jacks<br>
			Hydraulic Lifts<br>
			Battery Handling and Storage<br>
			Compressed Gas Cylinders<br>
			Welding<br>
		</div>

			
		<div class="section">
			<h2>ALL EMPLOYEES</h2>
			<h3>Lifting Procedure</h3>
			<ol>
				<li>Plan the move before lifting; remove obstructions from your chosen pathway.</li>
				<li>Test the weight of the load before lifting by pushing the load along its resting surface.</li>
				<li>If the load is too heavy or bulky, use carrying aid such as hand trucks pr get assistance from a co-worker.</li>
				<li>If assistance is required to perform a lift, coordinate and communicate your movements with those of your co-worker.</li>
				<li>Position your feet 6-12 inches apart with one foot in front of the other.</li>
				<li>Face the load</li>
				<li>Bend at the knees, not at the back.</li>
				<li>Keep your back straight.</li>
				<li>Get a firm grip on the object with your hands and fingers.  Use handles when present.</li>
				<li>Never lift the object when your hands are greasy.</li>
				<li>Hold objects as close to your body as possible.</li>
				<li>Perform lifting movements smoothly and gradually; do not jerk the load.</li>
				<li>If you must change direction while lifting or carrying the load, pivot your feet and turn your entire body.  Do not twist at the waist.</li>
				<li>Set down objects in the same manner as you picked them up, except in reverse.</li>
				<li>Do not lift an object from the floor to a level above your waist in one motion.  Set the load down on a table or bench and then adjust your grip before lifting it higher.</li>
			</ol>

			<h3>LADDERS AND STEP LADDERS</h3>
			<ol>
				<li>Do not use ladders that have loose rungs, cracked or split side rails, missing rubber foot pads or other visible damage.</li>
				<li>Keep ladder rungs clean and free of grease.</li>
				<li>Do not place a ladder in a passageway or doorway without posting warning signs or cones that detour pedestrian traffic away from the ladder.   Lock the doorway that you are blocking and post the sign “detour”.</li>
				<li>Allow only one person on the ladder at a time.</li>
				<li>Face the ladder when climbing up or down.</li>
				<li>Maintain a three-point contact by keeping both hands and one foot or both feet and one hand on the ladder at all times when climbing down.</li>
				<li>When performing work from a ladder, face the ladder and do not lean backward or sideways from the ladder.</li>
				<li>Do not stand on the top two rings of any ladder.</li>
				<li>Do not stand on a ladder that wobbles, or that leans to the left or right.</li>
				<li>Do not carry items in your hands while climbing up or down a ladder.</li>
				<li>Do not try to “walk” a ladder by rocking it.  Climb down the ladder, then move it.</li>
			</ol>
		</div>
		
		<div class="section">
			<h2>SERVICE REPRESENTATIVES</h2>
			<h3>General Rules</h3>
			<ol>
				<li>Carry objects so that you are able to see around them.</li>
				<li>Do not use your fist as a hammer.</li>
				<li>Do not try to kick objects out of the pathway, pick them up and move them.</li>
				<li>Do not pick up broken glass or plastic with your hands.  Use a dustpan and broom.</li>
				<li>Take short steps when walking on greasy or wet surfaces.</li>
				<li>Follow the instructions on the label and in the corresponding Material Safety Data Sheeet (MSDS) for each chemical product used in the service shop.</li>
				<li>Wear shoes with closed toes and rubber soles.</li>
				<li>Use caution signs or cones to barricade slippery areas such as freshly mopped floors.</li>
			</ol>
		
			<h3>FUELING VEHICLES</h3>
			<ol>
				<li>Turn off engines before refueling,oiling,or serviceing a vehicle.</li>
				<li>Do not smoke while fueling a vehicle.</li>
				<li>Wash your hands with soap and water if you spill fuel on your hands.</li>
			</ol>
		
			<h3>CLEANING/CAR DETAILS</h3>
			<ol>
				<li>Do not use a razor blade that is not in a retractable holder for scraping windows.</li>
				<li>When spraying window cleaner , hold the spray bottle at arm’s length and direct the spray away from your face and away from other people.</li>
				<li>Do not use materials from an unmarked or unlabeled container.</li>
			</ol>
		</div>
		
		<div class="section">
			<h2>DRIVERS (BUS,SHUTTLE,PASSENGER CAR)</h2>
			<ol>
				<li>Shut all doors and fasten your seat belt before moving the vehicle.</li>
				<li>Obey all traffic patterns and signs at all times.</li>
				<li>Maintain a three-point contact using both hands and one foot or both feet and one hand when climbing into and out of vehicles.</li>
				<li>Obey all signs posted in the parking lot when parking cars.</li>
				<li>Do not board or off board passengers using installed walkways ,steps and handrails.</li>
				<li>Always board or off board passengers using installed walkways  ,steps, and handrails.</li>
				<li>Only employer authorized personnel are permitted to drive.</li>
			</ol>
		</div>
		
		<div class="section">
			<h2>OFFICE STAFF (SECRETARIES,SUPERVISORS,RENTAL AGENTS)</h2>
			<h3>General Rules</h3>
			<ol>
				<li>Do not store or leave items on stairways.</li>
				<li>2- Do not block or obstruct stairwells, exits or accesses to safety and emergency equipment such as fire extinguishers or fire alarms.</li>
				<li>Straighten or remove rugs and mats that do not lie flat on the floor.</li>
				<li>Do not use extension or power cords that have the ground prong removed or broken off.</li>
				<li>Do not connect multiple electrical devices into a single outlet.</li>
				<li>Use a cord cover or tape the cord down when running electrical or other cords across aisles, between desks or across entrances and exits.</li>
				<li>Do not use frayed, cut or cracked electrical cords.</li>
				<li>Keep floors clear of items such as paper clips, pencils, tacks ,or staples.</li>
				<li>Clean up spills or leaks immediately by using a paper towel, rag or a mop and bucket.</li>
				<li>Do not kick objects out of your pathway; pick them up or push them out of the way.</li>
				<li>Open one file cabinet at a time.</li>
				<li>Put heavy files in the bottom drawers of file cabinets.</li>
				<li>Use the handle when closing doors drawers, and files.</li>
				<li>Close drawers and doors immediately after use.</li>
				<li>Store sharp objects, such as pens, pencils,letter opener or scissors in drawers or with the points down in a container.</li>
				<li>Use a staple remover, not your fingers, for removing staples.</li>
			</ol>
		
			<h3>Video Display Terminal Ergonomics</h3>
			<ol>
				<li>Stand up and perform stretching exercises once every hour.</li>
				<li>If the chair heights is to high, use a book or other as a footrest.</li>
				<li>Move your computer screen and keyboard so that they are directly in front of you.</li>
				<li>Adjust the height of your chair so that when you are sitting, yourelbow and keyboard heights are the same.</li>
				<li>For additional lower back support, place a pillow or a bundle clothing in the chair at the small of your back.</li>
			</ol>
		</div>
		
		<div class="section">
			<h2>SHOP MECHANICS<br>
			<h3>General Rules</h3>
			<ol>
				<li>Wear safety goggles and closed toe shoes when working in the service bay.</li>
				<li>Use: flexible exhaust hose such as elephant trunk tubing to vent exhaust fumes from vehicles and s[ace heaters when the bay doors are closed.</li>
				<li>Do not use your hands or fists as hammers.</li>
				<li>Do not use gasoline for degreasing or cleaning automobiles engine parts.</li>
				<li>Do not wear loose clothing or jewelry in the service shop.</li>
				<li>Long hair must be contained under a hat or hair net, regardless of gender.</li>
				<li>Wash your hands with soap and water after working in the service shop.</li>
			</ol>
			<br>
			<h3>DRIVING RULES</h3>
			<ol>
				<li>Shut all doors and fasten your seat belt before moving the vehicle.</li>
				<li>Obey all traffic patterns and signs at all times.</li>
				<li>Maintain a three-point contact using both hands and one foot or both feet and one hand when climbing into and out of vehicles.</li>
				<li>Stand clear of vehicles driven by customers.</li>
				<li>Do no approach any vehicle until the driver stops and exists.</li>
			</ol>
			<br>
			<h3>HANDLING CHEMICALS</h3>
			<ol>
				<li>Follow the instructions on the label and in this corresponding Material Safety Data Sheet (MSDS) for each chemical product used in your workplace.</li>
				<li>Use personal protective clothing or equipment such as neoprene gloves, rubber boots ,shoe covers, rubber aprons and protective eyewear, when using chemicals labeled “Flammable”, “Corrosive” , “Caustic’ or “Poisonous”.  </li>
				<li>Do not use protective clothing or equipment that has split seams, pin holes, cuts, tears or other signs of visible damage.</li>
				<li>Always use chemical goggles and a face shield before handling chemicals labeled “Corrosive or caustic”.</li>
				<li>Do not use chemicals from unlabeled containers and unmarked cylinders.</li>
				<li>Do not drag container labeled: “Flammable”.</li>
				<li>Do not store chemical containers labeled “Oxidizer” with containers labeled “Corrosive” or  “Caustic”.</li>
			</ol>
			<br>
			<h3>Electrical Power Tools</h3>
			<ol>
				<li>Do not use cords that have splices, exposed wires or cracked or frayed ends.</li>
				<li>Do not carry plugged in equipment or tools with your finger on the switch.</li>
				<li>Do not carry equipment or tools by the cord.</li>
				<li>Turn the tool off before plugging or unplugging it.</li>
				<li>Do not handle or operate electrical tools when your hands are wet or when you are standing on wet floors.</li>
				<li>Do not operate spark-inducing tools such as grinders, drills or saws near containers labeled “Flammable,” or in an explosive atmosphere such as a paint spray booth.</li>
				<li>Turn off electrical tools and disconnect the power source from the outlet before attempting repairs or service work. “Tag the tool “Out of Service”.</li>
				<li>Do not use extension cords through doorways, through holes in ceilings ,walls or floors.</li>
				<li>Do not use an adaptor such as a cheater plug that eliminates the ground.</li>
				<li>Do not connect multiple electrical tools into single outlet.</li>
				<li>Do not use extension cords or other grounded three-pronged power cords that have the ground prong removed., or broken off.</li>
				<li>Do not drive over, drag, step on or place objects on a cord.</li>
			</ol>
		</div>
		
		<!--User information-->
		<div class="section">
			<form action="http://intranet.ezrac.com/training/quizzes/safetyAcknowledgeComplete.php" method="post">
				<div style="float: left; line-height: 30px;">Last 6 of social:<br>First Name:<br>Last Name:<br>Location:<br></div>
				<div style="float: left; line-height: 30px;">
					 <input type="number" name="employeeID" required="required" value="<?php echo $_SESSION['last6']; ?>"><br>
					 <input type="textbox" name="firstName" required="required" value="<?php echo $_SESSION['firstname']; ?>"><br> 
					 <input type="textbox" name="lastName" required="required" value="<?php echo $_SESSION['lastname']; ?>"><br>
					 <div><?php echo $_SESSION['location']; ?></div>
					 <input type="hidden" name="location" value="<?php echo $_SESSION['location']; ?>">
				</div>
				<div style="float: right; width: 50%;">Please ensure your personal information is correct before clicking the 'Acknowledge' button.  All employees must acknowledge this document.</div>
				
				<!--Submit Button-->
				<input type="submit" value="ACKNOWLEDGE" class="submitBtn" style="clear: both;">
			</form>
		</div>
		
		
		
		
	</div>
		
  </body>
 </html>
