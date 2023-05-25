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
    </style>
</head>

<body>

    <h1>{{ $title }}</h1>
    <div class="date">{{ $date }}</div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>N</th>
                    <th>Placa</th>
                    <th>Taller</th>
                    <th>Fecha Mant.</th>
                    <th>Tipo Mante.</th>
                    <th>Kilometraje Actual</th>
                    <th>Prox. Servicio</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @php($count=1)
                @foreach ($info as $item)
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $item->unidade->placa }}</td>
                    <td>{{ $item->tallere->NombreTaller }}</td>
                    <td>{{ $item->FechaMant }}</td>
                    <td>{{ $item->tipoMante }}</td>
                    <td>{{ $item->Horimetro }}</td>
                    <td>{{ $item->ProximoSer }}</td>
                    <td>{{ $item->Monto }}</td>
                </tr>
                @php($count++)
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
