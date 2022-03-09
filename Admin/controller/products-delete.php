 <?php  
     include '../model/DbOperation.php';

  if (isset($_GET['delete'])) {
    $p_id = $_GET['delete']; 
    $res = delete_product($p_id);

    if ($res) {
		header("location: products.php");
	}
}
 ?>