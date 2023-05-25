<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        .card {
            margin: 20px auto;
            width: 90%;
            max-width: 800px;
            padding: 20px;
        }

        .formulario-gira {
            width: 100%;
        }

        .formulario-gira .columna {
            display: inline-block;
            width: 48%;
            margin-right: 2%;
            vertical-align: top; /* Alinea los elementos en la parte superior */
        }

        .formulario-gira .columna:last-child {
            margin-right: 0;
        }

        .formulario-gira .campo {
            margin-bottom: 10px;
        }

        .formulario-gira .campo label {
            font-weight: bold;
            font-size: 14px; /* Tamaño de letra más pequeño */
            display: inline-block;
            width: 120px; /* Ancho fijo para las etiquetas */
        }

        .formulario-gira .campo span {
            display: inline-block;
            width: calc(100% - 120px); /* Ancho calculado para los valores */
            font-size: 14px; /* Tamaño de letra más pequeño */
        }
    </style>
    <div class="card">
        <div class="card-header text-center">
            <h1>{{ $title }}</h1>
            <p>{{ $date }}</p>
        </div>
        <div class="card-body">
            <form class="formulario-gira">
                @php($count = 1)
                @foreach ($info as $item)
                    <div class="columna">
                        <div class="campo">
                            <label>Codigo: {{ $item->idFormularios }}</label>
                        </div>
                        <div class="campo">
                            <label>Categoría:</label>
                            <span>{{ $item->categoria->nombre }}</span>
                        </div>
                        <div class="campo">
                            <label>Departamento:</label>
                            <span>{{ $item->departamento->nombreDepa }}</span>
                        </div>
                        <div class="campo">
                            <label>Responsable de gira:</label>
                            <span>{{ $item->empleado->Cedula }}</span>
                        </div>
                        <div class="campo">
                            <label>Objetivo:</label>
                            <span>{{ $item->Objetivo }}</span>
                        </div>
                        <div class="campo">
                            <label>Acompañantes:</label>
                            <span>{{ $item->NumePersonas  }}</span>
                        </div>
                        <div class="campo">
                            <label>Destino:</label>
                            <span>{{ $item->Lugar }}</span>
                        </div>
                        
                    <div class="columna">
                        <div class="campo">
                            <label>Fecha de Salida:</label>
                            <span>{{ $item->FechaSalida }}</span>
                        </div>
                        <div class="campo">
                            <label>Hora de Salida:</label>
                            <span>{{ $item->HoraS }}</span>
                        </div>
                        <div class="campo">
                            <label>Fecha de Regreso:</label>
                            <span>{{ $item->FechaRegreso }}</span>
                        </div>
                        <div class="campo">
                            <label>Hora de Regreso:</label>
                            <span>{{ $item->HoraR }}</span>
                        </div>
                        <div class="campo">
                            <label>Observaciones:</label>
                            <span>{{ $item->Observaciones }}</span>
                        </div>
                        <div class="campo">
                            <label>Estado:</label>
                            <span>{{ $item->estado == 1 ? 'Aceptado' : 'Rechazado' }}</span>
                        </div>
                        <div class="campo">
                            <label>Placa:</label>
                            <span>{{ $item->placa }}</span>
                        </div>
                    </div>
                    @php($count++)
                @endforeach
            </form>
        </div>
    </div>
</body>

</html>
