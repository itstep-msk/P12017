<?php

	$tmp_folder = $_FILES["apple"]["tmp_name"];
	$file_name = $_FILES["apple"]["name"];

	// move_uploaded_file("Откуда", "Куда")
	move_uploaded_file($tmp_folder, "./img/".$file_name);

?>