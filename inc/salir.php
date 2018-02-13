<?php require_once ('../conexion.php');

if (!isset($_GET['cerrar']) || $_GET['cerrar'] != 'yes') {exit;
}

$_SESSION['iduser']     = null;
$_SESSION['nombreuser'] = null;

unset($_SESSION['iduser']);
unset($_SESSION['nombreuser']);

setcookie('idcookie', '', time()+30*24*60*60, '/');
setcookie('usercookie', '', time()+30*24*60*60, '/');

session_destroy();

header('location:'.$dato[0]);
exit;
