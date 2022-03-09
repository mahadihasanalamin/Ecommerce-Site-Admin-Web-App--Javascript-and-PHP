<?php
	include '../model/DbOperation.php';

	if ($_GET['p_name'] or $_GET['p_id']) {
		$p_name = $_GET['p_name'];
		$p_id = $_GET['p_id'];
		if ($p_id=="") {
			if (productname_exist($p_name)) {
				$errorMessage = "product name already exist";
				echo $errorMessage;
						
			}
		}
		else{
		if (current_productname($p_id, $p_name)) {
					
		}
		else{ 
			if (productname_exist($p_name)) {
				$errorMessage = "product name already exist";
				echo $errorMessage;
						
			}
		}
	}
	}
?>