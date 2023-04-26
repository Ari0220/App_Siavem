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
    @php($count=1)
    @foreach ($info as $unidade)
        <div class="mini_tabla">
            <h3>Unidad  {{$count}}</h3>
            <div class="tittle">
                <span>Categoría</span>
            </div>
            <div class="description">
                <span>{{ $unidade->categoria->nombre }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Tracción</span>
            </div>
            <div class="description">
                <span>{{ $unidade->traccione->nombreTraccion }}</span>
            </div>
            <!---->
            <div class="tittle">
                <span>Combustible</span>
            </div>
            <div class="description">
                <span>{{ $unidade->combustible->nombreCombustibles }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Estado</span>
            </div>
            <div class="description">
                <span>{{ $unidade->combustible->nombreEstados }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Placa</span>
            </div>
            <div class="description">
                <span>{{ $unidade->placa }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Marca</span>
            </div>
            <div class="description">
                <span>{{ $unidade->marca }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Modelo</span>
            </div>
            <div class="description">
                <span>{{ $unidade->modelo }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Estilo</span>
            </div>
            <div class="description">
                <span>{{ $unidade->estilo }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Color</span>
            </div>
            <div class="description">
                <span>{{ $unidade->color }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Año de fabricación</span>
            </div>
            <div class="description">
                <span>{{ $unidade->ayoFabricacion }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Contratación</span>
            </div>
            <div class="description">
                <span>{{ $unidade->contratacion }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Valor Adquisitivo</span>
            </div>
            <div class="description">
                <span>{{ $unidade->valorAdqui }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Valor Hacienda</span>
            </div>
            <div class="description">
                <span>{{ $unidade->valorHacienda }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>RTV</span>
            </div>
            <div class="description">
                <span>{{ $unidade->RVT }}</span>
            </div>
              <!---->
              <div class="tittle">
                <span>Descripción</span>
            </div>
            <div class="description">
                <span>{{ $unidade->descripcion }}</span>
            </div>
        </div>
        @php($count++)
    @endforeach

</body>

</html>
