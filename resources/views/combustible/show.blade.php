@extends('layouts.app')

@section('template_title')
    {{ $combustible->name ?? 'Show Combustible' }}
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
                            <span class="card-title">Mostrar Combustible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('combustibles.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Combustible:</strong>
                            {{ $combustible->idCombustibles }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $combustible->nombreCombustibles }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
