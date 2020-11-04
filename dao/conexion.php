<?php


$host="mysql:host=localhost;dbname=bd_consultorio";
$usuario="root";
$contrasena="";
try {
	//parametros para conectarse a la base de datos//
	$pdo = new PDO($host,$usuario,$contrasena);

} catch (PDOException $e) {
	print "¡error!" . $e->getMessage()."<br/>";
	die();

}
  ?>