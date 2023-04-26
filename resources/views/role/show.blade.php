@extends('layouts.app')

@section('template_title')
    {{ $role->name ?? "{{ __('Show') Role" }}
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
                            <span class="card-title">{{ __('Mostrar') }} Role</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('roles.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Rol:</strong>
                            {{ $role->idRol }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $role->NombreRol }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
