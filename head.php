<?php
	if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off")
	{ // Если пользователь не ввел протокол HTTPS
		$redirect = 'https://'. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI']; // Создаем протокол HTTPS
		header('HTTP/1.1 301 Moved Permanentle'); // Коретно переадресация
		header('Location:'. $redirect); // Перенаправляем пользователя на протокол HTTPS 
	}

?>