
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
	include '../model/DbOperation.php';
	if ($_GET['username']) {
		$username =$_GET['username'];
		$records = search_user($username);

		if ($records->num_rows >0) {
			$users = $records->fetch_all(MYSQLI_ASSOC);
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
<?php   } 
		}
		else{
			echo "<tr> No Such Data Found! </tr>";
		}

	}
	else{
		$users = getAllUsers(); 
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
<?php   } 
	}
 ?>
