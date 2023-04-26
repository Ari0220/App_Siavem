@extends('layouts.app')

@section('template_title')
    {{ $traccione->name ?? 'Show Traccione' }}
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
                            <span class="card-title">Mostrar Tracción</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('tracciones.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Tracción:</strong>
                            {{ $traccione->idTraccion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $traccione->nombreTraccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
