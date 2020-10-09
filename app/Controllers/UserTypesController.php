<?php namespace App\Controllers;

class UserTypesController {

    private static $userTypes = ['INVITADO', 'ADMINISTRADOR'];

    /**
     * Obtener un grupo de tipos de usuarios agrupados según un alias.
     * all => para obtener todos los tipos de usuarios
     * @param String $group 'Alias para un grupo de tipos de usuario - all'
     * @return Array
     */
    public static function getUserTypes($group){
        $userTypesGroup = [];
        switch ($group){
            case 'all':
                $userTypesGroup = self::$userTypes;
                break;
        }
        return $userTypesGroup;
    }
}