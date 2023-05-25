@extends('layouts.app')

@section('template_title')
    Update Estado
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
    .card {
  box-sizing: border-box;
  width: 400px;
  height: 200px;
  background:  hsl(105, 9%, 91%);
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

                @includeif('partials.errors')

                <div class="card card-default">
                  <br>
                    <div>
                        <span class="card-title">Editar Estado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estados.update', $estado->idEstados) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('estado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
