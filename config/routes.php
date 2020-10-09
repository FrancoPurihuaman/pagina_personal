<?php 

use App\Libraries\Route;
use App\Controllers\UserTypesController;

//Rutas de Acceso publico
Route::add('', 'Public@index');
Route::add('proyectos', 'Public@proyectos');
Route::add('login', 'Access@login');

//Rutas compartidas
Route::add('dashboard', 'Dashboard@index', ['ADMINISTRADOR']);
Route::add('logout', 'Logout@logout', UserTypesController::getUserTypes('all'));