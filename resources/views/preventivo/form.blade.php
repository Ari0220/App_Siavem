<script src="https://unpkg.com/autonumeric@4.2.0/dist/autoNumeric.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new AutoNumeric('#Monto', {
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
        
    <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id',$unidade ,$preventivo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('taller_id', $talleres ,$preventivo->taller_id, ['class' => 'form-control' . ($errors->has('taller_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('taller_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('Fecha Mantenimiento') }}
    {{ Form::date('FechaMant', \Carbon\Carbon::now()->format('Y-m-d'), [
        'class' => 'form-control' . ($errors->has('FechaMant') ? ' is-invalid' : ''),
        'placeholder' => 'Digite la fecha de mantenimiento',
        'id' => 'FechaMant',
        'min' => \Carbon\Carbon::now()->format('Y-m-d')
    ]) }}
    {!! $errors->first('FechaMant', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>


        <div class="form-group">
           {{ Form::label('tipo Mantenimiento') }}
           {{ Form::text('tipoMante', $preventivo->tipoMante, [
           'class' => 'form-control' . ($errors->has('tipoMante') ? ' is-invalid' : ''),
           'placeholder' => 'Digite el tipo de mantenimiento',
           'pattern' => '^[A-Za-z\s]+$' // Expresión regular para permitir solo letras y espacios
            ]) }}
            {!! $errors->first('tipoMante', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

        <div class="form-group">
          {{ Form::label('Kilometraje Actual') }}
          {{ Form::text('Horimetro', $preventivo->Horimetro, [
          'class' => 'form-control' . ($errors->has('Horimetro') ? ' is-invalid' : ''),
          'placeholder' => 'Digite el Horímetro',
          'pattern' => '^[0-9]+$' // Expresión regular para permitir solo números
          ]) }}
          {!! $errors->first('Horimetro', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
       </div>

       <div class="form-group">
         {{ Form::label('Proximo Servicio (Kilometraje)') }}
         {{ Form::text('ProximoSer', $preventivo->ProximoSer, [
         'class' => 'form-control' . ($errors->has('ProximoSer') ? ' is-invalid' : ''),
         'placeholder' => 'Digite el próximo servicio',
         'pattern' => '^[0-9]+$' // Expresión regular para permitir solo números
         ]) }}
         {!! $errors->first('ProximoSer', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
      </div>
      
      <div class="form-group">
    {{ Form::label('Monto') }}
    {{ Form::text('Monto', $preventivo->Monto, [
        'class' => 'form-control' . ($errors->has('Monto') ? ' is-invalid' : ''),
        'placeholder' => 'Digite el monto'
    ]) }}
    {!! $errors->first('Monto', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>

        </br>
    <div class="box-footer mt20">
                <a class="btn btn-danger" href="{{ route('preventivos.index') }}"> Atrás</a>
<button type="submit" class="btn btn-primary">Enviar</button>

    </div>
</div>