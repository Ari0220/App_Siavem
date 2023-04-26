<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('Tracción') }}
            {{ Form::text('nombreTraccion', $traccione->nombreTraccion, ['class' => 'form-control' . ($errors->has('nombreTraccion') ? ' is-invalid' : ''), 'placeholder' => 'Digite el tipo de tracción']) }}
            {!! $errors->first('nombreTraccion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('tracciones.index') }}"> Atrás</a>

    </div>
</div>