<?php require_once ('conexion.php');

$menuadmin = 'usuarios';
if (!isset($_SESSION['iduser'])) {header('location:'.$dato[0]);
}

//consultar datos del user
$accion_users   = sprintf("SELECT * FROM users ORDER BY id DESC");
$consulta_users = mysqli_query($conexion, $accion_users);
$datos_users    = mysqli_fetch_assoc($consulta_users);
$cantidad_users = mysqli_num_rows($consulta_users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $dato_post['title'];?></title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include '../inc/header.php';?>

<?php include '../inc/menu.php';?>
<div class="contenedor fondo-blanco relleno-8 borde-negro" style="min-height: 600px;">
    <div class="fila">
     <div class="columna columna-m-3 columna-g-3">

<?php include ('sidebar.php');?>
    </div>
    <div class="columna columna-m-9 columna-g-9" style=" background-color:  black;white-space: pre-line; color: white; border-color: black;" ><?php while ($datos_users = mysqli_fetch_assoc($consulta_users)) {
	?>                      <div class="fila">
														     <div class="columna columna-m-3 columna-g-3" style="white-space: pre-line; display: inline-flex;">
														       <a href=" <?php echo $dato[0].'perfil/'.$datos_users['id'].'/'.$datos_users['name'];?>"> <img class="imgusuario" id="imgusuario" src=" <?php echo $dato[0];?>user/avatar/<?php echo $datos_users['avatar'];?>">
	<?php echo $datos_users['name'];
	?></a>
														       </div>
														       <div class="columna columna-m-6 columna-g-6"  style="color:aqua;">
					       <h1 style="color: white;">rango del usuario</h1> <?php if ($datos_users['rango'] == 10) {?>
		<h1>Administrador</h1>

		<?php } elseif ($datos_users['rango'] == 2) {?>
		<h1>secretario</h1>
		<?php } elseif ($datos_users['rango'] == 1) {?>
		<h1>Usuario normal</h1>
		<?php }?>
				<div style="display: inline-flex;">
														          <a href="edituser.php?iduser=<?php echo $datos_users['id'];?>" class="boton boton-verde izquierda">otorgar rango</a>

											                 <a onclick="return confirm('seguro que desea eliminar?');" href="" class="boton boton-editar derecha">borrar</a></div>

														        </div>
														      </div>
	<?php }?>
</div>



  </div>
</div>
<center>
  <div  >
<?php include '../inc/footer.php';?>

    <script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
    <script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
  </body>
  </html>

<?php mysqli_free_result($consulta_users);
