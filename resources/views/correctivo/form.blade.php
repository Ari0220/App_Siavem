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
            {{ Form::select('unidad_id', $unidade , $correctivo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('taller_id',$talleres ,  $correctivo->taller_id, ['class' => 'form-control' . ($errors->has('taller_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
            {!! $errors->first('taller_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
         {{ Form::label('Fecha Salida') }}
         {{ Form::date('FechaSalida', $correctivo->FechaSalida, ['class' => 'form-control' . ($errors->has('FechaSalida') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de salida', 'min' => \Carbon\Carbon::now()->format('Y-m-d')]) }}
         {!! $errors->first('FechaSalida', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

        <div class="form-group">
         {{ Form::label('Fecha Reingreso') }}
         {{ Form::date('FechaReingreso', $correctivo->FechaReingreso, ['class' => 'form-control' . ($errors->has('FechaReingreso') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de ingreso', 'min' => \Carbon\Carbon::now()->format('Y-m-d')]) }}
         {!! $errors->first('FechaReingreso', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

        <div class="form-group">
    {{ Form::label('Kilometraje Actual') }}
    {{ Form::text('Horimetro', $correctivo->Horimetro, [
        'class' => 'form-control' . ($errors->has('Horimetro') ? ' is-invalid' : ''),
        'placeholder' => 'Digite el horimetro',
        'pattern' => '[0-9]+', // Expresión regular para permitir solo valores numéricos
        'title' => 'Ingrese solo valores numéricos'
    ]) }}
    @if($errors->has('Horimetro'))
        <div class="invalid-feedback">
            {{ $errors->first('Horimetro') }}
        </div>
    
    @endif
</div>


        <div class="form-group">
    {{ Form::label('Detalle') }}
    {{ Form::text('Detalle', $correctivo->Detalle, [
        'class' => 'form-control' . ($errors->has('Detalle') ? ' is-invalid' : ''),
        'placeholder' => 'Digite el detalle',
        'pattern' => '[A-Za-z\s]+', // Expresión regular para permitir solo letras y espacios
        'title' => 'Ingrese solo letras y espacios'
    ]) }}
    @if($errors->has('Detalle'))
        <div class="invalid-feedback">
            {{ $errors->first('Detalle') }}
        </div>
   
    @endif
</div>

<div class="form-group">
    <label for="Monto">Montó</label>
    <input type="text" name="Monto" value="{{ $correctivo->Monto }}" class="form-control" id="Monto" placeholder="Digite el monto">
</div>

        </br>
    <div class="box-footer mt20">
            <a class="btn btn-danger" href="{{ route('correctivos.index') }}"> Atrás</a>
    <button type="submit" class="btn btn-primary">Enviar</button>

    </div>
</div>