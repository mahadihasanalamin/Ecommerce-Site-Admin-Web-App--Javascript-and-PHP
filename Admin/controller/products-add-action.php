<?php
    include '../model/DbOperation.php';
    $p_image = $p_name = $brand = $category = $price = $stock = '';
    $errorMessage = '';
    $flag = false; 

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        
        $p_image = $_FILES['p_image'];
        $p_image_name = $p_image['name'];
        $p_image_error = $p_image['error'];
        $p_image_temp_name = $p_image['tmp_name'];
        $destination = '../model/images/'.$p_image_name;


        $p_name = $_POST['p_name'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
    
        if (empty($p_image)) {
            $errorMessage = "product image field cannot be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true; 
        }
        else{
            $res = move_uploaded_file($p_image_temp_name, $destination);
        }

        if (empty($p_name)) {
            $errorMessage = "product name field cannot be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true; 
        }
       else if(productname_exist($p_name)){
            $errorMessage = "product name already exist";
                echo $errorMessage;
                echo "<br>";
                $flag = true;
        }

        if (empty($brand)) {
            $errorMessage = "brand field cannot be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true; 
        }

        if (empty($category)) {
            $errorMessage = "category field cannot be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true; 
        }

        if (empty($price)) {
            $errorMessage = "price field cannot be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true; 
        }

        if (empty($stock)) {
            $errorMessage = "stock field cannot be empty";
            echo $errorMessage;
            echo "<br>";
            $flag = true; 
        }


        if (!$flag) {
            $res = add_product($destination, $p_name, $brand, $category, $price, $stock);

            if ($res) {
                 header("location: products.php");
                echo "product successfully added";
            }
            else{
                echo "Error!";
            }
            
        }

    }
?>