@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Mostrar Empleado' }}
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
                            <span class="card-title">Mostrar Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                      
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $empleado->departamento->nombreDepa }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $empleado->Puesto }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->NombreEmple }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $empleado->Apellido1 }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $empleado->Apellido2 }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $empleado->FechaNacimiento }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Cedúla:</strong>
                            {{ $empleado->Cedula }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->Telefono }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Correoinstitucional:</strong>
                            {{ $empleado->CorreoInstitucional }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Tipo Licencia:</strong>
                            {{ $empleado->tlicencia->nombreTL}}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $empleado->FechaVencimiento }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Foto Licencia:</strong>
                            <img src="{{ asset('storage').'/'.$empleado->FotoLicencia }}" width="150" alt=""> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
