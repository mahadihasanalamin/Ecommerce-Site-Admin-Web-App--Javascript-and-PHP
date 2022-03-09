<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="../view/css/users.css">
	<link rel="stylesheet" href="../view/css/nav.css">
	<script src="../view/js/users.js"></script>
</head>
<body>
	<?php
		include 'nav.php';

		$users = getAllUsers();
	?>
		
	<br>
	<h1 id="table_name">User List</h1>
	<br>
	<input id="search" type="text" name="search" onkeyup="showUsers(this.value)" placeholder="search by username">
	<br>
	<table id="users" class="users-table">
		<br>
		<tr>
			<th>User ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone</th>
			<th>User Type</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		 <?php 
  for ($i = 0; $i < sizeof($users);$i++) { ?>
  	 <tr>
  	 <td><?php echo $users[$i]["u_id"] ?></td>
  	 <td> <?php echo $users[$i]["firstname"]." ".$users[$i]["lastname"] ?></td>
     <td> <?php echo $users[$i]["username"] ?></td>
     <td><?php echo $users[$i]["email"] ?></td>
     <td><?php echo $users[$i]["phone"] ?></td>
     <td><?php echo $users[$i]["usertype"] ?></td>
     <td>
     			<a href="users-view.php?view=<?php echo $users[$i]["u_id"] ?>">
     				<input type="button" name="view" value="view"> </a>
     		</td>
     		<td>
     			<a href="users-edit.php?edit=<?php echo $users[$i]["u_id"] ?>">
     				<input type="button" name="edit" value="edit"></a>
     		</td>
     		<td>
     			<a href="users-delete.php?delete=<?php echo $users[$i]["u_id"] ?>">
     				<input type="button" name="delete" value="delete"></a>
     		</td>
     	</tr>	
<?php   } ?>

	
	</table>
</body>
</html>