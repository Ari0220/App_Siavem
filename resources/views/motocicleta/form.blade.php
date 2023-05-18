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
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade, $motocicleta->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        </div>
       <div style="float:right; width:50%;">
    <div class="form-group">
        {{ Form::label('Fecha') }}
        {{ Form::date('FechaChequeoM', null, ['min' => \Carbon\Carbon::now()->format('Y-m-d'), 'class' => 'form-control' . ($errors->has('FechaChequeoM') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeom']) }}
        {!! $errors->first('FechaChequeoM', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    </div>
  
    <div class="form-group">
        {{ Form::label('Kilometraje') }}
        {{ Form::number('Kilometraje', $motocicleta->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
        {!! $errors->first('Kilometraje', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    </div>
</div>
      
        <br />
       
        <div class="form-group">
            {{ Form::label('Combustible: ') }}
            <select name="Combustible" id='Combustible' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="0" {{ $motocicleta->Combustible == 0 ? 'selected' : '' }}>0</option>
                <option value="1/4" {{ $motocicleta->Combustible == '1/4' ? 'selected' : '' }}>1/4</option>
                <option value="1/2" {{ $motocicleta->Combustible == '1/2' ? 'selected' : '' }}>1/2</option>
                <option value="FULL" {{ $motocicleta->Combustible == 'FULL' ? 'selected' : '' }}>FULL</option>
            </select>
            {!! $errors->first('Combustible', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
     
        <br />
        <div class="form-group">
            {{ Form::label('Luz Baja: ') }}
            <select name="LuzBaja" id='LuzBaja' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LuzBaja == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LuzBaja == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->LuzBaja == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LuzBaja', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Luz Alta: ') }}
            <select name="LuzAlta" id='LuzAlta' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LuzAlta == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LuzAlta == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->LuzAlta == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LuzAlta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Luz Marcha: ') }}
            <select name="LuzMarcha" id='LuzMarcha' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LuzMarcha == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LuzMarcha == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->LuzMarcha == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
    
        </div>
       
               <!-- Botón para ir al índice -->
               <a href="{{ route('unidades.index') }}" class="btn btn-warning">
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
        <div class="form-group">
            {{ Form::label('Pito: ') }}
            <select name="Pito" id='Pito' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->Pito == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->Pito == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->Pito == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('Pito', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('Bateria: ') }}
            <select name="Bateria" id='Bateria' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->Bateria == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->Bateria == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->Bateria == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('Bateria', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Nivel Refrigeracion: ') }}
            <select name="NivelRefrigeracion" id='NivelRefrigeracion' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->NivelRefrigeracion == 'Bueno' ? 'selected' : '' }}>Bueno
                </option>
                <option value="Regular"{{ $motocicleta->NivelRefrigeracion == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->NivelRefrigeracion == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Nivel Aceite: ') }}
            <select name="NivelAceite" id='NivelAceite' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->NivelAceite == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->NivelAceite == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->NivelAceite == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('NivelAceite', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Asientos: ') }}
            <select name="Asientos" id='Asientos' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->Asientos == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->Asientos == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->Asientos == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('Asientos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Permisos Circulacion: ') }}
            <select name="PermisosCirculacion" id='PermisosCirculacion' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Si" {{ $motocicleta->PermisosCirculacion == 'Si' ? 'selected' : '' }}>Si</option>
                <option value="No" {{ $motocicleta->PermisosCirculacion == 'No' ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('RTV: ') }}
            <select name="RTV" id='RTV' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Si" {{ $motocicleta->RTV == 'Si' ? 'selected' : '' }}>Si</option>
                <option value="No" {{ $motocicleta->RTV == 'No' ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('RTV', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Titulo Propiedad: ') }}
            <select name="TituloPropiedad" id='TituloPropiedad' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Si" {{ $motocicleta->TituloPropiedad == 'Si' ? 'selected' : '' }}>Si</option>
                <option value="No" {{ $motocicleta->TituloPropiedad == 'No' ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Llanta Delantera: ') }}
            <select name="LlantaDelantera" id='LlantaDelantera' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LlantaDelantera == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LlantaDelantera == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->LlantaDelantera == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('LlantaTrasera') }}
            <select name="LlantaTrasera" id='LlantaTrasera' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LlantaTrasera == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LlantaTrasera == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->LlantaTrasera == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor Derecho: ') }}
            <select name="EspejoRetrovisorD" id='EspejoRetrovisorD' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->EspejoRetrovisorD == 'Bueno' ? 'selected' : '' }}>Bueno
                </option>
                <option value="Regular"{{ $motocicleta->EspejoRetrovisorD == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->EspejoRetrovisorD == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('EspejoRetrovisorD', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor Izquierdo: ') }}
            <select name="EspejoRetrovisori" id='EspejoRetrovisori' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->EspejoRetrovisorD == 'Bueno' ? 'selected' : '' }}>Bueno
                </option>
                <option value="Regular"{{ $motocicleta->EspejoRetrovisorD == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->EspejoRetrovisorD == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('EspejoRetrovisori', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
         
        </div>
</div>
 <!-- Botones para pasar a la siguiente parte o enviar el formulario -->
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
