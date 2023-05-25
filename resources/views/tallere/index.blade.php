@extends('layouts.app')

@section('template_title')
    Tallere
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-******************" crossorigin="anonymous" />

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

.btn-conteiner {
  display: flex;
  justify-content: center;
  --color-text: #ffffff;
  --color-background: hsla(108, 100%, 20%, 0.502);
  --color-outline:#ffffff;
  --color-shadow: #ffffff;
}

.btn-content {
  display: flex;
  align-items: center;
  padding: 5px 10px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 15px;
  color: var(--color-text);
  background: var(--color-background);
  transition: 1s;
  border-radius: 30px;
  box-shadow: 0 0 0.2em 0 var(--color-background);
}

.btn-content:hover, .btn-content:focus {
  transition: 0.5s;
  -webkit-animation: btn-content 1s;
  animation: btn-content 1s;
  outline: 0.1em solid transparent;
  outline-offset: 0.2em;
  box-shadow: 0 0 0.4em 0 var(--color-background);
}

.btn-content .icon-arrow {
  transition: 0.5s;
  margin-right: 0px;
  transform: scale(0.6);
}

.btn-content:hover .icon-arrow {
  transition: 0.5s;
  margin-right: 25px;
}

.icon-arrow {
  width: 15px;
  margin-left: 15px;
  position: relative;
  top: 6%;
}
  
/* SVG */
#arrow-icon-one {
  transition: 0.4s;
  transform: translateX(-60%);
}

#arrow-icon-two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.btn-content:hover #arrow-icon-three {
  animation: color_anim 1s infinite 0.2s;
}

.btn-content:hover #arrow-icon-one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.btn-content:hover #arrow-icon-two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */
@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: var(--color-background);
  }

  100% {
    fill: white;
  }
}

/* Button animations */
@-webkit-keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}

@keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
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
  color: white; 
}
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
.btn2 {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color:  rgb(234, 195, 18);
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
  color: white; /* Cambio a color negro */
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
  background-color:rgb(211, 41, 41);
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
  color: white;
}
.svgIcon {
  width: 12px;
  transition-duration: .3s;
}

</style>
    <div class="container-fluid">
        <div class="row">
            @if (Auth::user()->rol_id === 1 || Auth::user()->rol_id === 2)
            <div class="col-sm-10">
                <div class="card">
                <br>
                <div class="btn-conteiner">
  <a class="btn-content" href="{{ route('talleres.create') }}">
    <span class="btn-title">TALLER</span>
    <span class="icon-arrow">
      <svg width="60px" height="35px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a>
</div>   
<br>
             
                             <div class="float-left">
                                <a href="{{ route('TallerExcel') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                    EXCEL
                                  </a>
                                  <a href="{{ route('TalleresPDF') }}" class="btn btn-danger btn-sm float-right"  data-placement="left">
                                    PDF
                                  </a>

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
                                       
										<th>Código de Contratación</th>
										<th>Nombre Taller</th>
										<th>Dirección </th>
										<th>Descripción Especialidad</th>
										<th>Fecha de Vencimiento </th>
                                        <th>Documento Licitacion </th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($talleres as $tallere)
                                        <tr>
                                        
											<td>{{ $tallere->Contratacion }}</td>
											<td>{{ $tallere->NombreTaller }}</td>
											<td>{{ $tallere->DireccionTaller }}</td>
											<td>{{ $tallere->DescripcionEsp }}</td>
											<td>{{ $tallere->FechaVenTaller }}</td>

                                            <td>
                                            <a class="Ver" href="/TallerPDF/{{ $tallere->documento }}" class="btn btn-sm btn-info" target="_blank">  <i class="fas fa-eye"></i></a> 
<br>                                        <a href="/TallerPDF/{{ $tallere->documento }}" download>
                                            <button class="Uno">
                                            <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="svgIcon">
                                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"></path>
                                            </svg>
                                            </button>
                                            </a>

                                            <td>
                                                <form action="{{ route('talleres.destroy',$tallere->idTaller) }}" method="POST">
                                                   
                                                    <a class="btn2" href="{{ route('talleres.edit',$tallere->idTaller) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    <br>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button"><i class="fa fa-fw fa-trash"></i></button>
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
                {!! $talleres->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
