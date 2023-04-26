<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Departamento;
use App\Models\Role;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }


      public function create()
    {
        $users = new User();
        $departameto = Departamento::selectRaw('CONCAT(nombreDepa) AS nombreDepa, idDepartamento')->pluck('nombreDepa','idDepartamento');

        $rol = Role::selectRaw('CONCAT(NombreRol) AS NombreRol, idRol')->where('NombreRol', '!=', 'superAdmin')->pluck('NombreRol','idRol');

        return view('user.create', compact('users','departameto','rol'));
    }

    public function vistaRol($NewEmail,$token){

        $users = User::where('email',$NewEmail)->first();
       // dd($formulario);
        $departameto = Departamento::selectRaw('CONCAT(nombreDepa) AS nombreDepa, idDepartamento')->pluck('nombreDepa','idDepartamento');

        $rol = Role::selectRaw('CONCAT(NombreRol) AS NombreRol, idRol')->where('NombreRol', '!=', 'superAdmin')->pluck('NombreRol','idRol');
        if( $users->token == $token){

            return view('user.rol', compact('users','departameto', 'rol'));

        }else{
            return redirect()->route('user.index')
            ->with('success', 'Token es distinto al de la solicitud.');
        }
        
    }
//cambiarRol
public function cambiarRol(Request $request, $id){
    $user = User::find($id);
    $rol = Role::find($request->rol);

    if (!$user || !$rol) {
        return redirect()->route('users.index')
            ->with('error', 'Usuario o rol no encontrado');
    }

    $user->fill([
        'depa_id' => $request->idDepartamento,
        'rol_id' => $rol->idRol,
        'token' => "",
    ])->save();

    return redirect()->route('users.index')
        ->with('success', 'Usuario editado correctamente');
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = Str::random(30);
        $url = $request->root();
        request()->validate(User::$rules);
        $user = request()->except('_token');
        $user = User::create($request->all());

        return redirect()->route('user.index')
            ->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $departameto = Departamento::selectRaw('CONCAT(nombreDepa) AS nombreDepa, idDepartamento')->pluck('nombreDepa','idDepartamento');

        $rol = Role::selectRaw('CONCAT(NombreRol) AS NombreRol, idRol')->where('NombreRol', '!=', 'superAdmin')->pluck('NombreRol','idRol');

        return view('user.edit', compact('users','departameto','rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        request()->validate(User::$rules);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Usuario editado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado correctamente.');
    }
}
