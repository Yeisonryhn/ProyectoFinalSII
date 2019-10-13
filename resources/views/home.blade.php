@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">Gestion de Parametrización</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home2')}}">Administracion</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('home3')}}">Reportes</a>
            </li>            
        </ul>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row m-4">
        <div class="col my-auto bg-secondary rounded text-light text-center">
            <h2 class="m-4">Gestión de Parametrización</h2>
            <p class="m-3 text-left">Bienvenido Administrador <strong>{{Auth::user()->name }} {{ Auth::user()->last_name }}</strong>,
            en esta seccion usted podrá realizar tareas de Gestión de como registrar, eliminar y modificar
            la informacion que se lista al lado derecho, tenga en cuenta que es probable que usted no necesite tocar 
            estas opciones muy seguido. Uselas solo si necesita hacer tareas como por ejemplo:
            <ul class="m-3 mb-4">
                <li class=" text-left">Ha salido un nuevo Motor de base de Datos con el que usted piensa crear un nuevo sistema.</li>
                <li class=" text-left">Su empresa ha crecido y necesita agregar un nuevo rol al sistema.</li>
                <li class=" text-left">Desea agregar un tipo de dato a su sistema.</li>
            </ul>
        </p>
        </div>
        <div class="col">
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Gestión de Tipos de Datos</h3><hr>
                <div class=" d-flex justify-content-around">
                <a href="{{ route('createDatatype') }}" class="btn border border-success">Crear</a>
                <a href="{{ route('indexModifyDatatype') }}" class="btn border border-warning">Modificar</a>
                <a href="{{ route('indexDeleteDatatype') }}" class="btn border border-danger">Eliminar</a>
                </div>
            </div>
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Gestión de Roles</h3><hr>
                <div class=" d-flex justify-content-around">
                <a href="{{ route('createRole') }}" class="btn border border-success">Crear</a>
                    <a href="{{ route('indexModifyRole') }}" class="btn border border-warning">Modificar</a>
                <a href="{{route('indexDeleteRole')}}" class="btn border border-danger">Eliminar</a>
                </div>
            </div>
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Gestión de Cotejamientos</h3><hr>
                <div class=" d-flex justify-content-around">
                    <a href="{{ route('createCollation')}}" class="btn border border-success">Crear</a>
                    <a href="{{ route('indexModifyCollation')}}" class="btn border border-warning">Modificar</a>
                    <a href="{{ route('indexDeleteCollation')}}" class="btn border border-danger">Eliminar</a>
                </div>
            </div>
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Gestión Motores de Bases de Datos</h3><hr>
                <div class=" d-flex justify-content-around">
                    <a href="{{ route('createDBEngine') }}" class="btn border border-success">Crear</a>
                    <a href="{{ route('indexModifyDBEngine')}}" class="btn border border-warning">Modificar</a>
                    <a href="{{ route('indexDeleteDBEngine')}}" class="btn border border-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
