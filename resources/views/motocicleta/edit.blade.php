@extends('layouts.app')

@section('template_title')
    Update Motocicleta
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-******************" crossorigin="anonymous" />

@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>


</head>

    <style>
        .invalid-feedback {
    display: none;
    color: red;
    font-size: 0.8rem;
    margin-top: 0.25rem;
}

    </style>

</head>

    <style>
        .invalid-feedback {
    display: none;
    color: red;
    font-size: 0.8rem;
    margin-top: 0.25rem;
}
</style>
<style>
    .row{
        justify-content: center;
    }
    .card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.card {
  box-sizing: border-box;
  width: auto;
  height: auto;
  background: hsl(105, 9%, 91%);
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  backdrop-filter: blur(6px);
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
  color: black;
  position: relative; /* Agregado */
}

.card:hover {
  border: 1px solid black;
  transform: scale(1.05);
}

.card:active {
  transform: scale(0.95) rotateZ(1.7deg);
}

.float-right {
  position: absolute;
  top: 2px;
  right: 0;
  margin-right: 10px;
}

@media screen and (max-width: 600px) {
  .card {
    width: 90vw;
    height: auto;
  }
  .btno {
 --color: #00A97F;
 --color2: rgb(10, 25, 30);
 padding: 0.8em 1.75em;
 background-color: transparent;
 border-radius: 6px;
 border: .3px solid var(--color);
 transition: .5s;
 position: relative;
 overflow: hidden;
 cursor: pointer;
 z-index: 1;
 font-weight: 300;
 font-size: 17px;
 font-family: 'EB Garamond', serif;
 text-transform: uppercase;
 color: var(--color);
}

.btno::after, .btno::before {
 content: '';
 display: block;
 height: 100%;
 width: 100%;
 transform: skew(90deg) translate(-50%, -50%);
 position: absolute;
 inset: 50%;
 left: 25%;
 z-index: -1;
 transition: .5s ease-out;
 background-color: var(--color);
}

.btno::before {
 top: -50%;
 left: -25%;
 transform: skew(90deg) rotate(180deg) translate(-50%, -50%);
}

.btno:hover::before {
 transform: skew(45deg) rotate(180deg) translate(-50%, -50%);
}

.btno:hover::after {
 transform: skew(45deg) translate(-50%, -50%);
}

.btno:hover {
 color: var(--color2);
}

.btno:active {
 filter: brightness(.7);
 transform: scale(.98);
}
}
.btn-conteiner {
  display: flex;
  justify-content: center;
  --color-text: #ffffff;
  --color-background: hsla(108, 100%, 20%, 0.502);
  --color-outline:#ffffff;
  --color-shadow: #ffffff;
}

.btn-content {
  display: flex;
  align-items: center;
  padding: 5px 10px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 15px;
  color: var(--color-text);
  background: var(--color-background);
  transition: 1s;
  border-radius: 30px;
  box-shadow: 0 0 0.2em 0 var(--color-background);
}

.btn-content:hover, .btn-content:focus {
  transition: 0.5s;
  -webkit-animation: btn-content 1s;
  animation: btn-content 1s;
  outline: 0.1em solid transparent;
  outline-offset: 0.2em;
  box-shadow: 0 0 0.4em 0 var(--color-background);
}

.btn-content .icon-arrow {
  transition: 0.5s;
  margin-right: 0px;
  transform: scale(0.6);
}

.btn-content:hover .icon-arrow {
  transition: 0.5s;
  margin-right: 25px;
}

.icon-arrow {
  width: 15px;
  margin-left: 15px;
  position: relative;
  top: 6%;
}
  
/* SVG */
#arrow-icon-one {
  transition: 0.4s;
  transform: translateX(-60%);
}

#arrow-icon-two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.btn-content:hover #arrow-icon-three {
  animation: color_anim 1s infinite 0.2s;
}

.btn-content:hover #arrow-icon-one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.btn-content:hover #arrow-icon-two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */
@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: var(--color-background);
  }

  100% {
    fill: white;
  }
}

/* Button animations */
@-webkit-keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}

@keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card">
                   
                    <div class="card-body">
                        <form method="POST" action="{{ route('motocicletas.update', $motocicleta->idMotocicleta) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                          
                            <div class="box box-info padding-1">
    <div class="box-body">
        <!-- Primera parte del formulario -->
        <div class="card" id="parte1">
            <div class="card-body">
            <a id="primera-parte"></a>
                <!-- Campos de la primera parte del formulario -->
                <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('Placa') }}
                {{ Form::select('unidad_id', $unidade, $motocicleta->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
                {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('Fecha') }}
                {{ Form::date('FechaChequeoM', null, ['min' => \Carbon\Carbon::now()->format('Y-m-d'), 'class' => 'form-control' . ($errors->has('FechaChequeoM') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeom']) }}
                {!! $errors->first('FechaChequeoM', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('Kilometraje') }}
                {{ Form::number('Kilometraje', $motocicleta->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
                {!! $errors->first('Kilometraje', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Combustible">Combustible:</label>
                {{ Form::select('Combustible', ['' => 'Seleccione:', '0' => '0', '1/4' => '1/4', '1/2' => '1/2', 'FULL' => 'FULL'], $motocicleta->Combustible, ['class' => 'form-control', 'id' => 'Combustible', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('Combustible', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
</div>
<br>


      
       <h6 style="font-weight: bold;">Luces:</h6>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="LuzBaja">Baja:</label>
                {{ Form::select('LuzBaja', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->LuzBaja, ['class' => 'form-control', 'id' => 'LuzBaja', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('LuzBaja', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="LuzAlta">Alta:</label>
                {{ Form::select('LuzAlta', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->LuzAlta, ['class' => 'form-control', 'id' => 'LuzAlta', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('LuzAlta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="LuzMarcha">Marcha:</label>
                {{ Form::select('LuzMarcha', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->LuzMarcha, ['class' => 'form-control', 'id' => 'LuzMarcha', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
</div>

<br>
<h6 style="font-weight: bold;">Accesorios:</h6>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="Pito">Pito:</label>
                {{ Form::select('Pito', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->Pito, ['class' => 'form-control', 'id' => 'Pito', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('Pito', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="Bateria">Bateria:</label>
                {{ Form::select('Bateria', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->Bateria, ['class' => 'form-control', 'id' => 'Bateria', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('Bateria', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">        
                <label for="NivelRefrigeracion">Refrigeracion:</label>
                {{ Form::select('NivelRefrigeracion', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->NivelRefrigeracion, ['class' => 'form-control', 'id' => 'NivelRefrigeracion', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">   
                <label for="NivelAceite">NivelAceite:</label>
                {{ Form::select('NivelAceite', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->NivelAceite, ['class' => 'form-control', 'id' => 'NivelAceite', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('NivelAceite', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">   
                <label for="Asientos">Asientos:</label>
                {{ Form::select('Asientos', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->Asientos, ['class' => 'form-control', 'id' => 'Asientos', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('Asientos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
</div>
<br>


               <!-- Botón para ir al índice -->
               <a href="{{ route('motocicletas.index') }}" class="btn btn-warning">
                  <i class="fa fa-home"></i> 
                </a>
    <!-- Botón para pasar a la siguiente parte del formulario -->
                <button type="button" id="next-button" class="btn btn-primary">Siguiente</button>
            </div>                          
        </div>
        <!-- Segunda parte del formulario -->
        <div class="card" id="parte2" style="display: none;">
            <div class="card-body">
                <!-- Campos de la segunda parte del formulario -->
                <h6 style="font-weight: bold;">Documentacion:</h6>
                <div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="PermisosCirculacion">Permisos Circulacion:</label>
                {{ Form::select('PermisosCirculacion', ['' => 'Seleccione:', 'Si' => 'Si', 'No' => 'No'], $motocicleta->PermisosCirculacion, ['class' => 'form-control', 'id' => 'PermisosCirculacion', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="RTV">RTV:</label>
                {{ Form::select('RTV', ['' => 'Seleccione:', 'Si' => 'Si', 'No' => 'No'], $motocicleta->RTV, ['class' => 'form-control', 'id' => 'RTV', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('RTV', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="TituloPropiedad">Titulo Propiedad:</label>
                {{ Form::select('TituloPropiedad', ['' => 'Seleccione:', 'Si' => 'Si', 'No' => 'No'], $motocicleta->TituloPropiedad, ['class' => 'form-control', 'id' => 'TituloPropiedad', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
</div>
<br>
<h6 style="font-weight: bold;">Llantas:</h6>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="LlantaDelantera">Llanta Delantera:</label>
                {{ Form::select('LlantaDelantera', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->LlantaDelantera, ['class' => 'form-control', 'id' => 'LlantaDelantera', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="LlantaTrasera">Llanta Trasera:</label>
                {{ Form::select('LlantaTrasera', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->LlantaTrasera, ['class' => 'form-control', 'id' => 'LlantaTrasera', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
</div>
<br>
<h6 style="font-weight: bold;">Espejos:</h6>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="EspejoRetrovisorD">Espejo Retrovisor Derecho:</label>
                {{ Form::select('EspejoRetrovisorD', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->EspejoRetrovisorD, ['class' => 'form-control', 'id' => 'EspejoRetrovisorD', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('EspejoRetrovisorD', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="EspejoRetrovisori">Espejo Retrovisor Izquierdo:</label>
                {{ Form::select('EspejoRetrovisori', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $motocicleta->EspejoRetrovisori, ['class' => 'form-control', 'id' => 'EspejoRetrovisori', 'onchange' => 'cambioUnidad();', 'required']) }}
                {!! $errors->first('EspejoRetrovisori', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
        </div>
    </div>
</div>

</div>
<br>
        @if ($motocicleta->documentoEnvio == null)
        <br>
        <div class="form-group">
            {{ Form::label('Documento Envio') }}
            {{ Form::file('documentoEnvio', ['class' => 'form-control' . ($errors->has('documentoEnvio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoEnvio', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        @endif

        <div class="form-group">
            {{ Form::label('Documento Recibido') }}
            {{ Form::file('documentoRecibido', ['class' => 'form-control' . ($errors->has('documentoRecibido') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoRecibido', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br />


            <!-- Botones para pasar a la siguiente parte o enviar el formulario -->
 <div class="box-footer mt-20">
    <button type="button" class="btn btn-danger" id="back-button">Atrás</button>
    <button type="submit" id="submit-button" class="btn btn-primary ml-2">Enviar</button>
</div>  

    </div>

 
            </div>

        </div>       

        </div>
    </div>
</div>

<script>
    // Obtén referencias a los elementos del DOM
    const parte1 = document.getElementById("parte1");
    const parte2 = document.getElementById("parte2");
    const nextButton = document.getElementById("next-button");
    const submitButton = document.getElementById("submit-button");
    const backButton = document.getElementById("back-button");

 

    // Agrega un evento al botón "Siguiente"
    nextButton.addEventListener("click", function() {
        parte1.style.display = "none";
        parte2.style.display = "block";
        
  });
    // Agrega un evento al botón "Atrás"
    backButton.addEventListener("click", function() {
        parte2.style.display = "none";
        parte1.style.display = "block";
       
    });

</script>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
