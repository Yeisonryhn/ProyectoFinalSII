@extends('layouts.app')
@section('content')
<section class="container">
  <h2 class="text-center text-dark m-4">Listado de Proyectos</h2>
  <table class="table w-75 mx-auto">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">URL</th>
        <th scope="col">Cliente</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>    
    @forelse ($projects as $project)
      <tbody>
      <tr>
          <td>{{$project->name}}</td>
          <td>{{$project->url}}</td>
          <td>{{$project->client->name.' '.$project->client->last_name}}</td>
          <td>
            
            <form method="POST" action="{{ route('projects.destroy',$project)}}">
              @csrf
              @method('DELETE')
              <a href="" class="btn border border-primary">Detalle</a>
              <a href="{{ route('projects.edit', $project)}}" class="btn border border-warning">Modificar</a>
              <button type="submit" class="btn border border-danger">Eliminar</button>
            </form>
          </td>
        </tr>          
      </tbody>
    </table>
      @empty
      <tbody></tbody>
    </table>
      <article class="bg-white border rounded m-4 w-75 mx-auto p-4">
        <p class="mb-1">
          <strong>No hay Proyectos registrados de el sistema</strong>
        </p>
      </article> 
      @endforelse
  
  <div class="row mx-auto  w-50 d-flex justify-content-around">
    <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
    <a href="{{ route('projects.create') }}" class="btn border border-success mx-auto my-2">Crear</a>
  </div>
</section>

@endsection