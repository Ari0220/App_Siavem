@extends('layouts.app')

@section('template_title')
    Update Motocicleta
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header list-group-item-warning">
                        <span class="card-title">Modificar inspeccion Motocicleta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('motocicletas.update', $motocicleta->idMotocicleta) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('motocicleta.form')
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
        <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="{{ route('motocicletas.index') }}"> Atrás</a>

    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
