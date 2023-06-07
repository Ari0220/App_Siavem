<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class DepartamentoController
 * @package App\Http\Controllers
 */
class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::paginate(3);

        return view('departamento.index', compact('departamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $departamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamento = new Departamento();
        return view('departamento.create', compact('departamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Departamento::$rules);

        $departamento = Departamento::create($request->all());

        return redirect()->route('departamentos.index')
            ->with('success', 'Departamento creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $idDepartamento
     * @return \Illuminate\Http\Response
     */
    public function show($idDepartamento)
    {
        $departamento = Departamento::find($idDepartamento);

        return view('departamento.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $idDepartamento
     * @return \Illuminate\Http\Response
     */
    public function edit($idDepartamento)
    {
        $departamento = Departamento::find($idDepartamento);

        return view('departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Departamento $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        request()->validate(Departamento::$rules);

        $departamento->update($request->all());

        return redirect()->route('departamentos.index')
            ->with('success', 'Departamento editado correctamente');
    }

    /**
     * @param int $idDepartamento
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleado = Empleado::where('departamento_id',$id)->get();

        if($empleado->isEmpty()){

        $departamento = Departamento::find($id)->delete();
        return redirect()->route('departamentos.index')
            ->with('success', 'Departamento eliminado correctamente');
        }else {
            return redirect()->route('departamentos.index')
            ->with('success', 'Departamento se encuentra en un empleado');
        }
    }
}
