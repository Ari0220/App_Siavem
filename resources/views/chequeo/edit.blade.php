@extends('layouts.app')

@section('template_title')
    Update Chequeo
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
                        <span class="card-title">Update Chequeo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('chequeos.update', $chequeo->idchequeos) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('chequeo.form')
                            <br>
                    @if ($chequeo->documentoEnvioC == null)
        <div class="form-group">
            {{ Form::label('Documento Envio') }}
            {{ Form::file('documentoEnvioC', ['class' => 'form-control' . ($errors->has('documentoEnvioC') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoEnvioC', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        @endif

        <div class="form-group">
            {{ Form::label('Documento Recibido') }}
            {{ Form::file('documentoRecibidoC', ['class' => 'form-control' . ($errors->has('documentoRecibidoC') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione PDF']) }}
            {!! $errors->first('documentoRecibidoC', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
        <br />
    
        <div class="box-footer mt20">
             <button type="submit" class="btn btn-primary">Enviar</button>
             <a class="btn btn-danger" href="{{ route('chequeos.index') }}"> Atras</a>
        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection