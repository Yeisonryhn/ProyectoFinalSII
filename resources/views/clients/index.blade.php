@extends('layouts.app')
@section('content')
<section class="container">
  <h2 class="text-center text-dark m-4">Listado de Clientes</h2>
  <table class="table w-75 mx-auto">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Cédula</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>    
    <tbody>
      @forelse ($clients as $client)
      <tr>
          <td>{{$client->name}}</td>
          <td>{{$client->last_name}}</td>
          <td>{{$client->identity_card_number}}</td>
          <td>
            
            <form method="POST" action="{{ route('clients.destroy',$client)}}">
              @csrf
              @method('DELETE')
              <a href="" class="btn border border-primary">Detalle</a>
              <a href="{{ route('clients.edit', $client)}}" class="btn border border-warning">Modificar</a>
              <button type="submit" class="btn border border-danger">Eliminar</button>
            </form>
          </td>
        </tr>          
      @empty
        <article class="bg-white border rounded m-4 w-100 p-4">
            <p class="mb-1">
            <strong>No hay motores de bases de datos registrados de el sistema</strong>
            </p>
        </article> 
      @endforelse
    </tbody>
  </table>
  <div class="row mx-auto  w-50 d-flex justify-content-around">
    <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
    <a href="{{ route('clients.create') }}" class="btn border border-success mx-auto my-2">Crear</a>
  </div>
</section>

@endsection