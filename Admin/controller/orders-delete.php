 <?php  
     include '../model/DbOperation.php';

  if (isset($_GET['delete'])) {
    $o_id = $_GET['delete']; 
    $res = delete_order($o_id);

    if ($res) {
		header("location: orders.php");
	}
}
 ?>