<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>users-view</title>
<link rel="stylesheet"  href="../view/css/users-view.css">
<link rel="stylesheet"  href="../view/css/nav.css">
</head>
<body>
  <?php 
  include 'nav.php';

  if (isset($_GET['view'])) {
    $u_id = $_GET['view']; 
    $users = getUser($u_id);
    ?>
    <br>
    <h1 id="name" >User Profile</h1>
    <br>

       <table class="user">
         <tr>
          <th>User ID:</th>
          <td><?php echo $users->u_id ?></td>
        </tr>
        <tr>
          <th>First Name:</th>
          <td><?php echo $users->firstname ?></td>
        </tr>
        <tr>
          <th>Last Name:</th>
          <td><?php echo $users->lastname ?></td>
        </tr>
        <tr>
          <th>DOB:</th>
          <td><?php echo $users->dob ?></td>
        </tr>
        <tr>
          <th>Gender:</th>
          <td><?php echo $users->gender ?></td>
        </tr>
        <tr>
          <th>Address:</th>
          <td><?php echo $users->address ?></td>
        </tr>
        <tr>
          <th>Phone:</th>
          <td><?php echo $users->phone ?></td>
        </tr>
        <tr>
          <th>Email:</th>
          <td><?php echo $users->email ?></td>
        </tr>
        <tr>
          <th>Username:</th>
          <td><?php echo $users->username ?></td>
        </tr>
        <tr>
          <th>User Type:</th>
          <td><?php echo $users->usertype ?></td>
        </tr> 

      </table>

<?php } ?>
</body>
</html>
