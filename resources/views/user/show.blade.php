@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
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
            <div class="col-md-4">
                <div class="card">
                   <br>
                   <div class="float-left">
    <a class="btn btn-danger" href="{{ route('users.index') }}">{{ __('Atrás') }}</a>
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
