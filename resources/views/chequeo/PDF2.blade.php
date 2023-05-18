<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p></p>
  
    @foreach($info as $informacion)
    <h5>Fecha de Inspecion</h5>
    <span>{{ $informacion->FechaChequeo }}</span>
    <br>
    <h5>Id</h5>
    <span>{{ $informacion->idchequeos }}</span>
    
    <br>
    <h5>Kilometraje</h5>
    <span>{{ $informacion->Kilometraje }}</span><br>
    <h5>Combustible</h5>
    <span>{{ $informacion->Combustible }}</span><br>
    <h5>LuzBaja</h5>
    <span>{{ $informacion->LuzBaja }}</span><br>
    <h5>Luz Alta</h5>
    <span>{{ $informacion->LuzAlta }}</span><br>
    <h5>LuzMarcha</h5>
    <span>{{ $informacion->LuzMarcha }}</span><br>
    <h5>LuzInterior</h5>
    <span>{{ $informacion->LuzInterior }}</span>
    <h5>LuzFreno</h5>
    <span>{{ $informacion->LuzFreno }}</span>
    <br>
    <h5>Intermitentes</h5>
    <span>{{ $informacion->Intermitentes }}</span><br>
    <h5>LuzParking</h5>
    <span>{{ $informacion->LuzParking }}</span><br>
    <h5>Alojenos</h5>
    <span>{{ $informacion->Alojenos }}</span><br>
    <h5>Escobillas</h5>
    <span>{{ $informacion->Escobillas }}</span><br>
    <h5>Extintor</h5>
    <span>{{ $informacion->Extintor }}</span><br>
    <h5>Botiquin</h5>
    <span>{{ $informacion->Botiquin }}</span>
    <h5>Triangulos</h5>
    <span>{{ $informacion->Triangulos }}</span>
    <br>
    <h5>Cinturon</h5>
    <span>{{ $informacion->Cinturon }}</span><br>
    <h5>ChapaPuerta</h5>
    <span>{{ $informacion->ChapaPuerta }}</span><br>
    <h5>Pito</h5>
    <span>{{ $informacion->Pito }}</span><br>
    <h5>Parabrisas</h5>
    <span>{{ $informacion->Parabrisas }}</span><br>
    <h5>VidriosLaterales</h5>
    <span>{{ $informacion->VidriosLaterales }}</span><br>
    <h5>Climatizacion</h5>
    <span>{{ $informacion->Climatizacion }}</span>
    <h5>Bateria</h5>
    <span>{{ $informacion->Bateria }}</span>
    <br>
    <h5>NivelRefrigeracion</h5>
    <span>{{ $informacion->NivelRefrigeracion }}</span><br>
    <h5>NivelAceite</h5>
    <span>{{ $informacion->NivelAceite }}</span><br>
    <h5>Alfombras</h5>
    <span>{{ $informacion->Alfombras }}</span><br>
    <h5>Radio</h5>
    <span>{{ $informacion->Radio }}</span><br>
    <h5>AsientosD</h5>
    <span>{{ $informacion->AsientosD }}</span><br>
    <h5>PermisosCirculacion</h5>
    <span>{{ $informacion->PermisosCirculacion }}</span>
    <h5>RTV</h5>
    <span>{{ $informacion->RTV }}</span>
    <br>
    <h5>TituloPropiedad</h5>
    <span>{{ $informacion->TituloPropiedad }}</span><br>
    <h5>LlantaDelantera</h5>
    <span>{{ $informacion->LlantaDelantera }}</span><br>
    <h5>LlantaRepuesto</h5>
    <span>{{ $informacion->LlantaRepuesto }}</span><br>
    <h5>LlantaTrasera</h5>
    <span>{{ $informacion->LlantaTrasera }}</span><br>
    <h5>Tuercas</h5>
    <span>{{ $informacion->Tuercas }}</span><br>
    <h5>EspejoRetrovisor</h5>
    <span>{{ $informacion->EspejoRetrovisor }}</span>
    <h5>Gata</h5>
    <span>{{ $informacion->Gata }}</span>
    <br>
    <h5>LlaveRana</h5>
    <span>{{ $informacion->LlaveRana }}</span><br>
    <h5>JuegoLlaves</h5>
    <span>{{ $informacion->JuegoLlaves }}</span><br>
    <h5>Bumper</h5>
    <span>{{ $informacion->Bumper }}</span><br>
    <br>
    <h5>Firma del encargado de la inspeccion</h5>
    <br>
    <h5>_______________________________________</h5>
    <br>
    <h5>Firma del encargado de la Gira</h5>
    <br>
    <h5>_______________________________________</h5>

    <br>
    @endforeach
  
</body>
</html>