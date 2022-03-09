<?php
	include '../model/DbOperation.php';
	$username = $password = "";
	$errorMessage = "";

	$flag = false;

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)) {
			echo "username field cannot be empty";
			echo "<br>";
			$flag = true; 
		}

		if (empty($password)) {
			echo "password field cannot be empty";
			echo "<br>";
			$flag = true; 
		}

		if (!$flag) {
			$records = login($username, $password);
		if ($records->num_rows===1) {
			$info = $records->fetch_object();
			if ($info->usertype == 'Admin') {
				session_start();

				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
			}
			else {
				$errorMessage = "username or password is incorrect";
				echo $errorMessage;
			}
		}
		else {
				$errorMessage = "username or password is incorrect";
				echo $errorMessage;
			}
		}
	}


	if ($_GET['username'] and $_GET['password']) {
		$username = $_GET['username'];
		$password = $_GET['password'];

		$records = login($username, $password);
		if ($records->num_rows===1) {
			$info = $records->fetch_object();
			if ($info->usertype == 'Admin') {
				setcookie("username", $username, time() + 60*60);
				session_start();

				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
			}
			else {
				$errorMessage = "username or password is incorrect";
				echo $errorMessage;
			}
		}
		else {
				$errorMessage = "username or password is incorrect";
				echo $errorMessage;
			}

	}
?>