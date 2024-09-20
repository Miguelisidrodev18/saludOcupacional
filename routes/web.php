<?php

use App\Http\Controllers\ServiciosCondiController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\InformeMedicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::controller(ServiciosController::class)->group(function() {
    Route::get('servicios', 'index');
    Route::get('servicios/create', 'create');
    Route::get('servicios/{servicio}/{area}', 'show');
});

Route::get('users/{id}', function ($id) {

});

 Route::controller(PacientesController::class)->group(function(){
    route::get('pacientes','index');
    route::get('pacientes/create', 'create');
    route::get('pacientes/{paciente}','show');
 });
 
 Route::controller(InformeMedicoController::class)->group(function(){
    route::get('InformeMedico','index');
    route::get('ImformeMedico/create', 'create');
    route::get('InformeMedico/{informe}','show');
 });


Route::resource('repositories', App\Http\Controllers\RepositoryController::class)->middleware('auth');