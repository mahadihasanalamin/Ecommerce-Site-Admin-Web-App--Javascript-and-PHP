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
	include '../model/DbOperation.php';
	if ($_GET['o_id']) {
		$o_id =$_GET['o_id'];
		$records = search_order($o_id);

		if ($records->num_rows >0) {
			$orders = $records->fetch_all(MYSQLI_ASSOC);
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
<?php   } 
		}
		else{
			echo "<tr> No Such Data Found! </tr>";
		}

	}
	else{
		$orders = getAllOrders(); 
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
<?php   } 
	}
 ?>
