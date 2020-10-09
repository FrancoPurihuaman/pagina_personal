<?php namespace App\Controllers;

use App\Libraries\View;

class PublicController {

    public function index(){
        View::render('public/index');
    }

    public function proyectos(){
        View::render('public/proyectos');
    }
}