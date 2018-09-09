<?php require_once ('conexion.php');
//valdidar formulario
if (!isset($_POST['user']) || $_POST['user'] == '' || $_POST['pass'] == '') {exit;
}

$login = mysqli_real_escape_string($conexion, $_POST['user']);
$query = "SELECT * FROM users WHERE (user='$login' OR email='$login') AND rango > 0";
$res = mysqli_query($conexion, $query);

if ($res === false) {
	// BOOM!
	var_dump(mysqli_error($conexion));
}
$count = mysqli_num_rows($res);

if ($count != 1) {
	echo "error";
	exit;
}
$datos = mysqli_fetch_assoc($res);

// Verificamos el password.
if (!password_verify($_POST['pass'], $datos['password'])) {
	echo "error";
	exit;
}
$_SESSION['iduser']     = $datos['id'];
$_SESSION['nombreuser'] = $datos['user'];
$_SESSION['nombrename'] = $datos['name'];

if (isset($_POST['recordar']) && $_POST['recordar'] == 'on') {
	setcookie('idcookie', $datos['id'], time()+30*24*60*60, '/');
	setcookie('usercookie', $datos['user'], time()+30*24*60*60, '/');
}
// Perfecto.
echo "correcto";
