<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Smart Gadget Shop</title>
	<link rel="stylesheet" href="../view/css/nav.css">
</head>
<body style="background: #ebedeb;">
	<?php

	session_start(); 
	if (!isset($_SESSION['username'])) {
  		header("Location: ../view/html/login-form.html");
	}

	include '../model/DbOperation.php'; 

		$username = "";

		if (isset($_SESSION['username'])) {
  			$username= $_SESSION['username'];
  			$Name= getName($username);
  			$firstname = $Name->firstname;
  			$lastname = $Name->lastname;
		}
?>

	<div class="sidenav">
		<h2>Smart Gadget Shop</h2>
		<ul>
			<li><a href="users.php">Users</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="users-add.php">Add Users</a></li>
			<li><a href="products-add.php">Add Products</a></li>
			<li><a href="orders.php">Orders</a></li>
			<li><a href="reviews.php">Reviews</a></li>
		</ul>
	</div>
	<br>
	<h1 id="user_name">Hello, <?php echo $firstname." ".$lastname ?></h1>
	<div class="topnav">
		<ul>
			<li><a href="logout.php?logout">Logout</a></li>
			<li><a href="change-password.php">Change Password</a></li>
			<li><a href="my-profile-update.php">Update Profile</a></li>
			<li><a href="my-profile.php">My Profile</a></li>
		</ul>
		
	</div>
</body>
</html>