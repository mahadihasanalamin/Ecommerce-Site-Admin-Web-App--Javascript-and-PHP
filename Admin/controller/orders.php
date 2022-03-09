<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Orders</title>
	<link rel="stylesheet" href="../view/css/orders.css">
	<link rel="stylesheet" href="../view/css/nav.css">
	<script src="../view/js/orders.js"></script>
</head>
<body>
	<?php
		include 'nav.php';

		$orders = getAllOrders();
	?>
		
	<br>
	<h1 id="table_name">Order List</h1>
	<br>
	<input id="search" type="text" name="search" onkeyup="showOrders(this.value)" placeholder="search by order ID or status" >
	<br>
	<table id="orders" class="orders-table">
		<br>
		<tr>
			<th>Order ID</th>
			<th>Order Date</th>
			<th>Payment Amount</th>
			<th>Payment Status</th>
			<th>Order Status</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		 <?php 
  for ($i = 0; $i < sizeof($orders);$i++) { ?>
  	 <tr>
  	 <td><?php echo $orders[$i]["o_id"] ?></td>
  	 <td> <?php echo $orders[$i]["o_date"] ?></td>
     <td> <?php echo $orders[$i]["payment_amount"] ?></td>
     <td><?php echo $orders[$i]["payment_status"] ?></td>
     <td><?php echo $orders[$i]["order_status"] ?></td>
     <td>
     			<a href="orders-view.php?view=<?php echo $orders[$i]["o_id"] ?>">
     				<input type="button" name="view" value="view"> </a>
     		</td>
     		<td>
     			<a href="orders-edit.php?edit=<?php echo $orders[$i]["o_id"] ?>">
     				<input type="button" name="edit" value="edit"></a>
     		</td>
     		<td>
     			<a href="orders-delete.php?delete=<?php echo $orders[$i]["o_id"] ?>">
     				<input type="button" name="delete" value="delete"></a>
     		</td>
     	</tr>	
<?php   } ?>

	
	</table>
</body>
</html>