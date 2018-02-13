<?php require_once ('../conexion.php');

//valdidar formulario
//
if (!isset($_POST['titulo']) || $_POST['titulo'] == '' || $_POST['categoria'] == '' || $_POST['contenido'] == '') {exit;
}

if (isset($_FILES['imagen']['name']) && $_FILES['imagen']['name'] != '') {

	$nombre         = '';
	$contarimagenes = count($_FILES['imagen']['name']);

	for ($i = 0; $i < $contarimagenes; $i++) {

		//validar tipo

		if ($_FILES['imagen']['type'][$i] == 'image/gif' || $_FILES['imagen']['type'][$i] == 'image/jpg' || $_FILES['imagen']['type'][$i] == 'image/jpeg' || $_FILES['imagen']['type'][$i] == 'image/png') {

			$nombre .= time().'_'.$_FILES['imagen']['name'][$i].'####';
			$nombreupload = time().'_'.$_FILES['imagen']['name'][$i];
			move_uploaded_file($_FILES['imagen']['tmp_name'][$i], '../img/upload/'.$nombreupload);
		}
	}

	$nombre = substr($nombre, 0, -4);
} else {
	$nombre = '';
}

if (!isseT($_POST['idpost'])) {

	//insertar post

	$accion_addpost = sprintf("INSERT INTO post(title, category, content,image,autor,seo) VALUES (%s,%s,%s,%s,%s,%s)",
		formatearcadena($_POST['titulo'], 'text'),
		formatearcadena($_POST['categoria'], 'int'),
		formatearcadena($_POST['contenido'], 'text'),
		formatearcadena($nombre, 'text'),
		formatearcadena($_SESSION['iduser'], 'int'),
		formatearcadena(urls_amigables($_POST['titulo']), 'text'));

	$consulta_addpost = mysqli_query($conexion, $accion_addpost) or die(mysqli_error());

	$idpost = mysqli_insert_id($conexion);

} else {

	$accion_editar = sprintf("UPDATE post SET title=%s,category=%s,content=%s , image=%s,seo=%s WHERE id=%s",
		formatearcadena($_POST['titulo'], 'text'),
		formatearcadena($_POST['categoria'], 'int'),
		formatearcadena($_POST['contenido'], 'text'),
		formatearcadena($_SESSION['images'], 'text'),
		formatearcadena(urls_amigables($_POST['titulo']), 'text'),
		formatearcadena($_POST['idpost'], 'int'));

	$consulta_editar = mysqli_query($conexion, $accion_editar) or die(mysqli_error());
	$idpost          = $_POST['idpost'];
}

$accion_seo = sprintf("UPDATE  post SET seo=%s WHERE id=$idpost",
	formatearcadena($idpost.'-'.urls_amigables($_POST['titulo']), 'text'));
$consulta_seo = mysqli_query($conexion, $accion_seo);

echo $dato[0].'post/'.$idpost.'-'.urls_amigables($_POST['titulo']);