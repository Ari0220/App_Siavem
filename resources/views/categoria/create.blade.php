@extends('layouts.app')

@section('template_title')
    Create Categoria
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

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header list-group-item-warning">
                        <span class="card-title">Agregar Categoría</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">

                        
                        @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
