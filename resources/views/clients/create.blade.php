@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card w-75 mx-auto">
            <div class="card-header text-center"><h2>{{ __('Registro de Cliente') }}</h2></div>
            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="col w-75 mx-auto ">                                                 
                        <div class="form-group row m-2">
                            <label for="name" class="col-2 col-form-label">Nombre</label>
                            <input id="name" placeholder="{{ __('Nombre') }}" type="text" class="col form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        </div>   
                        <div class="form-group row m-2">
                            <label for="last_name" class="col-2 col-form-label">Apellido</label>
                            <input id="last_name" placeholder="{{ __('Apellido') }}" type="text" class="col form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}">
                        </div>           
                        <div class="form-group row m-2">
                            <label for="identity_card_number" class="col-2 col-form-label">Cédula</label>
                            <input id="identity_card_number" placeholder="{{ __('Cédula') }}" type="text" class="col form-control @error('identity_card_number') is-invalid @enderror" name="identity_card_number" value="{{ old('identity_card_number') }}">
                        </div>                     
                        <div class="form-group row"> 
                            <a href="{{ route('home2') }}" class="btn border border-primary mx-auto my-2">Volver</a>                                                        
                            <button type="submit" class="btn btn-primary mx-auto my-2">
                                {{ __('Registrar') }}
                            </button>                                
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