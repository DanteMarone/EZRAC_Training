<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
	
	// Create connection
	$con=mysqli_connect("10.23.16.194:3306","root","0nth3r0cks","training");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL database: " . mysqli_connect_error();
	}
?>

<!doctype html>
<html>
  <head>
		<title>E-Z Training</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="training.css" rel="stylesheet" type="text/css">
		
		<!--JQUERY-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>
	
	<div id="topbar">
		<div id="quote">"The Best Training In Car Rental!"</div>
	</div>
	
	<div id="titlebar">
		<img src="ezlogo.png" id="logo">
		
		<!--Header buttons -->
		<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?>&nbsp;&nbsp;&nbsp;<a href="http://intranet/training/account.php" class="topButton">Account</a><a href="logout.php" class="topButton">Logout</a>
		<?php 
			if ($_SESSION['admin'] == 1){
				echo "<a href=\"http://intranet/training/TEST/test.php\" class=\"topButton\">DevSite</a>";
			}
		?>
		
		</div>
	</div>
	
	<div id="hero"></div>
	
	<div id="modules" style="color: #ffffff; text-align: center;">		
			<div class="category">
				<div><h2><img src="resources/menu.png" class="menuIcon">Modules Required by Everyone</span></h2></div>
				<a href="presentations/ezFacts.php"><div class="doc">Getting To Know You Presentation</div></a>
				<a href="presentations/safety.php"><div class="doc">Safety Guide</div></a>
				
				<!--Sexual Harassment please hold off until OK'd by Chris C. 
				<a href="presentations/harassment.php"><div class="doc">Preventing Harassment Presentation</div></a>
				<a href="presentations/harassment_es.php"><div class="doc">Prevenir El Acoso Presentation</div></a>
				<!--Manager specific Harassment Presentation-->
				<?php
					if($_SESSION['manager'] == 1){
						//echo "<a href=\"presentations/harassment_managers.php\"><div class=\"doc\">Manager's Harassment Training</div></a>";
					}
				?>
				
				
				<!--Show location specific HR packages-->
				<?php
					//ATL/LAS/SEA locations
					if($_SESSION['location'] == 'ATL' || $_SESSION['location'] == 'LAS' || $_SESSION['location'] == 'SEA'){
					echo "<a href=\"HR/benefitPackage_atl_las_sea.pdf\" target=\"_BLANK\"><div class=\"doc\">Benefit Package</div></a>";
					}
					else{
					echo "<a href=\"HR/benefitPackage.pdf\" target=\"_BLANK\"><div class=\"doc\">Benefit Package</div></a>";
					}
					
					//florida employee handbook
					if($_SESSION['location'] == 'CORP' || $_SESSION['location'] == 'TPA' || $_SESSION['location'] == 'MIA' || $_SESSION['location'] == 'IDR' || $_SESSION['location'] == 'FLL' || $_SESSION['location'] == 'RSW'){
					echo "<a href=\"HR/FloridaHandbook.pdf\" target=\"_BLANK\"><div class=\"doc\">Florida Employee Handbook</div></a>";
					}
				?>
			</div>
			
		<?php
			if($_SESSION['service'] == 1){
				echo "<div class=\"category\">";
				echo "<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\">Service Agent</h2></div>";
				echo "<a href=\"presentations/serviceAgent.php\"><div class=\"doc\">Presentation</div></a>";
				echo "<a href=\"presentations/serviceAgent_es.php\"><div class=\"doc\">Presentation en Espanol</div></a>";
				echo "</div>";
			}
		?>
		
		<?php
			if($_SESSION['driver'] == 1){
				echo "<div class=\"category\">";
				echo "<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\">Driver</h2></div>";
				echo "<a href=\"presentations/driver.php\"><div class=\"doc\">Presentation</div></a>";
				echo "<a href=\"presentations/driver_es.php\"><div class=\"doc\">Presentation en Espanol</div></a>";
				echo "</div>";
			}
		?>
		
		<?php
			if($_SESSION['shuttle'] == 1){
				echo "<div class=\"category\">";
				echo "	<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\">Shuttle Driver</h2></div>";
				echo "	<a href=\"presentations/shuttleDriver.php\"><div class=\"doc\">Presentation</div></a>";
				echo "</div>";
			}
		?>
		
		<?php
			if($_SESSION['kiosk'] == 1){
				echo "<div class=\"category\">";
					echo "<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\">Kiosk Training</h2></div>";
					echo "<a href=\"presentations/kiosk.php\"><div class=\"doc\">Presentation</div></a>";
					echo "<a href=\"resources/Intro_to_Kiosk.pdf\" target=\"_blank\"><div class=\"doc\">Intro to Kiosk - PDF Manual</div></a>";
					echo "<a href=\"presentations/kioskSupervisor.php\"><div class=\"doc\">Kiosk Supervisor Presentation</div></a>";
				echo "</div>";
			}
		?>
		
		<?php
			if($_SESSION['fleet'] == 1){
				echo "<div class=\"category\">";
				echo "	<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\">Fleet Guide</h2></div>";
				echo "	<a href=\"resources/FleetGuide.pdf\" target=\"_blank\"><div class=\"doc\">FleetGuide - PDF</div></a>";
				echo "</div>";
			}
		?>
				
		<?php
			if($_SESSION['sales'] == 1){
				echo "<div class=\"category\">";
				echo "	<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\">Sales Training</h2></div>";
				echo "	<a href=\"RevYourEngines.pdf\" target=\"_blank\"><div class=\"doc\">Rev Your Engines Sales Manual</div></a>";
				echo "</div>";
			}
		?>
		
		<?php
			if($_SESSION['SOP'] == 1){
				echo "<div class=\"category\">";
				echo "	<div><h2><img src=\"resources/menu.png\" class=\"menuIcon\"> Standard Operating Procedures (SOP)</h2></div>";
				echo "	<div class=\"items\">";
				echo "		<a href=\"SOP/1_Table_of_Contents.pdf\" target=\"_blank\"><div class=\"doc\">Table of Contents</div></a>";
				echo "		<a href=\"SOP/A_Intro_to_EZRAC.pdf\"><div class=\"doc\" target=\"_blank\">Intro to EZRAC</div></a>";
				echo "		<a href=\"SOP/B_Personal_Appearance.pdf\" target=\"_blank\"><div class=\"doc\">Personal Appearance</div></a>";
				echo "		<a href=\"SOP/C_Definitions.pdf\" target=\"_blank\"><div class=\"doc\">Definitions</div></a>";
				echo "		<a href=\"SOP/D_Policy_Overview.pdf\" target=\"_blank\"><div class=\"doc\">Policy Overview</div></a>";
				echo "		<a href=\"SOP/E_Product_Knowledge.pdf\" target=\"_blank\"><div class=\"doc\">Product Knowledge</div></a>";
				echo "		<a href=\"SOP/F_Reservations.pdf\" target=\"_blank\"><div class=\"doc\">Reservations</div></a>";
				echo "		<a href=\"SOP/G_Standards_of_Service_Final_1.pdf\" target=\"_blank\"><div class=\"doc\">Standards of Service</div></a>";
				echo "		<a href=\"SOP/H_Renter_Qualification_Guide.pdf\" target=\"_blank\"><div class=\"doc\">Renter Qualification Guide</div></a>";
				echo "		<a href=\"SOP/I_Methods_of_Payment.pdf\" target=\"_blank\"><div class=\"doc\">Methods of Payment</div></a>";
				echo "		<a href=\"SOP/J_Risk_Management.pdf\" target=\"_blank\"><div class=\"doc\">Risk Management</div></a>";
				echo "		<a href=\"SOP/K_Fleet.pdf\" target=\"_blank\"><div class=\"doc\">Fleet</div></a>";
				echo "		<a href=\"SOP/L_Employee_Badging_Procedures.pdf\" target=\"_blank\"><div class=\"doc\">Employee Badging Procedures</div></a>";
				echo "	</div>";
				echo "</div>";
			}
		?>
			
		
		
	</div>
		
		<script src="http://intranet.ezrac.com/Training/accordion.js"></script>
  </body>
 </html>
