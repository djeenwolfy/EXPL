<?php 	
session_start(); // стратуем сессию, чтобы использовать 
//проерку авторизации пользователя
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css" type="text/css" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="shortcut icon" href="img/minilogo.png">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>ExcaPool - Каталог</title>
</head>
<body class="Site">
	<!-- Начало header -->
	<header> 
		<nav> <!-- Навигация и лого -->
			<div  class="nav-wrapper  blue lighten-1">
				<a href="http://gr2.uxp.ru" class="brand-logo" id="mainLogo">ExcaPool</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

				<ul class="right hide-on-med-and-down" id="mainMenu">
					<li><a href="http://gr2.uxp.ru">Главная</a></li>
					<li><a href="Catalog.php">Каталог</a></li>
					<li><a href="Price.php">Калькулятор цен</a></li>
					<li><a href="About.php">О нас</a></li>
					<li><a href="Contacts.php">Контакты</a></li>
				</ul>
			</div>
		</nav>
		<!-- Навигация на мобильных устройствах -->
		<ul class="sidenav" id="mobile-demo">
			<li><a href="http://gr2.uxp.ru">Главная</a></li>
			<li><a href="Catalog.php">Каталог</a></li>
			<li><a href="Price.php">Калькулятор цен</a></li>
			<li><a href="About.php">О нас</a></li>
			<li><a href="Contacts.php">Контакты</a></li>
		</ul>
	</header>
	<!-- Конец header -->
	
	<main class="Site-content">
		
		<div class="catalog-block">
			<div class="row" id="catalog">
				<li v-for="good in goods">
					<div class="col s12 m6 l4 xl3">
						<div class="card">
							<div class="card-image">
								<img v-bind:src="good.image">
								<span class="card-title">{{ good.title }}</span>
							</div>
							<div class="card-content">
								<p>{{ good.cartText }}</p>
							</div>
							<div class="card-action">
								<a href="#contact-form" class="modal-trigger" id="order-btn">Заказать</a>
							</div>
						</div>
					</div>
				</li>	
			</div>
		</div>
		<!-- ========== catalog end============= -->
		<div id="contact-form" class="modal">
			<div class="modal-content">
				<h4>Свяжитесь с нами</h4>
				<p>Уважаемый клиент, оставьте свои контактные данные, чтобы мы смогли связаться с вами и обсудить ваш заказ.</p>
				<br>
				<div class="row">

					<form method="post" name="sendForm" enctype="multipart/form-data" class="col s12">
						
						<div class="row">
							<div class="input-field col s6" id="field-input">
								<i class="material-icons prefix">account_circle</i>
								<input name="first_name" id="icon_prefix" type="text" class="validate">
								<label id="formLabel" for="icon_prefix">Имя</label>
							</div>
							<div class="input-field col s6" id="field-input">
								<input name="last_name" id="last_name" type="text" class="validate">
								<label id="formLabel" for="last_name">Фамилия</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6" id="field-input">
								<i class="material-icons prefix">phone</i>
								<input name="phone" id="icon_telephone" type="tel">
								<label id="formLabel" for="icon_telephone">Телефон</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12" id="field-input">
								<i class="material-icons prefix">email</i>
								<input name="email" id="icon_email" type="email">
								<label id="formLabel" for="icon_email">Электронная почта - Email</label>
								<span class="helper-text" data-error="Введите корректный e-mail адрес" data-success="Данные корректны"></span>
							</div>
						</div>
						<div class="g-recaptcha" data-sitekey="6LctXp0UAAAAANI69UdodbSdA4EF3RxsIwX7P95Z" data-callback="enableBtn()"></div>
						<button  onclick="prepare_xml()" type="submit" name="action" class="modal-close waves-effect waves-blue btn-flat" id="sendButton">Отправить</button>
					</form>
				</div>
				
			</div>

		</div>
		<!-- end Modal Structure -->
	</main>

	<footer class="page-footer blue darken-2" id="rootFooter">
		<mainfooter></mainfooter>
		<subfooter></subfooter>
	</footer>
	<script src="ajax.js"></script>
	<script src="script/vue.js"></script>
	<script src="script/jquery-3.3.1.min.js"></script>      
	<script src="script/materialize.js"></script> 
	<script src="script/script.js"></script>  
</body>
</html>