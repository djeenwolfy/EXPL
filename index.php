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
	<title>ExcaPool - Главная</title>
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
					<li><a class="modal-trigger" href="#autoriz">Вход/register</a></li>
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
			<li><a class="modal-trigger" href="#autoriz">Вход\Регистрация</a></li>
			
		</ul>
	</header>
	<?php 
	echo "Здравствуйте";
	echo " ";
	echo $_SESSION['user_login']; ?>
	<!-- Конец header -->
	<div id="autoriz" class="modal">
		<div class="modal-content">

			<div class="row">
				<!-- ******************************************** -->
				<form  role="form" action="phpcontroller/chek_control.php" method="post">
					<div class="signup col s12 m6 l4 xl4 ">
						<h5>Войти</h5>
						<br>
						<div class="input-field" id="field-input">
							<input id="login" type="text" name="log">
							<label for="login">Логин</label>
						</div>
						<div class="input-field" id="field-input">
							<input id="password" type="password" name="pass">
							<label for="password">Пароль</label>
						</div>
						<br>
						<div class="modal-footer">
							<button type="submit" class="waves-effect waves-blue btn-flat">Войти</button>
						</div>
					</div>
				</form>
				<!-- ******************************************** -->
				<?php 
				include 'phpcontroller/connect.php';
$tmp_registr = false; // флаг регистрации
$sql_select = "SELECT * FROM `ExcaPopl` LIMIT 0, 50 ";
$stmt = $pdo->query($sql_select);
while ($row = $stmt->fetch())
{
    if ($row['user_login'] == "$_POST[user_login]"){ // проверяем
    $tmp_registr = true; // если нашли флаг в true
    echo  "Пользователь с таким именем существует";
    break;
}

}

if ($tmp_registr == false) {

// регистрируем нового пользователя
	$sql_insert = 'INSERT INTO `ExcaPopl`
	SET 
	`user_login` = "'.$_POST[user_login].'",
	`user_email` = "'.$_POST[user_email].'",
	`user_password` = "'.$_POST[user_password].'"
	';
$count = $pdo->exec($sql_insert); //запись в базу данных
if ($count!=0) echo "Пользователь зарегистрирован";
else
	echo "Что-то пошло не так";
}



?>
<form  role="form" action="index.php" method="post">
	<div class="signin col s12 m6 l4 xl4 ">
		<h5>Регистрация</h5>
		<br>
		<div class="input-field" id="field-input">
			<input id="email" type="text" name="user_email">
			<label for="email">Email</label>
		</div>
		<div class="input-field" id="field-input" >
			<input id="login" type="text" name="user_login">
			<label for="login">Логин</label>
		</div>
		<div class="input-field" id="field-input">
			<input id="password1" type="password" name="user_password">
			<label for="password1">Пароль</label>
		</div>                       
		<div class="modal-footer">
			<button type="submit" class="waves-effect waves-blue btn-flat">Зарегистрироваться</button>                           

		</div>
	</div>
</form>

<!-- ******************************************** -->
<div class="modal-footer">
	<!-- <a href="admin.php" class=" waves-effect waves-blue btn-flat">Админка</a> -->
	<a href="" class="modal-close waves-effect waves-blue btn-flat">Закрыть</a>
</div>
<!-- ******************************************** -->
</div>
</div>
</div> 





<main class="Site-content">
	<br>
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="img/first.png" class="slider-images"> 
				<div class="caption center-align">
					<h3>ExcaPool</h3>
					<h5 class="light grey-text text-lighten-3">установка бассейнов любой сложности</h5>
				</div>
			</li>
			<li>
				<img src="img/second.png" class="slider-images"> 
				<div class="caption left-align">
					<h3>Большой выбор</h3>
					<h5 class="light grey-text text-lighten-3">В нашем каталоге много интересных вариантов бассейнов</h5>
				</div>
			</li>
			<li>
				<img src="img/third.png" class="slider-images"> 
				<div class="caption right-align">
					<h3>Сделаем качественно и с гарантией</h3>
					<h5 class="light grey-text text-lighten-3">Опыт более 10 лет и множетво довольных клиентов</h5>
				</div>
			</li>
		</ul>
	</div>
</main>

<!-- Футер -->
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