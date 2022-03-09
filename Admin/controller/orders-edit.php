<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="../view/js/orders-edit.js"></script>
    <link rel="stylesheet" href="../view/css/orders-edit.css">
  <link rel="stylesheet" href="../view/css/nav.css">
</head>
<body>
     <?php  
     include 'nav.php';

  if (isset($_GET['edit'])) {
    $o_id = $_GET['edit']; 
    $orders = getOrder($o_id);
}
 ?>

        <div class="editOrder">
        <form action="orders-edit-action.php" method="POST" name="editOrder" onsubmit="return jsValidation(this);">

      <br>
      <h1>Edit Order</h1>
     <br>

     <div class="field">
        <label for="o_id">Order ID </label>
        <br>
        <input type="text" id="o_id" name="o_id" value="<?php echo $orders->o_id ?>" readonly>
      </div>

      <div class="field">
        <label for="o_date">Order Date <span style="color: red;">*</span><span id="o_dateErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="o_date" name="o_date" value="<?php echo $orders->o_date ?>" readonly>
      </div>

       <div class="field">
        <label for="c_id">Customer ID<span style="color: red;">*</span><span id="c_idErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="c_id" name="c_id" value="<?php echo $orders->c_id ?>" readonly>
      </div>

      <div class="field">
        <label for="c_name">Customer Name<span style="color: red;">*</span><span id="c_nameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="c_name" name="c_name" value="<?php echo $orders->c_name ?>" readonly>
      </div>

      <div class="field">
        <label for="c_username">Customer Username<span style="color: red;">*</span><span id="c_usernameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="c_username" name="c_username" value="<?php echo $orders->c_username ?>" readonly>
      </div>

      <div class="field">
        <label for="c_phone">Customer Phone<span style="color: red;">*</span><span id="c_phoneErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="c_phone" name="c_phone" value="<?php echo $orders->c_phone ?>" readonly>
      </div>

      <div class="field">
        <label for="c_email">Customer Email<span style="color: red;">*</span><span id="c_emailErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="c_email" name="c_email" value="<?php echo $orders->c_email ?>" readonly>
      </div>

      <div class="field">
        <label for="c_address">Customer Address<span style="color: red;">*</span><span id="c_addressErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="c_address" name="c_address" value="<?php echo $orders->c_address ?>" readonly>
      </div>

      <div class="field">
        <label for="p_id">Product ID: <span style="color: red;">*</span><span id="p_idErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="p_id" name="p_id" value="<?php echo $orders->p_id ?>" readonly>
      </div>

      <div class="field">
        <label for="p_name">Product Name <span style="color: red;">*</span><span id="p_nameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="p_name" name="p_name" value="<?php echo $orders->p_name ?>" readonly>
      </div>

      <div class="field">
        <label for="quantity">Quantity <span style="color: red;">*</span><span id="quantityErr" style="color: red;"></span></label>
         <br>
        <input type="text" id="quantity" name="quantity" value="<?php echo $orders->quantity ?>" readonly>
      </div>

      <div class="field">
        <label for="payment_amount">Payment Amount<span style="color: red;">*</span><span id="payment_amountErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="payment_amount" name="payment_amount" value="<?php echo $orders->payment_amount ?>" readonly>
      </div>

       <div class="field">
        <label for="payment_status">Payment Status<span style="color: red;">*</span><span id="payment_statusErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="payment_status" name="payment_status" value="<?php echo $orders->payment_status ?>">
      </div>

       <div class="field">
        <label for="order_status">Order Status<span style="color: red;">*</span><span id="order_statusErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="order_status" name="order_status" value="<?php echo $orders->order_status ?>">
      </div>

            <input type="submit" name="submit" value="Update Order">
            <br><br>
        </form>
  </div> 
</body>
</html>