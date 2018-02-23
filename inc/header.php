<?php
// Ya que ahora estamos ejecutando primero index.php, y luego este carga los
// demás ficheros, la ruta de ejecución siempre será la del index.php.
//
// Elmer flojo, que tenía desactivado los errres, esto fallaba en las páginas
// iniciales, por que estaba cargando el fichero de la carpeta padre. Pero
// como tenía desactivado el error_log ...
include_once ('conexion.php');

// Más flojera... si no existe $iduser, entonces no ejecutamos el query.
$iduser = $_SESSION['iduser'] ?? null;
if ($iduser) {
	//consultar datos del user
	$accion_perfil   = "SELECT * FROM users WHERE id=$iduser";
	$consulta_perfil = mysqli_query($conexion, $accion_perfil);
	$datos_perfil    = mysqli_fetch_assoc($consulta_perfil);
	$cantidad_perfil = mysqli_num_rows($consulta_perfil);
}
?>
<header>
	<div class="contenedor" style="border-color: aqua;">
		<div class="logo izquierda">


			<a href="">

<?php if ($dato[4] != '') {?>
																					<img  id="milogo"src="static/img/<?php echo $dato[4];?>">
	<?php } else {?>
																					<img  id="milogo"src="static/img/banner.png">

	<?php }?>
</a>
		</div>
		<div class="derecha">


<?php if (!isset($_SESSION['iduser'])) {?>
																				<a href="iniciar"  class=" boton boton-verde">Iniciar</a>
																				<a href="registro" class=" boton boton-rojo">Registrarse</a>
	<?php } else {
	?>
																					<a href="user/perfil"  class="">

															<img src="user/avatar/<?php echo $datos_perfil['avatar'];?>" class="img-helmi">
							<!-- <?php echo $_SESSION['nombreuser'];
	?> --></a>
																						<a href="inc/salir.php?cerrar=yes" class=" boton boton-salir">&times;
																						</a>
	<?php
}
?>

			</div>
		</div>
	</header>
