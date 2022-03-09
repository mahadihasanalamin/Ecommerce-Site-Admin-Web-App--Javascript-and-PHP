<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="../view/js/my-profile-update.js"></script>
    <link rel="stylesheet" href="../view/css/my-profile-update.css">
  <link rel="stylesheet" href="../view/css/nav.css">
</head>
<body>
     <?php  
     include 'nav.php';

 if (isset($_SESSION['username'])) {
        $username= $_SESSION['username'];
    }
    $profile = getMyProfile($username);
 ?>

        <div class="updatemyprofile">
        <form action="my-profile-update-action.php" method="POST" name="updateMyProfile" onsubmit="return jsValidation(this);">

       <br>
      <h1>Edit My Profile</h1>
     <br>

     <div class="field">
        <label for="u_id">User ID </label>
        <br>
        <input type="text" id="u_id" name="u_id" value="<?php echo $profile->u_id ?>" readonly>
      </div>

      <div class="field">
        <label for="firstname">First Name <span style="color: red;">*</span><span id="firstnameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="firstname" name="firstname" value="<?php echo $profile->firstname ?>">
      </div>

      <div class="field">
        <label for="lastname">Last Name <span style="color: red;">*</span><span id="lastnameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="lastname" name="lastname" value="<?php echo $profile->lastname ?>">
      </div>

      <div class="field">
        <label for="dob">DOB <span style="color: red;">*</span><span id="dobErr" style="color: red;"></span></label>
        <br>
        <input type="date" id="dob" name="dob" value="<?php echo $profile->dob ?>">
      </div>

      <div class="field">
        <label for="gender">Gender <span style="color: red;">*</span><span id="genderErr" style="color: red;"></span></label>
         <br>
        <input type="text" id="gender" name="gender" value="<?php echo $profile->gender ?>" readonly>
      </div>

      <div class="field">
        <label for="address">Address<span style="color: red;">*</span><span id="addressErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="address" name="address" value="<?php echo $profile->address ?>">
      </div>

      <div class="field">
        <label for="phone">Phone<span style="color: red;">*</span><span id="phoneErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="phone" name="phone" value="<?php echo $profile->phone ?>">
      </div>

      <div class="field">
        <label for="email">Email<span style="color: red;">*</span><span id="emailErr" style="color: red;"></span></label>
        <br>
        <input type="email" id="email" name="email" value="<?php echo $profile->email ?>">
      </div>

      <div class="field">
        <label for="username">Username<span style="color: red;">*</span><span id="usernameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="username" name="username" value="<?php echo $profile->username ?>">
      </div>

      <div class="field">
        <label for="usertype">User Type</label>
        <br>
        <input type="text" id="usertype" name="usertype" value="<?php echo $profile->usertype ?>" readonly>
      </div>
            <input type="submit" name="submit" value="Update">
            <br><br>
        </form>
  </div> 
</body>
</html>