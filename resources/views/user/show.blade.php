@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
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
                            <span class="card-title">{{ __('Mostar') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('users.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rol ID:</strong>
                            {{ $user->rol_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Departamento ID:</strong>
                            {{ $user->depar_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $user->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
