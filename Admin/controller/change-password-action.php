<?php
    include '../model/DbOperation.php';
    session_start();
    if (isset($_SESSION['password']) and isset($_SESSION['username'])) {
            $password= $_SESSION['password'];
            $username= $_SESSION['username'];
    }

    $currentpassword = $newpassword = $confirmpassword = "";

    $errorMessage = "";

    if ($_SERVER['REQUEST_METHOD'] === "POST") {    
        $currentpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];
        $flag = false;

        if(empty($currentpassword)) {
            $errorMessage = "current password field can not be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true;
        }

        if(empty($newpassword)) {
            $errorMessage = "new password field can not be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true;
        }

        if(empty($confirmpassword)) {
            $errorMessage = "confirm password field can not be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true;
        }

        if ($currentpassword!= $password) {
            $errorMessage = "current password field can not be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true;
        }
        if ($newpassword == $currentpassword) {
           $errorMessage = "please choose a new password";
            echo $errorMessage;
            echo "<br>";
            $flag = true;
        }
        if ($newpassword != $confirmpassword) {
           $errorMessage = "new password and confirm password does not match";
            echo $errorMessage;
            echo "<br>";
            $flag = true;
        }

        if (!$flag) {
            $res = change_password($username, $confirmpassword);

            if ($res) {
                session_destroy();
                header("location: ../view/html/login-form.html");
            }
            else{
                
            }
        }
 

    } 

    ?>
