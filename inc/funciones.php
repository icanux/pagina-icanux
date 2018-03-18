<?php
function formatearcadena($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
	//Iniciamos la variable $conexion
	global $conexion;

	if (PHP_VERSION < 6) {
		$theValue = get_magic_quotes_gpc()?stripslashes($theValue):$theValue;
	}

	//Agregamos $conexion en las funciones mysqli_real_escape_string y mysqli_escape_string
	$theValue = function_exists("mysqli_real_escape_string")?mysqli_real_escape_string($conexion, $theValue):mysqli_escape_string($conexion, $theValue);

	switch ($theType) {
		case "text":
			$theValue = ($theValue != "")?"'".$theValue."'":"NULL";
			break;
		case "long":
		case "int":
			$theValue = ($theValue != "")?intval($theValue):"NULL";
			break;
		case "double":
			$theValue = ($theValue != "")?doubleval($theValue):"NULL";
			break;
		case "date":
			$theValue = ($theValue != "")?"'".$theValue."'":"NULL";
			break;
		case "defined":
			$theValue = ($theValue != "")?$theDefinedValue:$theNotDefinedValue;
			break;
	}
	return $theValue;
}

$menu      = '';
$menuadmin = '';

//CONSULTA A LA BASE DE DATOS
$accion_web   = "SELECT * FROM datos";
$consulta_web = mysqli_query($conexion, $accion_web);
$datos_web    = mysqli_fetch_assoc($consulta_web);

$cantidad_web = mysqli_num_rows($consulta_web);

$dato = array($datos_web['url'], $datos_web['email'], $datos_web['titulo'], $datos_web['porpagina'], $datos_web['logo'], $datos_web['descripcion']);

$porpagina = $dato[3];

mysqli_free_result($consulta_web);

function rango($iduser) {
	global $conexion;
	//CONSULTA A LA BASE DE DATOS
	$accion_funcion   = "SELECT * FROM users WHERE id=$iduser";
	$consulta_funcion = mysqli_query($conexion, $accion_funcion);
	$datos_funcion    = mysqli_fetch_assoc($consulta_funcion);
	$cantidad_funcion = mysqli_num_rows($consulta_funcion);

	return $datos_funcion['rango'];
	mysqli_free_result($consulta_funcion);
}

function nombre($iduser) {
	global $conexion;

	$accion_funcion   = "SELECT * FROM users WHERE id=$iduser";
	$consulta_funcion = mysqli_query($conexion, $accion_funcion);
	$datos_funcion    = mysqli_fetch_assoc($consulta_funcion);
	$cantidad_funcion = mysqli_num_rows($consulta_funcion);

	return $datos_funcion['name'];
	mysqli_free_result($consulta_funcion);
}

//funcion yrl amigable
function urls_amigables($url) {
	// Tranformamos todo a minusculas
	$url = strtolower($url);
	//Rememplazamos caracteres especiales latinos
	$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
	$repl = array('a', 'e', 'i', 'o', 'u', 'n');
	$url  = str_replace($find, $repl, $url);
	// Añadimos los guiones
	$find = array(' ', '&', '\r\n', '\n', '+');
	$url  = str_replace($find, '-', $url);
	// Eliminamos y Reemplazamos demás caracteres especiales
	$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
	$repl = array('', '-', '');
	$url  = preg_replace($find, $repl, $url);
	return $url;
}

//AUTO LOGIN-
if (isset($_COOKIE['idcookie']) && isset($_COOKIE['nombrecookie']) && !isset($_SESSION['iduser'])) {
	$_SESSION['iduser']     = $_COOKIE['idcookie'];
	$_SESSION['nombreuser'] = $_COOKIE['nombrecookie'];
}
