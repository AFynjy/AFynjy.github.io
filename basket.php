<?php

	$servername = "localhost";
	$database = "register-bd";
	$username = "root";
	$password = "root";


	$mysql = new mysqli($servername, $username, $password, $database);

	$ID = $_GET['addid'];



	if (is_null($ID)){
	echo "";
	}else{
	$mysql ->query("INSERT INTO basket (idproducts) VALUES ('$ID')");
	header('Location: /basket.php');

	}


	$result = $mysql->query("SELECT a.name, a.link, a.price FROM products a, basket b WHERE a.id = b.idproducts");


?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Корзина</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container mt-3">
		<h1> Корзина <h1>
		<table>
	<?php
		while ($row = $result->fetch_assoc()) {
		echo "<tr><td>$row[name]</td><td><img src='$row[link]'/></td><td>Цена - $row[price]</td></tr>";
	}
	?>
		</table>
</body>
</html>