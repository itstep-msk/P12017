<?php

$file = fopen("data.txt", "a+");
fwrite($file, "Hello from php");
fclose($file);

echo file_get_contents("data.txt");
echo file_get_contents("https://yandex.ru/");

?>