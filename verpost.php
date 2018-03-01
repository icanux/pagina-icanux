<?php require_once ('conexion.php');

$menu = 'noticias';
if (!isset($_GET['seo'])) {header('location:'.$dato[0]);
}
$seopost = $_GET['seo'];
//consultar datos del user
$accion_post = sprintf("SELECT * FROM post WHERE  seo=%s",
	formatearcadena($seopost, 'text')
	);
$consulta_post = mysqli_query($conexion, $accion_post);
$datos_post    = mysqli_fetch_assoc($consulta_post);
$cantidad_post = mysqli_num_rows($consulta_post);

$accion_comen = sprintf("SELECT * FROM coments WHERE post=%s",
	formatearcadena($datos_post['id'], 'text'));

$consulta_comen = mysqli_query($conexion, $accion_comen);
$datos_comen    = mysqli_fetch_assoc($consulta_comen);
$cantidad_comen = mysqli_num_rows($consulta_comen);

$_SESSION['idpost'] = $datos_post['id'];

$imagenes = $datos_post['image'];
$partes   = explode('####', $imagenes);
$cantidad = count($partes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $datos_post['title'];?></title>
	<link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/my-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>slider/responsiveslides.css">
	<script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $dato[0];?>slider/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php echo $dato[0];?>ckeditor/ckeditor.js" ></script>


	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="<?php echo substr(strip_tags($datos_post['content']), 0, 500);?>">
	<meta name="robots" content="index, follow">
</head>
<body style="background: #101010;color: #f5f5f5;">
	<?php include 'inc/header.php';?>
	<div class="main-content fondo-gris relleno-8 borde-negro">
		<div class="ed-container">
			<div class="columna columna-m-12 columna-g-12">


				<br>
				<?php{?>  <div><?php echo $datos_post['title'];
				?></div>
				<?php echo nl2br($datos_post['content']);?>
				<?php if ($imagenes != '') {
					?>
					<div class="callbacks_container">
						<ul class="rslides" id="slider4">
							<?php for ($i = 0;
								$i < $cantidad;
								$i++) {?>
								<li>
									<img src="<?php echo $dato[0]?>img/upload/<?php echo $partes[$i];?>">

								</li>
								<?php }
								?>
							</ul>
						</div>

						<div class="alerta">
							<br>
							<?php if (isset($_SESSION['iduser']) && rango($_SESSION['iduser']) == 10) {?>
							<a onclick="return confirm('seguro que desea eliminar?');" href=" <?php echo $dato[0];?>/admin/borrar.php?idpost=<?php echo $datos_post['id'];?>"   class="button button-enviar derecha">borrar</a>
							<a href="" class="button derecha">editar</a>
							<?php }?>
						</div>
						autor del post <a href="<?php echo $dato[0];?>perfil/<?php echo $datos_post['autor'];?>/<?php echo nombre($datos_post['autor']);?>"><?php echo nombre($datos_post['autor']);
						?></a>
						<br>
						<br>
						<div class="etiqueta etiqueta-pequenia">
							<p>
								<strong><?php echo $datos_post['fecha'];?></strong>
							</p>
						</div>


						<?php } else {?>
						<div>
							<?php if (rango($_SESSION['iduser']) == 10) {?>
							<a onclick="return confirm('seguro que desea eliminar?');" href="<?php echo $dato[0];?>/admin/borrar.php?idpost=<?php echo $datos_post['id'];?>"   class="button button-enviar derecha">borrar</a>
							<a href="<?php echo $dato[0];?>/admin/editar.php?idpost=<?php echo $datos_post['id'];?>" class="button derecha">editar</a>
							<?php }?>
						</div>
						autor del post <a href="<?php echo $dato[0];?>perfil/<?php echo $datos_post['autor'];?>/<?php echo nombre($datos_post['autor']);?>"><?php echo nombre($datos_post['autor']);
						?></a>

						<div class="etiqueta etiqueta-pequenia">
							<p>
								<strong><?php echo $datos_post['fecha'];?></strong>
							</p>
						</div>
						<?php }?>
						<?php include ('inc/social.php');?>
						<br>
						<h1>comentarios...</h1>

						<?php if (isset($_SESSION['iduser']) && rango($_SESSION['iduser']) > 0) {?>
						<form onsubmit="return false" class="formulario-1">

							<div class="fom-team">
								<label for="mensaje">Comentanos:</label>
								<textarea name="mensaje" id="mensaje" placeholder="Comentar..."></textarea>

							</div>


							<div class="fom-team oculto" id="comentar-error">
								<div class="alerta alerta-rojo alerta-pequenia" id="comentar-mensaje">Error</div>
							</div>



							<div class="fom-team">
								<input type="submit" value="Comentar" class="boton boton-agregar derecha" onclick="CKEDITOR.instances.mensaje.updateElement();comentar_ajax(mensaje.value);">
							</div>
						</form>
				<!--	<h1> <?php echo $_SESSION['iduser'];?></h1> -->
						<?php }?>
						<br>
						<div id="comentarios">
							<?php if ($cantidad_comen != '') {
								do {
									?>
									<div class="fila">
										<?php if ($datos_comen['autor'] == $_SESSION['iduser']) {?>
										<div class="columna columna-m-2 columna-g-2">
											<a href="<?php echo $dato[0];?>perfil/<?php echo $datos_post['autor'];?>/<?php echo nombre($datos_post['autor']);?>">
												<h3><?php echo nombre($datos_comen['autor']);
													?></h3></a>
												</div>
												<br><br>
												<div class="columna columna-m-10 columna-g-10">
													comentaste
													<div class="aerta"><?php echo $datos_comen['coment'];
														?></div>
													</div>

													<?php } else {?>


													<div class="columna columna-m-2 columna-g-2" >
														<a href="<?php echo $dato[0];?>perfil/<?php echo $datos_post['autor'];?>/<?php echo nombre($datos_post['autor']);?>">
															<h3><?php echo nombre($datos_comen['autor']);
																?></h3></a>
															</div>
															<br><br>
															<div class="columna columna-m-10 columna-g-10">
																<div class="aerta"><?php echo $datos_comen['coment'];
																	?></div>
																</div>
																<?php }?>
															</div>

															<?php

														} while ($datos_comen = mysqli_fetch_assoc($consulta_comen));

													}?>
												</div>
											</div>
										</div>


										<script>

											CKEDITOR.replace( 'mensaje',
											{
												height: '100px',
											});
										</script>

										<script >


											$(document).ready(function(){
												$("#slider4").responsiveSlides({
													auto: true,
													pager: false,
													nav: true,
													speed: 500,
													namespace: "callbacks",
													before: function () {
														$('.events').append("<li>before event fired.</li>");
													},
													after: function () {
														$('.events').append("<li>after event fired.</li>");
													}
												});

											})  ;
										</script>

        <?php include 'inc/footer.php';?>
        <script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
        <script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
    </body>
</html>
<?php mysqli_free_result($consulta_post);mysqli_free_result($consulta_comen);?>