<?php
	//check that user is logged in
	session_start();
	if(!isset($_SESSION['user'])){
		//if there is not a user logged in - redirect to main login page
		header("Location: http://intranet/Training");
	}
	
	//if not a manager, redirect to main page
	if($_SESSION['manager'] != 1){
		header("Location: http://intranet/Training/main.php");
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
		<title>View Records</title>
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
		<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?>&nbsp;&nbsp;&nbsp;<a href="http://intranet/training/main.php" class="topButton">Main Page</a><a href="logout.php" class="topButton">Logout</a></div>
	</div>
	
	<div id="modules">
		<div style="background-color: #ffffff; color: #000000;">
			<div style="text-align: center;"><h2 style="color: #ff0000;">Location Records</h2></div><br>
			<div style="text-align: center; margin-left: auto; margin-right: auto;">
			
			<?php
				
				//Driver Training
				$query = "SELECT driver_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.driver 
				FROM users 
				LEFT JOIN driver_quiz 
				ON driver_quiz.employeeID=users.last6 
				WHERE users.location = '" . $_SESSION['location'] . "' ORDER BY driver_quiz.date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT driver_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.driver 
				FROM users 
				LEFT JOIN driver_quiz 
				ON driver_quiz.employeeID=users.last6 
				ORDER BY driver_quiz.location DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Driver Training</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
					if($row[5] == 1){
					  echo "<tr";
					  if($row[0] == "") echo " style='background-color: #ff0000; color: #ffffff;'";
					  echo ">";
					  echo "<td>" . $row[0] . "</td>";
					  echo "<td>" . $row[1] . "</td>";
					  echo "<td>" . $row[2] . "</td>";
					  echo "<td>" . $row[3] . "</td>";
					  echo "<td>" . $row[4] . "</td>";
					  echo "</tr>";
					}
				}
				echo "</table>";
				
				//Service Agent Training
				$query = "SELECT service_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.service 
				FROM users 
				LEFT JOIN service_quiz
				ON service_quiz.employeeID=users.last6 
				WHERE users.location = '" . $_SESSION['location'] . "' ORDER BY service_quiz.date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT service_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.service 
				FROM users 
				LEFT JOIN service_quiz
				ON service_quiz.employeeID=users.last6 
				ORDER BY service_quiz.location DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Service Agent Training</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
					if($row[5] == 1){
					  echo "<tr";
					  if($row[0] == "") echo " style='background-color: #ff0000; color: #ffffff;'";
					  echo ">";
					  echo "<td>" . $row[0] . "</td>";
					  echo "<td>" . $row[1] . "</td>";
					  echo "<td>" . $row[2] . "</td>";
					  echo "<td>" . $row[3] . "</td>";
					  echo "<td>" . $row[4] . "</td>";
					  echo "</tr>";
					}
				}
				echo "</table>";
				
				//Kiosk Training
				$query = "SELECT kiosk_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.kiosk 
				FROM users 
				LEFT JOIN kiosk_quiz
				ON kiosk_quiz.employeeID=users.last6 
				WHERE users.location = '" . $_SESSION['location'] . "' ORDER BY kiosk_quiz.date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT kiosk_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.kiosk 
				FROM users 
				LEFT JOIN kiosk_quiz
				ON kiosk_quiz.employeeID=users.last6 
				ORDER BY kiosk_quiz.location DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Kiosk Agent Training</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
					if($row[5] == 1){
					  echo "<tr";
					  if($row[0] == "") echo " style='background-color: #ff0000; color: #ffffff;'";
					  echo ">";
					  echo "<td>" . $row[0] . "</td>";
					  echo "<td>" . $row[1] . "</td>";
					  echo "<td>" . $row[2] . "</td>";
					  echo "<td>" . $row[3] . "</td>";
					  echo "<td>" . $row[4] . "</td>";
					  echo "</tr>";
					}
				}
				echo "</table>";
				
				//Shuttle Training
				$query = "SELECT shuttle_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.shuttle 
				FROM users 
				LEFT JOIN shuttle_quiz 
				ON shuttle_quiz.employeeID=users.last6 
				WHERE users.location = '" . $_SESSION['location'] . "' ORDER BY shuttle_quiz.date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT shuttle_quiz.date, users.last6, users.firstname, users.lastname, users.location, users.shuttle 
				FROM users 
				LEFT JOIN shuttle_quiz 
				ON shuttle_quiz.employeeID=users.last6 
				ORDER BY shuttle_quiz.location DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Shuttle Driver Training</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
					if($row[5] == 1){
					  echo "<tr";
					  if($row[0] == "") echo " style='background-color: #ff0000; color: #ffffff;'";
					  echo ">";
					  echo "<td>" . $row[0] . "</td>";
					  echo "<td>" . $row[1] . "</td>";
					  echo "<td>" . $row[2] . "</td>";
					  echo "<td>" . $row[3] . "</td>";
					  echo "<td>" . $row[4] . "</td>";
					  echo "</tr>";
					}
				}
				echo "</table>";
				/*
				//Harassment Training
				$query = "SELECT harassment_quiz.date, users.last6, users.firstname, users.lastname, users.location 
				FROM harassment_quiz 
				RIGHT JOIN users 
				ON harassment_quiz.employeeID=users.last6 
				WHERE users.location = '" . $_SESSION['location'] . "' ORDER BY harassment_quiz.date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM harassment_quiz ORDER BY date DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Harassment Training</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . $row['0'] . "</td>";
				  echo "<td>" . $row['1'] . "</td>";
				  echo "<td>" . $row['2'] . "</td>";
				  echo "<td>" . $row['3'] . "</td>";
				  echo "<td>" . $row['4'] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				
				//Harassment Manager Training
				$query = "SELECT * FROM harassment_mgr_quiz where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM harassment_mgr_quiz ORDER BY date DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Manager's Harassment Training</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
				  echo "<tr>";
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				*/
				
				//Safety Acknowledgement
				$query = "SELECT safety_ack.date, users.last6, users.firstname, users.lastname, users.location 
				FROM users 
				LEFT JOIN safety_ack
				ON safety_ack.employeeID=users.last6 
				WHERE users.location = '" . $_SESSION['location'] . "' ORDER BY safety_ack.date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT safety_ack.date, users.last6, users.firstname, users.lastname, users.location 
				FROM users 
				LEFT JOIN safety_ack
				ON safety_ack.employeeID=users.last6 
				ORDER BY safety_ack.location DESC;";
				$result = mysqli_query($con, $query);
				
				echo "<h3>Safety Training Acknowledgement</h2>";
				echo "<table border='0' style='margin: 0; margin-right: auto; margin-left: auto; margin-top: -10px;'>
				<tr>
				<th>Date Complete</th>
				<th>Employee ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Location</th>
				</tr>";
				while($row = mysqli_fetch_array($result)) {
				  echo "<tr";
					  if($row[0] == "") echo " style='background-color: #ff0000; color: #ffffff;'";
					  echo ">";
				  echo "<td>" . $row[0] . "</td>";
				  echo "<td>" . $row[1] . "</td>";
				  echo "<td>" . $row[2] . "</td>";
				  echo "<td>" . $row[3] . "</td>";
				  echo "<td>" . $row[4] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				
				
				
			?>
				
			</div>
			<br><br>
			
			<!--If manager access granted allow to create / edit user accounts -->
			<div style="margin: 0 auto; text-align: center;">
			<?php
				if($_SESSION['manager'] == 1){
					echo "<a href=\"http://intranet/training/newUser.php\" class=\"topButton\">Create New User</a>";
					echo "<a href=\"http://intranet/training/editUser.php\" class=\"topButton\">Edit User</a>";
					echo "<a href=\"http://intranet/training/account.php\" class=\"topButton\">Back to Account</a>";
				}
			?>
			</div>
			<br><br>
			
	</div>
		
  </body>
 </html>
