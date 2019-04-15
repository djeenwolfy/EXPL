<?php 
session_start();

include 'connect.php';
     
// подключение и создание объекта PDO
    try {
        $pdo = new PDO($dsn, $user, $pass);
        } 
    catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
        } 

// извлекаем логин и  пароль для проверки
$tmp_locic = false; // флаг 
$sql_select = "SELECT * FROM `ExcaPopl` LIMIT 0, 50 ";
$stmt = $pdo->query($sql_select);
while ($row = $stmt->fetch())
{

// проверяем есть в базе данных пользователь с данным логином и паролем
    if (($_POST[log]==$row['user_login'])&&($_POST[pass]==$row['user_password'])&&(1==$row['status']))
    {
        echo "Здравствуйте вы админ";
        echo " ";
        echo $row['user_login'];
        ?>
       <p>Через 5 секунд будет произведено перенаправление на главную страницу</p>
   <script> window.setTimeout(function() { window.location = '../index.php'; }, 1500) </script><?php    
        
        $tmp_locic = true; // устанавливаем флаг, пользователь найден

        // необходимые данные из бд сохраняем в сессии
        // для того чтобы использовать их на страницах сайта
        $_SESSION['auth'] = $tmp_locic;
        $_SESSION['id'] = $row['id'];   
        $_SESSION['user_login'] = $row['user_login']; ;
        break;  // выходим сразу из цикла
    }

    elseif (($_POST[log]==$row['user_login'])&&($_POST[pass]==$row['user_password']))
    {
    	echo "Здравствуйте";
    	echo " ";
    	echo $row['user_login'];
    	?>
       <p>Через 5 секунд будет произведено перенаправление на главную страницу</p>
   <script> window.setTimeout(function() { window.location = '../index.php'; }, 1500) </script><?php    
    	
    	$tmp_locic = true; // устанавливаем флаг, пользователь найден

        // необходимые данные из бд сохраняем в сессии
        // для того чтобы использовать их на страницах сайта
        $_SESSION['auth'] = $tmp_locic;
        $_SESSION['id'] = $row['id'];	
        $_SESSION['user_login'] = $row['user_login']; ;
       	break;	// выходим сразу из цикла
    	
  	     
    }
    

} // while

if ($tmp_locic == false) // если пользователь не найден 
     {
    	echo "Пользователь с таким Логином и Паролем не сущетсвует";
        ?>    
    <p>ssssЧерез 5 секунд будет произведено перенаправление на страницу регистрации пользоватлей</p>
   <script> window.setTimeout(function() { window.location = '../index.php'; }, 1500) </script>
<?php
       }
 ?>    
    <meta charset="utf-8">