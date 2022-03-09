<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="../view/css/change-password.css">
    <script src="../view/js/change-password.js"></script>
</head>
<body>

    <?php
    include 'nav.php';
    ?>


    <div class="changePassword">
        <form action="change-password-action.php" method="POST" name="changePassword" onsubmit="return jsValidation(this);">
      <br>
      <h1>Change Password</h1>
     <br>
      <div class="field">
        <label for="currentpassword">Current Password <span style="color: red;">*</span><span id="currentpasswordErr" style="color: red;"></span></label>
        <br>
        <input type="password" id="currentpassword" name="currentpassword">
      </div>

      <div class="field">
        <label for="newpassword">New Password <span style="color: red;">*</span><span id="newpasswordErr" style="color: red;"></span></label>
        <br>
        <input type="password" id="newpassword" name="newpassword">
      </div>

      <div class="field">
        <label for="confirmpassword">Confirm Password <span style="color: red;">*</span><span id="confirmpasswordErr" style="color: red;"></span></label>
        <br>
        <input type="password" id="confirmpassword" name="confirmpassword">
      </div>

      <input type="submit" name="submit" value="Change Password">
            <br><br>
          </form>
        </div>

</body>
</html>