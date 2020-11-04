<?php 
//capturar el id a eliminar
$id=$_GET['id'];
include_once 'conexion.php';
 //sql para eliminar
 $sql_eliminar ="DELETE FROM tbl_usuario WHERE idusuario = ?";
 $consulta_eliminar =$pdo->prepare($sql_eliminar);
 //ejecución de la consulta y pasamos a la id
 $consulta_eliminar->execute(array($id));
 //refrescar la pagina
 header('location:index.php');
 ?>