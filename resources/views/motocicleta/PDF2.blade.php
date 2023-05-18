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
    <h5>Fecha de Inspecion de motocicleta</h5>
    <span>{{ $informacion->FechaChequeoM }}</span>
    <br>
    <h5>Id</h5>
    <span>{{ $informacion->idMotocicleta }}</span>
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
    <h5>Pito</h5>
    <span>{{ $informacion->Pito }}</span>
    <br>
    <h5>Bateria</h5>
    <span>{{ $informacion->Bateria }}</span>
    <br>
    <h5>NivelRefrigeracion</h5>
    <span>{{ $informacion->NivelRefrigeracion }}</span>
    <br>
    <h5>NivelAceite</h5>
    <span>{{ $informacion->NivelAceite }}</span>
    <br>
    <h5>Asientos</h5>
    <span>{{ $informacion->Asientos }}</span>
    <br>
    <h5>PermisosCirculacion</h5>
    <span>{{ $informacion->PermisosCirculacion }}</span>
    <br>
    <h5>RTV</h5>
    <span>{{ $informacion->RTV }}</span>
    <br>
    <h5>TituloPropiedad</h5>
    <span>{{ $informacion->TituloPropiedad }}</span>
    <br>
    <h5>LlantaDelantera</h5>
    <span>{{ $informacion->LlantaDelantera }}</span>
    <br>
    <h5>LlantaTrasera</h5>
    <span>{{ $informacion->LlantaTrasera }}</span>
    <br>
    <h5>EspejoRetrovisorD</h5>
    <span>{{ $informacion->EspejoRetrovisorD }}</span>
    <br>
    <h5>EspejoRetrovisori</h5>
    <span>{{ $informacion->EspejoRetrovisori }}</span>
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