@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="card">
            <div class="card-header text-center"><h2>{{ __('Modificación de Tipos de Datos') }}</h2></div>

            <div class="card-body ">
                <form method="POST" class="p-4" action="{{ route('updateDatatype', $datatype) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col my-auto">                            
                            <div class="row m-2">
                                <input placeholder="{{ __('Nombre') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$datatype->name}}" required autocomplete="name" autofocus>
                            </div>                                
                            <div class="row m-2">
                                <input placeholder="{{ __('Peso') }}" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{$datatype->weight}}" required autocomplete="weight" autofocus>
                            </div>
                            <div class="row m-2">
                                <input placeholder="{{ __('Ejemplo') }}" type="text" class="form-control @error('example') is-invalid @enderror" name="example" value="{{ $datatype->example }}" required autocomplete="example" autofocus>
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
                            <p class="m-3 text-left">Los tipos de datos son aquellos que posee un campo de una base de datos, esta sección ha sido desarrollada con el fin de que usted pueda agregar conforme lo necesite.</p>
                            <ul class="text-left m-2">
                                <li>El peso debe ser en numero entero y representa el peso en kb de ese tipo de dato</li>
                            </ul>
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