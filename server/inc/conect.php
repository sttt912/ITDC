<?php
    $host = 'localhost';  // Хост
    $user = 'sgsgsg';    // Имя пользователя
    $pass = 'Gcup1998'; // пароль
    $db_name = 'sgsgsg';   //bd
    $link = mysqli_connect($host, $user, $pass, $db_name); // conect
	
	
	if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
 ?>