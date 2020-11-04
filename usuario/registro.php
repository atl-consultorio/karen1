<?php
include_once '../dao/conexion.php';

//capturar datos// 
 if ($_POST) {
     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido'];
     $dni=$_POST['cedula'];
     $celular=$_POST['celular'];
     $contraseña=$_POST['contraseña'];
     $correo=$_POST['correo'];
     $rol= $_REQUEST['roles'];


     //sentencia sql//
     $sql_inserta_usu = "INSERT INTO tbl_usuario (idusuario,nombre,apellido,dni,celular,contrasena,correo)
     VALUES (?,?,?,?,?,?,?)";
     $consulta_insertar_usu = $pdo -> prepare ($sql_inserta_usu);
     $consulta_insertar_usu ->execute(array ($nombre,$apellido,$dni,$celular,$contraseña,$correo,$rol));

     echo"Datos registrados"; 
     header('location:../Usuario/iniciarsesion.php'); 
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/formulario.css" rel="stylesheet" />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <script src="../js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.slim.js" crossorigin="anonymous"></script>
    <!--Conexion con estilos.css-->
    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>
    <h1 style="color:white" class="centrar">Registro de usuario</h1>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Formulario de registro</h5>
            <form class="form-signin" method="POST" action= "../usuario/registro_usu.php">
              <div class="form-label-group">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required autofocus>
                <label >Nombre</label>
              </div>
              <div class="form-label-group">
                <input type="text" name="Apellido" class="form-control" placeholder="Apellido" required autofocus>
                <label>Apellido</label>
              </div>
              <div class="form-label-group">
                <input type="text" name="Dni" class="form-control" placeholder="Documento" required autofocus>
                <label >Dni</label>
              </div>
              <div class="form-label-group">
                <input type="text" name="Celular" class="form-control" placeholder="Celular" required autofocus>
                <label >Celular</label>
              </div>

              <div class="form-label-group">
                <input type="email" name="Correo" class="form-control" placeholder="Correo" required autofocus>
                <label >Correo</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="Contrasena" class="form-control" placeholder="Contrasena" required>
                <label >Contrasena</label>
              </div>

   
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarse</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>