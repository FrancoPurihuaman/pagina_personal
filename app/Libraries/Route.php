<?php namespace App\Libraries;


class Route
{
    private static $routes = [];

    /**
     * Agregar ruta
     * @param String $route 'Ruta - ruta1/ruta2/ruta3'
     * @param String $managerRute 'Controlador y método - controller@metodo'
     * @param Array $userTypes 'permiso de acceso según tipo de usuario'
     */
    public static function add($route, $managerRute, $userTypes = []){
        $arrayAux = explode("@", $managerRute, 2);
        $controller = $arrayAux[0];
        $action = $arrayAux[1];

        self::$routes[$route] = [$controller, $action, $userTypes];
    }

    public static function getController($route){
        return self::$routes[$route][0];
    }

    public static function getAction($route){
        return self::$routes[$route][1];
    }

    /**
     * Verifica si un rata existe
     * @param String $route 'Ruta'
     * @return bool
     */
    public static function checkRouteExistence($route){
        $exist = false;
        foreach (self::$routes as $key => $arrayManagerRoute){
            if($key == $route){
                $exist =  true;
                break;
            }
        }
        return $exist;
    }

    /**
     * Verifica si un typo de usuario tiene permiso de acceso a una ruta
     * @param String $route 'Ruta - ruta1/ruta2/ruta3'
     * @param String $userType 'Tipo de usuario - guest, admin...'
     * @return bool
     */
    public static function checkAccessRoute($route, $userType){
        $access = false;
        foreach (self::$routes as $key => $arrayManagerRoute){
            if($key == $route){
                foreach ($arrayManagerRoute[2] as $auxUserType){
                    if($auxUserType == $userType){
                        $access = true;
                        break;
                    }
                }
                break;
            }
        }
        return $access;
    }
}