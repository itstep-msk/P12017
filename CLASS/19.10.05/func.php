<?php
	
	$name = "Alex";

	function greeting($age = 15) {
		global $name;

		return "<br> $name <br> $age";
	}

	echo greeting(20);
	echo greeting();

?>