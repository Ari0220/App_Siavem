@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Role
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
                        <span class="card-title">{{ __('Editar') }} Rol</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.update', $role->idRol) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('role.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
