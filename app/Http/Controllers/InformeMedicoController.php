<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformeMedicoController extends Controller
{
    public function index() {
        return view('InformeMedico.index');
    }

    public function create() {
        return view('InformeMedico.create');
    }

    public function show($InformeMedico){
        return view('InformeMedico.show', compact('InformeMedico'));

    }
}