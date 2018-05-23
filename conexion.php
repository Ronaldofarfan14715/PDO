<?php

$cadena = 'mysql:host=localhost;dbname=pdo';

$usuario = 'root';
$password = '';

try {
	
$pdo = new PDO($cadena,$usuario,$password);

//echo "conecto";

} catch (Exception $x) {
	
	echo $x;
}



 ?>