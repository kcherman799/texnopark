<?php
	require_once("head.php"); // Подключаем HTTPS протокол
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="ie=edge charset=utf-8" />
		<title> Услуга 1 / Детский технопарк РГСУ </title>
		<link rel="icon" href="img/logo.png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" href="css/modal.css">
	    	
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
		    	
				<!-- Основная часть-->
				<div class="container-fluid">
					<div class="row text-center alert">
						<div class="col-12">
							<h1 class="disple-4"> Услуга 1 </h1>
						</div>
						
						 <!-- Слайдер -->						
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block" src="img/about.png" alt="Первый слайд">
						    </div>
						    
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						
						<!-- Информация о услуги -->
						
						<div class="col-12">
							<h1 class="disple-4"> О услуге 1 </h1>
						</div>
			
						<div class="col-12"> 
							<p>  Следует отметить, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании первоочередных требований. Сложно сказать, почему представители современных социальных резервов набирают популярность среди определенных слоев населения, а значит, должны быть преданы социально-демократической анафеме. Но внедрение современных методик предоставляет широкие возможности для системы массового участия. Сложно сказать, почему представители современных социальных резервов набирают популярность среди определенных слоев населения, а значит, должны быть своевременно верифицированы.</p>
							
							<button class="btn btn-primary" type="button" onclick="ModalOpen('Order')"> Заказать услугу </button>
						</div>
						
						<!-- Блок с модальном окном Перевод контрагенту -->
						<div class="myModal" id="Order">
							<div class="myModal-dialog modal-lg"> 
								<div class="myModal-content"> 
									<div class="myModal-header"> 
										Заказать услугу
										<button class="close" onclick="ModalClose('Order')"> Х </button> 
									</div>
									
									<div class="myModal-body"> 

										<div class="alert alert-danger text-center" id="ErorrBlock"></div>
										
										<form role="form" class="form-horizontar">
											<div class="form-group row">
												<label for="Surname" class="control-label myLabel col-md-3"> Фамилия: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Surname" />
												</div>	
											</div>
											<div class="form-group row">
												<label for="Name" class="control-label myLabel col-md-3"> Имя: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Name" />
												</div>	
											</div>
											<div class="form-group row">
												<label for="Patron" class="control-label myLabel col-md-3"> Отчество: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Patron" />
												</div>	
											</div>
											<div class="form-group row">
												<label for="Phone" class="control-label myLabel col-md-3"> Телефон: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Phone" />
												</div>	
											</div>
											<div class="form-group row">
												<label for="Email" class="control-label myLabel col-md-3"> Email: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Email" />
												</div>	
											</div>
											<div class="form-group typeObj">
												<select name="typeObj" aria-controls="dataTable" class=" custom-select col-md-12 form-control form-control-sm">
												  <option value="null" > Выбрать тип обекта: </option>
												  <option value="Окружение"> Окружение </option>
												  <option value="Персонажи"> Персонажи </option>
												  <option value="Cad"> Cad </option>
												  <option value="Реверс"> Реверс </option>
											  </select>										
										   </div>
										   <div class="form-group row">
												<label for="countObj" class="control-label myLabel col-md-3"> Количество объектов: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="countObj" />
												</div>	
											</div>
											<div class="form-group row">
												<label for="Size" class="control-label myLabel col-md-3"> Размер: </label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Size" />
												</div>	
											</div>
											<div class="form-group row">
												<label for="Task" class="control-label myLabel col-md-3"> 
													Для чего будет использоваться: 
												</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="Task" />
												</div>	
											</div>
										</form>									
									<div class="myModal-footer"> 
										<button class="btn btn-warning mr-3" id="orderServ"> Заказать услугу </button>
										<button class="btn btn-danger" onclick="ModalClose('Order')"> Закрыть </button> 											</div>
								</div>
							</div>
						</div>
						<!-- Конец модального окна-->
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
							<a class="" href="#"><img src="img/vk.png" class="social"></img></a>
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
		
		<script src="js/WorkModal.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
	    <script>
		    $("#orderServ").click(function ()
			    { // Обработчик кнопки Отправить сообщение
				   // Получаем значение полей
				   $('#ErorBlock').hide(); // Скрываем сообщение об ошибки
				   $('#ErorrBlock').html("");
				   // Изменяем цвет информационного блога
				   $('#ErorrBlock').removeClass('alert-success');
				   $('#ErorrBlock').addClass('alert-danger');
						
		
				   var surname = $("#Surname").val(); 
				   var name = $("#Name").val();
				   var patron = $("#Patron").val();
				   var phone = $("#Phone").val();
				   var email = $("#Email").val();
				   var typeObj = $("select[name='typeObj']").val();
				   var countObj = $("#countObj").val();
				   var size = $("#Size").val();
				   var task = $("#Task").val();
				   
				   var err = ''; // Переменная для ошибок
				   
				   if(surname.length <= 3)
				   { // Если фамилия указано неверно
					 err = 'Фамилия должно быть больше 3 символов!';
				   }
				   else if(name.length <= 4)
				   { // Если имя указано неверно
					 err = 'Имя должно быть больше 4 символов!'; 
				   }  
				   else if(patron.length <= 6)
				   { // Если отчество указано неверно
					 err = 'Отчество должно быть больше 6 символов!';
				   }  
				   else if(phone.length <= 10)
				   { // Если телефон указано неверно
					 err = 'Телефон должно быть больше 10 символов!';
				   }  
				   else if(email.split('@').length-1 == 0 || email.split('.').length-1 == 0)
				   { // Если Email некорректно 
					 err = 'Email указан некорректно!';
				   }    
				   else if(!typeObj)
				   { // Если выбран тип объекта
					 err = 'Тип объекта не выбран!';
				   }    
				   else if(countObj.length <=0)
				   { // Если количество объектов указано неправильно
					 err = 'Количество объектов должно больше нуля!';
				   }   
				   else if(size.length <= 0)
				   { // Если размер указана неверно
					 err = 'Размер должно больше нуля!';
				   }    
				   else if(task.length <= 3)
				   { // Если сообщение указано неправильно
					 err = 'Цель разработки должно больше 3 символов!';
				   }  

				   			   			   
				   if (err != '')
					{ // Если у нас не корретные данные 
						$('#ErorrBlock').html(err);
						$('#ErorrBlock').show(); // Показываем ошибку пользователю
					}
					else 
					{ // Иначе
						$("#orderServ").prop("disabled", true); // Блокировка кнопки
						
						$.ajax({ // Отправка формы на сервер
						url: 'ajax/service.php',
						type: 'POST',
						cache: false,
						data: {'Surname': surname, 'Name': name, 'Patron': patron, 'Phone': phone, 'Email': email, 
							'typeObj': typeObj, 'countObj': countObj, 'Size': size, 'Task': task, 'Service': "Услуга 1"},
						dataType: 'html',
						success: function (data) {									
								if (data !== "Ваш заказ успешно оформлен, ожидайте расчет стоимости в течение 5 рабочей дней на email!")
								{ // Если заказ не оформлен
									$('#ErorrBlock').html(data);
									$('#ErorrBlock').show(); // Показываем ошибку пользователю
								}
								else { // Иначе
										// Изменяем цвет информационного блога
										$('#ErorrBlock').removeClass('alert-danger');
										$('#ErorrBlock').addClass('alert-success');
										
										$('#ErorrBlock').html(data);
										$('#ErorrBlock').show(); // Показываем сообшение пользователю
										
										// Очищаем поля формы
										$("#Surname").val("");
										$("#Name").val("");
										$("#Patron").val("");
										$("#Phone").val("");
										$("#Email").val("");
										$("select[name='typeObj']").val("");
										$("#countObj").val("");
										$("#Size").val("");
										$("#Task").val("");
								}
								
								$("#orderServ").prop("disabled", false); // Разблокировка кнопки			
							}
						}); 

					}
			 });
		  </script>
	</body>
</html>
