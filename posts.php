<?php require_once ('conexion.php');

$menu                   = 'posts';
$_SESSION['paginacion'] = 0;
$accion_post            = sprintf("SELECT * FROM post ORDER BY id DESC 	");
$consulta_post          = mysqli_query($conexion, $accion_post);
$datos_post             = mysqli_fetch_assoc($consulta_post);
$cantidad_post          = mysqli_num_rows($consulta_post);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>posts</title>
	<link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/my-style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include 'inc/header.php';?>
<div class="main-content" style="">
		<div class="ed-container">
			<div class="ed-item m-75 l-75">
				<h1>POSTS</h1>
				<div id="listar">

<?php if ($cantidad_post != 0) {
	do {

		$imagenes = $datos_post['image'];
		$partes   = explode('####', $imagenes);
		//    $cantidad = count($partes);
		//  echo $cantidad;
		?>
		<div class="ed-container">
										<div class="ed-item m-25 l-25">

		<?php if ($imagenes != '') {?>
												<img src=" <?php echo $dato[0];?>img/upload/<?php echo $partes[0];?>">
			<?php } else {?>
			<img src="img/HELMI1.png">
			<?php }?>

										</div>
										<div class="ed-item m-75 l-75">
											<h1><a href=" <?php echo $dato[0];?>post/<?php echo $datos_post['seo'];?> " style="color: aqua;"><?php echo $datos_post['title'];
		?></a> </h1>
		<?php echo substr(strip_tags($datos_post['content']), 0, 200);?>
												<br> <br>
												<div class="etiqueta etiqueta-pequenia">
													<p>
														Publicado el  dia <strong><?php echo date('d/m/Y H:i', strtotime($datos_post['fecha']));?></strong>
													</p></div>

												</div>

		<?php if (rango($_SESSION['iduser']) == 10) {?>
													<a onclick="return confirm('seguro que desea eliminar?');" href="<?php echo $dato[0];?>/admin/borrar.php?idpost=<?php echo $datos_post['id'];?>"   class="button">borrar</a>
													<a href="<?php echo $dato[0];?>/admin/editar.php?idpost=<?php echo $datos_post['id'];?>" class="button button-enviar">editar</a>
			<?php }?>
		</div>
		<?php } while ($datos_post = mysqli_fetch_assoc($consulta_post));
}?>
</div>
						</div>

						<div class="ed-item m-25 l-25">

<?php include ('inc/sidebar.php');?>
</div>

					</div>
				</div>
				<center>
					<div  >
<?php include 'inc/footer.php';?>

						<script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
						<script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
						<script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
					</body>
					</html>


<?php mysqli_free_result($consulta_post);