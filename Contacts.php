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
	    <script src="https://api-maps.yandex.ru/2.1/?apikey=<6c7619f7-49b6-4141-8ec8-b6e40a662226>&lang=ru_RU" type="text/javascript"></script>
                    <script type="text/javascript">
ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
            center: [55.5005, 46.41288],
            zoom: 13
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myGeoObject = new ymaps.GeoObject(),
        myPieChart = new ymaps.Placemark();
    myMap.geoObjects
        .add(myGeoObject)
        .add(myPieChart)
        .add(new ymaps.Placemark([55.511158, 46.390313], {
            balloonContent: 'Главный офис компании',
        }, {
            preset: 'islands#blueWaterParkCircleIcon',
            iconCaptionMaxWidth: '50'
        }));
}
</script>
	<title>ExcaPool - Контакты</title>
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
		<div class="contacts row">
			<h4>Контакты</h4> 
			<div class="col s12 m6 l4 xl4 contact-card">
				<h5>Адрес</h5>
				<p>Главный офис находится по адресу: <br> 
				<span>Чувашская республика, <br>	
				г.Шумерля, ул.Некрасова д.62</span></p>
				<p>(смотрите карту ниже)</p>
			</div>
			<div class="col s12 m6 l4 xl4 contact-card">
				<h5>Связь</h5>
				<p>Свзяатся с нами можно:</p>
				<p>Телефон: +79993221488</p>
				<p>Viber: +79993221489</p>
				<p>WhatsApp: +79993221490</p>
			</div>

			<div class="col s12 m6 l4 xl4 contact-card">
				<h5>Поддержка</h5>
				<p>В случае каких-либо проблем:</p>	
				<p>Телефон: +79992289669</p>
				<p>E-mail: excapoolsupport@excapool.com</p>
			</div>
		</div>
		<div id="map" style="width: 100%; height: 350px"></div>
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