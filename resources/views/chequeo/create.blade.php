@extends('layouts.app')

@section('template_title')
    Create Chequeo
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
                        <span class="card-title">Crear Chequeo Unidades y Busetas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('chequeos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('chequeo.form')
                            <br>
                    <div class="box-footer mt20">
                          <a class="btn btn-danger" href="{{ route('chequeos.index') }}"> Atrás</a>
                          <button type="submit" class="btn btn-primary">Enviar</button>

                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection