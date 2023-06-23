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
<script src="https://unpkg.com/autonumeric@4.2.0/dist/autoNumeric.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new AutoNumeric('#contratacion', {
            currencySymbol: '₡',
            digitGroupSeparator: ',',
            decimalCharacter: '.',
            decimalPlaces: 2,
            minimumValue: '0.00'
        });
            new AutoNumeric('#valorAdqui', {
    currencySymbol: '₡',
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    decimalPlaces: 3,
    minimumValue: '0.00'
});

        new AutoNumeric('#valorHacienda', {
            currencySymbol: '₡',
            digitGroupSeparator: ',',
            decimalCharacter: '.',
            decimalPlaces: 2,
            minimumValue: '0.00'
        });
    });
</script>
<div class="box box-info padding-1">
    <div class="box-body">
        <!-- Primera parte del formulario -->
        <div class="card" id="parte1">
            <div class="card-body">
            <a id="primera-parte"></a>
                <!-- Campos de la primera parte del formulario -->
            
                <div class="form-group">
                    {{ Form::label('categoría') }}
                    {{ Form::select('categoria_id', $categorias, $unidade->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
                    {!! $errors->first('categoria_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tracción') }}
                    {{ Form::select('tracciones_id', $tracciones, $unidade->tracciones_id, ['class' => 'form-control' . ($errors->has('tracciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
                    {!! $errors->first('tracciones_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('combustible') }}
                    {{ Form::select('combustibles_id', $combustibles, $unidade->combustibles_id, ['class' => 'form-control' . ($errors->has('combustibles_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
                    {!! $errors->first('combustibles_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('estado') }}
                    {{ Form::select('estados_id', $estados, $unidade->estados_id, ['class' => 'form-control' . ($errors->has('estados_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
                    {!! $errors->first('estados_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                </div>
                <div class="form-group">
                  {{ Form::label('placa') }}
                  {{ Form::text('placa', (strpos($unidade->placa, 'MS-') !== false) ? $unidade->placa : 'MS-', ['id' => 'placa', 'name' => 'placa', 'class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa', 'pattern' => '^MS-\d{4}$']) }}
                  {!! $errors->first('placa', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('marca') }}
                    {{ Form::text('marca', $unidade->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
                    {!! $errors->first('marca', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                </div>
                <div class="form-group">
                {{ Form::label('modelo', 'Modelo') }}
                {{ Form::text('modelo', $unidade->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo', 'pattern' => '^[A-Z][a-zA-Z\s]*$', 'title' => 'Ingrese una sola palabra con la primera letra mayúscula', 'oninput' => 'validateFormat(this, /^[A-Z][a-zA-Z\s]*$/, "El modelo debe tener una sola palabra con la primera letra mayúscula.")']) }}
               <div id="modelo-error" class="invalid-feedback" style="display: none;"></div>
               </div>
              
               <br>
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
    {{ Form::label('estilo', 'Estilo') }}
    {{ Form::text('estilo', $unidade->estilo, ['class' => 'form-control' . ($errors->has('estilo') ? ' is-invalid' : ''), 'placeholder' => 'Estilo', 'pattern' => '^[A-Za-z0-9]+$']) }}
    {!! $errors->first('estilo', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>


                

               <div class="form-group">
                {{ Form::label('color') }}
                {{ Form::text('color', $unidade->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color', 'pattern' => '^[A-Z][a-zA-Z]+$']) }}
                {!! $errors->first('color', '<div class="invalid-feedback">Campo Obligatorio: debe comenzar con una letra mayúscula y solo puede contener letras</div>') !!}
               </div>

        <div class="form-group">
            {{ Form::label('año Fabricación') }}
            {{ Form::text('ayoFabricacion', $unidade->ayoFabricacion, ['class' => 'form-control' . ($errors->has('ayoFabricacion') ? ' is-invalid' : ''), 'placeholder' => 'Digite con números el año de fabricación', 'maxlength' => '4', 'pattern' => '\d{4}', 'title' => 'El año de fabricación debe ser un número de 4 dígitos']) }}
            {!! $errors->first('ayoFabricacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('contratación') }}
    {{ Form::text('contratacion', $unidade->contratacion, ['class' => 'form-control' . ($errors->has('contratacion') ? ' is-invalid' : ''), 'placeholder' => 'Digite la cantidad de la contratación en colones', 'pattern' => '^₡\d{1,3}(?:,\d{3})*(?:,\d{3})*(?:,\d{3})*(?:\.\d{2})?$', 'id' => 'contratacion']) }}
    {!! $errors->first('contratacion', '<div class="invalid-feedback">Campo Obligatorio: debe ser una cantidad válida en colones (Ejemplo: ₡25,000,000.00)</div>') !!}
</div>



<div class="form-group">
    {{ Form::label('valor Adquisitivo') }}
    {{ Form::text('valorAdqui', $unidade->valorAdqui, ['class' => 'form-control' . ($errors->has('valorAdqui') ? ' is-invalid' : ''), 'placeholder' => 'Digite la cantidad en colones', 'pattern' => '^₡\d{1,3}(?:,\d{3})*(?:\.\d+)?$', 'id' => 'valorAdqui']) }}
    {!! $errors->first('valorAdqui', '<div class="invalid-feedback">Campo Obligatorio: Solo se permiten cantidades de dinero en colones</div>') !!}
</div>



<div class="form-group">
    {{ Form::label('valor Hacienda') }}
    {{ Form::text('valorHacienda', $unidade->valorHacienda, ['class' => 'form-control' . ($errors->has('valorHacienda') ? ' is-invalid' : ''), 'placeholder' => 'Digite con número la cantidad', 'pattern' => '^\₡\d{1,3}(?:,\d{3})*(?:,\d{3})*(?:,\d{3})*(?:\.\d{2})?$', 'id' => 'valorHacienda']) }}
    {!! $errors->first('valorHacienda', '<div class="invalid-feedback">Campo Obligatorio: Solo se permiten cantidades de dinero en colones</div>') !!}
</div>


        <div class="form-group">
    {{ Form::label('RTV') }}
    {{ Form::date('RVT', $unidade->RVT, ['class' => 'form-control' . ($errors->has('RVT') ? ' is-invalid' : ''), 'placeholder' => 'Rvt', 'min' => date('Y-m-d')]) }}
    {!! $errors->first('RVT', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
      </div>

      <div class="form-group">
    {{ Form::label('descripción') }}
    {{ Form::text('descripcion', $unidade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción de la Unidad', 'pattern' => '^.+$']) }}
    {!! $errors->first('descripcion', '<div class="invalid-feedback">Campo Obligatorio: La descripción debe ser una cantidad corta.</div>') !!}
</div>




            
            </div>
 <!-- Botones para pasar a la siguiente parte o enviar el formulario -->
 <div class="box-footer mt-20">
    <button type="button" class="btn btn-danger" id="back-button">Atrás</button>
    <button type="submit" id="submit-button" class="btn btn-primary ml-2">Enviar</button>
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










