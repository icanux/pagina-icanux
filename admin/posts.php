<?php require_once ('../conexion.php');

$menuadmin              = 'posts';
$_SESSION['paginacion'] = 0;
$accion_post            = sprintf("SELECT * FROM post ORDER BY id DESC 	LIMIT $porpagina");
$consulta_post          = mysqli_query($conexion, $accion_post);
$datos_post             = mysqli_fetch_assoc($consulta_post);
$cantidad_post          = mysqli_num_rows($consulta_post);

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
<div class="contenedor fondo-blanco relleno-8 borde-negro" style="">
		<div class="fila">
			<div class="columna columna-m-3 columna-g-3">

<?php include ('sidebar.php');?>
</div>

			<div class="columna columna-m-9 columna-g-9" style="background-color: black;">
				<h1 style="color: aqua;">POSTS</h1>
				<div id="listar">


<?php

if ($cantidad_post != 0) {
	do {

		$imagenes = $datos_post['image'];
		$partes   = explode('####', $imagenes);

		?>
		<div class="fila">
																	<div class="columna columna-m-3 columna-g-3">

		<?php if ($imagenes != '') {?>
																						<img src=" <?php echo $dato[0];?>img/upload/<?php echo $partes[0];?>">
			<?php } else {?>
																						<img src="<?php echo $dato[0];?>img/HELMI1.png">
			<?php }?>

																	</div>
																	<div class="columna columna-m-9 columna-g-9">
																		<h1><a href=" <?php echo $dato[0];?>post/<?php echo $datos_post['seo'];?> " style="color: aqua;"><?php echo $datos_post['title'];
		?></a> </h1>
						<p style="color: white;"><?php echo substr(strip_tags($datos_post['content']), 0, 1000);
		?> </p><br><br>
																			<div class="etiqueta etiqueta-pequenia" style="background-color: black; border-color:orange;">
																				<p style="color:orange;">
																					Publicado el  dia <strong><?php echo date('d/m/Y H:i', strtotime($datos_post['fecha']));?></strong>
																				</p></div>
																				<br> <br>
		<?php echo $datos_post['category'];?>
		</div>

																		</div>

		<?php } while ($datos_post = mysqli_fetch_assoc($consulta_post));
}?>
</div>

								<div class="texto-centrado" id="cargar">
									<a onclick="paginar();" class="boton boton-cargar" id="ocultar">cargar mas</a>
								</div>
							</div>

							<aside class="columna columna-m-3 columna-g-3">


<?php include ('inc/sidebar.php');?>
</aside>

						</div>
					</div>
					<center>
						<div  style="max-width: 1500px;>
<?php include 'inc/footer.php';?>">

							<script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
							<script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
							<script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
						</body>
						</html>


<?php mysqli_free_result($consulta_post);