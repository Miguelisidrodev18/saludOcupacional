<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina de los pacientes";
    }

    public function create(){
        return "Aqui podras registrar nuevos pacientes";
    }

    public function show($paciente){
        return "Información del paciente: $paciente";

    }
}
