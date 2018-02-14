<?php

include_once ('../conexion.php');
$iduser = $_SESSION['iduser'];
//consultar datos del user
$accion_perfil   = "SELECT * FROM users WHERE id=$iduser";
$consulta_perfil = mysqli_query($conexion, $accion_perfil);
$datos_perfil    = mysqli_fetch_assoc($consulta_perfil);
$cantidad_perfil = mysqli_num_rows($consulta_perfil);
?>
<header>
	<div class="contenedor" style="border-color: aqua;">
		<div class="logo izquierda">


			<a href=" <?php echo $dato[0];?>">

<?php if ($dato[4] != '') {?>
																					<img  id="milogo"src="<?php echo $dato[0];?>img/<?php echo $dato[4];?>">
	<?php } else {?>
																					<img  id="milogo"src="<?php echo $dato[0];?>img/banner.png">

	<?php }?>
</a>
		</div>
		<div class="derecha">


<?php if (!isset($_SESSION['iduser'])) {?>
																				<a href="<?php echo $dato[0];?>iniciar"  class=" boton boton-verde">Iniciar</a>
																				<a href="<?php echo $dato[0];?>registro" class=" boton boton-rojo">Registrarse</a>
	<?php } else {
	?>
																					<a href="<?php echo $dato[0];?>user/perfil"  class="">

															<img src="<?php echo $dato[0];?>user/avatar/<?php echo $datos_perfil['avatar'];?>" class="img-helmi">
							<!-- <?php echo $_SESSION['nombreuser'];
	?> --></a>
																						<a href="<?php echo $dato[0];?>inc/salir.php?cerrar=yes" class=" boton boton-salir">&times;
																						</a>
	<?php
}
?>

			</div>
		</div>
	</header>