 <?php  
     include '../model/DbOperation.php';

  if (isset($_GET['delete'])) {
    $u_id = $_GET['delete']; 
    $res = delete_user($u_id);

    if ($res) {
		header("location: users.php");
	}
}
 ?>