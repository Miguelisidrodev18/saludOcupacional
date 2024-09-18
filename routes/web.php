<?php

<<<<<<< HEAD
use App\Http\Controllers\ServiciosCondiController;
use App\Http\Controllers\ServiciosController;
=======
use App\Http\Controllers\PacientesController;
>>>>>>> 1019ba77bb84df0fbde2d3c18522d935dcd3de64
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

<<<<<<< HEAD
Route::get('/', HomeController::class);
=======

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
>>>>>>> 1019ba77bb84df0fbde2d3c18522d935dcd3de64

Route::controller(ServiciosController::class)->group(function() {
    Route::get('servicios', 'index');
    Route::get('servicios/create', 'create');
    Route::get('servicios/{servicio}/{area}', 'show');
});

<<<<<<< HEAD
Route::controller(ServiciosCondiController::class)->group(function() {
    Route::get('servicioscondi', 'index');
    Route::get('servicioscondi/create', 'create');
    Route::get('servicioscondi/{servicio}/{area}', 'show');
});


Route::get('users/{id}', function ($id) {

});
=======




 Route::controller(PacientesController::class)->group(function(){
    route::get('pacientes','index');
    route::get('pacientes/create', 'create');
    route::get('pacientes/{paciente}','show');
 });


>>>>>>> 1019ba77bb84df0fbde2d3c18522d935dcd3de64
