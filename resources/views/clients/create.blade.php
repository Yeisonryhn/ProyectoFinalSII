@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card w-75 mx-auto">
            <div class="card-header text-center"><h2>{{ __('Registro de Cliente') }}</h2></div>
            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="col ">                                                 
                        <div class="row m-2">
                            <input id="name" placeholder="{{ __('Nombre') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        </div>   
                        <div class="row m-2">
                            <input id="last_name" placeholder="{{ __('Apellido') }}" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}">
                        </div>           
                        <div class="row m-2">
                            <input id="identity_card_number" placeholder="{{ __('Cédula') }}" type="text" class="form-control @error('identity_card_number') is-invalid @enderror" name="identity_card_number" value="{{ old('identity_card_number') }}">
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