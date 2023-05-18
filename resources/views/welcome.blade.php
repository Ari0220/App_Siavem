<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



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
.btn {
 --color: #00A97F;
 --color2: rgb(10, 25, 30);
 padding: 0.8em 1.75em;
 background-color: transparent;
 border-radius: 6px;
 border: .3px solid var(--color);
 transition: .5s;
 position: relative;
 overflow: hidden;
 cursor: pointer;
 z-index: 1;
 font-weight: 300;
 font-size: 14px;
 font-family: 'Roboto', 'Segoe UI', sans-serif;
 text-transform: uppercase;
 color: var(--color);
}

.btn::after, .btn::before {
 content: '';
 display: block;
 height: 100%;
 width: 100%;
 transform: skew(90deg) translate(-50%, -50%);
 position: absolute;
 inset: 50%;
 left: 25%;
 z-index: -1;
 transition: .5s ease-out;
 background-color: var(--color);
}

.btn::before {
 top: -50%;
 left: -25%;
 transform: skew(90deg) rotate(180deg) translate(-50%, -50%);
}

.btn:hover::before {
 transform: skew(45deg) rotate(180deg) translate(-50%, -50%);
}

.btn:hover::after {
 transform: skew(45deg) translate(-50%, -50%);
}

.btn:hover {
 color: var(--color2);
}

.btn:active {
 filter: brightness(.7);
 transform: scale(.98);
}
.card .h4{
    justify-content: center;

}

</style>
    <title>Aviso - Regreso al Login</title>
</head>
<body>
<div class="fondo"></div>
<div class="fondo fondo2"></div>
<div class="fondo fondo3"></div>
<div class="container" >
        <br />
        <br />
<div class="row justify-content-center">
            <a class="navbar-brand" href="#">

            </a>
            <div class="col-md-5">

                <div class="card "  >

                    <div class="card-header " style="text-align:center">
                        <a class="navbar-brand" href="#">
                        <br>
                            <img src="{{ asset('images/logos.png') }}" class="mx-auto d-block" height="100">
                            <br />
                        <p class="fst-italic"><h4>{{ __('Aviso') }}</h4></p></h4></strong> 
                    </div>
                    <br>
                    <div class="card-body">
    <h4>{{ __('¡Por favor!') }}</h4>
    <h4>{{ __('Espera un rango de 4 horas para iniciar sesión') }}</h4>

</div>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <div style="text-align:center;">
    <button class="btn">Cerrar sesión</button>
    </div>
    <br>
</form>

</div>
</div>
</div>
</body>
</html>
