<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index() {
        return "Bienvenido a la Gestión de Servicios de la Clínica";
    }

    public function create() {
        return "En esta página podrás crear un nuevo registro para un servicio";
    }

    public function show($servicio, $area = null) {
        if($servicio) {
            return "Bienvenido al servicio: $servicio, del area de $area";
        } else {
            return "Bienvenido al servicio: $servicio"; 
        }
    }
}
