<?php
    $host = 'localhost';  // Хост
    $user = 'test';    // Имя пользователя
    $pass = '111111'; // пароль
    $db_name = 'test';   //bd
    $link = mysqli_connect($host, $user, $pass, $db_name); // conect
	
	
	if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
 ?>