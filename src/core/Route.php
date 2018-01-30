<?php
namespace App\core;

class Route
{
    public static function run(Request $request)
    {
        $controller = ucwords($request->getController()).'Controller';
        $rute = ROOT.'src'.DS.'controllers'.DS.$controller.".php";
        $method = $request->getMethod();
        if ($method == 'index.php') {
            $method='Index';
        }
        $arguments = $request->getArguments();
        if (is_readable($rute)) {
            require_once $rute;
            $show="App\\controllers\\".$controller;
            $controller = new $show;
            if (!isset($arguments)) {
                $datos = call_user_func(array($controller,$method));
            } else {
                $datos = call_user_func_array(array($controller,$method), $arguments);
            }
        }
        //views
        $view=ROOT."views".DS.lcfirst($request->getController()).DS.$request->getMethod().".php";
        if (is_readable($view)) {
            //print $view;
            require_once $view;
        } else {
            print "404";
        }
    }
}
