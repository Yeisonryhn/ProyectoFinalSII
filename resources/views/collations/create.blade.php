@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card">
            <div class="card-header text-center"><h2>{{ __('Registro de Cotejamientos') }}</h2></div>

            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('storeCollation') }}">
                    @csrf
                    <div class="row">
                        <div class="col my-auto">                            
                            <div class="row m-2">
                                <input placeholder="{{ __('Descripcion') }}" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                            </div>            
                            <div class="form-group row"> 
                                <a href="{{ route('home') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
                                <button type="submit" class="btn btn-primary mx-auto my-2">
                                    {{ __('Registrar') }}
                                </button>                                
                            </div>                            
                            
                        </div>
                        <div class="col bg-secondary rounded text-light text-center m-2 p-2 pb-4">
                            <h3 class="m-4">NOTA</h3>
                            <p class="m-3 text-left">Un cotejamiento es la codificacion de caracteres que puede tomar cualquiera las bases de datos, que posee el sistema, use esta seccion si desea registrar un cotejamiento que no posea.</p>
                            
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