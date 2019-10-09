@extends('layouts.app')
@section('content')
<section class="container">
  <h2 class="text-center text-dark m-4">Listado de Bases de Datos</h2>
  <table class="table w-100 mx-auto">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha de Creacion</th>
        <th scope="col">Motor de Base de Datos</th>
        <th scope="col">Cotejamiento</th>
        <th scope="col">Proyecto</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>    
    
    <tbody>
    @foreach ($databases as $database)
    <tr>
        
        <td>{{$database->name}}</td>
        <td>{{$database->creation_date}}</td>
        <td>{{$database->dBEngine->name}}</td>
        <td>{{$database->collation->description}}</td>
        <td>{{$database->project->name}}</td>
        <td>          
          <form method="POST" action="{{ route('databases.destroy',$database)}}">
            @csrf
            @method('DELETE')
            <a href="" class="btn border border-primary">Detalle</a>
            <a href="{{ route('databases.edit', $database)}}" class="btn border border-warning">Modificar</a>
            <button type="submit" class="btn border border-danger">Eliminar</button>
            <a href="{{ route('tables.create',['database'=>$database]) }}" class="btn border border-success mx-auto">Agregar Tablas</a>
          </form>
        </td>
      </tr>    
    @endforeach
    </tbody>
  </table>
    
   
   @if (sizeof($databases)==0)
    <article class="bg-white border rounded m-4 w-100 mx-auto p-4">
      <p class="mb-1">
        <strong>No hay Bases de Datos registradas en el sistema</strong>
      </p>
    </article>       
   @endif 
  
  
  
  <div class="row mx-auto  w-50 d-flex justify-content-around">
    <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
    <a href="{{ route('databases.create') }}" class="btn border border-success mx-auto my-2">Crear</a>
    
  </div>
</section>

@endsection