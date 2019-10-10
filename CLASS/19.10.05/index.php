<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Hello from html</h1>

<?php 
	echo "Hello from php";
	$a = 1;
	$b = 2;

	echo "<br>";
	echo $a + $b;
	echo "<br>";

	$c = "apple";
	$d = "banana";

	echo $c."<br>".$d;

	echo "<br>";
	// интерполяция переменной
	echo "$c<br>$d";

	$fruits = ["apple", "banana", "plum"];

	echo "<br>";

	echo $fruits;

	$fruits["Moscow"] = 17000000;

	echo "<br>";
	// <pre> - сохраняет пробелы и переносы строк
	echo "<pre>";
	var_dump($fruits);
	echo "</pre>";

	echo "<br>";

	array_push($fruits, "potato");

	foreach ($fruits as $key => $value) {
		echo "Ключ:".$key." Значение: ".$value."<br>";
	}
	echo "<br>";

	$brand = "bmw";
	$car = "brand";

	echo $$car; // bmw
?>

<h2>Hello from html H2</h2>

</body>
</html>