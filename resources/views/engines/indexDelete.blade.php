@extends('layouts.app')

@section('content')
    <section class="container align-center">
        <h2 class="text-center">Listado de Motores de Bases de Datos</h2>
        <div class="d-flex flex-wrap justify-content-center">
            @forelse ($dBEngines as $dBEngine)
            <article class="bg-white border rounded m-4 w-25 p-4">
                <p class="mb-1">
                    <strong>Nombre: </strong>{{$dBEngine->name}}&nbsp;&nbsp;&nbsp;                     
                </p>
                <div class="d-flex justify-content-center">
                    <form action="{{route('destroyDBEngine', $dBEngine)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn border border-danger" value="eliminar">Eliminar</button>
                    </form>                      
                </div>
            </article>    
            @empty
                <article class="bg-white border rounded m-4 w-100 p-4">
                        <p class="mb-1">
                        <strong>No hay motores de bases de datos registrados de el sistema</strong>
                        </p>
                </article>
            @endforelse
        </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary"    href="{{ route('home') }}">Volver</a>

    </div>
    </section>
@endsection