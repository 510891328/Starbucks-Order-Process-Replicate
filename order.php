<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		require('mysqli_connect.php');// Connect to the db

		$drink = mysqli_real_escape_string($dbc, $_POST['drinksname']);
		
		$size = mysqli_real_escape_string($dbc, $_POST['size']);

		$addins_value = mysqli_real_escape_string($dbc, $_POST['addins_value']);

		$image = mysqli_real_escape_string($dbc,$_POST['image']);

		$price = $_POST['price'];

		$query = "INSERT INTO products (product_id,drinksname, size, addins_value, image, price)VALUES(NULL,'$drink','$size','$addins_value','$image','$price')";
			
		$run = mysqli_query($dbc, $query); //Run the query

		mysqli_close($dbc);//Close the db connection
	}
?>