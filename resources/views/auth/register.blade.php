<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    </head>
    
    <div class="container">
    <br />
    <br />
    <br />
    <br />


    <div class="row justify-content-center">
        <a class="navbar-brand" href="#">

        </a>
        <div class="col-md-5">

            <div class="card">

                <div class="card-header"  style="text-align:center">
                <a class="navbar-brand" href="#">
                        <br>
                        <img src="{{ asset('images/logos.png') }}" class="mx-auto d-block" height="100">
                        <br />

                    </a>    
                    <strong><h4>{{ __('Registrarse') }}</h4></strong> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"> {{ __('Registrarse') }}</button>
                                <a class="btn btn-danger" href="{{ route('login') }}"> Atrás</a>
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

