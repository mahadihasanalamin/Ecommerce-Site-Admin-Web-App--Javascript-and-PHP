<?php
	function connect(){
		$conn = new mysqli("localhost", "mahadi", "1234", "smart_gadget_shop");
		if ($conn->connect_errno) {
			die("connection failed due to ".$conn->connect_error);
		}
		return $conn;
	}


//****************************USERS**************************************//


	function registration($firstname, $lastname, $dob, $gender, $address, $phone, $email, $username, $password, $usertype){
		$conn = connect();
		$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, dob, gender, address, phone, email, username, password, usertype) VALUES(?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssss",$firstname, $lastname, $dob, $gender, $address, $phone, $email, $username, $password, $usertype);
		return $stmt->execute();
	}

	function login($username, $password){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? and password = ?");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$records = $stmt->get_result();
		return $records;
	}


	function update_user($u_id, $firstname, $lastname, $dob, $gender, $address, $phone, $email, $username, $password, $usertype){
		$conn = connect();
		$stmt = $conn->prepare("UPDATE users SET firstname = ?, lastname = ?, dob = ?, gender = ?, address = ?, phone = ?, email =  ?, username = ?, password = ?, usertype = ? WHERE u_id = ?");
		$stmt->bind_param("ssssssssssi",$firstname, $lastname, $dob, $gender, $address, $phone, $email, $username, $password, $usertype, $u_id);
		return $stmt->execute();
	}

	function update_myprofile($u_id, $firstname, $lastname, $dob, $address, $phone, $email, $username){
		$conn = connect();
		$stmt = $conn->prepare("UPDATE users SET firstname = ?, lastname = ?, dob = ?, address = ?, phone = ?, email =  ?, username =? WHERE u_id = ?");
		$stmt->bind_param("sssssssi", $firstname, $lastname, $dob, $address, $phone, $email, $username, $u_id);
		return $stmt->execute();
	}

	function change_password($username, $password){
		$conn = connect();
		$stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
		$stmt->bind_param("ss", $password, $username);
		return $stmt->execute();
	}

	function delete_user($u_id){
		$conn = connect();
		$stmt = $conn->prepare("DELETE FROM users WHERE u_id = ?");
		$stmt->bind_param("i", $u_id);
		return $stmt->execute();
	}

	function username_exist($username){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$records = $stmt->get_result();
		return $records->num_rows>0;
	}

	function current_username($u_id, $username){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? and u_id = ?");
		$stmt->bind_param("si", $username, $u_id);
		$stmt->execute();
		$records = $stmt->get_result();
		return $records->num_rows===1;
	}

	function search_user($username){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE username LIKE CONCAT('%', ?, '%')");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$records = $stmt-> get_result();
		
		return $records;
	}

	function getAllUsers(){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users");
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_all(MYSQLI_ASSOC);
	}

	function getUser($u_id){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE u_id = ?");
		$stmt->bind_param("i", $u_id);
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_object();
	}

	function getName($username){
		$conn = connect();
		$stmt = $conn->prepare("SELECT firstname, lastname FROM users WHERE username = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_object();
	}

		function getMyProfile($username){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_object();
	}


	//****************************PRODUCTS**************************************//


	function add_product($p_image, $p_name, $brand, $category, $price, $stock){
		$conn = connect();
		$stmt = $conn->prepare("INSERT INTO products (p_image, p_name, brand, category, price, stock) VALUES(?,?,?,?,?,?)");
		$stmt->bind_param("ssssii",$p_image, $p_name, $brand, $category, $price, $stock);
		return $stmt->execute();
	}

	function update_product1($p_id, $p_name, $brand, $category, $price, $stock){
		$conn = connect();
		$stmt = $conn->prepare("UPDATE products SET p_name = ?, brand = ?, category = ?, price = ?, stock = ? WHERE p_id = ?");
		$stmt->bind_param("sssiii", $p_name, $brand, $category, $price, $stock, $p_id);
		return $stmt->execute();
	}

	function update_product($p_id, $p_image, $p_name, $brand, $category, $price, $stock){
		$conn = connect();
		$stmt = $conn->prepare("UPDATE products SET p_image = ?, p_name = ?, brand = ?, category = ?, price = ?, stock = ? WHERE p_id = ?");
		$stmt->bind_param("ssssiii",$p_image, $p_name, $brand, $category, $price, $stock, $p_id);
		return $stmt->execute();
	}

	function delete_product($p_id){
		$conn = connect();
		$stmt = $conn->prepare("DELETE FROM products WHERE p_id = ?");
		$stmt->bind_param("i", $p_id);
		return $stmt->execute();
	}

	function productname_exist($p_name){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM products WHERE p_name = ?");
		$stmt->bind_param("s", $p_name);
		$stmt->execute();
		$records = $stmt->get_result();
		return $records->num_rows>0;
	}

	function current_productname($p_id, $p_name){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM products WHERE p_name = ? and p_id = ?");
		$stmt->bind_param("si", $p_name, $p_id);
		$stmt->execute();
		$records = $stmt->get_result();
		return $records->num_rows===1;
	}

	function search_product($p_name){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM products WHERE p_name LIKE CONCAT('%', ?, '%')");
		$stmt->bind_param("s", $p_name);
		$stmt->execute();
		$records = $stmt-> get_result();
		
		return $records;
	}

	function getAllProducts(){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM products");
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_all(MYSQLI_ASSOC);
	}

	function getProduct($p_id){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM products WHERE p_id = ?");
		$stmt->bind_param("i", $p_id);
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_object();
	}


	//****************************ORDERS**************************************//


	function update_order($o_id, $payment_status, $order_status){
		$conn = connect();
		$stmt = $conn->prepare("UPDATE orders SET payment_status = ?, order_status = ? WHERE o_id = ?");
		$stmt->bind_param("ssi",$payment_status, $order_status, $o_id);
		return $stmt->execute();
	}

	function delete_order($o_id){
		$conn = connect();
		$stmt = $conn->prepare("DELETE FROM orders WHERE o_id = ?");
		$stmt->bind_param("i", $o_id);
		return $stmt->execute();
	}

	function getOrder($o_id){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM orders WHERE o_id = ?");
		$stmt->bind_param("i", $o_id);
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_object();
	}

	function getAllOrders(){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM orders");
		$stmt->execute();
		$records = $stmt->get_result();
		return $records->fetch_all(MYSQLI_ASSOC);
	}

	function search_order($o_id){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM orders WHERE o_id LIKE CONCAT('%', ?, '%') or order_status LIKE CONCAT('%', ?, '%')");
		$stmt->bind_param("is",$o_id, $o_id);
		$stmt->execute();
		$records = $stmt->get_result();
		return $records;
	}


	//****************************REVIEWS**************************************//


	function getAllReviews(){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM reviews");
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->fetch_all(MYSQLI_ASSOC);
	}

?>