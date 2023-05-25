@extends('layouts.app')

@section('template_title')
    {{ $formulario->name ?? 'Show Formulario' }}
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
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
    .row{
        justify-content: center;
    }
    .card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.card {
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
  position: relative; /* Agregado */
}
</style>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
              <br>
                    <div class="float-right">
                        <a class="btn btn-danger" href="{{ route('formularios.index') }}">Atrás</a>
                    </div>
                

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Codigo:</strong> {{ $formulario->idFormularios }}
                            </div>

                            <div class="form-group">
                                <strong>Categoria:</strong> {{ $formulario->categoria->nombre }}
                            </div>

                            <div class="form-group">
                                <strong>Departamento:</strong> {{ $formulario->departamento->nombreDepa }}
                            </div>

                            <div class="form-group">
                                <strong>Responsable de la Gira:</strong> {{ $formulario->empleado->Cedula }}
                            </div>

                            <div class="form-group">
                                <strong>Objetivo:</strong> {{ $formulario->Objetivo }}
                            </div>

                            <div class="form-group">
                                <strong>Acompañantes:</strong> {{ $formulario->NumePersonas }}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Fecha Salida:</strong> {{ $formulario->FechaSalida }}
                            </div>

                            <div class="form-group">
                                <strong>Fecha Regreso:</strong> {{ $formulario->FechaRegreso }}
                            </div>

                            <div class="form-group">
                                <strong>Hora de Salida:</strong> {{ $formulario->HoraS }}
                            </div>

                            <div class="form-group">
                                <strong>Hora de Regreso:</strong> {{ $formulario->HoraR }}
                            </div>

                            <div class="form-group">
                                <strong>Lugar:</strong> {{ $formulario->Lugar }}
                            </div>

                            <div class="form-group">
                                <strong>Observaciones:</strong> {{ $formulario->Observaciones }}
                            </div>

                            <div class="form-group">
                                <strong>Chofer:</strong> {{ $formulario->empleado->Cedula }}
                            </div>

                            <div class="form-group">
                                <strong>Autorizacion:</strong>
                                <br>
                                <img src="{{ asset('formulario/'.$formulario->documento) }}" width="250" alt="" title="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
