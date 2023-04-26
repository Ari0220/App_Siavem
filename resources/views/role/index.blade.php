@extends('layouts.app')

@section('template_title')
    Role
@endsection

@section('content')
<style>
    .row{
        justify-content: center;
    }
</style>
    <div class="container-fluid">
        <div class="row">
        @if (Auth::user()->rol_id === 1 || Auth::user()->rol_id === 2)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header list-group-item-warning">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <strong>{{ __('Rol') }}</strong>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Rol') }}
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
                                        <th>ID</th>
                                        
									
										<th> Rol</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											
											<td>{{ $role->NombreRol }}</td>

                                            <td>
                                                <form action="{{ route('roles.destroy',$role->idRol) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('roles.show',$role->idRol) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('roles.edit',$role->idRol) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
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
                {!! $roles->links() !!}
            </div>
            @endif
        </div>
    </div>
@endsection
