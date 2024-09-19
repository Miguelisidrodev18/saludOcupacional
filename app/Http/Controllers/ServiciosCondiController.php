<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosCondiController extends Controller
{
    public function index() {
        return "Bienvenido a la Gestión de Servicios Condicionales de la Clínica";
    }

    public function create() {
        return "En esta página podrás crear un nuevo registro para un servicio condicional";
    }

    public function show($servicio, $area = null) {
        if($servicio) {
            return "Bienvenido al servicio condicional: $servicio, del area de $area";
        } else {
            return "Bienvenido al servicio condicional: $servicio"; 
        }
    }
}
