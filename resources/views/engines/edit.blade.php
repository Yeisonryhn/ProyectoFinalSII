@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card">
            <div class="card-header text-center"><h2>{{ __('Modificación de Motor de Base de Datos') }}</h2></div>

            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('updateDBEngine', $dBEngine) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col my-auto">    
                            <div class="row m-2">
                            <input placeholder="{{$dBEngine->name}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $dBEngine->name }}" required autocomplete="name" autofocus>
                            </div> 
                            <div class="form-group row"> 
                                <a href="{{ route('home') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
                                <button type="submit" class="btn btn-primary mx-auto my-2">
                                    {{ __('Modificar') }}
                                </button>                                
                            </div>                            
                            
                        </div>
                        <div class="col bg-secondary rounded text-light text-center m-2 p-2 pb-4">
                            <h3 class="m-4">NOTA</h3>
                            <p class="m-3 text-left">Motor de base de datos es el servicio principal para almacenar, procesar y proteger los datos. El Motor de base de datos proporciona acceso controlado y procesamiento de transacciones rápido para cumplir con los requisitos de las aplicaciones consumidoras de datos más exigentes de los sistemas, use esta opcion si necesita agregar uno que no tenga registrado.</p>
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