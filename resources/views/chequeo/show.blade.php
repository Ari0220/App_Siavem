@extends('layouts.app')

@section('template_title')
    {{ $chequeo->name ?? 'Show Chequeo' }}
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
                            <span class="card-title">Show Chequeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chequeos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idchequeos:</strong>
                            {{ $chequeo->idchequeos }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Unidad Id:</strong>
                            {{ $chequeo->unidad_id }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Fechachequeo:</strong>
                            {{ $chequeo->FechaChequeo }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $chequeo->Kilometraje }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $chequeo->Combustible }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Luzbaja:</strong>
                            {{ $chequeo->LuzBaja }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Luzalta:</strong>
                            {{ $chequeo->LuzAlta }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Luzmarcha:</strong>
                            {{ $chequeo->LuzMarcha }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Luzinterior:</strong>
                            {{ $chequeo->LuzInterior }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Luzfreno:</strong>
                            {{ $chequeo->LuzFreno }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Intermitentes:</strong>
                            {{ $chequeo->Intermitentes }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Luzparking:</strong>
                            {{ $chequeo->LuzParking }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Alojenos:</strong>
                            {{ $chequeo->Alojenos }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Escobillas:</strong>
                            {{ $chequeo->Escobillas }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Extintor:</strong>
                            {{ $chequeo->Extintor }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Botiquin:</strong>
                            {{ $chequeo->Botiquin }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Triangulos:</strong>
                            {{ $chequeo->Triangulos }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Cinturon:</strong>
                            {{ $chequeo->Cinturon }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Chapapuerta:</strong>
                            {{ $chequeo->ChapaPuerta }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Pito:</strong>
                            {{ $chequeo->Pito }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Parabrisas:</strong>
                            {{ $chequeo->Parabrisas }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Vidrioslaterales:</strong>
                            {{ $chequeo->VidriosLaterales }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Climatizacion:</strong>
                            {{ $chequeo->Climatizacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Bateria:</strong>
                            {{ $chequeo->Bateria }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nivelrefrigeracion:</strong>
                            {{ $chequeo->NivelRefrigeracion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Nivelaceite:</strong>
                            {{ $chequeo->NivelAceite }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Alfombras:</strong>
                            {{ $chequeo->Alfombras }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Radio:</strong>
                            {{ $chequeo->Radio }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Asientosd:</strong>
                            {{ $chequeo->AsientosD }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Asientost:</strong>
                            {{ $chequeo->AsientosT }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Permisoscirculacion:</strong>
                            {{ $chequeo->PermisosCirculacion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Rtv:</strong>
                            {{ $chequeo->RTV }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Titulopropiedad:</strong>
                            {{ $chequeo->TituloPropiedad }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Llantadelantera:</strong>
                            {{ $chequeo->LlantaDelantera }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Llantarepuesto:</strong>
                            {{ $chequeo->LlantaRepuesto }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Llantatrasera:</strong>
                            {{ $chequeo->LlantaTrasera }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Tuercas:</strong>
                            {{ $chequeo->Tuercas }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Espejoretrovisor:</strong>
                            {{ $chequeo->EspejoRetrovisor }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Gata:</strong>
                            {{ $chequeo->Gata }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Llaverana:</strong>
                            {{ $chequeo->LlaveRana }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Lingas:</strong>
                            {{ $chequeo->Lingas }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Juegollaves:</strong>
                            {{ $chequeo->JuegoLlaves }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Bumper:</strong>
                            {{ $chequeo->Bumper }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
