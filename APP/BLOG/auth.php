<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Auth</title>
</head>
<body>

<h1>Авторизация</h1>

<form action="" method="POST">
	<input type="text" name="login" placeholder="login"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" value="Войти">
</form>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$login = $_POST["login"];
		$password = $_POST["password"];
		$db = mysqli_connect("localhost", "root", "", "blog");


		if(!empty($login) && !empty($password)) {
			$query = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'");
			$result = mysqli_fetch_assoc($query);

			if($result && $result["password"] == $password) {
				$_SESSION["login"] = $result["login"];
				$_SESSION["userId"] = $result["id"];
				echo "Вы вошли на сайт";
			} else {
				echo "Неправильный логин или пароль...";
			}
		} else {
			echo "Вы ввели не все данные";
		}
	}
?>

</body>
</html>