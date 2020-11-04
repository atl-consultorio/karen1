<?php
include_once '../dao/conexion.php';


//llamar el archivo de conexión

//mostrar los datos
$sql_mostrar="SELECT id_cita, fecha,descripcion,hora FROM tbl_cita";
$consulta_mostrar = $pdo->prepare($sql_mostrar);
$consulta_mostrar->execute();
//fetch = traer arreglo o vector

$resultado_mostrar= $consulta_mostrar->fetchall();
//var_dump($resultado_mostrar);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <title>Cita</title>
    
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


<p class="titulo alert">Lista de citas</p>
<table class="table-hover table table-stripe">
     <thead class="table-info text-center">
     <tr>
      <th>Id Cita</th>
      <th>Fecha</th>
	  <th>Descripcion</th>
	  <th>Hora</th>
     </tr>
</thead>
	<!-- cuerpo de tabla-->
	<tbody>
		<!-- ciclo para llenar la tabla-->
		<?php foreach ($resultado_mostrar as $datos):?>
		<tr class="text-center">
			<td><?php echo $datos['id_cita']; ?></td>
			<td><?php echo $datos['fecha']; ?></td>
			<td><?php echo $datos['descripcion']; ?></td>
			<td><?php echo $datos['hora']; ?></td>
			<!-- botones editar  eliminar-->
		</tr>
	<?php endforeach ?>
	</tbody>
	</table>

    </body>
</html>







