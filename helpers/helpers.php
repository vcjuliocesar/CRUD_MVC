<?php
//variables globales;
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__, 2)).DS);

if (! function_exists('url_base')) {
    function url_base()
    {
        $base = str_replace('\\', '/', dirname($_SERVER["SCRIPT_NAME"], 2));
        if ($base == '/') {
            $base = null;
        }
        return $base;
    }
}

define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].url_base().'/');
