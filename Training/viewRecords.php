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
				$query = "SELECT * FROM driver_quiz where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM driver_quiz ORDER BY date DESC;";
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
				  echo "<tr>";
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				
				
				//Service Agent Training
				$query = "SELECT * FROM service_quiz where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM service_quiz ORDER BY date DESC;";
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
				  echo "<tr>";
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				
				//Kiosk Training
				$query = "SELECT * FROM kiosk_quiz where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM kiosk_quiz ORDER BY date DESC;";
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
				  echo "<tr>";
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				
				//Shuttle Training
				$query = "SELECT * FROM shuttle_quiz where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM shuttle_quiz ORDER BY date DESC;";
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
				  echo "<tr>";
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
				  echo "</tr>";
				}
				echo "</table>";
				
				//Harassment Training
				$query = "SELECT * FROM harassment_quiz where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
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
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
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
				
				//Safety Acknowledgement
				$query = "SELECT * FROM safety_ack where location = '" . $_SESSION['location'] . "' ORDER BY date DESC;";
				if($_SESSION['admin'] == 1) $query = "SELECT * FROM safety_ack ORDER BY date DESC;";
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
				  echo "<tr>";
				  echo "<td>" . $row['date'] . "</td>";
				  echo "<td>" . $row['employeeID'] . "</td>";
				  echo "<td>" . $row['firstname'] . "</td>";
				  echo "<td>" . $row['lastname'] . "</td>";
				  echo "<td>" . $row['location'] . "</td>";
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
