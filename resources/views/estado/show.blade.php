@extends('layouts.app')

@section('template_title')
    {{ $estado->name ?? 'Show Estado' }}
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
                            <span class="card-title">Mostrar Estado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('estados.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $estado->idEstados }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong> Estados:</strong>
                            {{ $estado->nombreEstados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
