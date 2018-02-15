<?php

//mantener la session activa
if (!isset($_SESSION)) {session_start();
}

//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "localhost";
$database_db = "icanux";
$username_db = "root";
$password_db = "";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);

if (!$conexion) {
	die("BOOM!");
}

//Seleccionar la base de datos
mysqli_select_db($conexion, $database_db) or die("Ninguna DB seleccionada");

include ('inc/funciones.php');
