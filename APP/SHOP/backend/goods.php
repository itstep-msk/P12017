<?php
	$from = $_GET["from"];
	$to = $_GET["to"];
	$database = file_get_contents("database.json");
	$goods = json_decode($database, true);
	$goods_range = [];

	for($i = $from; $i <= $to; $i++) {
		array_push($goods_range, $goods["goods"][$i]);
	}

	$result = json_encode($goods_range);

	echo $result;
?>