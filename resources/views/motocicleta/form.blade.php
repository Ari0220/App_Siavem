<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade, $motocicleta->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('FechaChequeoM', $motocicleta->FechaChequeoM, ['class' => 'form-control' . ($errors->has('FechaChequeoM') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeom']) }}
            {!! $errors->first('FechaChequeoM', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('Kilometraje', $motocicleta->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Kilometraje']) }}
            {!! $errors->first('Kilometraje', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Combustible: ') }}
            <select name="Combustible" id='Combustible' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="0" {{ $motocicleta->Combustible == 0 ? 'selected' : '' }}>0</option>
                <option value="1/4" {{ $motocicleta->Combustible == '1/4' ? 'selected' : '' }}>1/4</option>
                <option value="1/2" {{ $motocicleta->Combustible == '1/2' ? 'selected' : '' }}>1/2</option>
                <option value="FULL" {{ $motocicleta->Combustible == 'FULL' ? 'selected' : '' }}>FULL</option>
            </select>
            {!! $errors->first('Combustible', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br />
        <div class="form-group">
            {{ Form::label('Luz Baja: ') }}
            <select name="LuzBaja" id='LuzBaja' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LuzBaja == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LuzBaja == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->LuzBaja == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LuzBaja', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Luz Alta: ') }}
            <select name="LuzAlta" id='LuzAlta' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LuzAlta == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LuzAlta == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->LuzAlta == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LuzAlta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Luz Marcha: ') }}
            <select name="LuzMarcha" id='LuzMarcha' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LuzMarcha == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LuzMarcha == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->LuzMarcha == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Pito: ') }}
            <select name="Pito" id='Pito' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->Pito == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->Pito == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->Pito == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('Pito', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>

        <div class="form-group">
            {{ Form::label('Bateria: ') }}
            <select name="Bateria" id='Bateria' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->Bateria == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->Bateria == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->Bateria == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('Bateria', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Nivel Refrigeracion: ') }}
            <select name="NivelRefrigeracion" id='NivelRefrigeracion' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->NivelRefrigeracion == 'Bueno' ? 'selected' : '' }}>Bueno
                </option>
                <option value="Regular"{{ $motocicleta->NivelRefrigeracion == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->NivelRefrigeracion == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Nivel Aceite: ') }}
            <select name="NivelAceite" id='NivelAceite' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->NivelAceite == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->NivelAceite == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->NivelAceite == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('NivelAceite', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Asientos: ') }}
            <select name="Asientos" id='Asientos' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->Asientos == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->Asientos == 'Regular' ? 'selected' : '' }}>Regular</option>
                <option value="Malo" {{ $motocicleta->Asientos == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('Asientos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Permisos Circulacion: ') }}
            <select name="PermisosCirculacion" id='PermisosCirculacion' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Si" {{ $motocicleta->PermisosCirculacion == 'Si' ? 'selected' : '' }}>Si</option>
                <option value="No" {{ $motocicleta->PermisosCirculacion == 'No' ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('RTV: ') }}
            <select name="RTV" id='RTV' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Si" {{ $motocicleta->RTV == 'Si' ? 'selected' : '' }}>Si</option>
                <option value="No" {{ $motocicleta->RTV == 'No' ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('RTV', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Titulo Propiedad: ') }}
            <select name="TituloPropiedad" id='TituloPropiedad' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Si" {{ $motocicleta->TituloPropiedad == 'Si' ? 'selected' : '' }}>Si</option>
                <option value="No" {{ $motocicleta->TituloPropiedad == 'No' ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Llanta Delantera: ') }}
            <select name="LlantaDelantera" id='LlantaDelantera' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LlantaDelantera == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LlantaDelantera == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->LlantaDelantera == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('LlantaTrasera') }}
            <select name="LlantaTrasera" id='LlantaTrasera' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->LlantaTrasera == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                <option value="Regular"{{ $motocicleta->LlantaTrasera == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->LlantaTrasera == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor Derecho: ') }}
            <select name="EspejoRetrovisorD" id='EspejoRetrovisorD' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->EspejoRetrovisorD == 'Bueno' ? 'selected' : '' }}>Bueno
                </option>
                <option value="Regular"{{ $motocicleta->EspejoRetrovisorD == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->EspejoRetrovisorD == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('EspejoRetrovisorD', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Espejo Retrovisor Izquierdo: ') }}
            <select name="EspejoRetrovisori" id='EspejoRetrovisori' onchange='cambioUnidad();' required>
                <option value="">Seleccione:</option>
                <option value="Bueno" {{ $motocicleta->EspejoRetrovisorD == 'Bueno' ? 'selected' : '' }}>Bueno
                </option>
                <option value="Regular"{{ $motocicleta->EspejoRetrovisorD == 'Regular' ? 'selected' : '' }}>Regular
                </option>
                <option value="Malo" {{ $motocicleta->EspejoRetrovisorD == 'Malo' ? 'selected' : '' }}>Malo</option>
            </select>
            {!! $errors->first('EspejoRetrovisori', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            <br>
        @if ($motocicleta->documentoEnvio == null)
        <br>
        <div class="form-group">
            {{ Form::label('Documento Envio') }}
            {{ Form::file('documentoEnvio', ['class' => 'form-control' . ($errors->has('documentoEnvio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoEnvio', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        @endif

        <div class="form-group">
            {{ Form::label('Documento Recibido') }}
            {{ Form::file('documentoRecibido', ['class' => 'form-control' . ($errors->has('documentoRecibido') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoRecibido', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br />
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('motocicletas.index') }}"> Atrás</a>

    </div>
</div>
