<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Product</title>
	<script src="../view/js/products-add.js"></script>
  <link rel="stylesheet" href="../view/css/products-add.css">
  <link rel="stylesheet" href="../view/css/nav.css">
</head>
<body >

  <?php
      include 'nav.php';
  ?>

		<div class="addProduct">
		<form action="products-add-action.php" method="POST" enctype="multipart/form-data" name="productsAddForm" onsubmit="return jsValidation(this);">
    
    <br>
      <h1>Add Product</h1>
     <br>
      <div class="field">
        <label for="p_image">Product Image <span style="color: red;">*</span><span id="p_imageErr" style="color: red;"></span></label>
        <br>
        <input type="file" accept="image, image/jpeg, image/png" id="p_image" name="p_image">
      </div>

      <div class="field">
        <label for="p_name">Product Name <span style="color: red;">*</span><span id="p_nameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="p_name" name="p_name">
      </div>

      <div class="field">
        <label for="brand">Brand <span style="color: red;">*</span><span id="brandErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="brand" name="brand">
      </div>

      <div class="field">
        <label for="category">Category<span style="color: red;">*</span><span id="categoryErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="category" name="category">
      </div>

      <div class="field">
        <label for="price">Price<span style="color: red;">*</span><span id="priceErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="price" name="price">
      </div>

      <div class="field">
        <label for="stock">Stock<span style="color: red;">*</span><span id="stockErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="stock" name="stock">
      </div>

            <input type="submit" name="submit" value="Add Product">
			<br><br>
		</form>
  </div>
</body>
</html>