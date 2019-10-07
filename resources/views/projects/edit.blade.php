@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card">
            <div class="card-header text-center"><h2>{{ __('Editar Proyecto') }}</h2></div>

            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('projects.update',$project) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col my-auto">                            
                            <div class="row m-2">
                                <input placeholder="{{ __('Nombre') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $project->name }}" required>
                            </div>   
                            <div class="row m-2">
                                <input placeholder="{{ __('URL') }}" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $project->url }}" required>
                            </div>
                            <div class="row m-2">
                              <select class="form-control" id="exampleFormControlSelect1" name="client_id">
                                @foreach ($clients as $client)
                                  <option value="{{ $client->id }}">{{ $client->name.' '.$client->last_name }}</option>                                  
                                @endforeach
                              </select>
                            </div>   

                            <div class="form-group row"> 
                                <a href="{{ route('projects.index') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
                                <button type="submit" class="btn border border-warning mx-auto my-2">
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
            </div>
        </div>
            
    </div>
@endsection