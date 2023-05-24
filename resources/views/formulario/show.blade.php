@extends('layouts.app')

@section('template_title')
    {{ $formulario->name ?? 'Show Formulario' }}
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .card-title {
        font-weight: bold;
        margin-bottom: 0;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group strong {
        display: inline-block;
        width: 200px;
        font-weight: bold;
    }
</style>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header  justify-content-center" style="text-align: center;">
                    <h3 class="card-title">Mostrar Solicitud</h3>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('formularios.index') }}">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Codigo:</strong> {{ $formulario->idFormularios }}
                            </div>

                            <div class="form-group">
                                <strong>Categoria:</strong> {{ $formulario->categoria->nombre }}
                            </div>

                            <div class="form-group">
                                <strong>Departamento:</strong> {{ $formulario->departamento->nombreDepa }}
                            </div>

                            <div class="form-group">
                                <strong>Responsable de la Gira:</strong> {{ $formulario->empleado->Cedula }}
                            </div>

                            <div class="form-group">
                                <strong>Objetivo:</strong> {{ $formulario->Objetivo }}
                            </div>

                            <div class="form-group">
                                <strong>Acompañantes:</strong> {{ $formulario->NumePersonas }}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Fecha Salida:</strong> {{ $formulario->FechaSalida }}
                            </div>

                            <div class="form-group">
                                <strong>Fecha Regreso:</strong> {{ $formulario->FechaRegreso }}
                            </div>

                            <div class="form-group">
                                <strong>Hora de Salida:</strong> {{ $formulario->HoraS }}
                            </div>

                            <div class="form-group">
                                <strong>Hora de Regreso:</strong> {{ $formulario->HoraR }}
                            </div>

                            <div class="form-group">
                                <strong>Lugar:</strong> {{ $formulario->Lugar }}
                            </div>

                            <div class="form-group">
                                <strong>Observaciones:</strong> {{ $formulario->Observaciones }}
                            </div>

                            <div class="form-group">
                                <strong>Chofer:</strong> {{ $formulario->empleado->Cedula }}
                            </div>

                            <div class="form-group">
                                <strong>Autorizacion:</strong>
                                <br>
                                <img src="{{ asset('formulario/'.$formulario->documento) }}" width="250" alt="" title="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
