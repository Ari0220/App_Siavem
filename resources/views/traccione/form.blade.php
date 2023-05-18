<div class="box box-info padding-1">
    <div class="box-body">
        
       
    <div class="form-group">
    {{ Form::label('Tracción') }}
    {{ Form::text('nombreTraccion', $traccione->nombreTraccion, ['class' => 'form-control' . ($errors->has('nombreTraccion') ? ' is-invalid' : ''), 'placeholder' => 'Digite el tipo de tracción', 'pattern' => '[A-Z0-9]{2,3}4?[A-Z0-9]{0,2}', 'title' => 'Ingrese 3 caracteres (letras o números) seguidos opcionalmente por un 4 y 0 a 2 caracteres más.']) }}
    {!! $errors->first('nombreTraccion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('tracciones.index') }}"> Atrás</a>

    </div>
</div>