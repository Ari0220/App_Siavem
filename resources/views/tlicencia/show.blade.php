@extends('layouts.app')

@section('template_title')
    {{ $tlicencia->name ?? 'Show Tlicencia' }}
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header list-group-item-warning">
                        <div class="float-left">
                            <span class="card-title">Mostrar Tipo Licencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('tlicencias.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Tipo licencia:</strong>
                            {{ $tlicencia->idTL }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tlicencia->nombreTL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
