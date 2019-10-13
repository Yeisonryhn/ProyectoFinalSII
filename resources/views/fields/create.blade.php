@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card w-75 mx-auto">
    <div class="card-header text-center"><h2>{{ __('Registrar Campo a la Tabla') }}</h2></div>
      <div class="card-body ">

                       
            
          
          
          
          
          @if ($singleTable)
          <form method="POST" class="p-4" action="{{route('fields.store',['table'=>$table])}}">     
          @csrf        
                    
                    <div class="row">
                        <div class="col my-auto">                            
                            <div class="form-group row m-4">
                                <label for="name" class="col-2 col-form-label">Nombre</label>
                                <input placeholder="{{ __('Nombre') }}" type="text" class="form-control @error('name') is-invalid @enderror col" name="name" value="{{ old('name') }}" required id="name">  
                            </div>
                            <div class="form-group row m-4">
                                <label for="lenght" class="col-2 col-form-label">Longitud</label>
                                <input placeholder="{{ __('Longitud') }}" type="text" class="form-control @error('lenght') is-invalid @enderror col" name="leght" value="{{ old('leght') }}" required id="leght">  
                            </div>
                            <div class="form-group row m-4">
                                <label for="default" class="col-3 col-form-label">Predeterminado</label>
                                <input placeholder="{{ __('Predeterminado') }}" type="text" class="form-control @error('default') is-invalid @enderror col" name="default" value="{{ old('default') }}" required id="default">  
                            </div>
                            <div class="row px-auto form-group m-4">

                                
                                    <label for="null" class="col-2 text-right col-form-label">Nulo</label>
                                    <select class="form-control col-2 @error('lenght') is-invalid @enderror"  id="null" name="null">
                                        <option value="N">Nulo</option>
                                        <option value="NN">No Nulo</option>
                                    </select>

                                    <label for="datatype" class="col-2 col-form-label">Tipo de Dato</label>
                                    <select class=" col form-control @error('datatype') is-invalid @enderror" id="datatype" name="datatype">
                                        @foreach ($datatypes as $datatype)
                                        <option value="{{$datatype->id}}">{{$datatype->name}}</option>
                                            
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