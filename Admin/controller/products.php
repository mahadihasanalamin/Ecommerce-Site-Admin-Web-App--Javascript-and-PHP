<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../view/css/products.css">
	<link rel="stylesheet" href="../view/css/nav.css">
	<script src="../view/js/products.js"></script>
</head>
<body>
	<?php
		include 'nav.php';

		$products = getAllProducts();
	?>
	
	<br>
	<h1 id="table_name">Product List</h1>
	<br>

	<input id="search" type="text" name="search" onkeyup="showProducts(this.value)" placeholder="search by Product Name">
	<table  id="products" class="products-table">
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
<?php   } ?>

	
	</table>
</body>
</html>