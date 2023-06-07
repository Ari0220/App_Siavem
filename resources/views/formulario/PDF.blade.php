<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
 .table-container {
  max-width: 100%;
  overflow-x: scroll;
 
}

table {
  width: 100%;
  border-collapse: collapse;
  white-space: nowrap;
  font-size: 8px; /* Cambia el tamaño de fuente */
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  position: sticky;
  top: 0;
  background-color: #44c767; /* Cambia el color de fondo */
  color: #fff; /* Cambia el color de letra */
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
    font-size: 16px;
    margin-top: 15px;
    margin-bottom: 10px;
}
    </style>
        <img src="images/logos.png" alt="Logo"  height="80">
</head>

<body>

<h1>{{ $title }}</h1>
    <div class="date">{{ $date }}</div>
</div>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Total </th>
                <th>Fecha Salida</th>
                <th>Fecha Regreso</th>
                <th>Hora de salida</th>
                <th>Hora de regreso</th>
                <th>Lugar</th>
                <th>Autorizacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($info as $informacion)
            <tr>
                <td>{{ $informacion->NumePersonas }}</td>
                <td>{{ $informacion->FechaSalida }}</td>
                <td>{{ $informacion->FechaRegreso }}</td>
                <td>{{ $informacion->HoraS }}</td>
                <td>{{ $informacion->HoraR }}</td>
                <td>{{ $informacion->Lugar }}</td>
                <td>{{ $informacion->documento }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
