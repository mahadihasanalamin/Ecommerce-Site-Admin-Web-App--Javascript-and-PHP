<tr>
  <th>Product ID</th>
	<th>Product Image</th>
	<th>Product Name</th>
	<th>Brand</th>
	<th>Category</th>
	<th>Price</th>
	<th>Stock</th>
	<th>View</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>

<?php 
	include '../model/DbOperation.php';
	if ($_GET['p_name']) {
		$p_name =$_GET['p_name'];
		$records = search_product($p_name);

		if ($records->num_rows >0) {
			$products = $records->fetch_all(MYSQLI_ASSOC);
  for ($i = 0; $i < sizeof($products);$i++) { ?>
  	 <tr>
  	 <td><?php echo $products[$i]["p_id"] ?></td>
  	 <td><img src="<?php echo $products[$i]["p_image"] ?>" height="100px" width="50px"></td>
     <td> <?php echo $products[$i]["p_name"] ?></td>
     <td><?php echo $products[$i]["brand"] ?></td>
     <td><?php echo $products[$i]["category"] ?></td>
     <td><?php echo $products[$i]["price"] ?></td>
     <td><?php echo $products[$i]["stock"] ?></td>
     <td>
     			<a href="products-view.php?view=<?php echo $products[$i]["p_id"] ?>">
     				<input type="button" name="view" value="view"> </a>
     		</td>
     		<td>
     			<a href="products-edit.php?edit=<?php echo $products[$i]["p_id"] ?>">
     				<input type="button" name="edit" value="edit"></a>
     		</td>
     		<td>
     			<a href="products-delete.php?delete=<?php echo $products[$i]["p_id"] ?>">
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
		$products = getAllProducts(); 
  for ($i = 0; $i < sizeof($products);$i++) { ?>
  	 <tr>
  	 <td><?php echo $products[$i]["p_id"] ?></td>
  	 <td><img src="<?php echo $products[$i]["p_image"] ?>" height="100px" width="50px"></td>
     <td> <?php echo $products[$i]["p_name"] ?></td>
     <td><?php echo $products[$i]["brand"] ?></td>
     <td><?php echo $products[$i]["category"] ?></td>
     <td><?php echo $products[$i]["price"] ?></td>
     <td><?php echo $products[$i]["stock"] ?></td>
     <td>
     			<a href="products-view.php?view=<?php echo $products[$i]["p_id"] ?>">
     				<input type="button" name="view" value="view"> </a>
     		</td>
     		<td>
     			<a href="products-edit.php?edit=<?php echo $products[$i]["p_id"] ?>">
     				<input type="button" name="edit" value="edit"></a>
     		</td>
     		<td>
     			<a href="products-delete.php?delete=<?php echo $products[$i]["p_id"] ?>">
     				<input type="button" name="delete" value="delete"></a>
     		</td>
     	</tr>	
<?php   } 
	}
 ?>
