@extends('layouts.app')

@section('template_title')
    {{ $formulario->name ?? 'Show Formulario' }}
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
                <div class="card">
                    <div class="card-header list-group-item-warning">
                        <div class="float-left">
                            <span class="card-title">Mostrar Solicitud</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('formularios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idformularios:</strong>
                            {{ $formulario->idFormularios }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $formulario->categoria_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Depar Id:</strong>
                            {{ $formulario->depar_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Emple Id:</strong>
                            {{ $formulario->emple_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Objetivo:</strong>
                            {{ $formulario->Objetivo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Numepersonas:</strong>
                            {{ $formulario->NumePersonas }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fechasalida:</strong>
                            {{ $formulario->FechaSalida }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecharegreso:</strong>
                            {{ $formulario->FechaRegreso }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Horas:</strong>
                            {{ $formulario->HoraS }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Horar:</strong>
                            {{ $formulario->HoraR }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $formulario->Lugar }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Autorizacion:</strong>
                            {{ $formulario->Autorizacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $formulario->Observaciones }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Chofer:</strong>
                            {{ $formulario->chofer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
