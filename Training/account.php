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
	
	$pw_reset = 0; //stores if password reset logic needs to be performed
	$pw_no_match = 0; //stores if password matches password on file
	$confirm_no_match = 0; //stores if confirm pass matches new pass
	
	//reset password
	if($_POST['pw_reset'] == 1){
		
		//check to see if password matches
		$query = "SELECT * FROM users WHERE username = '" . $_SESSION['user'] . "';";
		$searchUser = mysqli_query($con, $query);
		
		//search the db for user/pass matches
		while($info = mysqli_fetch_array($searchUser)){
			//if username doesn't match password
			if(hash(crc32, $_POST['current']) != $info['password']){
				//if password doesn't match flag message for user to see
				$pw_no_match = 1;
			}
			
			//if current password matches
			else{
				
				//if new and confirm passwords don't match
				if($_POST['new'] != $_POST['new2']){
					//flag cmessage for user to see
					$confirm_no_match = 1;
				}
				
				//if passwords do match
				else{
					//hash new password
					$password = mysqli_real_escape_string($con, $_POST['new']);
					$newPass = hash(crc32, $password);
					
					//create query
					$query = "UPDATE `users` SET `password`='" . $newPass . "' WHERE `last6`='" . $_SESSION['last6'] ."'";
					
					//update database
					if (!mysqli_query($con,$query)) {
					  die('Error: ' . mysqli_error($con));
					}
			
					//flag update message
					$pw_reset = 1;
				}
			}
		}
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
		<div style="float: right; position: relative; right: 20%;">Logged in as: <?php echo $_SESSION['user']; ?>&nbsp;&nbsp;&nbsp;<a href="http://intranet/training/main.php" class="topButton">Main Page</a><a href="logout.php" class="topButton">Logout</a></div>
	</div>
	
	<div id="modules">
		<div style="background-color: #ffffff; color: #000000; width:70%;">
			<div style="text-align: center;">User Information:</div><br>
			<div style="text-align: center;">
				<?php
					echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<br>Location:  " . $_SESSION['location'] . "<br>";
					echo "SS#: *** " . $_SESSION['last6'] . "<br><br>";
				?>
				<hr>
			</div>
			
			<div style="text-align: center;">Password change:</div><br>
			<form action="account.php" method="post" style="text-align: center; margin-left: auto; margin-right: auto;">
				<div>
					Current Password<br>
					<input type="textbox" name="current" required="required" placeholder="Current Password"><br>
					New Password<br>
					<input type="password" name="new" required="required" placeholder="New Password"><br>
					Confirm New Password<br>
					<input type="password" name="new2" required="required" placeholder="Confirm New Password"><br>
				</div>
				
					<input type="hidden" name="pw_reset" value="1">
					<input type="submit" value="Change Password" class="topButton">
				<hr>
			</form>
			
			<?php
				//display successful password reset message
				if($pw_reset == 1) {echo "<div>Password successfully reset.</div>";}
				
				//display password doesn't match message
				if($pw_no_match == 1) {echo "<div>Password does not match password on file.  Please try again.</div>";}
				
				//display confirm password doesn't match message
				if($confirm_no_match == 1) {echo "<div>New password and confirm new password do not match.  Please ensure the same password is typed in the New Password and Confirm New Password boxes.</div>";}
			?>
			<br>
			
			
			
			
			<!--If manager access granted allow to create / edit user accounts -->
			<div style="margin: 0 auto; text-align: center;">
			<?php
				if($_SESSION['manager'] == 1){
					echo "<a href=\"http://intranet/training/newUser.php\" class=\"topButton\">Create New User</a>";
					//echo "<a href=\"http://intranet/training/editUser.php\" class=\"topButton\">Edit User</a>";
					echo "<a href=\"http://intranet/training/viewRecords.php\" class=\"topButton\">View Records</a>";
				}
			?>
			</div>
			<br><br>
			
	</div>
		
  </body>
 </html>
