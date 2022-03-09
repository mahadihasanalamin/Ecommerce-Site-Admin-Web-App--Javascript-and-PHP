<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <script src="../view/js/products-edit.js"></script>
    <link rel="stylesheet" href="../view/css/products-edit.css">
    <link rel="stylesheet" href="../view/css/nav.css">
</head>
<body>
     <?php  
     include 'nav.php';

  if (isset($_GET['edit'])) {
    $p_id = $_GET['edit']; 
    $product = getProduct($p_id);
}
 ?>
 <div class="editProduct">

        <form action="products-edit-action.php" method="POST" name="editProduct" enctype="multipart/form-data" onsubmit="return jsValidation(this);">
    
    <br>
      <h1>Edit Product</h1>
     <br>
     <div class="field">
        <label for="p_id">Product ID <span style="color: red;">*</span><span id="p_idErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="p_id" name="p_id" value="<?php echo $product->p_id; ?>" readonly>
      </div>
      <div class="field">
        <label for="p_image">Product Image <span style="color: red;">*</span></label>
        <br>
        <input type="file" accept="image, image/jpeg, image/png" id="p_image" name="p_image">
        <img  src="<?php echo $product->p_image ?>" height="100px" weidth="50px">
      </div>

      <div class="field">
        <label for="p_name">Product Name <span style="color: red;">*</span><span id="p_nameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="p_name" name="p_name" value="<?php echo $product->p_name; ?>">
      </div>

      <div class="field">
        <label for="brand">Brand <span style="color: red;">*</span><span id="brandErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="brand" name="brand" value="<?php echo $product->brand; ?>">
      </div>

      <div class="field">
        <label for="category">Category<span style="color: red;">*</span><span id="categoryErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="category" name="category" value="<?php echo $product->category; ?>">
      </div>

      <div class="field">
        <label for="price">Price<span style="color: red;">*</span><span id="priceErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="price" name="price" value="<?php echo $product->price; ?>">
      </div>

      <div class="field">
        <label for="stock">Stock<span style="color: red;">*</span><span id="stockErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="stock" name="stock" value="<?php echo $product->stock; ?>">
      </div>

            <input type="submit" name="submit" value="Update Product">
            <br><br>
        </form>
        </div>
</body>
</html>