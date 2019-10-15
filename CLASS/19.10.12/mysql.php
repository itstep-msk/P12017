<?php

$db = mysqli_connect('localhost', 'root', '', 'fruits');
// Добавление
mysqli_query($db, "INSERT INTO `items`(`name`, `value`, `price`) VALUES ('banana', '20', 30)");
// Получение
$query = mysqli_query($db, "SELECT * FROM items");

while($data = mysqli_fetch_assoc($query)) {
	echo "name: ".$data["name"]."<br>";
}

?>