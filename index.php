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

// Si existe el autoloader de composer, también lo cargamos
$composer_autoloader = 'vendor/autoload.php';
if (file_exists($composer_autoloader)) {
    require_once $composer_autoloader;
}

// La ruta a la aplicación, que es básicamente la URL (o URI), la obtenemos de
// 3 lugares:

// Primero. Puede venir por la variable GET '_q'. Esto es usado por Apache via
// .htaccess
if (isset($_GET['_q'])) {
    $ruta = $_GET['_q'];

// Segundo. Puede venir por la variable de entorno PATH_INFO. Esta variable
// debería contener una ruta que sigue a un fichero existente. E.g.
// http://localhost/script.php/una/ruta . En este caso, PATH_INFO tendría como
// valor 'una/ruta'. Pero cuando usemos Nginx, modificaremos manualmente esta
// variable para darle el valor correcto.
} elseif (isset($_SERVER['PATH_INFO'])) {
    $ruta = $_SERVER['PATH_INFO']

// Tercero. Puede venir por REQUEST_URI. Esta variable tiene la ruta completa
// de la petición. Útil cuando la aplicación está en la raiz de la web. Lo
// usaremos principalmente para el servidor web de desarrollo de PHP
} elseif (isset($_SERVER['REQUEST_URI'])) {
    $ruta = $_SERVER['REQUEST_URI'];

// Si no hay nada de esto, pucha... no tengo idea qué hacer :')
} else {
    throw new Exception ('OMG NO PUDE UBICAR LA RUTA!!!!');
    exit;
}

// N.b.: Todas estas líneas las pudimos condensar en una:
//
// $ruta = $_GET['_q'] ?? $_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'] ?? null;
//
// Pero la forma que preferí es más legible :-)

// Removemos los slashs iniciales y finales
$ruta = trim($rutal, '/');

// La carpeta 'static' es especial: Es servida directo por el servidor web, sin
// pasar por este script. Para que eso funcione en el servidor de desarrollo de
// PHP, tenemos que retornar false. Para los demás, jamás debería de llegar
// a este if.
if (substr($ruta, 0, 7) == 'static/') {
    return false;
}

// Iniciamos la clase de Ruteo
$ruteador = new Ruteo($ruta);

// Obtenemos el script y los parámetros que obtuvo.
$controlador = $ruteador->obtenerControlador();
$parámetros = $ruteador->obtenerParámetros();

// Y... cargamos el controlador
if (file_exists($controlador)) {
    require $controlador;
} else {
    // O mostramos un 404 si no encontró nada.
    require '404.php';
}
