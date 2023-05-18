<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
        
            {{ Form::label('Placa') }}
            {{ Form::select('unidad_id', $unidade, $chequeo->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>

        <div class="form-group">
    {{ Form::label('Fecha') }}
    {{ Form::date('FechaChequeo', null, ['min' => \Carbon\Carbon::now()->format('Y-m-d'), 'class' => 'form-control' . ($errors->has('FechaChequeo') ? ' is-invalid' : ''), 'placeholder' => 'Fechachequeo']) }}
    {!! $errors->first('FechaChequeo', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
</div>


         <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::number('Kilometraje', $chequeo->Kilometraje, ['class' => 'form-control' . ($errors->has('Kilometraje') ? ' is-invalid' : ''), 'placeholder' => 'Digite en numero el Kilometraje']) }}
            {!! $errors->first('Kilometraje', '<div class="invalid-feedback">:ERROR USO DE LETRAS!</div>') !!}
        </div>
<br>
            <div class="form-group">
            {{ Form::label('Combustible: ') }}

            <select  name="Combustible" id='Combustible' onchange='cambioUnidad();' required>
            <option value="">Seleccione:</option>
                <option value="0" {{ $chequeo->Combustible == 0 ? 'selected' : '' }}>0</option>
                <option value="1/4" {{ $chequeo->Combustible == '1/4' ? 'selected' : '' }}>1/4</option>
                <option value="1/2" {{ $chequeo->Combustible == '1/2' ? 'selected' : '' }}>1/2</option>
                <option value="FULL" {{ $chequeo->Combustible == 'FULL' ? 'selected' : '' }}>FULL</option>
           </select>
                {!! $errors->first('Combustible', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
            </div>
            <br />
            <div class="form-group">
                        {{ Form::label('Luz Baja: ') }}
                        <select name="LuzBaja" id='LuzBaja' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LuzBaja == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LuzBaja == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LuzBaja == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('LuzBaja', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Luz Alta: ') }}
                        <select name="LuzAlta" id='LuzAlta' onchange='cambioUnidad();' required>
                        <option value="Bueno" {{ $chequeo->LuzAlta == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LuzAlta == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LuzAlta == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('LuzAlta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    
                    <br />
                    <div class="form-group">
                        {{ Form::label('Luz Marcha: ') }}

                        <select name="LuzMarcha" id='LuzMarcha' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LuzMarcha == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LuzMarcha == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LuzMarcha == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('LuzMarcha', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Luz Interior: ') }}
                        <select name="LuzInterior" id='LuzInterior' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LuzInterior == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LuzInterior == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LuzInterior == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('LuzInterior', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Luz Freno: ') }}

                        <select name="LuzFreno" id='LuzFreno' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LuzFreno == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LuzFreno == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LuzFreno == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('LuzFreno', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Luces Intermitentes: ') }}

                        <select name="Intermitentes" id='Intermitentes' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Intermitentes == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Intermitentes == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Intermitentes == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('Intermitentes', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Luz Parking: ') }}

                        <select name="LuzParking" id='LuzParking' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LuzParking == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LuzParking == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LuzParking == 'Bueno' ? 'selected' : '' }}>Malo</option>
                        </select>
                        {!! $errors->first('LuzParking', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Alojenos: ') }}

                        <select name="Alojenos" id='Alojenos' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Alojenos == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Alojenos == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Alojenos == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Alojenos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Escobillas: ') }}

                        <select name="Escobillas" id='Escobillas' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Escobillas == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Escobillas == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Escobillas == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Escobillas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Extintor: ') }}

                        <select name="Extintor" id='Extintor' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Extintor == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Extintor == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Extintor == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Extintor', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Botiquin: ') }}

                        <select name="Botiquin" id='Botiquin' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Botiquin == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Botiquin == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Botiquin == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Botiquin', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Triangulos: ') }}

                        <select name="Triangulos" id='Triangulos' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Triangulos == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Triangulos == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Triangulos == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Triangulos', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Cinturon: ') }}

                        <select name="Cinturon" id='Cinturon' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Cinturon == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Cinturon == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Cinturon == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Cinturon', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Chapa Puerta: ') }}

                        <select name="ChapaPuerta" id='ChapaPuerta' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->ChapaPuerta == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->ChapaPuerta == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->ChapaPuerta == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('ChapaPuerta', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Pito: ') }}

                        <select name="Pito" id='Pito' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Pito == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Pito == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Pito == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Pito', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Parabrisas: ') }}

                        <select name="Parabrisas" id='Parabrisas' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Parabrisas == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Parabrisas == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Parabrisas == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Parabrisas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Vidrios Laterales: ') }}

                        <select name="VidriosLaterales" id='VidriosLaterales' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->VidriosLaterales == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->VidriosLaterales == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->VidriosLaterales == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('VidriosLaterales', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Climatizacion: ') }}

                        <select name="Climatizacion" id='Climatizacion' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Climatizacion == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Climatizacion == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Climatizacion == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Climatizacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Bateria: ') }}

                        <select name="Bateria" id='Bateria' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Bateria == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Bateria == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Bateria == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Bateria', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Nivel Refrigeracion: ') }}

                        <select name="NivelRefrigeracion" id='NivelRefrigeracion' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->NivelRefrigeracion == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->NivelRefrigeracion == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->NivelRefrigeracion == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('NivelRefrigeracion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Nivel Aceite: ') }}

                        <select name="NivelAceite" id='NivelAceite' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->NivelAceite == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->NivelAceite == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->NivelAceite == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('NivelAceite', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Alfombras: ') }}

                        <select name="Alfombras" id='Alfombras' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Alfombras == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Alfombras == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Alfombras == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Alfombras', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Radio: ') }}

                        <select name="Radio" id='Radio' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Radio == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Radio == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Radio == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Radio', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Asientos Delanteros: ') }}

                        <select name="AsientosD" id='AsientosD' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->AsientosD == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->AsientosD == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->AsientosD == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('AsientosD', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Asientos Traseros: ') }}

                        <select name="AsientosT" id='AsientosT' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->AsientosT == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->AsientosT == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->AsientosT == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('AsientosT', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Permisos Circulacion: ') }}
                        <select name="PermisosCirculacion" id='PermisosCirculacion' onchange='cambioUnidad();' required>
                            <option value="Si" {{ $chequeo->PermisosCirculacion == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ $chequeo->PermisosCirculacion == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        {!! $errors->first('PermisosCirculacion', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('RTV: ') }}
                        <select name="RTV" id='RTV' onchange='cambioUnidad();' required>
                            <option value="Si" {{ $chequeo->RTV == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ $chequeo->RTV == 'No' ? 'selected' : '' }}>No</option>
                       
                        </select>
                        {!! $errors->first('RTV', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Titulo Propiedad: ') }}
                        <select name="TituloPropiedad" id='TituloPropiedad' onchange='cambioUnidad();' required>
                            <option value="Si" {{ $chequeo->TituloPropiedad == 'Si' ? 'selected' : '' }}>Si</option>
                            <option value="No" {{ $chequeo->TituloPropiedad == 'No' ? 'selected' : '' }}>No</option>
                       
                        </select>
                        {!! $errors->first('TituloPropiedad', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Llanta Delantera: ') }}

                        <select name="LlantaDelantera" id='LlantaDelantera' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LlantaDelantera == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LlantaDelantera == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LlantaDelantera == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('LlantaDelantera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Llanta Repuesto: ') }}

                        <select name="LlantaRepuesto" id='LlantaRepuesto' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LlantaRepuesto == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LlantaRepuesto == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LlantaRepuesto == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('LlantaRepuesto', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Llanta Trasera: ') }}

                        <select name="LlantaTrasera" id='LlantaTrasera' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LlantaTrasera == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LlantaTrasera == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LlantaTrasera == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('LlantaTrasera', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Tuercas: ') }}
                        <select name="Tuercas" id='Tuercas' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Tuercas == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Tuercas == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Tuercas == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Tuercas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Espejo Retrovisor: ') }}
                        <select name="EspejoRetrovisor" id='EspejoRetrovisor' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->EspejoRetrovisor == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->EspejoRetrovisor == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->EspejoRetrovisor == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('EspejoRetrovisor', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Gata: ') }}
                        <select name="Gata" id='Gata' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Gata == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Gata == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Gata == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Gata', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Llave Rana: ') }}
                        <select name="LlaveRana" id='LlaveRana' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->LlaveRana == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->LlaveRana == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->LlaveRana == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('LlaveRana', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Lingas: ') }}
                        <select name="Lingas" id='Lingas' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Lingas == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Lingas == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Lingas == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Lingas', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Juego Llaves: ') }}
                        <select name="JuegoLlaves" id='JuegoLlaves' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->JuegoLlaves == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->JuegoLlaves == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->JuegoLlaves == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('JuegoLlaves', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                    <br />
                    <div class="form-group">
                        {{ Form::label('Bumper: ') }}
                        <select name="Bumper" id='Bumper' onchange='cambioUnidad();' required>
                            <option value="Bueno" {{ $chequeo->Bumper == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular" {{ $chequeo->Bumper == 'Bueno' ? 'selected' : '' }}>Regular</option>
                            <option value="Malo" {{ $chequeo->Bumper == 'Bueno' ? 'selected' : '' }}>Malo</option>
                       
                        </select>
                        {!! $errors->first('Bumper', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
                    </div>
                
</div>