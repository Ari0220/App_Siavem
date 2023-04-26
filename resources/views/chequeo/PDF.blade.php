
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
                <span>{{ $item->FechaChequeo }}</span>
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
                <span>LuzInterior</span>
            </div>
            <div class="description">
                <span>{{ $item->LuzInterior }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>LuzFreno</span>
            </div>
            <div class="description">
                <span>{{ $item->LuzFreno }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Intermitentes</span>
            </div>
            <div class="description">
                <span>{{ $item->Intermitentes }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>LuzParking</span>
            </div>
            <div class="description">
                <span>{{ $item->LuzParking }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Alojenos</span>
            </div>
            <div class="description">
                <span>{{ $item->Alojenos }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Escobillas</span>
            </div>
            <div class="description">
                <span>{{ $item->Escobillas }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Extintor</span>
            </div>
            <div class="description">
                <span>{{ $item->Extintor }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Botiquin</span>
            </div>
            <div class="description">
                <span>{{ $item->Botiquin }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Triangulos</span>
            </div>
            <div class="description">
                <span>{{ $item->Triangulos }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Cinturon</span>
            </div>
            <div class="description">
                <span>{{ $item->Cinturon }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>ChapaPuerta</span>
            </div>
            <div class="description">
                <span>{{ $item->ChapaPuerta }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Pito</span>
            </div>
            <div class="description">
                <span>{{ $item->Pito }}</span>
            </div>
            <!------>
          
             <!------>
             <div class="tittle">
                <span>Parabrisas</span>
            </div>
            <div class="description">
                <span>{{ $item->Parabrisas }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>VidriosLaterales</span>
            </div>
            <div class="description">
                <span>{{ $item->VidriosLaterales }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Climatizacion</span>
            </div>
            <div class="description">
                <span>{{ $item->Climatizacion }}</span>
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
                <span>Alfombras</span>
            </div>
            <div class="description">
                <span>{{ $item->Alfombras }}</span>
            </div>
            <!------>

              <!------>
              <div class="tittle">
                <span>Radio</span>
            </div>
            <div class="description">
                <span>{{ $item->Radio }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>AsientosD</span>
            </div>
            <div class="description">
                <span>{{ $item->AsientosD }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>AsientosD</span>
            </div>
            <div class="description">
                <span>{{ $item->AsientosD }}</span>
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

               <!------>
               <div class="tittle">
                <span>LlantaRepuesto</span>
            </div>
            <div class="description">
                <span>{{ $item->LlantaRepuesto }}</span>
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
                <span>AsientosD</span>
            </div>
            <div class="description">
                <span>{{ $item->AsientosD }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Tuercas</span>
            </div>
            <div class="description">
                <span>{{ $item->Tuercas }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>EspejoRetrovisor</span>
            </div>
            <div class="description">
                <span>{{ $item->EspejoRetrovisor }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Gata</span>
            </div>
            <div class="description">
                <span>{{ $item->Gata }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>LlaveRana</span>
            </div>
            <div class="description">
                <span>{{ $item->LlaveRana }}</span>
            </div>
            <!------>
 <!------>
 <div class="tittle">
                <span>Lingas</span>
            </div>
            <div class="description">
                <span>{{ $item->Lingas }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>JuegoLlaves</span>
            </div>
            <div class="description">
                <span>{{ $item->JuegoLlaves }}</span>
            </div>
            <!------>
            <div class="tittle">
                <span>Bumper</span>
            </div>
            <div class="description">
                <span>{{ $item->Bumper }}</span>
            </div>
            <!------>


        </div>
        @php($count++)
    @endforeach

</body>

</html>
