<div class="box box-info padding-1">
    <div class="box-body">
        
      
    <div class="form-group">
    {{ Form::label('nombre Departamento') }}
    {{ Form::text('nombreDepa', ucfirst(strtolower($departamento->nombreDepa)), ['class' => 'form-control' . ($errors->has('nombreDepa') ? ' is-invalid' : ''), 'placeholder' => 'Digite el nombre del departamento', 'pattern' => '^[A-Z][a-záéíóúñ]+(\s+[A-Z][a-záéíóúñ]+)*$']) }}
    {!! $errors->first('nombreDepa', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>




    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('departamentos.index') }}"> Atrás</a>

    </div>
</div>