<?php
include_once '../dao/conexion.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <title>Iniciar sesion</title>
    
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
                  <li class="nav-item">
                    <a class="nav-link" href="../usuario/registro.php">Registrarse</a>
                  </li>
                  
             </ul>
         </div>
        </div>
    </nav>
   <!--Finaliza el navbar-->

    <div class = "container conatainer-fluid">
        <div class="row">
            <div class = "col-sm-4"></div>
            <div class = "col-sm-4">
                <p class="titulo alert"> Iniciar sesion</p>
             <form action="" method="POST">
                <label for="" class="col-form-label textoform">Documento: </label> 
                <input type="text" name="Cedula" class="form-control" placeholder="Documento">
                <br><br> 
                <label for=""  class="col-form-label textoform">Contraseña: </label> 
                <input type="password" name="Contrasena" class="form-control" placeholder="Contrasena">
                <br><br> 
                <button type="submit" class="btn btn btn-outline-info btn-lg btn-block"> Iniciar sesion </button>
            </form>
            </div>
        <div class = "col-sm-4"></div>
        </div>
    </div> 

    <?php
    include_once '../dao/conexion.php';
    //capturando las variables de formulario inicio de sesion//
    if ($_POST) {
     $Documento= $_POST['Cedula'];
     $Contrasena= $_POST ['Contrasena'];
     $sql_consultar_usu="SELECT * FROM tbl_usuario WHERE dni='$Documento' and contrasena='$Contrasena'";
     $consultar_usu= $pdo-> prepare ($sql_consultar_usu);
     $consultar_usu-> execute();
     $resultado_usu=$consultar_usu->fetchAll();
     var_dump($resultado_usu);
     foreach ($resultado_usu as $datos) {
          if ($datos['dni']==$Documento and $datos['contrasena']==$Contrasena) {
         header('location:perfil.php');
        } else {
         echo "usuario o contraseña incorrecta"; 
     }  
   }
    }

    ?>
</body>
</html>
