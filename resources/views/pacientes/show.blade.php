@extends('layouts.plantilla')

@section('title', 'Paciente:' . $paciente)

@section('content')
    <h1>Información del paciente: {{$paciente}}</h1>
@endsection