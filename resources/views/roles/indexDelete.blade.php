@extends('layouts.app')

@section('content')
    <section class="container align-center">
        <h2 class="text-center">Listado de Roles</h2>
        <div class="d-flex flex-wrap justify-content-center">
            @foreach ($roles as $role)
                <article class="bg-white border rounded m-4 w-25 p-4">
                    <p class="mb-1">
                        <strong>Número: </strong>{{$role->id}} <br>
                        <strong>Descripción: </strong>{{$role->description}} <br>
                    </p>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('destroyRole' , $role) }}" method='POST'>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn border border-danger" value="eliminar">Eliminar</button>
                        </form>
                        
                    </div>
                </article>    
            @endforeach
        </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary"    href="{{ route('home') }}">Volver</a>

    </div>

    
@endsection