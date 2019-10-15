<!DOCTYPE html>
<html>
<head>
	<title>Blog главная</title>
</head>
<body>

<?php
	$db = mysqli_connect("localhost", "root", "", "blog");
	$query = mysqli_query($db, "SELECT * FROM posts");

	while($data = mysqli_fetch_assoc($query)) {
		echo "<h1>";
		echo $data["shortContent"];
		echo "</h1>";

		echo "<i>";
		echo $data["fullContent"];
		echo "</i>";
	}
?>

</body>
</html>