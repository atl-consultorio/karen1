<?php
$id =$_GET['id'];
$nombre =$_GET['nombre'];
$apellido =$_GET['apellido'];
$dni =$_GET['identificacion'];
$celular =$_GET['celular'];
$contrasena =$_GET['contrasena'];
$correo =$_GET['correo'];

//sentencia sql
include_once 'conexion.php';
$sql_editar="UPDATE tbl_usuario SET nombre=?,apellido=?,dni=?,celular=?,contrasena=?,correo=? WHERE idusuario=?";
//preparar consulta
$consulta_editar = $pdo->prepare($sql_editar);
//ejecutar consulta
$consulta_editar->execute(array($nombre,$apellido,$dni,$celular,$contrasena,$correo,$id));
//redirección
header('location:index.php');
  ?>