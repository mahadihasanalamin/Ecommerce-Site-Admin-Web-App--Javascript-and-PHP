<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../view/css/reviews.css">
	<link rel="stylesheet" href="../view/css/nav.css">
	<script src="../view/js/reviews.js"></script>
</head>
<body>
	<?php
		include 'nav.php';

		$reviews = getAllReviews();
	?>
	<br>
	
	<h1 id="table_name" >Reviews</h1>
	
	<br>

	<table id="reviews" class="reviews-table">
		<tr>
			<th>ID</th>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Customer ID</th>
			<th>Customer Name</th>
			<th>Customer Username</th>
			<th>Comment</th>
		</tr>
		 <?php 
  for ($i = 0; $i < sizeof($reviews);$i++) { ?>
  	 <tr>
  	 <td><?php echo $reviews[$i]["r_id"] ?></td>
  	 <td> <?php echo $reviews[$i]["p_id"]?></td>
     <td> <?php echo $reviews[$i]["p_name"] ?></td>
     <td><?php echo $reviews[$i]["c_id"] ?></td>
     <td><?php echo $reviews[$i]["c_name"] ?></td>
     <td><?php echo $reviews[$i]["c_username"] ?></td>
     <td><?php echo $reviews[$i]["comment"] ?></td>
     	</tr>	
<?php   } ?>

	
	</table>
</body>
</html>