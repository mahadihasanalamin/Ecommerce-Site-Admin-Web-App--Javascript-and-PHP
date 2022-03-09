<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Products-view</title>
<link rel="stylesheet"  href="../view/css/products-view.css">
<link rel="stylesheet"  href="../view/css/nav.css">
</head>
<body>
  <?php 
  include 'nav.php';

  if (isset($_GET['view'])) {
    $p_id = $_GET['view']; 
    $product = getProduct($p_id);
    ?>
    <br>
    <h1 id="name">Product</h1>
    <br>

       <table class="product">
         <tr>
          <th>Product ID:</th>
          <td><?php echo $product->p_id ?></td>
        </tr>
        <tr>
          <th>Product Image:</th>
           <td><img src="<?php echo $product->p_image ?>" height="100px" weidth="50px"></td>
        </tr>
        <tr>
          <th>Product Name:</th>
          <td><?php echo $product->p_name ?></td>
        </tr>
        <tr>
          <th>Brand:</th>
          <td><?php echo $product->brand ?></td>
        </tr>
        <tr>
          <th>Category:</th>
          <td><?php echo $product->category ?></td>
        </tr>
        <tr>
          <th>Price:</th>
          <td><?php echo $product->price ?></td>
        </tr>
        <tr>
          <th>Stock:</th>
          <td><?php echo $product->stock ?></td>
        </tr>
      </table>

<?php } ?>
</body>
</html>
