@extends('layouts.app')

@section('template_title')
    Create Estado
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

.card:hover {
  border: 1px solid black;
  transform: scale(1.05);
}

.card:active {
  transform: scale(0.95) rotateZ(1.7deg);
}

.float-right {
  position: absolute;
  top: 2px;
  right: 0;
  margin-right: 10px;
}

@media screen and (max-width: 600px) {
  .card {
    width: 90vw;
    height: auto;
  }
  }
</style>

<section class="content container-fluid">
  <div class="row">
    <div class="col-md-4">

      @includeif('partials.errors')
      <div class="card position-relative">
        <div class="card-body"  style="margin-top: 20px;">
          <form method="POST" action="{{ route('estados.store') }}" role="form" enctype="multipart/form-data">
            
        <div class="card-body">
          <form method="POST" action="{{ route('estados.store') }}" role="form" enctype="multipart/form-data">
              @csrf

                            @include('estado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
