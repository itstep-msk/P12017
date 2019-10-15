<?php

	$db = mysqli_connect('localhost', 'root', '', 'fruits');
	$query = mysqli_query($db, "SELECT * FROM items");
	$result = "";

	while($data = mysqli_fetch_assoc($query)) {
		$result .= $data["name"]." ";
	}

	echo $result;
?>