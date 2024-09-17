<?php

use App\Http\Controllers\PacientesController;
use Illuminate\Support\Facades\Route;


//EL MIGUEL SE LA COME UWU
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


    return "Bienvenido a Salud Ocupacional";

});

route ::get('celulares', function(){


   return"Deko putito & Mikys prra" ;
});

route ::get('PC', function(){
    return"Deko el rompe QKS" ;
 });

 Route::controller(PacientesController::class)->group(function(){
    route::get('pacientes','index');
    route::get('pacientes/create', 'create');
    route::get('pacientes/{paciente}','show');
 });
