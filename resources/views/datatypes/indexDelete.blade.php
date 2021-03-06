@extends('layouts.app')

@section('content')
    <section class="container align-center">
        <h2 class="text-center">Listado de Tipos de Datos</h2>
        <div class="d-flex flex-wrap justify-content-center">
            @forelse ($datatypes as $datatype)
            <article class="bg-white border rounded m-4 w-25 p-4">
                <p class="mb-1">
                    <strong>Nombre: </strong>{{$datatype->name}} &nbsp;&nbsp;&nbsp; 
                    <strong>Peso: </strong>{{$datatype->weight}}Kb &nbsp;&nbsp;&nbsp; 
                    <strong>Ejemplo: </strong>{{$datatype->example}} &nbsp;&nbsp;&nbsp; 
                </p>
                <div class="d-flex justify-content-center">
                    <form action="{{route('destroyDatatype', $datatype)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn border border-danger" value="eliminar">Eliminar</button>
                    </form>                    
                </div>
            </article>    
            @empty
                <article class="bg-white border rounded m-4 w-100 p-4">
                        <p class="mb-1">
                        <strong>No hay tipos de datos registrados de el sistema</strong>
                        </p>
                </article>
            @endforelse
        </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary"    href="{{ route('home') }}">Volver</a>

    </div>
    </section>
@endsection