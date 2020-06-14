<!DOCTYPE html>
<html lang="ru">
    <head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styleavt.css">
		<title>Регистрация</title>
	</head>
	<body>
		<div class="container mt-4">
			<div class="row">
				<div class="col">
					<h1>Регистрация</h1>
					<form action="validation-form/check.php" method="post">
						<input type="text" class="form-control" name="login"
						id="login" placeholder="Введите логин"><br>
						<input type="text" class="form-control" name="name"
						id="name" placeholder="Введиет имя"><br>
						<input type="password" class="form-control" name="pass"
						id="pass" placeholder="Введите пароль"><br>
						<button class="btn btn-success"
						type="sumbit">Зарегестрировать</button>
					</form>
				</div>
				<div class="col">
					<h1>Авторизация</h1>
					<form action="validation-form/auth.php" method="post">
						<input type="text" class="form-control" name="login"
						id="login" placeholder="Введите логин"><br>
						<input type="password" class="form-control" name="pass"
						id="pass" placeholder="Введите пароль"><br>
						<button class="btn btn-success"
						type="sumbit">Авторизоваться</button>
					</form>
				</div>
			<div>
		</div>
	</body>
</html>