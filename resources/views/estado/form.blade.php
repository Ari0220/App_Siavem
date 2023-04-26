<div class="box box-info padding-1">
    <div class="box-body">
     
        <div class="form-group">
            {{ Form::label('Estados: ') }}
            <select name="nombreEstados" id='nombreEstados' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Activo" {{ $estado->nombreEstados == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ $estado->nombreEstados == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
            {!! $errors->first('RTV', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('estados.index') }}"> Atrás</a>

    </div>
</div>