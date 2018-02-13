<?php require_once ('../conexion.php');

if (isset($_FILES['imagenupload']['name']) && $_FILES['imagenupload']['name'] != '') {

	$nombre         = '';
	$contarimagenes = count($_FILES['imagenupload']['name']);
	for ($i = 0; $i < $contarimagenes; $i++) {

		//Validar tipo imagen
		if ($_FILES['imagenupload']['type'][$i] == 'image/gif' || $_FILES['imagenupload']['type'][$i] == 'image/jpg' || $_FILES['imagenupload']['type'][$i] == 'image/jpeg' || $_FILES['imagenupload']['type'][$i] == 'image/png') {

			$nombre .= time().'_'.$_FILES['imagenupload']['name'][$i].'####';
			$nombreupload = time().'_'.$_FILES['imagenupload']['name'][$i];
			move_uploaded_file($_FILES['imagenupload']['tmp_name'][$i], '../img/upload/'.$nombreupload);
		}

	}
	$nombre = substr($nombre, 0, -4);

	if ($_SESSION['images'] != '') {$_SESSION['images'] .= '####'.$nombre;} else {
		$_SESSION['images'] .= $nombre;
	}

	$imagenes = $nombre;
	$partes   = explode('####', $imagenes);
	$cantidad = count($partes);

}

?>
<?php if ($imagenes != '') {?>


	<?php for ($i = 0; $i < $cantidad; $i++) {?>

											<div class="relativo" id="elemento<?php echo $i.'bucle2';?>">
											<img style="width: 100px; height: auto" src="<?php echo $dato[0]?>img/upload/<?php echo $partes[$i];?>" alt="">
											<span onclick="eliminar_imagen('<?php echo $i.'bucle2';?>','<?php echo $partes[$i];?>');">&times;
								</span>
											</div>



		<?php }?>

	<?php }?>