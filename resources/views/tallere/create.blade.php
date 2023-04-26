@extends('layouts.app')

@section('template_title')
    Create Tallere
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
                        <span class="card-title">Agregar Taller</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('talleres.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tallere.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
