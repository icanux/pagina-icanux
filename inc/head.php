<?php

// Obtenemos la raiz de la web, usando el directorio donde está guardado el
// fichero index.php.

$base_path = dirname($_SERVER['SCRIPT_NAME']);

// Le añadimos un slash si no tiene
if (substr($base_path, -1, 1) != "/") {
    $base_path .= '/';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Icanux</title>
  <base href="<?=$base_path?>" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="static/img/HELMI1.ico">
    <link rel="stylesheet" type="text/css" href="static/css/base.css">
  <link rel="stylesheet" type="text/css" href="static/css/styles.css">
  <link rel="stylesheet" type="text/css" href="static/css/my-style.css">
  <link rel="stylesheet" type="text/css" href="static/css/font-awesome.min.css">
   <script type="text/javascript" src="static/js/jquery-3.2.1.min.js"></script>
</head>
