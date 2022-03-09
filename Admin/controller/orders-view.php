<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>orders-view</title>
<link rel="stylesheet"  href="../view/css/orders-view.css">
<link rel="stylesheet"  href="../view/css/nav.css">
</head>
<body>
  <?php 
  include 'nav.php';

  if (isset($_GET['view'])) {
    $o_id = $_GET['view']; 
    $order = getOrder($o_id);
    ?>
    <br>
    <h1 id="name">Order</h1>
    <br>

       <table class="order">
         <tr>
          <th>Order ID:</th>
          <td><?php echo $order->o_id ?></td>
        </tr>
        <tr>
          <th>Order Date:</th>
          <td><?php echo $order->o_date ?></td>
        </tr>
        <tr>
          <th>Customer ID:</th>
          <td><?php echo $order->c_id ?></td>
        </tr>
        <tr>
          <th>Customer Name:</th>
          <td><?php echo $order->c_name ?></td>
        </tr> 
        <tr>
          <th>Customer Username:</th>
          <td><?php echo $order->c_username ?></td>
        </tr> 
        <tr>
          <th>Customer Phone:</th>
          <td><?php echo $order->c_phone ?></td>
        </tr> 

        <tr>
          <th>Customer Email:</th>
          <td><?php echo $order->c_email ?></td>
        </tr> 
        <tr>
          <th>Customer Address:</th>
          <td><?php echo $order->c_address ?></td>
        </tr> 
        <tr>
        <tr>
          <th>Product ID:</th>
          <td><?php echo $order->o_id ?></td>
        </tr>
        <tr>
          <th>Product Name:</th>
          <td><?php echo $order->p_name ?></td>
        </tr>
        <tr>
          <th>Quantity:</th>
          <td><?php echo $order->quantity ?></td>
        </tr>
          <th>Payment Amount:</th>
          <td><?php echo $order->payment_amount ?></td>
        </tr>
        <tr>
          <th>Payment Status:</th>
          <td><?php echo $order->payment_status ?></td>
        </tr>
        <tr>
          <th>Order Status:</th>
          <td><?php echo $order->order_status ?></td>
        </tr>
      </table>

<?php } ?>
</body>
</html>
