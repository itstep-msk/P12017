<?php session_start();

if($_SESSION["apple"]) {
	echo $_SESSION["apple"];
} else {
	echo "Вы не авторизованы";
}

?>