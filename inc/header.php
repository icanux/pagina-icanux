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
<header class="main-header" style="background-color: black">
<div class="ed-container">
<div class="ed-item s-70 l-30">
<a href="<?php echo $dato[0];?>"><img src="<?php echo $dato[0];?>img/15158675841515047669banner.png" alt="logo-icanux" class="logo"></a>
</div>
<div class="ed-item s-30 l-70 cross-center main-end">
<div class="nav-toggle" id="nav-toggle">
</div>

<nav id="nav" class="main-nav">
<ul class="main-menu" id="menu">
<li <?php if ($menu == 'index') {echo 'class="menu-activo"';
}

?>>
<a href="<?php echo $dato[0];?>">home</a></li>



<li <?php if ($menu == 'noticias') {echo 'class="menu-activo"';
}

<<<<<<< HEAD
?>>
<a href="<?php echo $dato[0];?>noticias">noticias</a></li>

=======
			<a href="">

<?php if ($dato[4] != '') {?>
																					<img  id="milogo"src="static/img/<?php echo $dato[4];?>">
	<?php } else {?>
																					<img  id="milogo"src="static/img/banner.png">
>>>>>>> ac69281a418992276ba6a496aa3464391203c14a


<?php if (isset($_SESSION['iduser'])) {?>
<li <?php if ($menu == 'acuerdos') {echo 'class="menu-activo"';
}

?>>
<a href="<?php echo $dato[0];?>acuerdos">acuerdos</a></li>

<?php }?>


<?php if (isset($_SESSION['iduser'])) {?>
<li <?php if ($menu == 'usuarios') {echo 'class="menu-activo"';
}

?>><a href="<?php echo $dato[0];?>usuarios">usuarios</a></li>
<?php }?>

<?php if (isset($_SESSION['iduser'])) {?>
<li <?php if ($menu == 'agregar') {echo 'class="menu-activo"';
}

?>><a href="<?php echo $dato[0];?>agregar">Agregar</a></li>
<?php }?>
<?php if (isset($_SESSION['iduser'])) {?>
<li <?php if ($menu == 'posts') {echo 'class="menu-activo"';
}

?>><a href="<?php echo $dato[0];?>posts">posts</a></li>
<?php }?>


<?php if (isset($_SESSION['iduser']) && rango($_SESSION['iduser']) == 10) {?>
<li <?php if ($menuadmin == 'admin') {echo 'class="menu-activo"';
}

?>><a href="<?php echo $dato[0];?>admin">Admin</a></li>
<?php }?>
<li>
<?php if (!isset($_SESSION['iduser'])) {?>
<<<<<<< HEAD
<li><a href="<?php echo $dato[0];?>iniciar"  class=" button button-enviar">Iniciar</a> </li>
<li> <a href="<?php echo $dato[0];?>registro" class=" button">Registrarse</a> </li>
<?php } else {
?>
<li> <a href="<?php echo $dato[0];?>user/perfil"  class="user-image">
<img src="<?php echo $dato[0];?>user/avatar/<?php echo $datos_perfil['avatar'];?>" class="img-helmi">
	 <!-- <?php echo $_SESSION['nombreuser'];
	?> --></a></li> <br>
	<li><a href="<?php echo $dato[0];?>inc/salir.php?cerrar=yes" class=" button button-salir">Salir
	</a></li>
=======
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
>>>>>>> ac69281a418992276ba6a496aa3464391203c14a
	<?php
}
?>
</li>
</ul>
</nav>
</div>


<<<<<<< HEAD
</div>
</header>
=======
			</div>
		</div>
	</header>
>>>>>>> ac69281a418992276ba6a496aa3464391203c14a
