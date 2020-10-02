<?php 
	require('mysqli_connect.php');
		if ($_POST['action'] == '+') {
		    $query = "INSERT INTO products (product_id, size, addins_value, drinksname, image, price) SELECT NULL, size, addins_value, drinksname, image, price FROM products WHERE product_id = ".$_POST['cart_product']."";
		    mysqli_query($dbc,$query);
		} else if ($_POST['action'] == '-') {
		    $query = "DELETE FROM products WHERE product_id = ".$_POST['cart_product']."";
		    mysqli_query($dbc,$query);
		} else {
		  	echo "Error";
		}
	mysqli_close($dbc);
?>