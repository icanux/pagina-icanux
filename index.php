<?php

/**
 * Este fichero es el núcleo del proyecto. La petición web llega aquí, y
 * obtenemos la ruta via la variable de entorno REQUEST_URI, entonces este
 * script determina qué fichero debe ejecutar (que debería ser el 'controlador'
 * en un paradigma MVC), y pasarle el control a él.
 */

// PSR-4, boys and girls! :-D Las clases deben de autocargarse cuando sean
// necesarias. Este es un autoloader que busca los ficheros dentro del
// directorio `src`, usando el namespace y nombre de la clase como ruta.
spl_autoload_register(function($class) {

    // Reemplazamos el \ con el separador de rutas de este OS.
    $filename = strtr($class, '\\', DIRECTORY_SEPARATOR);

    // Y le añadimos el directorio base y la extension
    $filename = 'src/' . $filename .'.php';

    // Si existe, lo cargamos
    if (file_exists($filename)) {
        require_once $filename;
    }
});

$ruta = $_SERVER['REQUEST_URI'];

// Si viene con un slash inicial, lo ignoramos. Uso las llaves, por un gusto
// personal :-) Da igual usar corchetes, pero uso llaves cuando quiero acceder
// a un caracter en un string.
if ($ruta{0} == '/') {
    $ruta = substr($ruta, 1);
}

// La carpeta 'static' es especial: Es servida directo por el servidor web, sin
// pasar por este script. Para que eso funcione en el servidor de desarrollo de
// PHP, tenemos que retornar false. Para los demás, jamás debería de llegar
// a este if.
if (substr($ruta, 0, 7) == 'static/') {

    return false;
}

$ruteador = new Ruteo($ruta);

$controlador = $ruteador->obtenerControlador();
$parámetros = $ruteador->obtenerParámetros();

// Y... cargamos el controlador
if (file_exists($controlador)) {
    require $controlador;
} else {
    require '404.php';
}
