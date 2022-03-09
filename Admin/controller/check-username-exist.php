<?php
	include '../model/DbOperation.php';

	if ($_GET['username'] or $_GET['u_id']) {
		$username = $_GET['username'];
		$u_id = $_GET['u_id'];
		if ($u_id=="") {
			if (username_exist($username)) {
				$errorMessage = "username already exist";
				echo $errorMessage;
						
			}
		}
		else{
		if (current_username($u_id, $username)) {
					
		}
		else{ 
			if (username_exist($username)) {
				$errorMessage = "username already exist";
				echo $errorMessage;
						
			}
		}
	}
	}
?>