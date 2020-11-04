
 <?php 
    //include_once '../dao/conexion.php';
    //capturando las variables de formulario inicio de sesion//
   
   //$sql_consultar_nombre_usu = " SELECT * FROM tbl_usuario WHERE dni='$dni' and nombre='$nombre'";
   //$consultar_nombre_usu = $pdo-> prepare ($sql_consultar_nombre_usu);
   //$consultar_nombre_usu-> execute();
   //$resultado_nombre_usu=$consultar_nombre_usu->fetchAll();
   //var_dump ($resultado_nombre_usu);
    ?>
 <?php

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <title>Perfil</title>
    
     <!--Conexion con estilos.css-->
     <link rel="stylesheet" href="../css/estilos2.css">

     <!--Links para el funcionamiento de bootstrap-->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <script  src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
  <!--  <span class="spinner-grow text-danger"></span>-->
    <header id="header" class="header">
      <img src="../img/atl.png" class="logo">
    </header><!-- /header -->
    <!--navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="mainNav">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <a>ATL</a>
              </ul>
          </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="../index.html">Volver</a>
                  </li>
             </ul>
         </div>
        </div>
    </nav>
   <!--Finaliza el navbar-->

<p class="titulo alert"> Bienvenido a tu perfil</p>
<div class="centrar">
    <h2 class="text text-info">Opciones:</h2><br><br>
    <a href= '../usuario/editar_usu.php' class="btn btn btn-outline-info btn-lg btn-block">Datos de usuario</a><br>
    <a href='../cita.php' class="btn btn btn-outline-info btn-lg btn-block">Registrar cita </a><br>
    <a href="agenda.php" class="btn btn btn-outline-info btn-lg btn-block">Agenda de citas</a>
</div>
 </body>
 </html>