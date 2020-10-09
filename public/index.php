<?php

require_once __DIR__.'/../config/app.php';

use App\Libraries\Route;
use App\Libraries\Router;
use App\Libraries\Session;
use App\Libraries\View;

$url = $_GET['url'] ?? '';

if(Route::checkRouteExistence($url)){
    $controller = Route::getController($url);
    $action = Route::getAction($url);
    
    if($controller == 'Public'){
        Router::render($controller, $action);
    }elseif($controller == 'Access' && $action == 'login'){
        Router::render($controller, $action);
    }else{
        Session::validate();
        $access = Route::checkAccessRoute($url, Session::getUserValue('rol_nombre'));
        if($access){
            Router::render($controller, $action);
        }else{
            View::render('permiso_denegado');
        }
    }
}else{
    header('HTTP/1.0 404 Not Found');
    View::render('404');
}