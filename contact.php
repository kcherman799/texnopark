<?php
	require_once("head.php"); // Подключаем HTTPS протокол
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="ie=edge charset=utf-8" />
		<title> Контакты / Детский технопарк РГСУ </title>
		<link rel="icon" href="img/logo.png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	
	    <!-- Подключаем Boоtstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	</head>
	
	<body>
	    <!-- Шапка сайта -->
	    <div id="Wrapper"> 
		    <div id="Page">
		    	<header>
					<nav class="navbar navbar-expand-lg navbar-light  bg-light">
				 		<div class="container">
							<a class="navbar-brand" href="#"> 
								<img src="img/logo.png"></img>
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navig">
								<span class="navbar-toggler-icon"></span>
							</button>
				
							<div class="collapse navbar-collapse" id="Navig">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item"> 	
										<a class="nav-link" href="/"> Главная </a> 
									</li>
									<li class="nav-item"> 
										<a class="nav-link" href="about"> О нас </a> 
									</li>
									<li class="nav-item"> 
										<a class="nav-link active" href="contact"> Контакты </a>
									</li>
								</ul>
							</div>
							
							<div class="row ">
								<!-- Наш адрес -->
								<div class="col-6">
									<p class="lead text-rigt textContr"> 
										Наш адрес: г. Москва, ул. Беговая, д. 12 
									</p>
									<p class="lead text-rigt textContr"> 
										г. Москва, ул. Вильгельма Пика, д. 4
									</p>
								</div>
								<!-- Наши контакты -->
								<div class="col-6">
									<p class="lead  textPhone"> 
										Наш телефон: +7 (916) 841-45-16 
									</p>
									<p class="lead  textPhone"> 
										Наш email: technopark@rgsu.net
									</p>
								</div>
							</div>
						</div>
					</nav>
				</header>
					<div class="container-fluid">
						<div class="row text-center alert">
							<div class="col-12">
								<h1 class="disple-4"> Форма обратной связи </h1>
							</div>
							
							
								<div class="text-center contForm">
									<p class="lead"> Для отправки нам сообщения, заполните форму ниже: </p>
									
									<div class="alert alert-danger" id="ErorrBlock"></div>
								
									<form action="#" method="post">
										<div class="form-group">
										   <label for="name"></label>
										   <input type="name" class="form-control" id="Name" placeholder="Ваше имя:">
										</div>
										<div class="form-group">
										  <input type="email" class="form-control" id="Email" placeholder="Ваш Email:">
										</div>
										<div class="form-group">
										   <input type="text" class="form-control" id="Subject" placeholder="Тема:">
										</div>
										<div class="form-group">
										   <label for="message"></label>
										   <textarea class="form-control" id="Mess" rows="3" placeholder="Сообщение:"></textarea>
										</div>
										<button type="button" id="sendMess" class="btn btn-info"> Отправить сообщение </button>
									</form>
								</div>
						</div>
					</div>
				</div>
		
			<!-- footer сайта -->
			<footer class="container-fluid">
				<div class="row padding text-center">
					<div class="col-12">
						<h2> Наши контакты </h2>
					</div>
				</div>
				<div class="row padding text-center">
					<div class="col-6 adressFooter">
						<p class="lead text-rigt textContr"> 
							Наш адрес: г. Москва, ул. Беговая, д. 12 
						</p>
						<p class="lead text-rigt textContr"> 
							г. Москва, ул. Вильгельма Пика, д. 4
						</p>
						<p class="lead text-rigt textContr"> 
							Наш телефон: +7 (916) 841-45-16 
						</p>
					</div>
					<div class="col-3 ContrFootr">
						<p class="lead"> 
							<a class="" href="#"><img src="img/vk.png" class="social"></img></a>
						</p>
					</div>
					<div class="col-3 adressFooter">
						<p class="lead"> 
							Наш email: technopark@rgsu.net
						</p>
						<p class="lead"> 
							Наш основной сайт: technopark.rgsu.net
						</p>
					</div>
				</div>
			</footer>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
	    <script>
		    $("#sendMess").click(function ()
			    { // Обработчик кнопки Отправить сообщение
				   // Получаем значение полей
				   $('#ErorBlock').hide(); // Скрываем сообщение об ошибки
				   
				   // Изменяем цвет информационного блога
				   $('#ErorrBlock').removeClass('alert-success');
				   $('#ErorrBlock').addClass('alert-danger');
						
		
				   var name = $("#Name").val(); 
				   var email = $("#Email").val();
				   var subject = $("#Subject").val();
				   var message = $("#Mess").val();
				   

				   var err = ''; // Переменная для ошибок
				   
				   if(name.length <= 5)
				   { // Если имя указано неверно
					 err = 'Имя с фамилией должно быть больше 5 символов!';
					 
				   }  
				   else if(email.split('@').length-1 == 0 || email.split('.').length-1 == 0)
				   { // Если Email некорректно 
					 err = 'Email указан некорректно!';
				   }    
				   else if(subject.length <= 5)
				   { // Если тема указана неверно
					 err = 'Тема сообщение должно быть больше 5 символов!';
				   }    
				   else if(message.length <= 8)
				   { // Если сообщение указано неправильно
					 err = 'Сообщение должно больше 8 символов!';
				   }  
				   			   			   
				   if (err != '')
					{ // Если у нас не корретные данные 
						$('#ErorrBlock').html(err);
						$('#ErorrBlock').show(); // Показываем ошибку пользователю
					}
					else 
					{ // Иначе
						$("#sendMess").prop("disabled", true); // Блокировка кнопки
						
						$.ajax({ // Отправка формы на сервер
						url: 'ajax/feedback.php',
						type: 'POST',
						cache: false,
						data: {'Name': name, 'Email': email, 'Subject': subject, 'Message': message},
						dataType: 'html',
						success: function (data) {									
								if (data !== "Сообщение успешно отправлено!")
								{ // Если пользователь указал не правильно логин и пароль
									$('#ErorrBlock').html(data);
									$('#ErorrBlock').show(); // Показываем ошибку пользователю
								}
								else { // Иначе
										// Изменяем цвет информационного блога
										$('#ErorrBlock').removeClass('alert-danger');
										$('#ErorrBlock').addClass('alert-success');
										
										$('#ErorrBlock').html(data);
										$('#ErorrBlock').show(); // Показываем ошибку пользователю
										
										// Очищаем поля формы
										$("#Name").val("");
										$("#Email").val("");
										$("#Subject").val("");
										$("#Mess").val("");
										
								}
								
								$("#sendMess").prop("disabled", false); // Разблокировка кнопки
			
							}
						}); 
					}
			 });
		  </script>
	</body>
</html>
