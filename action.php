<meta charset="UTF-8">
<?php
$gipadress=$_SERVER['REMOTE_ADDR'];
$grecaptcha=$_POST['g-recaptcha-response']; 
$postdata = http_build_query(
	array(
		'secret' => '6LctXp0UAAAAAOmhihN1-BY8Gwax1YKGVOgqPA16',
		'response' => $grecaptcha,
		'remoteip' => $gipadress
	)
);
$opts = array('http' =>
	array(
		'method'  => 'POST',
		'header'  => 'Content-type: application/x-www-form-urlencoded',
		'content' => $postdata
	)
);


$gcontents = stream_context_create($opts);

$gresults = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $gcontents);

$jsonresults = json_decode($gresults); 			

if ($jsonresults->{'success'}===false ) {  
	// the code was incorrect  
   	print "<font color=\"red\">Ошибка: введен неправильный проверочный код!</font><br /><br />";
} 
else if ($jsonresults->{'success'}=== true )
{
if(isset($_POST['first_name'])) $first_name = $_POST['first_name'];
if(isset($_POST['last_name'])) $last_name = $_POST['last_name'];
if(isset($_POST['phone'])) $phone = $_POST['phone'];
if(isset($_POST['email'])) $email = $_POST['email'];

$host = 'localhost';
$db   = 'shumteh_excapool';
$user = 'shumteh_excapool';
$pass = 'OGVekU7P';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
	];
$pdo = new PDO($dsn, $user, $pass, $opt);
$sql = "INSERT INTO pooldate (first_name,last_name,phone,email) VALUES (:first_name,:last_name,:phone,:email)";
$q = $pdo->prepare($sql);
$q->execute(array(	':first_name'=>$first_name,
					':last_name'=>$last_name,
					':phone'=>$phone,
					':email'=>$email));

}


?>