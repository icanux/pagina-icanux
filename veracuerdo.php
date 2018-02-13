<?php require_once ('conexion.php');

$menu = 'verpost';
if (!isset($_GET['seo'])) {header('location:'.$dato[0]);
}
$seopost = $_GET['seo'];
//consultar datos del user
$accion_post = sprintf("SELECT * FROM posts WHERE  seo=%s",
	formatearcadena($seopost, 'text')
);
$consulta_post = mysqli_query($conexion, $accion_post);
$datos_post    = mysqli_fetch_assoc($consulta_post);
$cantidad_post = mysqli_num_rows($consulta_post);
$imagenes      = $datos_post['image'];
$partes        = explode('####', $imagenes);
$cantidad      = count($partes);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $datos_post['title'];?></title>
	<link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>slider/responsiveslides.css">
	<script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $dato[0];?>slider/responsiveslides.min.js"></script>



	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include 'inc/header.php';?>

<?php include 'inc/menu.php';?>
<div class="contenedor fondo-gris relleno-8 borde-negro" style="max-width: 1500px;">
		<div class="fila">
			<div class="columna columna-m-9 columna-g-9">
				<h1>ACUERDOS </h1>


				<br>
<?php{?>  <div style="color: aqua;"><?php echo $datos_post['title'];
?></div>
<?php echo nl2br($datos_post['content']);?>
<br>




				<br>


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
	<?php if (isset($_SESSION['iduser']) && rango($_SESSION['iduser']) == 10) {?>
									<a onclick="return confirm('seguro que desea eliminar?');" href=" <?php echo $dato[0];?>/admin/borrar.php?idpost=<?php echo $datos_post['id'];?>"   class="boton boton-rojo derecha">borrar</a>
									<a href="" class="boton boton-verde derecha">editar</a>
		<?php }?>
							</div>
							autor del post <a href="<?php echo $dato[0];?>perfil/<?php echo $datos_post['autor'];?>/<?php echo nombre($datos_post['autor']);?>"><?php echo nombre($datos_post['autor']);
	?></a>
							<br>
							<br>
							<div class="etiqueta etiqueta-pequenia" style="background-color: black; border-color:orange;">
								<p style="color:orange;">
									<strong><?php echo $datos_post['fecha'];?></strong>
								</p>
							</div>


	<?php } else {?>
	<div class="">
	<?php if (rango($_SESSION['iduser']) == 10) {?>
									<a onclick="return confirm('seguro que desea eliminar?');" href="<?php echo $dato[0];?>/admin/borrar.php?idpost=<?php echo $datos_post['id'];?>"   class="boton boton-rojo derecha">borrar</a>
									<a href="<?php echo $dato[0];?>/admin/editar.php?idpost=<?php echo $datos_post['id'];?>" class="boton boton-verde derecha">editar</a>
		<?php }?>
							</div>
							autor del post <a href="<?php echo $dato[0];?>perfil/<?php echo $datos_post['autor'];?>/<?php echo nombre($datos_post['autor']);?>"><?php echo nombre($datos_post['autor']);
	?></a>
							<br> <br>

							<div class="etiqueta etiqueta-pequenia" style="background-color: black; border-color:orange;">
								<p style="color:orange;">
									<strong><?php echo $datos_post['fecha'];?></strong>
								</p>
							</div>
	<?php }?>
<br>
						<br>

					</div>

					<div class="columna columna-m-3 columna-g-3">



					</div>
				</div>
			</div>

			<center>
				<div  style="max-width: 1500px;>

<?php include 'inc/footer.php';?> ">

				</center>
				<script >

    // Slideshow 4
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
<script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
<script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
</body>
</html>


<?php mysqli_free_result($consulta_post);