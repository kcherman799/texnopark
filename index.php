<?php
	require_once("head.php"); // Подключаем HTTPS протокол
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="ie=edge charset=utf-8" />
		<title> Детский технопарк РГСУ </title>
		<link rel="icon" href="img/logo.png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	
		<!-- 	Подключаем jc файлы Bootstrap и jQuery	 -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
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
										<a class="nav-link active" href="/"> Главная </a> 
									</li>
									<li class="nav-item"> 
										<a class="nav-link" href="about"> О нас </a> 
									</li>
									<li class="nav-item"> 
										<a class="nav-link" href="contact"> Контакты </a>
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
			
				<div class="container-fluid padding">
					<div class="row alert text-center">
						<div class="col-12">
							<h1 class="display-4"> Наши услуги! </h1>
						</div>
						<hr>
					</div>
				</div>
				
				<!-- Блок с карточками услугами -->
				<div class="container-fluid padding">
					<div class="row padding">
						
						<?
							
							for($i = 0; $i<6; $i++)
							{ // Цикл для вывода услу
								echo("								
									<div class=\"col-md-4 mb-4\">
										<div class=\"card\">
											<img src=\"img/about.png\" class=\"card-img-top\" />
											<div class=\"card-body\">
												<h4 class=\"card-title\"> Услуга 1 </h1> 
													<p class=\"card-text\"> 
														Кстати, акционеры крупнейших компаний преданы социально-демократической анафеме. Имеется спорная точка зрения, гласящая примерно следующее: элементы политического процесса своевременно верифицированы. Безусловно, консультация с широким активом прекрасно подходит для реализации новых предложений
													</p>
													<a class=\"btn btn-warning\" href=\"service\"> Посмотреть детали </a>
											</div>
										</div>
									</div>
									"); // Выводим услугу на экран
							}
							
						?>						
												
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
					<div class="col-6">
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
							<a href="#"><img src="img/vk.png" class="social"></img></a>
						</p>
					</div>
					<div class="col-3">
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
	</body>
</html>
