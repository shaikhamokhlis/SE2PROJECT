<!-- This php code block is what connects the website to the database via the "connection.php" class -->
<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST") {
	
    
		// Storing the input entered by the user in the variables
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		// The if statements is not checking if the field are not empty
		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

			// If field are not empty -> Read from database
			$query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result) {
				if($result && mysqli_num_rows($result) > 0) { // check if applicable 
					$user_data = mysqli_fetch_assoc($result);
					// If the data checksout then the admin is given access.
					if($user_data['password'] === $password) { // check password
						header("Location: update.php"); 
						die;
					}
				}
			}
			// If data is wrong then an alert will appear
			echo '<script> alert("اسم المستخدم أو رقم السري خاطئ") </script>';
		}

		// If fields are empty then an alert will appear
		else {
			echo '<script> alert("الرجاء تعبئة جميع الحقول") </script>';
		}
	}
  
?>