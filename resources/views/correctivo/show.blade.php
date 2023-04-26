@extends('layouts.app')

@section('template_title')
    {{ $correctivo->name ?? 'Show Correctivo' }}
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
                            <span class="card-title">Mostrar mantenimiento Correctivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('correctivos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Correctivo:</strong>
                            {{ $correctivo->idCorrectivo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Unidad ID:</strong>
                            {{ $correctivo->unidad_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Taller ID:</strong>
                            {{ $correctivo->taller_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecha de salida:</strong>
                            {{ $correctivo->FechaSalida }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecha de reingreso:</strong>
                            {{ $correctivo->FechaReingreso }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Horimetro:</strong>
                            {{ $correctivo->Horimetro }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $correctivo->Detalle }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $correctivo->Monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
