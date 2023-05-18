@extends('layouts.app')

@section('template_title')
    Motocicleta
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-******************" crossorigin="anonymous" />
<style>
    .Uno{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgb(82, 230, 23);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.Uno .svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.Uno .svgIcon path {
  fill: white;
}

.Ver{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgb(78, 186, 200);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.Ver .svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.Ver .svgIcon path {
  fill: white;
}
.Ver {
  cursor: default;
  text-decoration: none;
}
.Ver i {
  color: black; 
}



.button2 {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgb(234, 195, 18);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: 0.3s;
  overflow: hidden;
  position: relative;
}

.svgIcon {
  width: 12px;
  transition-duration: 0.3s;
  fill: white;
}



.button {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color:rgb(255, 69, 69);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
 box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164)
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}
.svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.svgIcon path {
  fill: white;
}



</style>

    <div class="container-fluid">
        <div class="row">
            @if (Auth::user()->rol_id === 1 || Auth::user()->rol_id === 2)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header list-group-item-warning">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               <strong>{{ __('Inspeccion  Motocicleta') }}</strong> 
                            </span>

                             <div class="float-right">
                                <a href="{{ route('motocicletas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo') }}
                                </a>
                                <a href="{{ route('MotocicletaExcel') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                    EXCEL
                                  </a>
                                  <a href="{{ route('MotocicletaPDF') }}" class="btn btn-danger btn-sm float-right"  data-placement="left">
                                    PDF
                                  </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                       
										<th>Placa</th>
										<th>Fecha</th>
										<th>Kilometraje</th>
										<th>Combustible</th>
										<th>Luz baja</th>
										<th>Luz alta</th>
										<th>Luz marcha</th>
										<th>Pito</th>
										<th>Bateria</th>
										<th>Nivel refrigeracion</th>
										<th>Nivel aceite</th>
										<th>Asientos</th>
										<th>Permisos circulacion</th>
										<th>Rtv</th>
										<th>Titulo propiedad</th>
										<th>Llanta delantera</th>
										<th>Llanta trasera</th>
										<th>Espejo retrovisor Derecho</th>
										<th>Espejo retrovisor Izquierdo</th>
                                        <th>Salida Unidad</th>
                                        <th>Entrega Unidad</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($motocicletas as $motocicleta)
                                        <tr>
                                          
											<td>{{ $motocicleta->unidade->placa }}</td>
											<td>{{ $motocicleta->FechaChequeoM }}</td>
											<td>{{ $motocicleta->Kilometraje }}</td>
											<td>{{ $motocicleta->Combustible }}</td>
											<td>{{ $motocicleta->LuzBaja }}</td>
											<td>{{ $motocicleta->LuzAlta }}</td>
											<td>{{ $motocicleta->LuzMarcha }}</td>
											<td>{{ $motocicleta->Pito }}</td>
											<td>{{ $motocicleta->Bateria }}</td>
											<td>{{ $motocicleta->NivelRefrigeracion }}</td>
											<td>{{ $motocicleta->NivelAceite }}</td>
											<td>{{ $motocicleta->Asientos }}</td>
											<td>{{ $motocicleta->PermisosCirculacion }}</td>
											<td>{{ $motocicleta->RTV }}</td>
											<td>{{ $motocicleta->TituloPropiedad }}</td>
											<td>{{ $motocicleta->LlantaDelantera }}</td>
											<td>{{ $motocicleta->LlantaTrasera }}</td>
											<td>{{ $motocicleta->EspejoRetrovisorD }}</td>
											<td>{{ $motocicleta->EspejoRetrovisori }}</td>
                                            <td>
                                            <a class="Ver" href="/ChequeoPDF/{{ $motocicleta->documentoEnvio }}" class="btn btn-sm btn-info" target="_blank">  <i class="fas fa-eye"></i></a> 
                                            <br>
                                            <a href="/ChequeoPDF/{{ $motocicleta->documentoEnvio }}" download>
                                            <button class="Uno">
                                            <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="svgIcon">
                                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"></path>
                                            </svg>
                                            </button>
                                            </a>


                                            <td>
                                            <a class="Ver" href="/ChequeoPDF/{{ $motocicleta->documentoRecibido }}" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-eye"></i></a>
                                            <br>
                                            <a href="/ChequeoPDF/{{ $motocicleta->documentoRecibido }}" download>
                                            <button class="Uno">
                                            <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="svgIcon">
                                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"></path>
                                            </svg>
                                            </button>
                                            </a>
                                            </a>
                                            </td>
                                            <td>
                                            <form action="{{ route('motocicletas.destroy', $motocicleta->idMotocicleta) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button class="button2" onclick="location.href='{{ route('motocicletas.edit', $motocicleta->idMotocicleta) }}'">
                                        <i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <a class="btn btn-sm btn-info" href="{{ route('pdf3',$motocicleta->idMotocicleta) }}"><i class="fa fa-fw fa-edit"></i></a>
                                        <br>
                                        <button class="button" type="submit">
                                            <svg class="svgIcon" viewBox="0 0 448 512">
                                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                            </svg>
                                        </button>
                                        </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @section('js')
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            @if (session('eliminar') == 'ok')
                            <script>
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                            </script>
                            @endif
                            <script>
                                let forms = document.querySelectorAll('form')
            
                                forms.forEach(form => {
                                    form.addEventListener('submit', (event) => {
                                        event.preventDefault()
                                        Swal.fire({
                                            title: '¿Está seguro que desea eliminar?',
                                            text: "¡No podrá revertir esto!",
                                            icon: 'warning',
                                            cancelButtonText: "Cancelar",
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Eliminar'
                                            }).then((result) => {
                                            if (result.isConfirmed) {

                                                form.submit();
                                            }
                                            })

                                         })
                                     })
                             </script>
                             @endsection
                        </div>
                    </div>
                </div>
                {!! $motocicletas->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
