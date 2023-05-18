@extends('layouts.app')

@section('template_title')
    Create Motocicleta
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

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header list-group-item-warning">
                        <span class="card-title">Crear Inspeccion Motocicleta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('motocicletas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('motocicleta.form')  
                            <br>
                            <div class="box-footer mt20">
        <a class="btn btn-danger" href="{{ route('motocicletas.index') }}"> Atrás</a>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");

        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
</script>
@endsection
