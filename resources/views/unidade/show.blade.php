@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? 'Show Unidade' }}
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
                            <span class="card-title">Mostrar Unidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                      
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $unidade->categoria->nombre  }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Tracción:</strong>
                            {{ $unidade->traccione->nombreTraccion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $unidade->combustible->nombreCombustibles }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $unidade->estado->nombreEstados }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $unidade->placa }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $unidade->marca }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $unidade->modelo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Estilo:</strong>
                            {{ $unidade->estilo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $unidade->color }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Año fabricación:</strong>
                            {{ $unidade->ayoFabricacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Contratación:</strong>
                            {{ $unidade->contratacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Valor Adquisitivo:</strong>
                            {{ $unidade->valorAdqui }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Valor Hacienda:</strong>
                            {{ $unidade->valorHacienda }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>RVT:</strong>
                            {{ $unidade->RVT }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $unidade->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
