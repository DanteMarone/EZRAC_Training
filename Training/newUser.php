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
	
	
	// Create connection
	$con=mysqli_connect("10.23.16.194:3306","root","0nth3r0cks","training");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL database: " . mysqli_connect_error();
	}
	
	$created = 0;
	$alreadyExists = 0;
	
	//check to see if request for new user has been submitted
	if($_POST['createNew'] == 1){		
		//variables
		$last6 = mysqli_real_escape_string($con, $_POST['last6']);
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$username = strtoupper ($username);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$password = hash(crc32, $password);
		$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
		$firstname = strtoupper ($firstname);
		$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
		$lastname = strtoupper ($lastname);
		
		//if box not ticked make the values 0 otherwise transfer
		$manager = $_POST['manager'];
		if($manager == null) $manager = 0;
		$driver = $_POST['driver'];
		if($driver == null) $driver = 0;
		$kiosk = $_POST['kiosk'];
		if($kiosk == null) $kiosk = 0;
		$service = $_POST['service'];
		if($service == null) $service = 0;
		$shuttle = $_POST['shuttle'];
		if($shuttle == null) $shuttle = 0;
		$hr = $_POST['hr'];
		if($hr == null) $hr = 0;
		$sop = $_POST['sop'];
		if($sop == null) $sop = 0;
		$sales = $_POST['sales'];
		if($sales == null) $sales = 0;
		$tsd = $_POST['tsd'];
		if($tsd == null) $tsd = 0;
		$fleet = $_POST['fleet'];
		if($fleet == null) $fleet = 0;
		$location = $_POST['location'];
		
		//check to see if username already exists
		$query = "SELECT * FROM users WHERE username = '" . $username . "';";
		$searchUser = mysqli_query($con, $query);
		
		while($info = mysqli_fetch_array($searchUser)){
			if($info['username'] == $username){
				$alreadyExists = 1;
			}
		}
		
		//if info passes validation create the record
		if($alreadyExists == 0){
			
			//add record
			$sql="INSERT INTO users (last6,username, password, firstname, lastname, manager, driver, kiosk, service, shuttle, hr, SOP, sales, tsd, fleet, location)
					VALUES ('$last6', '$username', '$password', '$firstname', '$lastname', '$manager', '$driver', '$kiosk', '$service', '$shuttle', '$hr', '$sop', '$sales', '$tsd', '$fleet', '$location')";
					
			$created = 1;
			
			if (!mysqli_query($con,$sql)) {
			  die('Error: ' . mysqli_error($con));
			}
		}
		
		//reset the createNew variable to 0
		$_POST['createNew'] = 0;		
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
		<div style="background-color: #ffffff; color: #000000;">
		<h2 style="color: #ff0000;">New User Creation</h2>
			<form action="newUser.php" method="post" style="margin: 10px;">
				<div>
					Username:<br>
					<input type="textbox" name="username" required="required"><br>
					Password:<br>
					<input type="password" name="password" required="required"><br>
					First Name:<br>
					<input type="textbox" name="firstname" required="required"><br>
					Last Name:<br>
					<input type="textbox" name="lastname" required="required"><br>
					Last 6 of Social:<br>
					<input type="textbox" name="last6" required="required"><br>
									Location:<br>
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
					<input type="checkbox" name="sop" value="1">SOP<br>
					<input type="checkbox" name="driver" value="1">Driver Module<br>
					<input type="checkbox" name="kiosk" value="1">Kiosk Module<br>
					<input type="checkbox" name="service" value="1">Service Agent Module<br>
					<input type="checkbox" name="shuttle" value="1">Shuttle Module<br>
					<input type="checkbox" name="fleet" value="1">Fleet Guide Module<br>
					<input type="checkbox" name="sales" value="1">Sales Module<br>
					<input type="checkbox" name="tsd" value="1">TSD Module (Not Yet Implemented)<br><br><br>
					<input type="checkbox" name="manager" value="1"><span style="color: #ff0000; text-decoration: bold;">Manager Privileges (add/edit users)</span><br>
				</div>
				
				<input type="hidden" name="createNew" value="1">
			
				<br>
				<input type="submit" value="Create New User" class="button" style="height: 50%; margin-left: 100px">
			</form>
			
			<?php
				if($alreadyExists == 1)
					echo "The specified username already exists";
				if($created == 1){
					echo "User account " . $username . " has been created";
				}
				
			?>
			
		</div>	
			
	</div>
		
  </body>
 </html>
