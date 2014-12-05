<?php
public function timestamp($action){

		//get date/time
		$date = date("m/d/y h:i:s");
		
		//add login to login history table
		$sql="INSERT INTO login_history (username, date, action)
		VALUES ('$username', '$date', '". $action ."')";
		
		//if there's a problem adding login history to database kill the connection
		if (!mysqli_query($con,$sql)) {
		  die('Error: ' . mysqli_error($con));
		}
	}
?>