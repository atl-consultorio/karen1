<?php
//llamar el archivo de conexión
include_once 'conexion.php';

//mostrar los datos
$sql_mostrar="SELECT idusuario, dni,apellido,nombre,celular,correo FROM tbl_usuario";
$consulta_mostrar = $pdo->prepare($sql_mostrar);
$consulta_mostrar->execute();
//fetch = traer arreglo o vector

$resultado_mostrar= $consulta_mostrar->fetchall();
//var_dump($resultado_mostrar);

if ($_POST) {
	//capturar los valores del formulario//
	$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$dni =$_POST['identificacion'];
$celular =$_POST['celular'];
$contrasena =$_POST['contrasena'];
$correo =$_POST['correo'];
//sentencia sql para insertar
 $sql_insertar = 'INSERT INTO tbl_usuario (nombre,apellido,dni,celular,contrasena,correo)
VALUES (?,?,?,?,?,?)';
 //preparar la consulta por PDO
 $consulta_insertar = $pdo->prepare($sql_insertar);
 //ejecutar la consulta
 $consulta_insertar->execute(array($nombre,$apellido,$dni,$celular,$contrasena,$correo));
 //redireccionar o refrescar la pagina
 header('location:index.php');
}
 /*llenando formulario para editar*/
 if ($_GET) {
	 $id_editar = $_GET['id'];
	 //sentencia sql
	 $sql_editar_usu = "SELECT * FROM tbl_usuario WHERE idusuario=?";
	 //preparar la sentencia
	 $consulta_editar_usu = $pdo->prepare($sql_editar_usu);
	 //ejecutar
	 $consulta_editar_usu->execute(array($id_editar));
	 $resultado_editar=$consulta_editar_usu->fetch();
	 //var_dump($resultado_editar);
 }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <title>Index</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Conexion con estilos.css-->
     <link rel="stylesheet" href="css/estilos2.css">

     <!--Links para el funcionamiento de bootstrap-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script  src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </head>
<body>
<header id="header" class="header">
      <img src="img/atl.png" class="logo">
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
                    <a class="nav-link" href="index.html">Volver a principal</a>
                  </li>
             </ul>
         </div>
        </div>
    </nav>
   <!--Finaliza el navbar-->

   <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<!-- formulario de registro -->
<?php if (!$_GET) { ?>

	<div class = "container container-fluid shadow-lg p-1 mb-3 bg-light rounded presentacion">
        <div class="row">
            <div class = "col-sm-4"></div>
            <div class = "col-sm-4">
                <p class="titulo alert"> Registro de usuario</p>
             <form action="" method="POST">
                <label for="" class="col-form-label textoform">Nombre: </label> 
                <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre">
                <br><br> 
                <label for=""  class="col-form-label textoform">Apellido: </label> 
                <input type="text" name="apellido" class="form-control" placeholder="Ingresa tu apellido">
				<br><br> 
				<label for=""  class="col-form-label textoform">DNI: </label> 
                <input type="text" name="identificacion" class="form-control" placeholder="Ingresa tu identificación">
				<br><br> 
				<label for=""  class="col-form-label textoform">Correo: </label> 
                <input type="text" name="correo" class="form-control" placeholder="Ingresa tu correo">
				<br><br> 
				<label for=""  class="col-form-label textoform">Celular: </label> 
                <input type="text" name="celular" class="form-control" placeholder="Ingresa tu celular">
				<br><br> 
				<label for=""  class="col-form-label textoform">Contraseña: </label> 
                <input type="password" name="contrasena" class="form-control" placeholder="Ingresa tu contraseña">
                <br><br> 
                <button type="submit" class="btn btn btn-outline-info btn-lg btn-block"> Registrar </button>
            </form>
            </div>
        <div class = "col-sm-4"></div>
        </div>
    </div> 
	<br>
	<?php } ?>
	<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<!--Formulario de edición-->
<?php if ($_GET) { ?>

	<div class = "container container-fluid shadow-lg p-1 mb-3 bg-light rounded presentacion">
        <div class="row">
            <div class = "col-sm-4"></div>
            <div class = "col-sm-4">
                <p class="titulo alert"> Editar usuario</p>
             <form action="" method="POST">
                <label for="" class="col-form-label textoform">Nombre: </label> 
                <input type="text" name="nombre" class="form-control" value="<?php echo $resultado_editar ['nombre'] ?>">
                <br><br> 
                <label for=""  class="col-form-label textoform">Apellido: </label> 
                <input type="text" name="apellido" class="form-control"  value="<?php echo $resultado_editar ['apellido']?>">
				<br><br> 
				<label for=""  class="col-form-label textoform">DNI: </label> 
                <input type="text" name="identificacion" class="form-control" value="<?php echo $resultado_editar ['dni']?>">
				<br><br> 
				<label for=""  class="col-form-label textoform">Correo: </label> 
                <input type="text" name="correo" class="form-control" value="<?php print $resultado_editar ['correo']?>">
				<br><br> 
				<label for=""  class="col-form-label textoform">Celular: </label> 
                <input type="text" name="celular" class="form-control" value="<?php echo $resultado_editar ['celular']?>">
				<br><br> 
				<label for=""  class="col-form-label textoform">Contraseña: </label> 
                <input type="text" name="contrasena" class="form-control" value="<?php echo $resultado_editar ['contrasena']?>">
                <br><br> 
                <button type="submit" class="btn btn btn-outline-info btn-lg btn-block"> Editar </button>
            </form>
            </div>
        <div class = "col-sm-4"></div>
        </div>
    </div> 	
<?php }?>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<!--dibujando tablas de usuarios-->
<p class="titulo alert"> Lista de usuarios</p>
	<table class="table-hover table table-stripe">
     <thead class="table-info text-center">
     <tr>
      <th>DNI</th>
      <th>Nombre</th>
	  <th>Apellido</th>
	  <th>Celular</th>
	  <th>Correo</th>
	  <th>Editar</th>
	  <th>Eliminar</th>
     </tr>
</thead>
	<!-- cuerpo de tabla-->
	<tbody>
		<!-- ciclo para llenar la tabla-->
		<?php foreach ($resultado_mostrar as $datos):?>
			<!-- cuerpo de tabla-->
		<tr>
			<td><?php echo $datos['dni']; ?></td>
			<td><?php echo $datos['nombre']; ?></td>
			<td><?php echo $datos['apellido']; ?></td>
			<td><?php echo $datos['celular']; ?></td>
			<td><?php echo $datos['correo']; ?></td>
			<!-- botones editar  eliminar-->
			<td ><a href="index.php?id=<?php echo $datos['idusuario'];?>" class="btn btn btn-outline-info btn-lg">Editar</a></td>
			<td ><a href="eliminar.php?id=<?php echo $datos['idusuario'];?>" class="btn btn btn-outline-danger btn-lg">Eliminar</a></td>
		</tr>
	<?php endforeach ?>
	</tbody>
	</table>
</body>
</html>