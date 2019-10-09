@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card w-75 mx-auto">
    <div class="card-header text-center"><h2>{{ __('Registrar Tabla de Base de Datos') }}</h2></div>
      <div class="card-body ">

                <form method="POST" class="p-4" action="{{route('tables.update',$table)}}">
                    @csrf  
                    @method('PUT')
                     
                @if ( $manyDatabases )
                    
                    <div class="row">
                        <div class="col my-auto">                            
                            <div class="row m-2">
                            <input placeholder="{{ __('Nombre') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $table->name }}" required autofocus>
                            </div>
                            <div class="row m-2">
                                <select class="form-control" name="database_id" id="">
                                    <option value="{{$table->database->id}}">{{$table->database->name}}</option>
                                    @foreach ($databases as $database)
                                        @if ($database->id != $table->database->id)
                                        <option value="{{$database->id}}">{{$database->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group row"> 
                                <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                    
                                <button type="submit" class="btn btn-primary mx-auto my-2">
                                    {{ __('Modificar') }}
                                </button>                                
                            </div>                            
                        </div>
                    </div>
                    </form>

                    @if($errors->any())
                        <div class="alert alert-danger m-4" role="alert">
                            <h3>Por favor corrija los siguientes errores</h3>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                @else

                    <article class="bg-white border rounded m-4  p-4">
                        <p class="mb-1">
                            <strong>No hay Bases de Datos Registradas en el sistema</strong>
                            <a href="{{ route('databases.create') }}" class="btn border border-primary mx-4">Crear</a>
                            <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                 
                        </p>
                    </article> 

                @endif
        </div>

    </div>
            
  </div>
@endsection