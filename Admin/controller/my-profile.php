<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>users-view</title>
<link rel="stylesheet"  href="../view/css/my-profile.css">
<link rel="stylesheet"  href="../view/css/nav.css">
</head>
<body>
  <?php 
  include 'nav.php';
 if (isset($_SESSION['username'])) {
        $username= $_SESSION['username'];
    }
    $profile = getMyProfile($username);
 ?>
    <br>
    <h1 id="name" >MY Profile</h1>
    <br>

       <table class="myprofile">
         <tr>
          <th>User ID:</th>
          <td><?php echo $profile->u_id ?></td>
        </tr>
        <tr>
          <th>First Name:</th>
          <td><?php echo $profile->firstname ?></td>
        </tr>
        <tr>
          <th>Last Name:</th>
          <td><?php echo $profile->lastname ?></td>
        </tr>
        <tr>
          <th>DOB:</th>
          <td><?php echo $profile->dob ?></td>
        </tr>
        <tr>
          <th>Gender:</th>
          <td><?php echo $profile->gender ?></td>
        </tr>
        <tr>
          <th>Address:</th>
          <td><?php echo $profile->address ?></td>
        </tr>
        <tr>
          <th>Phone:</th>
          <td><?php echo $profile->phone ?></td>
        </tr>
        <tr>
          <th>Email:</th>
          <td><?php echo $profile->email ?></td>
        </tr>
        <tr>
          <th>Username:</th>
          <td><?php echo $profile->username ?></td>
        </tr>
        <tr>
          <th>User Type:</th>
          <td><?php echo $profile->usertype ?></td>
        </tr> 

      </table>
</body>
</html>
