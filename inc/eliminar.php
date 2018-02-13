<?php require_once ('../conexion.php');

//Validar formulario
if (!isset($_POST['nombre']) || $_POST['nombre'] == '') {exit;
}

$elimiar = array('####'.$_POST['nombre'], $_POST['nombre'].'####', $_POST['nombre']);

$cadenanueva = str_replace($elimiar, '', $_SESSION['images']);

$_SESSION['images'] = $cadenanueva;

echo 'ok';

?>