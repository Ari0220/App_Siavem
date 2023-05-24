@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Mostrar Empleado' }}
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
    .card {
        margin-bottom: 20px;
       
        box-sizing: border-box;
  width: auto;
  height: auto;
  background: hsl(105, 9%, 91%);
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  backdrop-filter: blur(6px);
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
  color: black;
  position: relative;
    }
    

    .card-header {
        background-color: #f8f9fa; /* Cambiar este valor al color deseado */
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .card-title {
        font-weight: bold;
        margin-bottom: 0;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group strong {
        display: inline-block;
        width: 200px;
        font-weight: bold;
    }
</style>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                
                    <div class="float-right">
                        <a class="btn btn-danger" href="{{ route('empleados.index') }}">Atrás</a>
                    </div>
              

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Departamento:</strong> {{ $empleado->departamento->nombreDepa }}
                            </div>

                            <div class="form-group">
                                <strong>Puesto:</strong> {{ $empleado->Puesto }}
                            </div>

                            <div class="form-group">
                                <strong>Nombre:</strong> {{ $empleado->NombreEmple }}
                            </div>

                            <div class="form-group">
                                <strong>Apellido:</strong> {{ $empleado->Apellido1 }}
                            </div>

                            <div class="form-group">
                                <strong>Apellido:</strong> {{ $empleado->Apellido2 }}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Fechanacimiento:</strong> {{ $empleado->FechaNacimiento }}
                            </div>

                            <div class="form-group">
                                <strong>Cedúla:</strong> {{ $empleado->Cedula }}
                            </div>

                            <div class="form-group">
                                <strong>Telefono:</strong> {{ $empleado->Telefono }}
                            </div>

                            <div class="form-group">
                                <strong>Correoinstitucional:</strong> {{ $empleado->CorreoInstitucional }}
                            </div>

                            <div class="form-group">
                                <strong>Tipo Licencia:</strong> {{ $empleado->tlicencia->nombreTL}}
                            </div>

                            <div class="form-group">
                        <strong>Foto Licencia:</strong>
                        <br>
                        <img src="{{ asset('empleado/'.$empleado->FotoLicencia) }}" width="250" alt="" title="" />
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
