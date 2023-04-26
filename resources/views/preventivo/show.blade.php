@extends('layouts.app')

@section('template_title')
    {{ $preventivo->name ?? 'Show Preventivo' }}
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
                            <span class="card-title">Mostrar Mantenimiento Preventivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('preventivos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Preventivo:</strong>
                            {{ $preventivo->idPreventivo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Unidad Id:</strong>
                            {{ $preventivo->unidad_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Taller ID:</strong>
                            {{ $preventivo->taller_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecha Mantenimiento:</strong>
                            {{ $preventivo->FechaMant }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Tipo Mantenimiento:</strong>
                            {{ $preventivo->tipoMante }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Horimetro:</strong>
                            {{ $preventivo->Horimetro }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Proximo Servicio:</strong>
                            {{ $preventivo->ProximoSer }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $preventivo->Monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
