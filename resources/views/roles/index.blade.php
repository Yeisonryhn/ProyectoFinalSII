@extends('layouts.app')
@section('content')

<section class="container">
    <h2 class="text-center">Listado de Roles</h2>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($roles as $role)
            <article class="bg-white border rounded m-4 p-4">
                    <p class="mb-1">
                        <strong>Número: </strong>{{$role->id}} <br>
                        <strong>Descripción: </strong>{{$role->description}} <br>
                    </p>
                <a href="{{ route('editRole', $role ) }}" class="btn border border-warning">Modificar</a>
                <a href="" class="btn border border-danger">Eliminar</a>
                <a href="" class="btn border border-success">Detalle</a>
            </article>    
        @endforeach
    </div>
    <div class='d-flex justify-content-center'>
        <a class=" btn btn-primary"    href="{{ route('home') }}">Volver</a>
    </div>
</section>
    
@endsection