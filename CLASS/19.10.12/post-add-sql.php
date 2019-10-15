<?php
	$name = $_POST["fruitName"];
	$value = $_POST["fruitValue"];
	$price = $_POST["fruitPrice"];
	$db = mysqli_connect('localhost', 'root', '', 'fruits');
	// Добавление
	mysqli_query($db, "INSERT INTO `items`(`name`, `value`, `price`) VALUES ('$name', '$value', $price)");
?>