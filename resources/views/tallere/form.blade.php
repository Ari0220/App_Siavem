<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    {{ Form::label('Código de Contratación') }}
    {{ Form::text('Contratacion', $tallere->Contratacion, [
        'class' => 'form-control' . ($errors->has('Contratacion') ? ' is-invalid' : ''),
        'placeholder' => 'Digite el código de contratación',
        'pattern' => '^([A-Z0-9]{6}-){2}[A-Z0-9]{10}$',
        'title' => 'El código de contratación debe seguir el formato: 65DF51-542596-0525681562.'
    ]) }}
    {!! $errors->first('Contratacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>



   <div class="form-group">
    {{ Form::label('Nombre Taller') }}
    {{ Form::text('NombreTaller', $tallere->NombreTaller, ['class' => 'form-control' . ($errors->has('NombreTaller') ? ' is-invalid' : ''), 'placeholder' => 'Digite el nombre del taller', 'pattern' => '^[A-Za-z\s]+$']) }}
    {!! $errors->first('NombreTaller', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    <small class="text-muted">El nombre del taller no debe contener números ni caracteres especiales.</small>
   </div>
   <div class="form-group">
    {{ Form::label('Dirección') }}
    {{ Form::text('DireccionTaller', $tallere->DireccionTaller, [
        'class' => 'form-control' . ($errors->has('DireccionTaller') ? ' is-invalid' : ''),
        'placeholder' => 'Digite la dirección del taller',
        'pattern' => '^[A-Za-z0-9][A-Za-z0-9\s]*$',
        'title' => 'La dirección debe comenzar con una letra mayúscula, minúscula o número.'
    ]) }}
    {!! $errors->first('DireccionTaller', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>


<div class="form-group">
   {{ Form::label('Descripción de la Especialidad') }}
   {{ Form::text('DescripcionEsp', $tallere->DescripcionEsp, [
       'class' => 'form-control' . ($errors->has('DescripcionEsp') ? ' is-invalid' : ''),
       'placeholder' => 'Digite la descripción de la especialidad',
       'pattern' => '^[A-Za-zÁÉÍÓÚáéíóú\s]+$'
   ]) }}
   {!! $errors->first('DescripcionEsp', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
   <small class="text-muted">La descripción de la especialidad no debe contener números ni caracteres especiales.</small>
</div>


        <div class="form-group">
            {{ Form::label('Fecha Vencimiento Contrato') }}
            {{ Form::date('FechaVenTaller', $tallere->FechaVenTaller, ['class' => 'form-control' . ($errors->has('FechaVenTaller') ? ' is-invalid' : ''), 'placeholder' => 'Digite la fecha de vencimiento del contrato']) }}
            {!! $errors->first('FechaVenTaller', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Documento Licitacion PDF') }}
            {{ Form::file('documento', ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

    </div>
    </br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('talleres.index') }}"> Atrás</a>

    </div>
</div>