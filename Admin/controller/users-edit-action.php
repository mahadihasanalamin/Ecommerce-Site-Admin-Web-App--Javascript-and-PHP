<?php
	include '../model/DbOperation.php';
	$firstname = $lastname = $dob = $gender = $address = $phone = $email = $username = $password = $usertype = '';
	$errorMessage = '';
	$flag = false; 

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		$u_id = $_POST['u_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$dob = $_POST['dob'];
		$gender = isset($_POST['gender']) ? $_POST['gender']:"";
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];


		if (empty($firstname)) {
			$errorMessage = "firstname field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($lastname)) {
			$errorMessage = "lastname field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($dob)) {
			$errorMessage = "dob field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($gender)) {
			$errorMessage = "gender field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($address)) {
			$errorMessage = "address field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($phone)) {
			$errorMessage = "phone field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}
		else{
			if ((strlen($phone)<11) and (strlen($phone)>11)) {
				$errorMessage = "phone number must be 11 digits";
				$flag = true;
			}
		}

		if (empty($email)) {
			$errorMessage = "email field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($username)) {
			$errorMessage = "username field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}
		else{
			if (strlen($username)<3) {
				$errorMessage = "username minimum 3 characters";
				echo $errorMessage;
				echo "<br>";
				$flag = true; 
			}
			else if (strlen($username)>10) {
				$errorMessage = "username maximum 10 characters";
				echo $errorMessage;
				echo "<br>";
				$flag = true; 
			}

			else {
				if (current_username($u_id, $username)) {
					
				}
				else{ 
					if (username_exist($username)) {
						$errorMessage = "username already exist";
						echo $errorMessage;
						echo "<br>";
						$flag = true;
					}
				}

			}
		}
	}

		if (empty($password)) {
			$errorMessage = "password field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}
		else{
			if (strlen($password)<4) {
				$errorMessage = "password minimum 4 characters";
				echo $errorMessage;
				echo "<br>";
				$flag = true; 
			}
			else if (strlen($password)>8) {
				$errorMessage = "password maximum 8 characters";
				echo $errorMessage;
				echo "<br>";
				$flag = true; 
			}
		}


		if (!$flag) {
			$res = update_user($u_id, $firstname, $lastname, $dob, $gender, $address, $phone, $email, $username, $password, $usertype);

			if ($res) {
				header("location: users.php");
			}
			else{
				
			}
		}

?>