<?php

	$servername = "localhost";
	$database = "register-bd";
	$username = "root";
	$password = "root";

	$section = "man";

	$mysql = new mysqli($servername, $username, $password, $database);
	$result = $mysql->query("SELECT * FROM products WHERE section = '$section';");




?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Одежда для мужчин</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container mt-3">
		<h1> Одежда для мужчин <h1>
		<table>
		<?php
			while ($row = $result->fetch_assoc()) {
			echo "<tr><td>$row[name]</td><td><img src='$row[link]'/></td><td>Цена - $row[price]</td></tr>";
			}
		?>
		</table>
		</div>
	</body>
</html>