<div class="box box-info padding-1">
    <div class="box-body">
        
      
    <div class="form-group">
    {{ Form::label('Combustible') }}
    {{ Form::text('nombreCombustibles', $combustible->nombreCombustibles, ['class' => 'form-control' . ($errors->has('nombreCombustibles') ? ' is-invalid' : ''), 'placeholder' => 'Digite el tipo de combustible (Ejemplo: Combustible Super)', 'pattern' => '[A-Za-z ]+', 'title' => 'Solo se permiten letras']) }}
    {!! $errors->first('nombreCombustibles', '<div class="invalid-feedback">:message</div>') !!}
</div>



    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('combustibles.index') }}"> Atrás</a>

    </div>
</div>