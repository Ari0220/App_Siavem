@extends('layouts.app')

@section('template_title')
    {{ $correctivo->name ?? 'Show Correctivo' }}
@endsection

@section('content')
<style>
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
  box-shadow: 17px 17px 51px rgba(0, 0, 0, 0.22);
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
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card">
                    <br>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('correctivos.index') }}"> Atrás</a>
                        </div>
                

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID Correctivo:</strong>
                            {{ $correctivo->idCorrectivo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Unidad ID:</strong>
                            {{ $correctivo->unidad_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Taller ID:</strong>
                            {{ $correctivo->taller_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecha de salida:</strong>
                            {{ $correctivo->FechaSalida }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fecha de reingreso:</strong>
                            {{ $correctivo->FechaReingreso }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Horimetro:</strong>
                            {{ $correctivo->Horimetro }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $correctivo->Detalle }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $correctivo->Monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
