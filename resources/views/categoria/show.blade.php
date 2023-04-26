@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
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
                            <span class="card-title">Mostrar Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoria->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
