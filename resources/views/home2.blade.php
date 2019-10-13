@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Gestion de Parametrización</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('home2')}}">Administracion</a>
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
            <h2 class="m-4">Gestión de Administración</h2>
            <p class="m-3 text-left">Bienvenido Administrador <strong>{{Auth::user()->name }} {{ Auth::user()->last_name }}</strong>,
            En esta seccion puede realizar tareas de administracion del sistema.
        </p>
        </div>
        <div class="col">
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Empleados</h3><hr>
                <div class=" d-flex justify-content-around">
                    <a href="" class="btn border border-success">Crear</a>
                    <a href="" class="btn border border-warning">Modificar</a>
                    <a href="" class="btn border border-danger">Eliminar</a>
                </div>
            </div>
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Clientes</h3><hr>
                <div class=" d-flex justify-content-around">
                    <a href="{{ route('clients.create') }}" class="btn border border-success">Crear</a>                    
                    <a href="{{ route('clients.index') }}" class="btn border border-primary">Mostrar</a>
                </div>
            </div>
            <div class="border rounded m-2 p-4 bg-white">
                    <h3>Proyectos</h3><hr>
                    <div class=" d-flex justify-content-around">
                        <a href="{{ route('projects.create') }}" class="btn border border-success">Crear</a>                    
                        <a href="{{ route('projects.index') }}" class="btn border border-primary">Mostrar</a>
                    </div>
                </div>
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Bases de Datos</h3><hr>
                <div class=" d-flex justify-content-around">
                    <a href="{{ route('databases.create')}}" class="btn border border-success">Crear</a>
                    <a href="{{ route('databases.index') }}" class="btn border border-primary">Mostrar</a>
                </div>
            </div>            
            <div class="border rounded m-2 p-4 bg-white">
                <h3>Tablas</h3><hr>
                <div class=" d-flex justify-content-around">
                <a href="{{ route('tables.create') }}" class="btn border border-success">Crear</a>
                <a href="{{ route('tables.index') }}" class="btn border border-primary">Mostrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
