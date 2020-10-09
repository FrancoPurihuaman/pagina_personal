<?php namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\Session;

class LogoutController {

    public function logout()
    {
        Session::destroy();
        View::redirection('login');
    }
}