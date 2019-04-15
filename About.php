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
	<title>ExcaPool - О нас</title>
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
		<div class="about-content row">
			<div class="about-main col s12 m8 l6">
				<h4>О нашей компании</h4>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;ExcaPool(от англ. excavation-выкапывание, раскопка; pool-бассейн) - компания, созданная братьями Олафссонами в конце 2007 года. Не смотря на мировой кризис 2008 года, компания смогла выжить и продожить свое существование. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;На первый парах семейного бизнеса, братья сами занимались всеми делами: от бухгалтерии до выполнения работ на объектах.В 2011 году американский инвесор(личность не оглашается) инвестировал в их компанию $300,000. Начался сильный подъем их любимого дела. Нанимали работников для распределения задач, закупали необходиму технику, а также вели курсы по обучению строительству бассейнов и различных водоемов($1000/месяц). <br>
				&nbsp;&nbsp;&nbsp;&nbsp;В 2019 году является одной из самых крупнейших компаний в сфере строительство бассейнов и водоемов с капиталом ок. $180млн, выполняя одни из самых сложных проектов. </p>
			</div>
			<div class="ab-img underroof col s12 m12 l4"></div>
			<div class="ab-img installpool col s12 m12 l6"></div>
			<div class="ab-img bobcat col s12 m12 l5"></div>
		</div>
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