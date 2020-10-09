<?php namespace App\Libraries;

use App\Controllers\PublicController;
use App\Libraries\View;

class Router {

    public static function render($controller = null, $action = 'index'){
        if($controller){
            $controller = "\\App\\Controllers\\{$controller}Controller";
            $controller = new $controller;
        }else{
            $controller = new PublicController;
        }

        if(method_exists($controller, $action)){
            return $controller->$action();
        }else{
            header('HTTP/1.0 404 Not Found');
            View::render('404');
        }
    }
}