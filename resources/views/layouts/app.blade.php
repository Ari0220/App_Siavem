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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    body div nav {
    background-color: #196819;
  }
  body b{
    font-family: 'EB Garamond', serif;
    font-size: 1.2rem;
  }
  .navbar-nav .nav-item {
  display: inline-block;
  vertical-align: middle;
}

.navbar-nav .nav-link {
  padding: 0.5rem 1rem;
}

 </style>

</head>

<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm ">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/home') }}">

                <img src="{{ asset('images/logos.webp') }}" alt="..." height="80">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>

                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        @if (Auth::user()->rol_id === 1 || Auth::user()->rol_id === 2)
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b> Agregar </b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a class="nav-link" href="{{ route('estados.index') }}"><b>{{ __('Estado') }}</b>
                                    </a>
                                    <a class="nav-link"
                                        href="{{ route('tlicencias.index') }}"><b>{{ __('Tipo Licencia') }}</b> </a>
                                    <a class="nav-link"
                                        href="{{ route('combustibles.index') }}"><b>{{ __('Tipo Combustible') }}</b>
                                    </a>
                                    <a class="nav-link"
                                        href="{{ route('tracciones.index') }}"><b>{{ __('Tipo Tracción') }}</b> </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b> Empleado </b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="{{ route('departamentos.index') }}"> <b>
                                            Departamento</b> </a>
                                    <a class="dropdown-item" href="{{ route('empleados.index') }}"> <b>Empleado</b>
                                    </a>


                                </div>

                                
                            </li>
                           
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b> Rol</b>
                                    </a>   
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="nav-link"
                                    href="{{ route('roles.index') }}"><b>{{ __('Rol') }}</b> </a>
                          
                                <a class="nav-link"
                                    href="{{ route('users.index') }}"><b>{{ __('Usuario') }}</b> </a>
                          </div> 
                                
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>Vehículo</b>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item"
                                        href="{{ route('categorias.index') }}"><b>Categoría</b></a>
                                    <a class="dropdown-item" href="{{ route('unidades.index') }}"><b>Unidad</b></a>


                                </div>
                            </li>
                         @endif
                            @if (Auth::user()->rol_id === 1 || Auth::user()->rol_id === 2)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>Mantenimiento</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="{{ route('talleres.index') }}"><b>Taller</b>
                                </a>
                                    <a class="dropdown-item" href="{{ route('preventivos.index') }}"><b>Preventivo</b>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('correctivos.index') }}"><b>Correctivo</b>
                                    </a>


                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>Inspección</b>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item"
                                        href="{{ route('motocicletas.index') }}"><b>Motocicleta</b></a>
                                    <a class="dropdown-item" href="{{ route('chequeos.index') }}"><b>Automóvil y Buseta</b></a>


                                </div>
                            </li>
                            @endif
                            @if (Auth::user()->rol_id === 1 || Auth::user()->rol_id === 2 || Auth::user()->rol_id === 3)
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('formularios.index') }}"><b>{{ __('Solicitud Gira') }}</b> </a>
                            </li>
                            @endif
                        </ul>


                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        <b>{{ Auth::user()->name }}</b>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <b>{{ __('Salir') }}</b>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </li>
                            @endguest
                        </ul>
                    </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        @yield('js')
    </div>
</body>

</html>
