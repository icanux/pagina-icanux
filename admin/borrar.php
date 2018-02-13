<?php require_once ('../conexion.php');

//validadcion de administrador
if (!isset($_SESSION['iduser']) || rango($_SESSION['iduser']) != 10 || !isset($_GET['idpost'])) {header('location:'.$dato[0]);
}

$idpost = $_GET['idpost'];

$accion_nm   = "DELETE FROM post WHERE id=$idpost ";
$consulta_nm = mysqli_query($conexion, $accion_nm) or die(mysqli_error());

header('location:'.$dato[0].'posts.php');

?>
