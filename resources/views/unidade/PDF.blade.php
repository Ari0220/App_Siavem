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
    <img src="images\Logounidad.png" alt="Logo">
</head>

<body>


<h1>{{ $title }}</h1>
    <div class="date">{{ $date }}</div>
</div>
<div class="table-container">
    <table>
        <thead>
            <tr>
           
                <th>N</th>
                <th>Categoría</th>
                <th>Tracción</th>
                <th>Combustible</th>
                <th>Estado</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
            </tr>
        </thead>
        <tbody>
            @php($count=1)
            @foreach ($info as $unidade)
            <tr>
                <td> {{$count}}</td>
                <td>{{ $unidade->categoria->nombre }}</td>
                <td>{{ $unidade->traccione->nombreTraccion }}</td>
                <td>{{ $unidade->combustible->nombreCombustibles }}</td>
                <td>{{ $unidade->estado->nombreEstados }}</td>
                <td>{{ $unidade->placa }}</td>
                <td>{{ $unidade->marca }}</td>
                <td>{{ $unidade->modelo }}</td>
            </tr>
            @php($count++)
            @endforeach
        </tbody>
    </table>
</div>

</body>

</html>
