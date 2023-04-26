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
                <span>Contracion</span>
            </div>
            <div class="description">
                <span>{{ $item->Contratacion }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Nombre del Taller</span>
            </div>
            <div class="description">
                <span>{{ $item->NombreTaller }}</span>
            </div>
            <!---->
            <!---->
            <div class="tittle">
                <span>Direccion</span>
            </div>
            <div class="description">
                <span>{{ $item->DireccionTaller }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Descripcion</span>
            </div>
            <div class="description">
                <span>{{ $item->DescripcionEsp }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Fecha de Vencimiento de Contrato</span>
            </div>
            <div class="description">
                <span>{{ $item->FechaVenTaller }}</span>
            </div>
            <!------>
            
          
          

        </div>
        @php($count++)
    @endforeach

</body>

</html>
