<?php

	$servername = "localhost";
	$database = "register-bd";
	$username = "root";
	$password = "root";

	$section = "woman";

	$mysql = new mysqli($servername, $username, $password, $database);
	$result = $mysql->query("SELECT * FROM products WHERE section = '$section';");




?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Одежда для женщин</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container mt-3">
		<h1> Одежда для женщин <h1>
		<table>
		<?php
			while ($row = $result->fetch_assoc()) {
			echo "<tr><td>$row[name]</td><td><img src='$row[link]'/></td><td>Цена - $row[price]</td><td><a class='link' href='/basket.php?addid=$row[id]'> В корзину </a> </td></tr>";
			}
		?>
		</table>
		</div>
	</body>
</html>