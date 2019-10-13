@extends('layouts.app')
@section('content')
<section class="container">
  <h2 class="text-center text-dark m-4">Listado de Tablas</h2>
  
    
    @foreach($tables as $table)
    {{--dd($table)--}}
    <div class="card text-center w-75 pb-auto mx-auto my-4">
        <div class="card-header">Tabla {{$table->name}}</div>
        <div class="card-body m-2">
          <p class="card-text text-left"><strong>Base de Datos: </strong>{{$table->database->name}} &nbsp;&nbsp;&nbsp;&nbsp; <strong>Cant. Campos: </strong>{{sizeof($table->fields)}}<br>
                               <strong>Cliente: </strong>{{$table->database->project->client->name}}<br>
                               <strong>Motor de Base de Datos: </strong>{{$table->database->dBEngine->name}}</p>
          <form method="POST" action="{{ route('tables.destroy',$table)}}">
            <div class="form_control">
                @csrf
                @method('DELETE')
                <a href="" class="btn border border-primary mx-2">Detalle</a>
                <a href="{{ route('tables.edit', $table)}}" class="btn border border-warning mx-2">Modificar</a>
                <button type="submit" class="btn border border-danger mx-2">Eliminar</button>
                <a href="{{ route('fields.create', ['table'=>$table])}}" class="btn border border-primary mx-2">Agregar Campo</a>
                <a href="{{ route('fields.index', ['table'=>$table])}}" class="btn border border-primary mx-2">Mostrar Campos</a>
            </div>
        </form>
          
        </div>
      </div>
    @endforeach

    
    @if ( sizeof($tables) == 0)
         
      <article class="bg-white border rounded m-4 w-100 mx-auto p-4">
        <p class="mb-1">
          <strong>No hay Tablas registradas en el sistema</strong>
        </p>
      </article> 
        
    @endif   

    
  <div class="row mx-auto  w-50 d-flex justify-content-around">
    <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
    <a href="{{ route('tables.create') }}" class="btn border border-success mx-auto my-2">Crear</a>
    
  </div>
</section>
@endsection