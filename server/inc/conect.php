<?php
 header("Access-Control-Allow-Origin: *");
 
    $host = '';  // Хост
    $user = '';    // Имя пользователя
    $pass = ''; // пароль
    $db_name = '';   //bd
    $link = mysqli_connect($host, $user, $pass, $db_name); // conect
	
	
	if (!$link) {
      echo 'Не можу підключитись до БД. Код помилки: ' . mysqli_connect_errno() . ', Помилка: ' . mysqli_connect_error();
      exit;
    }
 ?>