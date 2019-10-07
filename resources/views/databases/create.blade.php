@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card w-75 mx-auto">
    <div class="card-header text-center"><h2>{{ __('Registrar Base de Datos') }}</h2></div>
      <div class="card-body ">
        
         @if (sizeof($dBEngines) > 0 && sizeof($collations) > 0 && sizeof($projects) > 0)
          <form method="POST" class="p-4" action="{{ route('databases.store') }}">
              @csrf
              <div class="row">
                <div class="col my-auto">                            
                  <div class="row m-2">
                      <input placeholder="{{ __('Nombre') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>                                
                  <!--<div class="row m-2">
                      <input placeholder="{{ __('Fecha de Creacion') }}" type="date" class="form-control @error('creation_date') is-invalid @enderror" name="creation_date" value="{{ old('creation_date') }}" required autocomplete="creation_date" autofocus>
                  </div>!-->  
                  <div class="row m-2">
                      <select class="form-control" id="exampleFormControlSelect1" name="db_engine_id">
                        @foreach ($dBEngines as $dBEngine)
                          <option value="{{ $dBEngine->id }}">{{$dBEngine->name}}</option>           
                        @endforeach
                      </select>
                    </div>
                  <div class="row m-2">
                    <select class="form-control" id="exampleFormControlSelect1" name="collation_id">
                      @foreach ($collations as $collation)
                        <option value="{{ $collation->id }}">{{$collation->description}}</option>                                  
                      @endforeach
                    </select>
                  </div>
                  <div class="row m-2">
                    <select class="form-control" id="exampleFormControlSelect1" name="project_id">
                      @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{$project->name}}</option>                                  
                      @endforeach
                    </select>
                  </div>                                             
                                                    
                  <div class="form-group row"> 
                      <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
                      <button type="submit" class="btn btn-primary mx-auto my-2">
                          {{ __('Registrar') }}
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
          @if (sizeof($dBEngines) == 0)
            <article class="bg-white border rounded m-4 w-100 p-4">
              <p class="mb-1">
                <strong>No hay Motores de Bases de Datos Registradas de el sistema</strong>
              </p>
            </article>              
          @endif
          @if (sizeof($collations) == 0)
            <article class="bg-white border rounded m-4 w-100 p-4">
              <p class="mb-1">
                <strong>No hay Cotejamientos Registradas de el sistema</strong>
              </p>
            </article>
          @endif
          @if (sizeof($projects) == 0)
            <article class="bg-white border rounded m-4 w-100 p-4">
              <p class="mb-1">
                <strong>No hay proyectos disponibles en el sistema, debe crear primero un proyecto.</strong>
              </p>
            </article>              
          @endif
         @endif
      </div>

    </div>
            
  </div>
@endsection