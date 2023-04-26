<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        .mini_tabla {
            border: 1px solid #e2e2e2;
            display: flex;
        }

        .tittle {
            background: #f0ecec99;
        }

        .tittle,
        .description {
            width: 96.5%;
            border: 2px solid #eeeeee;
            margin: 5px 5px;
            padding: 5px;
        }
    </style>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    @php($count = 1)
    @foreach ($info as $item)
        <div class="mini_tabla">
            <h3>Gira #{{ $count }}</h3>
            <div class="tittle">
                <span>Categoria</span>
            </div>
            <div class="description">
                <span>{{ $item->categoria->nombre }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Departamento</span>
            </div>
            <div class="description">
                <span>{{ $item->departamento->nombreDepa }}</span>
            </div>
            <!---->
            <!---->
            <div class="tittle">
                <span>Empleado</span>
            </div>
            <div class="description">
                <span>{{ $item->empleado->Cedula }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Objetivo</span>
            </div>
            <div class="description">
                <span>{{ $item->Objetivo }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Fecha de Salida</span>
            </div>
            <div class="description">
                <span>{{ $item->FechaSalida }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Hora de Salida</span>
            </div>
            <div class="description">
                <span>{{ $item->HoraS }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Fecha de Regreso</span>
            </div>
            <div class="description">
                <span>{{ $item->FechaRegreso }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Hora Regreso</span>
            </div>
            <div class="description">
                <span>{{ $item->HoraR }}</span>
            </div>
            <!------>
            <!---->            <!---->
            <!---->
            <div class="tittle">
                <span>Empleado</span>
            </div>
            <div class="description">
                <span>{{ $item->empleado->Cedula }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Observaciones</span>
            </div>
            <div class="description">
                <span>{{ $item->Observaciones }}</span>
            </div>            
            <!---->
            <div class="tittle">
                <span>Estado</span>
            </div>
            <div class="description">
                @if($item->estado == 1)
                <span>Aceptado</span>
            @else
                <span>Rechazado</span>
            
            @endif
            </div>
            <div class="tittle">
                <span>Placa</span>
            </div>
            <div class="description">
                <span>{{ $item->placa }}</span>
            </div>  

        </div>
        @php($count++)
    @endforeach

</body>

</html>
