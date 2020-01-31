<?php
$name = $_POST['fname'];
$rno = $_POST['id'];
$result = $_POST['id'];


$filename = 'somefile.txt';
//записываем текст в файл
file_put_contents($filename, $name);
//потом его можно прочитать из файла
$text = file_get_contents($filename);

echo $result;
?>