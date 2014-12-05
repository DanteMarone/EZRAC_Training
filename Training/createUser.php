<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
	
	//if not a manger send back to the main page.
	 if($_SESSION['manager'] != 1){
		header("Location: http://intranet/Training/main.php");
	}
?>

<!doctype html>
<html>
  <head>
		<title>Account Settings</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="training.css" rel="stylesheet" type="text/css">
		
		<style>
			
		</style>
  </head>
  <body>
	
	<div id="topbar">
		<div id="quote">"The Best Training In Car Rental!"</div>
	</div>
	
	<div id="titlebar">
		<img src="ezlogo.png" id="logo">
		
		<!--Header buttons -->
		<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?><a href="http://intranet/training/main.php" class="topButton">Main Page</a><a href="logout.php" class="topButton">Logout</a></div>
	</div>
	
	<!--content-->
	<div id="modules">
		<div style="background-color: #ffffff; color: #000000; width:70%;">
		<h2 style="color: #ff0000;">New User Creation</h2>
			<form action="createUser.php" method="post">
				<div style="float:left; line-height: 25px; margin-left: 20px;">
				Username:<br>
				Password:<br>
				First Name:<br>
				Last Name:<br>
				Last 6 of Social:<br>
				Location:<br>
				</div>
			
				<div>
					<input type="textbox" name="username" required="required"><br>
					<input type="password" name="password" required="required"><br>
					<input type="textbox" name="firstname" required="required"><br>
					<input type="textbox" name="lastname" required="required"><br>
					<input type="textbox" name="last6" required="required"><br>
					<select name="location" required="required">
						<option value="ATL">ATLANTA</option>
						<option value="CORP">CORP HQ</option>
						<option value="DEN">DENVER</option>
						<option value="DFW">DALLAS / FORT WORTH</option>
						<option value="FLL">FORT LAUDERDALE</option>
						<option value="IDR">I-DRIVE</option>
						<option value="LAS">LAS VEGAS</option>
						<option value="LAX">LOS ANGELES</option>
						<option value="MCO">ORLANDO INTL AIRPORT</option>
						<option value="MIA">MIAMI</option>
						<option value="RSW">FORT MYERS</option>
						<option value="SAN">SAN DIEGO</option>
						<option value="SEA">SEATTLE</option>
						<option value="TPA">TAMPA</option>
					</select>
					
				</div>
				<br>
				<div>
					Training Module Access:<br><br>
					<input type="checkbox" name="sop">SOP<br>
					<input type="checkbox" name="driver">Driver Module<br>
					<input type="checkbox" name="kiosk">Kiosk Module<br>
					<input type="checkbox" name="service">Service Agent Module<br>
					<input type="checkbox" name="shuttle">Shuttle Module<br>
					<input type="checkbox" name="fleet">Fleet Guide Module<br>
					<input type="checkbox" name="sales">Sales Module<br>
					<input type="checkbox" name="tsd">TSD Module (Not Yet Implemented)<br>
				</div>
				
				<br>
				<input type="submit" value="Create New User" class="button" style="height: 50%; margin-left: 150px">
			</form>
		</div>	
			
	</div>
		
  </body>
 </html>
