@extends('layouts.app')

@section('template_title')
    {{ $departamento->name ?? 'Show Departamento' }}
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
                            <span class="card-title">Mostrar Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departamentos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                       
                        <div class="form-group">
                            <strong>Nombre Departamento:</strong>
                            {{ $departamento->nombreDepa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
