@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card">
            <div class="card-header text-center"><h2>{{ __('Registro de Rol') }}</h2></div>

            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('storeRole') }}">
                    @csrf
                    <div class="row">
                        <div class="col my-auto">                            
                            <div class="row m-2">
                                <input id="description" placeholder="{{ __('Descripción') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                            </div>                                
                            <div class="form-group row"> 
                                <a href="{{ route('home') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
                                <button type="submit" class="btn btn-primary mx-auto my-2">
                                    {{ __('Crear Rol') }}
                                </button>                                
                            </div>                            
                        </div>
                        <div class="col bg-secondary rounded text-light text-center m-2">
                            <h3 class="m-4">NOTA</h3>
                            <p class="m-3 text-left">Esta sección ha sido desarrollada para que sea adaptable a los planes a futuro del dueño del sistema.</p>
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