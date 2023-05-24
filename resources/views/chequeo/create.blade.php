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
    <section class="content container-fluid" >
        <div class="row">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default" >
                    <div class="card-header list-group-item-warning" style="text-align: center; >
                        <span class="card-title">Crear Inspecciones Unidades y Busetas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('chequeos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('chequeo.form')
                        
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
