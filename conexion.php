<?php


$host="mysql:host=localhost;dbname=bd_consultorio";
$usuario="root";
$contrasena="";
try {
	//parametros para conectarse a la base de datos//
	$pdo = NEW PDO($host,$usuario,$contrasena);
	echo "conexion es exitosa";
} catch (PDOException $e) {
	print "¡error!" . $e->getMessage()."<br/>";
	die();

}
  ?>