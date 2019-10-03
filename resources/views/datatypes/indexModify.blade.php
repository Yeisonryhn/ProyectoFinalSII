@extends('layouts.app')

@section('content')
    <section class="container align-center">
        <h2 class="text-center">Listado de Tipos de Datos</h2>
        <div class="d-flex flex-wrap justify-content-center">
            @forelse ($datatypes as $datatype)
            <article class="bg-white border rounded m-4 w-25 p-4">
                <p class="mb-1">
                    <strong>Tipo de dato: </strong>{{$datatype->name}}&nbsp;&nbsp;&nbsp; 
                    <strong>Peso: </strong>{{$datatype->weight}}&nbsp;&nbsp;&nbsp;
                    <strong>Ejemplo: </strong>{{$datatype->example}}&nbsp;&nbsp;&nbsp;
                </p>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('editDatatype', $datatype ) }}" class="btn border border-warning   mx-auto">Modificar</a>
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