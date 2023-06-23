<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        @page {
            size: landscape;
        }

        .table-container {
            max-width: 100%;
            overflow-x: scroll;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
            font-size: 12px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            position: sticky;
            top: 0;
            background-color: #44c767;
            color: #fff;
            z-index: 2;
        }

        tr {
            transition: background-color 0.2s ease;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
        }

        .date {
            text-align: right;
            font-size: 14px;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .container {
  text-align: center; /* Para centrar los bloques horizontalmente */
}

.Firma1,
.Firma2 {
  display: inline-block; /* Para alinear los bloques horizontalmente */
  vertical-align: top; /* Para alinear los bloques superiormente */
}
.Firma1 {
  margin-right: 20px; /* Agrega espacio a la derecha de la primera firma */
}

.Firma2 {
  margin-left: 20px; /* Agrega espacio a la izquierda de la segunda firma */
}
    </style>
    <img src="images/logos.png" alt="Logo"  height="80">
</head>

<body>

    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Datos Importantes</th> 
                    <th>Luces</th>
                    <th>Accesorios</th>
                    <th>Asientos</th>
                    <th>Documentación</th>
                    <th>Llantas</th>
                    <th>Espejos Retrovisor</th>
                </tr>
            </thead>
            <tbody>
                @php($count = 1)
                @foreach ($info as $item)
                <tr>
                    <td>
                        <ul>
                            <li>Placa: {{ $item->unidade->placa }} </li>
                            <li>Fecha de Inspección:{{ $item->FechaChequeo  }} </li>
                            <li>Kilometraje: {{ $item->Kilometraje  }}</li>
                            <li>Combustible: {{ $item->Combustible  }}</li>
                        </ul>
                    </td>
                 
                    <td>
                        <ul>
                            <li> Alta: {{ $item->LuzAlta  }}</li>
                            <li> Bajas: {{ $item->LuzBaja  }}</li>
                            <li> Marcha: {{ $item->LuzMarcha   }}</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Alojenos : {{ $item->Alojenos   }}</li>
                            <li>Escobillas : {{ $item->Escobillas   }}</li>
                            <li>Extintor : {{ $item->Extintor }}</li>
                            <li>Botiquin: {{ $item->Botiquin  }}</li>
                            <li>Triangulos  : {{ $item->Triangulos  }}</li>
                            <li>Cinturon : {{ $item->Cinturon   }}</li>
                            <li>Chapa Puerta : {{ $item->ChapaPuerta   }}</li>
                            <li>Pito : {{ $item->Pito }}</li>
                            <li>Parabrisas: {{ $item->Parabrisas  }}</li>
                            <li>Vidrios Laterales : {{ $item->VidriosLaterales }}</li>
                            <li>Climatizacion : {{ $item->Climatizacion   }}</li>
                            <li>Refrigeracion : {{ $item->NivelRefrigeracion   }}</li>
                            <li>Aceite  : {{ $item->NivelAceite  }}</li>
                            <li> Alfombras : {{ $item->Alfombras   }}</li>
                            <li>Radio  : {{ $item->Radio  }}</li>
                        
                        </ul>
                    </td>
                     <!-- Asientos -->
                     <td>
                        <ul>
                            <li> Derecho : {{ $item->AsientosD }}</li>
                            <li> Izquierdo: {{ $item->AsientosT }}</li>
                        </ul>
                    </td>
                    <!-- Documentación -->
                    <td>
                        <ul>
                            <li>Permiso Circulación : {{ $item->PermisosCirculacion   }}</li>
                            <li>RTV  : {{ $item->RTV    }}</li>
                            <li>Título Propiedad  : {{ $item->TituloPropiedad  }}</li>
                        </ul>
                    </td>
                     <!-- Llantas -->
                     <td>
                        <ul>
                            <li> Delantera: {{ $item->LlantaDelantera}}</li>
                            <li> Trasera: {{ $item->LlantaTrasera}}</li>
                            <li> Repuesto: {{ $item->LlantaRepuesto }}</li>
                            <li> Tuercas : {{ $item->Tuercas      }}</li>
                            <li> Retrovisor : {{ $item->EspejoRetrovisor   }}</li>
                        </ul>
                    </td>
                     

                      <!-- Herramientas -->
                      <td>
                        <ul>
                        <li> Gata : {{ $item->Gata }}</li>
                            <li> Llave Rana : {{ $item->LlaveRana }}</li>
                            <li> Juego Llaves : {{ $item->JuegoLlaves  }}</li>
                            <li> Bumper  : {{ $item->Bumper       }}</li>
                           
                        </ul>
                    </td>
                </tr>
                @php($count++)
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="container">
  <div class="Firma1">
    <h5>Firma del encargado de la inspección</h5>
    <br>
    <h5>________________________________</h5>
    <br>
  </div>
  
  <div class="Firma2">
    <h5>Firma del encargado de la Gira</h5>
    <br>
    <h5>________________________________</h5>
  </div>
</div>

</body>

</html>
