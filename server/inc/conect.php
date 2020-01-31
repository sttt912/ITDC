<?php
 header("Access-Control-Allow-Origin: *");
 
    $host = 'localhost';  // Хост
    $user = '';    // Имя пользователя
    $pass = ''; // пароль
    $db_name = '';   //bd
    $link = mysqli_connect($host, $user, $pass, $db_name); // conect
	
	
	if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }
 ?>