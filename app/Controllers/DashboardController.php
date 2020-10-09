<?php namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\Session;

class DashboardController {

    public function index()
    {
        $typeUser = Session::getUserValue('rol_id');
        switch ($typeUser){
            case 1:
                View::render('dashboard_admin');
                break;
            case 2:
                View::render('dashboard_guest');
                break;
            default:
                View::redirection('');
        }
    }
}