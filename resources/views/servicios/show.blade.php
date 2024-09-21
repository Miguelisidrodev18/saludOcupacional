@extends('layouts.plantilla')

@section('title', 'Servicio' . $servicio)

@section('content')
    <h1>Bienvenido al servicio: {{$servicio}}</h1>
    <h1>, del area de: {{$area}}</h1>
@endsection
