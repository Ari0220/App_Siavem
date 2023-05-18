<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    {{ Form::label('Tipo Licencia') }}
    {{ Form::text('nombreTL', $tlicencia->nombreTL, ['class' => 'form-control' . ($errors->has('nombreTL') ? ' is-invalid' : ''), 'placeholder' => 'Escriba tipo licencia', 'pattern' => '[A-Z][0-9]', 'title' => 'El tipo de licencia debe tener una letra en mayúscula y un número']) }}
    {!! $errors->first('nombreTL', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>




    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('tlicencias.index') }}"> Atrás</a>

    </div>
</div>