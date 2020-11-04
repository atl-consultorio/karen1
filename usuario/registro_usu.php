<?php 
//incluyendo conexion a base de datos 
include_once('../dao/conexion.php');
//capturando las variables del formulario usuarios
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$dni=$_POST ['Dni'];
$celular=$_POST['Celular'];
$correo=$_POST['Correo'];
$contrasena=$_POST['Contrasena'];
//validar usuario existente
$sql_existente="SELECT * FROM tbl_usuario where dni='$dni'";
$consulta_existencia=$pdo->prepare($sql_existente);
//ejecutar sentencia 
$consulta_existencia->execute(array($dni));

if ($consulta_existencia->rowCount()<0) {
    echo"<script> alert('El usuario ya existe...');</script>";
} else {
    try {
         //sentencia sql//
     $sql_inserta_usu = "INSERT INTO tbl_usuario (nombre,apellido,dni,celular,contrasena,correo) 
     VALUES (?,?,?,?,?,?)";
     $consulta_insertar_usu = $pdo -> prepare ($sql_inserta_usu);
     $consulta_insertar_usu ->execute(array ($nombre,$apellido,$dni,$celular,$contrasena,$correo));
     echo"<script> alert('Datos almacenados...');</script>";
     header('location:../index.html');
     
    } catch (\Throwable $th) {
        echo"<script> alert('Error del servidor...');</script>";
    }
}

?>

