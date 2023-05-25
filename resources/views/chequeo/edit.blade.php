@extends('layouts.app')

@section('template_title')
    Update Chequeo
@endsection

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
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-******************" crossorigin="anonymous" />

@section('content')
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

</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-5">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('chequeos.update', $chequeo->idchequeos) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="box box-info padding-1">
    <div class="box-body">
        <!-- Primera parte del formulario -->
        <div class="card" id="parte1">
            <div class="card-body">
            <a id="primera-parte"></a>
                <!-- Campos de la primera parte del formulario -->
                <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade, $chequeo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('FechaChequeo', null, ['min' => \Carbon\Carbon::now()->format('Y-m-d'), 'class' => 'form-control' . ($errors->has('FechaChequeo') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeo']) }}
            {!! $errors->first('FechaChequeo', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::number('Kilometraje', $chequeo->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Digite en número el Kilometraje']) }}
            {!! $errors->first('Kilometraje', '<div class="invalid-feedback">ERROR: Uso de letras!</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Combustible: ') }}
            {{ Form::select('Combustible', ['' => 'Seleccione:', '0' => '0', '1/4' => '1/4', '1/2' => '1/2', 'FULL' => 'FULL'], $chequeo->Combustible, ['class' => 'form-control', 'id' => 'Combustible', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Combustible', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>
<br />
<h6 style="font-weight: bold;">Luces:</h6>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Baja: ') }}
            {{ Form::select('LuzBaja', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LuzBaja, ['class' => 'form-control', 'id' => 'LuzBaja', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LuzBaja', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Alta: ') }}
            {{ Form::select('LuzAlta', ['' => 'Seleccione:',  'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LuzAlta, ['class' => 'form-control', 'id' => 'LuzAlta', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LuzAlta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Marcha: ') }}
            {{ Form::select('LuzMarcha', ['' => 'Seleccione:',  'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LuzMarcha, ['class' => 'form-control', 'id' => 'LuzMarcha', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Interior: ') }}
            {{ Form::select('LuzInterior', ['' => 'Seleccione:',  'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LuzInterior, ['class' => 'form-control', 'id' => 'LuzInterior', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LuzInterior', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Freno: ') }}
            {{ Form::select('LuzFreno', ['' => 'Seleccione:',  'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LuzFreno, ['class' => 'form-control', 'id' => 'LuzFreno', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LuzFreno', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Intermitentes: ') }}
            {{ Form::select('Intermitentes', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Intermitentes, ['class' => 'form-control', 'id' => 'Intermitentes', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Intermitentes', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label(' Parking: ') }}
            {{ Form::select('LuzParking', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LuzParking, ['class' => 'form-control', 'id' => 'LuzParking', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LuzParking', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>

<br />
<h6 style="font-weight: bold;">Accesorios:</h6>
<div class="row">
    <div class="col">
    <div class="form-group">
    <label for="Alojenos">Alojenos:</label>
    {{ Form::select('Alojenos', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Alojenos, ['class' => 'form-control', 'id' => 'Alojenos', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Alojenos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
     </div>
    </div>
             
<div class="col">
   <div class="form-group">
    <label for="Escobillas">Escobillas:</label>
    {{ Form::select('Escobillas', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Escobillas, ['class' => 'form-control', 'id' => 'Escobillas', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Escobillas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
   </div>
     </div>

       <div class="col">
       <div class="form-group">
    <label for="Extintor">Extintor:</label>
    {{ Form::select('Extintor', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Extintor, ['class' => 'form-control', 'id' => 'Extintor', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Extintor', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
        </div>
         </div>
  

    <div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('Botiquin: ') }}
            {{ Form::select('Botiquin', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Botiquin, ['class' => 'form-control', 'id' => 'Botiquin', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Botiquin', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Triangulos: ') }}
            {{ Form::select('Triangulos', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Triangulos, ['class' => 'form-control', 'id' => 'Triangulos', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Triangulos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Cinturon: ') }}
            {{ Form::select('Cinturon', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Cinturon, ['class' => 'form-control', 'id' => 'Cinturon', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Cinturon', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('Puerta: ') }}
            {{ Form::select('ChapaPuerta', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->ChapaPuerta, ['class' => 'form-control', 'id' => 'ChapaPuerta', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('ChapaPuerta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Pito: ') }}
            {{ Form::select('Pito', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Pito, ['class' => 'form-control', 'id' => 'Pito', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Pito', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Parabrisas: ') }}
            {{ Form::select('Parabrisas', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Parabrisas, ['class' => 'form-control', 'id' => 'Parabrisas', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Parabrisas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>

                    
                    <div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('Vidrios Laterales: ') }}
            {{ Form::select('VidriosLaterales', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->VidriosLaterales, ['class' => 'form-control', 'id' => 'VidriosLaterales', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('VidriosLaterales', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Climatizacion: ') }}
            {{ Form::select('Climatizacion', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Climatizacion, ['class' => 'form-control', 'id' => 'Climatizacion', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Climatizacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Bateria: ') }}
            {{ Form::select('Bateria', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Bateria, ['class' => 'form-control', 'id' => 'Bateria', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Bateria', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('Nivel Refrigeracion: ') }}
            {{ Form::select('NivelRefrigeracion', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->NivelRefrigeracion, ['class' => 'form-control', 'id' => 'NivelRefrigeracion', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Nivel Aceite: ') }}
            {{ Form::select('NivelAceite', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->NivelAceite, ['class' => 'form-control', 'id' => 'NivelAceite', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('NivelAceite', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Alfombras: ') }}
            {{ Form::select('Alfombras', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Alfombras, ['class' => 'form-control', 'id' => 'Alfombras', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Alfombras', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::label('Radio: ') }}
    {{ Form::select('Radio', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Radio, ['class' => 'form-control', 'id' => 'Radio', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Radio', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
<br />

               <!-- Botón para ir al índice -->
               <a href="{{ route('chequeos.index') }}" class="btn btn-warning">
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
                <h6 style="font-weight: bold;">Asientos:</h6>
                <div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label(' Delanteros: ') }}
            {{ Form::select('AsientosD', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->AsientosD, ['class' => 'form-control', 'id' => 'AsientosD', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('AsientosD', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label(' Traseros: ') }}
            {{ Form::select('AsientosT', ['' => 'Seleccione:', 'Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->AsientosT, ['class' => 'form-control', 'id' => 'AsientosT', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('AsientosT', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>
<br />
<h6 style="font-weight: bold;">Documentacion:</h6>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('Permisos Circulacion: ') }}
            {{ Form::select('PermisosCirculacion', ['' => 'Seleccione:', 'Si' => 'Si', 'No' => 'No'], $chequeo->PermisosCirculacion, ['class' => 'form-control', 'id' => 'PermisosCirculacion', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('RTV: ') }}
            {{ Form::select('RTV', ['' => 'Seleccione:', 'Si' => 'Si', 'No' => 'No'], $chequeo->RTV, ['class' => 'form-control', 'id' => 'RTV', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('RTV', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('Titulo Propiedad: ') }}
            {{ Form::select('TituloPropiedad', ['' => 'Seleccione:', 'Si' => 'Si', 'No' => 'No'], $chequeo->TituloPropiedad, ['class' => 'form-control', 'id' => 'TituloPropiedad', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>
<br>
<h6 style="font-weight: bold;">Llantas:</h6>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label(' Delantera: ') }}
            {{ Form::select('LlantaDelantera', ['' => 'Seleccione:','Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LlantaDelantera, ['class' => 'form-control', 'id' => 'LlantaDelantera', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label(' Repuesto: ') }}
            {{ Form::select('LlantaRepuesto', ['' => 'Seleccione:','Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LlantaRepuesto, ['class' => 'form-control', 'id' => 'LlantaRepuesto', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LlantaRepuesto', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label(' Trasera: ') }}
            {{ Form::select('LlantaTrasera', ['' => 'Seleccione:','Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LlantaTrasera, ['class' => 'form-control', 'id' => 'LlantaTrasera', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
    <div class="form-group">
        {{ Form::label('Tuercas: ') }}
        {{ Form::select('Tuercas', ['' => 'Seleccione:','Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Tuercas, ['class' => 'form-control', 'id' => 'Tuercas', 'onchange' => 'cambioUnidad();', 'required']) }}
        {!! $errors->first('Tuercas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    </div>
</div>
<br>
<div class="col">
<div class="form-group">
    {{ Form::label('Espejo Retrovisor: ') }}
    {{ Form::select('EspejoRetrovisor', ['' => 'Seleccione:','Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->EspejoRetrovisor, ['class' => 'form-control', 'id' => 'EspejoRetrovisor', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('EspejoRetrovisor', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>

 </div>
     <br />
     <h6 style="font-weight: bold;">Herramientas:</h6>
<div class="row">
    <div class="col">
    <div class="form-group">
    {{ Form::label('Gata: ') }}
    {{ Form::select('Gata', ['Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Gata, ['class' => 'form-control', 'id' => 'Gata', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Gata', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
  </div>
      <br />
      <div class="col">
      <div class="form-group">
    {{ Form::label('Llave Rana: ') }}
    {{ Form::select('LlaveRana', ['Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->LlaveRana, ['class' => 'form-control', 'id' => 'LlaveRana', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('LlaveRana', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
</div>
<br>
<div class="col">
<div class="form-group">
    {{ Form::label('Lingas: ') }}
    {{ Form::select('Lingas', ['Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Lingas, ['class' => 'form-control', 'id' => 'Lingas', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Lingas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
</div>
</div>
<br>  
<div class="row">
<div class="col">
<div class="form-group">
    {{ Form::label('Juego Llaves: ') }}
    {{ Form::select('JuegoLlaves', ['Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->JuegoLlaves, ['class' => 'form-control', 'id' => 'JuegoLlaves', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('JuegoLlaves', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
</div>
<br>
<br>
<br>
<div class="col">
<div class="form-group">
    {{ Form::label('Bumper: ') }}
    {{ Form::select('Bumper', ['Bueno' => 'Bueno', 'Regular' => 'Regular', 'Malo' => 'Malo'], $chequeo->Bumper, ['class' => 'form-control', 'id' => 'Bumper', 'onchange' => 'cambioUnidad();', 'required']) }}
    {!! $errors->first('Bumper', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    </div>
        </div>
    </div>
</div>

</div>
<br>
     @if ($chequeo->documentoEnvioC == null)
        <div class="form-group">
            {{ Form::label('Documento Envio') }}
            {{ Form::file('documentoEnvioC', ['class' => 'form-control' . ($errors->has('documentoEnvioC') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoEnvioC', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        @endif

        <div class="form-group">
            {{ Form::label('Documento Recibido') }}
            {{ Form::file('documentoRecibidoC', ['class' => 'form-control' . ($errors->has('documentoRecibidoC') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoRecibidoC', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
      
        <br />
<div class="box-footer mt-20">
    <button type="button" class="btn btn-danger" id="back-button">Atrás</button>
    <button type="submit" id="submit-button" class="btn btn-primary ml-2">Enviar</button>
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

