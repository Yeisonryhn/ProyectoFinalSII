@extends('layouts.app')
@section('content')
<section class="container">
  <h2 class="text-center text-dark m-4">Listado de Campos de la tabla <strong>{{$fields[1]->table->name}}</strong></h2>
  <table class="table w-100 mx-auto">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Longitud</th>
        <th scope="col">Predeterminado</th>
        <th scope="col">Nulo</th>
        <th scope="col">Tipo de Dato</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>    
    <tbody>
    
    @foreach($fields as $field)
      <tr>        
          <td>{{$field->name}}</td>
          <td>{{$field->length}}</td>
          <td>{{$field->default}}</td>
          <td>{{$field->null}}</td>
          <<td>{{$field->datatype->name}}</td>
          <td>    
          <form method="POST" action="{{ route('tables.destroy',$table)}}">
              <div class="form_control">
                  @csrf
                  @method('DELETE')
                  <a href="" class="btn border border-primary">Detalle</a>
                  <a href="{{ route('tables.edit', $table)}}" class="btn border border-warning">Modificar</a>
                  <button type="submit" class="btn border border-danger">Eliminar</button>
                  <a href="{{ route('fields.create', ['table'=>$table])}}" class="btn border border-primary">Agregar Campo</a>
                  
              </div>
          </form>
          </td>
      </tr> 
    @endforeach

    </tbody>
    </table>
    
   

    <tbody></tbody>
    </table>
    @if ( sizeof($fields) == 0)
         
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