@extends('layouts.app')
@section('content')
<section class="container">
  <h2 class="text-center text-dark m-4">Listado de Tablas</h2>
  <table class="table w-100 mx-auto">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha de Creacion</th>
        <th scope="col">Base de Datos</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>    
    <tbody>
    
    @foreach($tables as $table)
      <tr>        
          <td>{{$table->name}}</td>
          <td>{{$table->creation_date}}</td>
          <td>{{$table->database->name}}</td>
          <td>    
          <form method="POST" action="{{ route('tables.destroy',$table)}}">
              <div class="form_control">
                  @csrf
                  @method('DELETE')
                  <a href="" class="btn border border-primary">Detalle</a>
                  <a href="{{ route('tables.edit', $table)}}" class="btn border border-warning">Modificar</a>
                  <button type="submit" class="btn border border-danger">Eliminar</button>
              </div>
          </form>
          </td>
      </tr> 
    @endforeach

    </tbody>
    </table>
    
   

    <tbody></tbody>
    </table>
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