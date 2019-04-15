<meta charset=utf-8>
<?php

// данные для доступа к базе данных
    // $host = 'localhost';
    // $db   = 'shumteh_portfolio'; // нужно поменять на portfolio
    // $user = 'shumteh_student';  // нужно поменять на root
    // $pass = 'zgjkexejnkbxyj';      // нужно поменять! пароль отстутсвует

// либо раскоментровать ниже, предварительно закоментровать верх

include 'connect.php';

 // так подключение есть, теперь проверим может уже есть пользователь
 // с таким логином 
 
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
                  `user_password` = "'.$_POST[user_password].'",
                  `user_email` = "'.$_POST[user_email].'"                 
                 ';



$count = $pdo->exec($sql_insert); //запись в базу данных
if ($count!=0) echo "Пользователь зарегистрирован";
else
echo "Что-то пошло не так";
}

?>
<!-- <script> window.setTimeout(function() { window.location = '../chek.php'; }, 5000) </script> -->