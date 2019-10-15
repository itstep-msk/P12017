<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

<h1>Регистрация</h1>

<form action="" method="POST">
	<input type="text" name="login" placeholder="login"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" value="Регистрация">
</form>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$login = $_POST["login"];
		$password = $_POST["password"];
		$db = mysqli_connect("localhost", "root", "", "blog");


		if(!empty($login) && !empty($password)) {
			$query = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'");
			$result = mysqli_fetch_assoc($query);

			if($result) {
				echo "Данный логин занят...";
			} else {
				mysqli_query($db, "INSERT INTO `users`(`login`, `password`) VALUES ('$login', '$password')");
				echo "Регистрация успешна";
			}
		} else {
			echo "Вы ввели не все данные";
		}
	}
?>

</body>
</html>