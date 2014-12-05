<?php
		// Create connection
		$con=mysqli_connect("10.23.16.194:3306","root","0nth3r0cks","training");

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL database: " . mysqli_connect_error();
		}

		//form variables (escape strings added for security)
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$username = strtoupper ($username);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		
		//look up username
		$query = "SELECT * FROM users WHERE username = '" . $username . "';";
		$searchUser = mysqli_query($con, $query);
		
		//search the db for user/pass matches
		while($info = mysqli_fetch_array($searchUser)){
			//if username doesn't match password
			if(hash(crc32, $password) != $info['password']){
				//do nothing if the password is wrong
			}
			
			
			//if match found
			else{
				//get date/time
				$date = date("m/d/y h:i:s");
				
				//add login to login history table
				$sql="INSERT INTO login_history (username, date, action)
				VALUES ('$username', '$date', 'login')";
				
				//if there's a problem adding login history to database kill the connection
				if (!mysqli_query($con,$sql)) {
				  die('Error: ' . mysqli_error($con));
				}
			
			

				//start session and redirect to main page
				else{
					session_start();
					$_SESSION['login'] = "1";
					$_SESSION['user'] = $username;
					
					$_SESSION['firstname'] = $info['firstname'];
					$_SESSION['lastname'] = $info['lastname'];
					$_SESSION['last6'] = $info['last6'];
					$_SESSION['location'] = $info['location'];
					$_SESSION['admin'] = $info['admin'];
					$_SESSION['manager'] = $info['manager'];
					$_SESSION['driver'] = $info['driver'];
					$_SESSION['kiosk'] = $info['kiosk'];
					$_SESSION['service'] = $info['service'];
					$_SESSION['shuttle'] = $info['shuttle'];
					$_SESSION['hr'] = $info['hr'];
					$_SESSION['SOP'] = $info['SOP'];
					$_SESSION['sales'] = $info['sales'];
					$_SESSION['tsd'] = $info['tsd'];
					$_SESSION['fleet'] = $info['fleet'];
					
					
					if (isset($_SESSION['referer']) && $_SESSION['referer'] != '/login.php')
						header("Location: ".$_SESSION['referer']);
					else
						header("Location: main.php");

					}
			}
				
		}

		//if username doesn't exist let us know
		$doesntExist = mysqli_num_rows($searchUser);
		if(doesntExist == 0){
			die('username or password are incorrect <br> <a href="index.html">Back to the login page</a>');
		}
		
?>
		