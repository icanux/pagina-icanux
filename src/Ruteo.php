<?php

/**
 * Clase para definir el controlador a cargar, según la ruta especificada
 *
 * Las rutas se definen en un fichero 'rutas.php' guardado en la raiz del
 * proyecto.
 *
 * Este fichero es una propuesta para dejar de usar el .htaccess, lo que
 * permitirá:
 *
 * * Usar el proyecto en otro servidor web, en particular Nginx
 * * Usar el servidor web de pruebas de PHP, para poder desarrollar sin
 *   requerir un servidor web configurado.
 * * Poder usar una lógica más compleja para tomar decisiones de ruteo.
 *
 * Para desarrollar este proyecto usando el servidor de pruebas de PHP, ejecuta
 * el siguiente comando, dentro de la carpeta de este proyecto:
 *
 * `php -S localhost:9999 index.php`
 *
 * Y luego abres la URL http://localhost:9999
 *
 * @author Oliver Etchebarne <yo@drmad.org>
 */
class Ruteo
{
    /** @var array Array con las expresiones regulares que definen las rutas */
    private $rutas = [];

    /** @var string Controlador obtenido de la ruta */
    private $controlador = null;

    /** @var array Parámetros obtenidos de la ruta */
    private $parámetros = [];

    /**
     * Constructor. Compara la ruta contra la lista de rutas del fichero
     * 'rutas.php' para encontrar un patron de ruta que encaje con la... ruta
     * proporcionada.
     *
     * @param string $ruta Ruta para comparar
     */
    public function __construct($ruta)
    {
        $rutas = require 'rutas.php';
        $controlador_defecto = '';
        foreach ($rutas as $r) {
            // Si el patrón de esta ruta es vacío, lo guardamos, y continuamos
            if ($r[0] == '') {
                $controlador_defecto = $r[1];
                continue;
            }

            $matches = [];
            if (preg_match("%{$r[0]}%", $ruta, $matches) === 1) {

                // Convertimos los keys de matches en 'variables' para
                // reemplazar en otros lugares
                $reempl = [];
                foreach ($matches as $llave => $valor) {
                    $reempl["{{$llave}}"] = $valor;
                }

                // Reemplazamos los valores en el controlador
                $this->controlador = strtr($r[1], $reempl);

                // Reemplazamos los valores en los parámetros, si hay
                $params = [];
                if (isset($r[2])) {
                    foreach ($r[2] as $llave => $valor) {
                        $params[strtr($llave, $reempl)] = strtr($valor, $reempl);
                    }
                    $params = $r[2];
                }

                // Le añadimos los valores obtenidos de la ruta
                $this->parámetros = array_merge($params, $matches);

                // Y salimos del bucle
                break;
            }
        }

        // Si la ruta es vacía, y existe un controlador por defecto, lo usamos
        if ($ruta == '' && $controlador_defecto) {
            $this->controlador = $controlador_defecto;
        }

    }

    /**
     * Devuelve el nombre del script PHP que ejecutará esta ruta.
     * @return string Nombre del script, con ruta incluida.
     */
    public function obtenerControlador()
    {
        return $this->controlador;
    }

    /**
     * Devuelve los parámtros obtenidos de la ruta, y de los parámetros
     * extra.
     * @return array Parámetros de la ruta
     */
    public function obtenerParámetros()
    {
        return $this->parámetros;
    }
}
