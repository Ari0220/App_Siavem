@extends('layouts.app')

@section('template_title')
    Update Combustible
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

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header list-group-item-warning">
                        <span class="card-title">Editar Combustible</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('combustibles.update', $combustible->idCombustibles) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('combustible.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
