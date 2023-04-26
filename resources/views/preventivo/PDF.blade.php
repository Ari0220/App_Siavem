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
    @php($count=1)
    @foreach ($info as $item)
        <div class="mini_tabla">
            <h3>Preventivo  {{$count}}</h3>
            <div class="tittle">
                <span>Placa</span>
            </div>
            <div class="description">
                <span>{{ $item->unidade->placa }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Taller</span>
            </div>
            <div class="description">
                <span>{{ $item->tallere->NombreTaller }}</span>
            </div>
            <!---->

              <div class="tittle">
                <span>Fecha Mantenimiento</span>
            </div>
            <div class="description">
                <span>{{ $item->FechaMant }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Tipo de mantenimiento</span>
            </div>
            <div class="description">
                <span>{{ $item->tipoMante }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Horimetro</span>
            </div>
            <div class="description">
                <span>{{ $item->Horimetro }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Proximo Servicio</span>
            </div>
            <div class="description">
                <span>{{ $item->ProximoSer }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Monto</span>
            </div>
            <div class="description">
                <span>{{ $item->Monto }}</span>
            </div>
             
        </div>
        @php($count++)
    @endforeach

</body>

</html>
