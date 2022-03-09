<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<script src="../view/js/users-add.js"></script>
  <link rel="stylesheet" href="../view/css/users-add.css">
  <link rel="stylesheet" href="../view/css/nav.css">
</head>
<body >

  <?php
    include 'nav.php';
  ?>

		<div class="addUser">
		<form action="users-add-action.php" method="POST" name="usersAddForm" onsubmit="return jsValidation(this);">
     
     <br>
      <h1>Add User</h1>
     <br>
      <div class="field">
        <label for="firstname">First Name <span style="color: red;">*</span><span id="firstnameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="firstname" name="firstname">
      </div>

      <div class="field">
        <label for="lastname">Last Name <span style="color: red;">*</span><span id="lastnameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="lastname" name="lastname">
      </div>

      <div class="field">
        <label for="dob">DOB <span style="color: red;">*</span><span id="dobErr" style="color: red;"></span></label>
        <br>
        <input type="date" id="dob" name="dob">
      </div>

      <div class="radiofield">
        <label for="gender">Gender <span style="color: red;">*</span><span id="genderErr" style="color: red;"></span></label>
      </div>
      <div class="subradiofield">
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
      </div>

      <div class="field">
        <label for="address">Address<span style="color: red;">*</span><span id="addressErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="address" name="address">
      </div>

      <div class="field">
        <label for="phone">Phone<span style="color: red;">*</span><span id="phoneErr" style="color: red;"></span></label>
        <br>
        <input type="number" id="phone" name="phone">
      </div>

      <div class="field">
        <label for="email">Email<span style="color: red;">*</span><span id="emailErr" style="color: red;"></span></label>
        <br>
        <input type="email" id="email" name="email">
      </div>

      <div class="field">
        <label for="username">Username<span style="color: red;">*</span><span id="usernameErr" style="color: red;"></span></label>
        <br>
        <input type="text" id="username" name="username">
      </div>

      <div class="field">
        <label for="password">Password<span style="color: red;">*</span><span id="passwordErr" style="color: red;"></span></label>
        <br>
        <input type="password" id="password" name="password">
      </div>
      <div class="field">
        <label for="usertype">User Type</label>
        <br>
        <select  name="usertype" >
                <option value="Supplier">Supplier</option>
                <option value="Manager">Manager</option>
                <option value="Admin">Admin</option>
            </select>
            <span id="usertypeErr" style="color: red;"></span>
      </div>

            <input type="submit" name="submit" value="Add User">
			<br><br>
		</form>
  </div>
</body>
</html>