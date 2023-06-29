<div class="box box-info padding-1">
    <div class="box-body">
        
      
    <div class="form-group">
            {{ Form::label('departamento') }}
            {{ Form::select('departamento_id',$departamento,$empleado->departamento_id, ['class' => 'form-control' . ($errors->has('departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('departamento_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puesto') }}
            {{ Form::text('Puesto', ucfirst(strtolower($empleado->Puesto)), ['class' => 'form-control' . ($errors->has('Puesto') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre del puesto', 'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+']) }}
            {!! $errors->first('Puesto', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
         </div>
        
         <div class="form-group">
         {{ Form::label('Nombre') }}
         {{ Form::text('NombreEmple', ucfirst(strtolower($empleado->NombreEmple)), ['class' => 'form-control' . ($errors->has('NombreEmple') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre con la primera letra en mayúscula', 'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+']) }}
         {!! $errors->first('NombreEmple', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Primer Apellido') }}
            {{ Form::text('Apellido1', $empleado->Apellido1, ['class' => 'form-control' . ($errors->has('Apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Digite su primer apellido']) }}
            {!! $errors->first('Apellido1', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Apellido') }}
            {{ Form::text('Apellido2', $empleado->Apellido2, ['class' => 'form-control' . ($errors->has('Apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Digite su segundo apellido', 'pattern' => '[A-Za-záéíóúÁÉÍÓÚñÑ\s]+']) }}
            {!! $errors->first('Apellido2', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Fecha Nacimiento') }}
            {{ Form::date('FechaNacimiento', $empleado->FechaNacimiento, ['class' => 'form-control' . ($errors->has('FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('FechaNacimiento', '<div class="invalid-feedback">Debes ser mayor de edad para registrarte.</div>') !!}
        </div>
        <div class="form-group">
      {{ Form::label('Cédula nacional / DIMEX') }}
      {{ Form::text('Cedula', $empleado->Cedula, [
        'class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''),
        'placeholder' => 'Digite su cédula en numeros',
        'maxlength' => '12',
        'pattern' => '^[0-9]{1,12}$',
        'title' => 'La cédula debe contener solo números y tener una longitud máxima de 12 dígitos'
       ]) }}
       {!! $errors->first('Cedula', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
      </div>
      <div class="form-group">
    {{ Form::label('Telefono') }}
    {{ Form::text('Telefono', $empleado->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Digite el número de teléfono', 'maxlength' => '8', 'pattern' => '^\d{8}$', 'title' => 'Campo obligatorio. Ingrese solo 8 dígitos']) }}
    {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
</div>



        <div class="form-group">
            {{ Form::label('Correo Institucional') }}
            {{ Form::email('CorreoInstitucional', $empleado->CorreoInstitucional, ['class' => 'form-control' . ($errors->has('CorreoInstitucional') ? ' is-invalid' : ''), 'placeholder' => 'Digite el Correo Institucional']) }}
            {!! $errors->first('CorreoInstitucional', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div id="content">
    <div class="form-group">
        {{ Form::label('Tipo de Licencia') }}
        {{ Form::select('TL_id',$tlicencias,$empleado->TL_id,['class' => 'form-control' . ($errors->has('TL_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione ']) }}
        {!! $errors->first('TL_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    </div>
    
    <div class="form-group">
    {{ Form::label('Fecha Vencimiento') }}
    {{ Form::date('FechaVencimiento', $empleado->FechaVencimiento, ['class' => 'form-control' . ($errors->has('FechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento', 'max' => \Carbon\Carbon::now()->addYears(10)->format('Y-m-d'), 'min' => \Carbon\Carbon::now()->format('Y-m-d')]) }}
    @if ($errors->has('FechaVencimiento'))
        <div class="invalid-feedback">
            @if (\Carbon\Carbon::parse(old('FechaVencimiento')) > \Carbon\Carbon::createFromFormat('Y-m-d', '2023-06-15'))
                La fecha de vencimiento no puede ser posterior al 15/06/2023.
            @else
                La fecha de vencimiento no es permitida.
            @endif
        </div>
    @endif
</div>
    <br>
 <!--   <label for="FotoLicencia">Foto Licencia: </label>
    <br/>
    <img src="{{ asset('storage').'/'.$empleado->FotoLicencia }}" width="300" alt="">
    <input type="file" name="FotoLicencia" value="" id="FotoLicencia">
    <br>
    </br>-->
    <div class="form-group">
    {{ Form::label('Foto Licencia') }}
    <br>
    <img src="{{ asset('storage/'.$empleado->FotoLicencia) }}" width="300" alt="">
    <br>
    {{ Form::file('FotoLicencia', ['class' => 'form-control' . ($errors->has('FotoLicencia') ? ' is-invalid' : '')]) }}
    {!! $errors->first('FotoLicencia', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
    </div>

    </div>
     <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('empleados.index') }}"> Atrás</a>
    </div> 

    </div>
</div>