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
	<title>ExcaPool - Наши работы</title>
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

		<form id="price" v-cloak>

			<h2 class="center" >Услуги за 1 кубический метр</h2>

			<ul>
				<li v-for="service in services" v-on:click="toggleActive(service)" v-bind:class="{ 'active': service.active}">
					{{service.name}}<span>{{service.price}}&#8381</span>
				</li>
				<li  v-for="m3 in m3 "  v-bind:class="{ 'active': m3.active}"><div class="tooltip">
					{{m3.name}}<span>{{m3.qwert}}</span>
					<input id="parameters" type="text" v-model="m3.qwert"/>
				</div>
			</li>
		</div>
	</ul>

	<div class="total">
		Объем:	<span>{{objem() }}</span>
		<br>
		Итого: <span>{{total()}}&#8381</span>
	</div>
</form>

</main>

	<footer class="page-footer blue darken-2" id="rootFooter">
		<mainfooter></mainfooter>
		<subfooter></subfooter>
	</footer>
<script src="script/vue.js"></script>  
<script src="script/jquery-3.3.1.min.js"></script>      
<script src="script/materialize.js"></script> 
<script src="script/script.js"></script>  
</body>
</html>