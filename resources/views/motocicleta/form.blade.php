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
<br>

</div>
<br>
 <!-- Botones para pasar a la siguiente parte o enviar el formulario -->
 <div class="box-footer mt-20">
    <button type="button" class="btn btn-danger" id="back-button">Atrás</button>
    <button type="submit" id="submit-button" class="btn btn-primary ml-2">Enviar</button>
</div>
<br>

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



