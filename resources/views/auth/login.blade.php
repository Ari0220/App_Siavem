<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIAVEM') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    html {
height:100%;
    }
    body{
margin: 0;
    }
.fondo{
    bottom: 0;
    Left: -50%;
    opacity: .5;
    position: fixed;
    right: -50%;
    top: 0;
    z-index: -1;
    animation: slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, #ccbf0f 50%, #225c29 50%);
}

.fondo2{
    animation-direction: alternate-reverse;
    animation-duration: 4s;
}

.fondo3{
    animation-duration: 5s;
}

@keyframes slide {
    0%{
        transform: translateX(-25%);
    }
    100%{
        transform: translateX(25%);
    }
}

</style>

</head>

<body >

<div class="fondo"></div>
<div class="fondo fondo2"></div>
<div class="fondo fondo3"></div>

<div class="container" >
        <br />
        <br />
        
        <div class="row justify-content-center">
            <a class="navbar-brand" href="#">

            </a>
            <div class="col-md-4 ">

                <div class="card "  >

                    <div class="card-header " style="text-align:center">
                        <a class="navbar-brand" href="#">
                            <br>
                            <img src="{{ asset('images/logos.png') }}" class="mx-auto d-block" height="150">
                            <br />

                        </a>
                        
                      <p class="fst-italic"><h4>{{ __('Login') }}</h4></p></h4></strong> 
                    </div>


                    <div class="card-body " >

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-6">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordar Contraseña') }}
                                        </label>
                                    </div>
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       <strong> {{ __('¿Olvido su contraseña?') }}</strong>
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                     <button type="submit" class="btn btn-primary">
                                        {{ __('Entrar') }}
                                    </button>
                                    
                                    <button type="submit" class="btn btn-danger" style="float:center;">

                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>

                                    </button>
                                   

                                   
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

</html>