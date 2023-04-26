<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('Rol') }}
            {{ Form::text('NombreRol', $role->NombreRol, ['class' => 'form-control' . ($errors->has('NombreRol') ? ' is-invalid' : ''), 'placeholder' => 'Digite el nombre del rol']) }}
            {!! $errors->first('NombreRol', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('roles.index') }}"> Atrás</a>

    </div>
</div>