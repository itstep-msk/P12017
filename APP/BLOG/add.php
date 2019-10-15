<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add post</title>
</head>
<body>

<?php if($_SESSION["login"]) {?>

<h1>Добавление поста</h1>

<form action="" method="POST">
	<input type="text" name="userId" hidden value="<?php echo $_SESSION["userId"] ?>"><br>
	<textarea name="shortContent" placeholder="Краткое содержание"></textarea><br>
	<textarea name="fullContent" placeholder="Полное содержание"></textarea><br>
	<input type="submit" value="Добавить">
</form>

<?php 
	} else { 
		echo "<h1>Вы не вошли на сайт</h1>";
	}
?>

<?php
	if($_SESSION["login"] && $_SERVER["REQUEST_METHOD"] == "POST") {
		$db = mysqli_connect("localhost", "root", "", "blog");
		$userId = $_POST["userId"];
		$shortContent = $_POST["shortContent"];
		$fullContent = $_POST["fullContent"];

		mysqli_query($db, "INSERT INTO `posts`(`userId`, `shortContent`, `fullContent`) VALUES ('$userId', '$shortContent', '$fullContent')");
	}
?>

</body>
</html>