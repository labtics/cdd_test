<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('modalidad/inicio', 
function ()
{ 
    return "Vista Inicio"; 
}
);

Route::get('modalidad/registro', 
function ()
{ 
    return "Vista registro"; 
}
);

Route::get('modalidad/reporte_egresado', 
function ()
{ 
    return "Vista Reporte Egresado"; 
}
);
