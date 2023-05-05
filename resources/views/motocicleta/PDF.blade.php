
<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        body {
        font-family: "Times New Roman", serif;
        font-size: 12pt;
        }
        h1 {
        font-size: 16pt;
        font-weight: bold;
        text-align: center;
        margin-top: 20pt;
        margin-bottom: 10pt;
        }
        p {
        text-align: justify;
        line-height: 1.5;
        margin-top: 0;
        margin-bottom: 10pt;
        }
        

    </style>

    </head>

<body>
    
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    @php($count = 1)
    @foreach ($info as $item)
        <div class="tables">
            <h3>Gira #{{ $count }}</h3>

            <div class="tittle">
                <p>Fecha de Inspecion</p>
            </div>
            <div class="description">
                <span>{{ $item->FechaChequeoM }}</span>
            </div>
            <!---->
            <div class="tittle">
            <p>Kilometraje</p>
            </div>
            <div class="description">
                <span>{{ $item->Kilometraje }}</span>
            </div>
            <!---->
            <!---->
            <div class="tittle">
                <p>Direccion</p>
            </div>
            <div class="description">
                <span>{{ $item->DireccionTaller }}</span>
            </div>
            <!---->
            <div class="tittle">
                <p>Combustible</p>
            </div>
            <div class="description">
                <span>{{ $item->Combustible }}</span>
            </div>
            <!---->
            <div class="tittle">
                <p>LuzBaja</p>
            </div>
            <div class="description">
                <span>{{ $item->LuzBaja }}</span>
            </div>
            <!------>
            
            <div class="tittle">
                <p>LuzAlta</p>
            </div>
            <div class="description">
                <span>{{ $item->LuzAlta }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>LuzMarcha</p>
            </div>
            <div class="description">
                <span>{{ $item->LuzMarcha }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>Pito</p>
            </div>
            <div class="description">
                <span>{{ $item->Pito }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>Bateria</p>
            </div>
            <div class="description">
                <span>{{ $item->Bateria }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>NivelRefrigeracion</p>
            </div>
            <div class="description">
                <span>{{ $item->NivelRefrigeracion }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>NivelAceite</p>
            </div>
            <div class="description">
                <span>{{ $item->NivelAceite }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>Asientos</p>
            </div>
            <div class="description">
                <span>{{ $item->Asientos }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>PermisosCirculacion</p>
            </div>
            <div class="description">
                <span>{{ $item->PermisosCirculacion }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>RTV</p>
            </div>
            <div class="description">
                <span>{{ $item->RTV }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>TituloPropiedad</p>
            </div>
            <div class="description">
                <span>{{ $item->TituloPropiedad }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>LlantaDelantera</p>
            </div>
            <div class="description">
                <span>{{ $item->LlantaDelantera }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>LlantaTrasera</p>
            </div>
            <div class="description">
                <span>{{ $item->LlantaTrasera }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>EspejoRetrovisorD</p>
            </div>
            <div class="description">
                <span>{{ $item->EspejoRetrovisorD }}</span>
            </div>
            <!------>
            <div class="tittle">
                <p>EspejoRetrovisori</p>
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
