<meta charset=utf-8>
<?php
$host = 'localhost';
  $db   = 'ExcaPool';
$user = 'root';
$pass = '';


    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
     
// подключение и создание объекта PDO
    try {
        $pdo = new PDO($dsn, $user, $pass);
        // echo "подключился";
        } 
    catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
        }
?>