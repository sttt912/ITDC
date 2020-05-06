<?php
 header("Access-Control-Allow-Origin: *");
 
    $host = 'localhost';  // Хост
    $user = 'sgsgsg';    // Имя пользователя
    $pass = 'Gcup1998'; // пароль
    $db_name = 'sgsgsg';   //bd
    $link = mysqli_connect($host, $user, $pass, $db_name); // conect
	
	
	if (!$link) {
      echo 'Не можу підключитись до БД. Код помилки: ' . mysqli_connect_errno() . ', Помилка: ' . mysqli_connect_error();
      exit;
    }
 ?>