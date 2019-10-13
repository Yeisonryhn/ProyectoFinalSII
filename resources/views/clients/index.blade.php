@extends('layouts.app')
@section('content')
<section class="container ">
  <h2 class="text-center text-dark m-4">Listado de Clientes</h2>
  <div class="d-flex flex-wrap justify-content-center">
        @foreach ($clients as $client)
        <div class="card text-center m-4 w-50" style="width: 18rem;">
            <div class="card-header">Cliente {{$client->id}}</div>
            <div class="card-body mb-2">
              <p class="card-text"><strong>Nombre: </strong> {{$client->name}}<br>
                                   <strong>Apellido: </strong>{{$client->last_name}}<br>
                                   <strong>Cédula: </strong>V-{{$client->identity_card_number}}</p>
              <form method="POST" action="{{ route('clients.destroy',$client)}}">
                @csrf
                @method('DELETE')
                <a href="" class="btn border border-primary m-2">Ver Proyectos</a>
                <a href="{{ route('clients.edit', $client)}}" class="btn border border-warning m-2">Modificar</a>
                <button type="submit" class="btn border border-danger m-2">Eliminar</button>
              </form>
              
            </div>
          </div>
                
        @endforeach

      </div>
    @if (sizeof($clients) == 0)
      <article class="bg-white border rounded m-4 w-75 p-4 mx-auto">
        <p class="mb-1">
          <strong>No clientes registrados de el sistema</strong>
        </p>
      </article> 
    @endif
  <div class="row mx-auto  w-50 d-flex justify-content-around">
    <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
    <a href="{{ route('clients.create') }}" class="btn border border-success mx-auto my-2">Crear</a>
  </div>
</section>

@endsection