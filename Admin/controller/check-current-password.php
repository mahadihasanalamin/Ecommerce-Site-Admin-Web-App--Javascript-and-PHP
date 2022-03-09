<?php

	if ($_GET['currentpassword']) {
		$currentpassword = $_GET['currentpassword'];

		session_start();
	if (isset($_SESSION['password'])) {
  			$password= $_SESSION['password'];

  			if ($currentpassword == $password) {
		 	
		 }

		 else{
		 	echo "current password doesn't match";
		 } 
		}
	}
?>