<?php
	include '../model/DbOperation.php';
	$o_id = $order_status = $payment_status = '';
	$errorMessage = '';
	$flag = false; 

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		$o_id = $_POST['o_id'];
		$payment_status = $_POST['payment_status'];
		$order_status = $_POST['order_status'];


		if (empty($payment_status)) {
			$errorMessage = "payment status field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		if (empty($order_status)) {
			$errorMessage = "order status field cannot be empty";
			echo $errorMessage;
			echo "<br>";
			$flag = true; 
		}

		

		if (!$flag) {
			$res = update_order($o_id, $payment_status, $order_status);

			if ($res) {
				header("location: orders.php");
			}
			else{
				
			}
		}
	}

?>