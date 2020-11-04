
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <title>Datos usuario</title>
    
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
                    <a class="nav-link" href="perfil.php">Volver al perfil</a>
                  </li>
             </ul>
         </div>
        </div>
    </nav>
   <!--Finaliza el navbar-->

<p class="titulo alert"> Datos de usuario</p>
<div class = "container conatainer-fluid">
        <div class="row">
            <div class = "col-sm-4"></div>
            <div class = "col-sm-4">
              <!--  <p class="titulo alert"> Datos importantes</p>-->
             <form action="" method="POST">
                <label for="" class="col-form-label textoform">Direccion de residencia: </label> 
                <input type="text" name="direccion" class="form-control" placeholder="Escribe tu dirección">
                <br><br> 
                <label for=""  class="col-form-label textoform">Sexo de nacimiento: </label> 
                <input type="text" name="sexoden" class="form-control" placeholder="Sexo de nacimiento">
                <br><br> 
                <label for=""  class="col-form-label textoform">Estado civil: </label> 
                <input type="text" name="estadoc" class="form-control" placeholder="Escribe tu estado civil">
                <br><br> 
                <label for=""  class="col-form-label textoform">Fecha de nacimiento: </label> 
                <input type="date" name="natalicio" class="form-control">
                <br><br> 
                <label for=""  class="col-form-label textoform">Ocupacion: </label> 
                <input type="text" name="ocupacion" class="form-control" placeholder="¿A que te dedicas?">
                <br><br> 
                <label for=""  class="col-form-label textoform">Contacto de emergencia: </label> 
                <input type="text" name="cemergencia" class="form-control" placeholder="Un numero de confianza">
                <br><br> 
                <button type="submit" class="btn btn btn-outline-info btn-lg btn-block"> Agendar </button>
              </form>
            </div>
        <div class = "col-sm-4"></div>
        </div>
    </div> 

</body>
</html>
<?php
if($_POST){
include_once '../dao/conexion.php';
$direccion =$_POST['direccion'];
$sexo =$_POST['sexoden'];
$estado_civil =$_POST['estadoc'];
$natalicio =$_POST['natalicio'];
$ocupacion =$_POST['ocupacion'];
$c_emergencia =$_POST['cemergencia'];

//sentencia sql
$sql_editar_usu="UPDATE tbl_usuario 
SET direccion=?,sexo=?,estado_civil=?,ocupacion=?,natalicio=?,cont_emergencia=? WHERE idusuario = ?";
//preparar consulta
$consulta_editar = $pdo->prepare($sql_editar_usu);
//ejecutar consulta
$consulta_editar->execute(array($direccion,$sexo,$estado_civil,$ocupacion,$natalicio,$c_emergencia, 3));
}
?>

