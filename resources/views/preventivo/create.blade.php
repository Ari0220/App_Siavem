@extends('layouts.app')

@section('template_title')
    Create Preventivo
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
                   
                    <div class="card-body">
                        <form method="POST" action="{{ route('preventivos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('preventivo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
