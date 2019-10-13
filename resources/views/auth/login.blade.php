@extends('layouts.app')

@section('content')
<div class="container w-75">
    <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions"  data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions"  data-slide-to="1"></li>                
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ @asset('images/diagrama2.jpg') }}" class=" w-100" alt="...">
                  <div class="carousel-caption h-25 w-50 mx-auto d-none d-md-block bg-square">
                    <h5 class="mt-2">Mision</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ @asset('images/diagrama.png') }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption w-50 mx-auto h-25 d-none d-md-block bg-square">
                    <h5 class="mt-2">Vision</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>                
              </div>
              <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-arrow" aria-hidden="true"></span>
                <span class="sr-only text-dark" >Previous</span>
              </a>
              <a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
    <div class="row justify-content-center w-50 mx-auto my-4">
        <div class="col-md-8">
            <div class="card  ">
                <div class="card-header text-center">{{ __('Inicio de Sesion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">                            
                            <div class="col mx-auto">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col mx-auto">
                                <input id="password" type="password" placeholder="{{ __('Contraseña') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recuerdame') }}
                                </label>
                            </div>                            
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center">                            
                            <button type="submit" class="btn btn-primary">
                                {{ __('Inicio') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu Contraseña?') }}
                                </a>
                            @endif                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
