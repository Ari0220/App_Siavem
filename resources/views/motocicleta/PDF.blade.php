
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
                <span>Fecha de Inspecion</span>
            </div>
            <div class="description">
                <span>{{ $item->FechaChequeoM }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Kilometraje</span>
            </div>
            <div class="description">
                <span>{{ $item->Kilometraje }}</span>
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
                <span>Combustible</span>
            </div>
            <div class="description">
                <span>{{ $item->Combustible }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>LuzBaja</span>
            </div>
            <div class="description">
                <span>{{ $item->LuzBaja }}</span>
            </div>
            <!------>
            
            <div class="tittle">
                <span>LuzAlta</span>
            </div>
            <div class="description">
                <span>{{ $item->LuzAlta }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>LuzMarcha</span>
            </div>
            <div class="description">
                <span>{{ $item->LuzMarcha }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Pito</span>
            </div>
            <div class="description">
                <span>{{ $item->Pito }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Bateria</span>
            </div>
            <div class="description">
                <span>{{ $item->Bateria }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>NivelRefrigeracion</span>
            </div>
            <div class="description">
                <span>{{ $item->NivelRefrigeracion }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>NivelAceite</span>
            </div>
            <div class="description">
                <span>{{ $item->NivelAceite }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Asientos</span>
            </div>
            <div class="description">
                <span>{{ $item->Asientos }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>PermisosCirculacion</span>
            </div>
            <div class="description">
                <span>{{ $item->PermisosCirculacion }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>RTV</span>
            </div>
            <div class="description">
                <span>{{ $item->RTV }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>TituloPropiedad</span>
            </div>
            <div class="description">
                <span>{{ $item->TituloPropiedad }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>LlantaDelantera</span>
            </div>
            <div class="description">
                <span>{{ $item->LlantaDelantera }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>LlantaTrasera</span>
            </div>
            <div class="description">
                <span>{{ $item->LlantaTrasera }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>EspejoRetrovisorD</span>
            </div>
            <div class="description">
                <span>{{ $item->EspejoRetrovisorD }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>EspejoRetrovisori</span>
            </div>
            <div class="description">
                <span>{{ $item->EspejoRetrovisori }}</span>
            </div>
            <!------>
          

        </div>
        @php($count++)
    @endforeach

</body>

</html>
