<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="../view/js/users-edit.js"></script>
    <link rel="stylesheet" href="../view/css/users-edit.css">
  <link rel="stylesheet" href="../view/css/nav.css">
</head>
<body>
     <?php  
     include 'nav.php';

  if (isset($_GET['edit'])) {
    $u_id = $_GET['edit']; 
    $users = getUser($u_id);
}
 ?>

        <div class="editUser">
        <form action="users-edit-action.php" method="POST" name="editUsers" onsubmit="return jsValidation(this);">

       <br>
      <h1>Edit User</h1>
     <br>

     <div class="field">
        <label for="u_id">User ID </label>
        <br>
        <input type="text" id="u_id" name="u_id" value="<?php echo $users->u_id ?>" readonly>
      </div>

      <div class="field">
        <label for="firstname">First Name <span style="color: red;">*</span><span id="firstnameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="firstname" name="firstname" value="<?php echo $users->firstname ?>">
      </div>

      <div class="field">
        <label for="lastname">Last Name <span style="color: red;">*</span><span id="lastnameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="lastname" name="lastname" value="<?php echo $users->lastname ?>">
      </div>

      <div class="field">
        <label for="dob">DOB <span style="color: red;">*</span><span id="dobErr" style="color: red;"></span></label>
        <br>
        <input type="date" id="dob" name="dob" value="<?php echo $users->dob ?>">
      </div>

      <div class="field">
        <label for="gender">Gender <span style="color: red;">*</span><span id="genderErr" style="color: red;"></span></label>
         <br>
        <input type="text" id="gender" name="gender" value="<?php echo $users->gender ?>" readonly>
      </div>

      <div class="field">
        <label for="address">Address<span style="color: red;">*</span><span id="addressErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="address" name="address" value="<?php echo $users->address ?>">
      </div>

      <div class="field">
        <label for="phone">Phone<span style="color: red;">*</span><span id="phoneErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="phone" name="phone" value="<?php echo $users->phone ?>">
      </div>

      <div class="field">
        <label for="email">Email<span style="color: red;">*</span><span id="emailErr" style="color: red;"></span></label>
        <br>
        <input type="email" id="email" name="email" value="<?php echo $users->email ?>">
      </div>

      <div class="field">
        <label for="username">Username<span style="color: red;">*</span><span id="usernameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="username" name="username" value="<?php echo $users->username ?>">
      </div>

      <div class="field">
        <label for="password">Password<span style="color: red;">*</span><span id="passwordErr" style="color: red;"></span></label>
        <br>
        <input type="password" id="password" name="password" value="<?php echo $users->password ?>">
      </div>
      <div class="field">
        <label for="usertype">User Type</label>
        <br>
        <select  name="usertype" >
                <option value="<?php echo $users->usertype ?>"><?php echo $users->usertype ?></option>
                <?php if ( $users->usertype == "Admin") {?>
                <option value="Manager">Manager</option>
                <?php } ?>

                <?php if ( $users->usertype == "Manager") {?>
                <option value="Admin">admin</option>
                <?php } ?>

                <?php if ( $users->usertype == "Supplier") {?>
                <?php } ?>

                <?php if ( $users->usertype == "Customer") {?>
                <?php } ?>
            </select>
            <span id="usertypeErr" style="color: red;"></span>
      </div>

            <input type="submit" name="submit" value="Update User">
            <br><br>
        </form>
  </div> 
</body>
</html>