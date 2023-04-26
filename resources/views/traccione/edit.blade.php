@extends('layouts.app')

@section('template_title')
    Update Traccione
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
                        <span class="card-title">Editar Tipo Tracción</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tracciones.update', $traccione->idTraccion) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('traccione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
