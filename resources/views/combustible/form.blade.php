<div class="box box-info padding-1">
    <div class="box-body">
        
      
        <div class="form-group">
            {{ Form::label('Combustible') }}
            {{ Form::text('nombreCombustibles', $combustible->nombreCombustibles, ['class' => 'form-control' . ($errors->has('nombreCombustibles') ? ' is-invalid' : ''), 'placeholder' => 'Digite el tipo de combustible']) }}
            {!! $errors->first('nombreCombustibles', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('combustibles.index') }}"> Atrás</a>

    </div>
</div>