<?php namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\Session;
use App\Models\User;
use App\Rules\LoginRules;

class AccessController {

    private $loginRedirectionFail = 'administration/access/login';

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user = $_POST['user']??'';
            $password = $_POST['password']??'';

            $oLoginRules = new LoginRules($this->loginRedirectionFail);
            $data = $oLoginRules->validate(compact('user','password'));
            
            $user = User::where('usuario', '=', $data['user'])->first();
            
            if(!is_null($user)){
                
                if($data['password'] == $user->password)
                {   
                    $usuario = [];
                    $usuario['id'] = $user->usuario_id;
                    $person = $user->person;
                    $usuario['nombre'] = $person->nombre;
                    $usuario['apellidos'] = $person->apellidos;
                    $usuarioGrupo = $user->usuarioGrupo;
                    $usuario['rol_id'] = $usuarioGrupo->grupo_id;
                    $usuario['rol_nombre'] = $usuarioGrupo->nombre;
                    Session::start();
                    Session::add('user', $usuario);
                    View::redirection('dashboard');
                }else{
                    $errors[] = 'Usuario o contraseña invalidos';
                    View::render($this->loginRedirectionFail, compact('errors'));
                }
                
            }else{
                $errors[] = 'Usuario o contraseña invalidos';
                View::render($this->loginRedirectionFail, compact('errors'));
            }
        }else{
            View::render($this->loginRedirectionFail);
        }
    }
}