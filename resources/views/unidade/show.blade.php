@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? 'Show Unidade' }}
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
            <div class="col-md-6">
                <div class="card">
                 
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('unidades.index') }}"> Atrás</a>
                        </div>
                    

                    <div class="card-body">
                        
                      
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $unidade->categoria->nombre  }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Tracción:</strong>
                            {{ $unidade->traccione->nombreTraccion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $unidade->combustible->nombreCombustibles }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $unidade->estado->nombreEstados }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $unidade->placa }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $unidade->marca }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $unidade->modelo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Estilo:</strong>
                            {{ $unidade->estilo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $unidade->color }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Año fabricación:</strong>
                            {{ $unidade->ayoFabricacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Contratación:</strong>
                            {{ $unidade->contratacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Valor Adquisitivo:</strong>
                            {{ $unidade->valorAdqui }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Valor Hacienda:</strong>
                            {{ $unidade->valorHacienda }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>RVT:</strong>
                            {{ $unidade->RVT }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $unidade->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
