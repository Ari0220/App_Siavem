<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::select('depar_id', $departameto,$users->depar_id, ['class' => 'form-control' . ($errors->has('depar_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('depar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rol') }}
            {{ Form::select('rol', $rol,$users->rol_id, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
   </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('users.index') }}"> Atras</a>

    </div>
</div>