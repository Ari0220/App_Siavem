<?php

namespace App\Http\Controllers;

use App\Models\Preventivo;
use App\Models\Unidade;
use App\Models\Tallere;
use Illuminate\Http\Request;
use PDF;
use App\Exports\PreventivoExport;
use Maatwebsite\Excel\Facades\Excel;
/**
 * Class PreventivoController
 * @package App\Http\Controllers
 */
class PreventivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preventivos = Preventivo::paginate(3);

        return view('preventivo.index', compact('preventivos'))
            ->with('i', (request()->input('page', 1) - 1) * $preventivos->perPage());
    }

    public function generarPDF(){
        $info = Preventivo::get();
        $data = [
            'title' => 'Listado de Mantenimiento Preventivo',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('preventivo.PDF', $data);
        return $pdf->download('Listado de Mantenimiento Preventivo.pdf');
    }
    public function generarEXCEL(){
        ob_end_clean();
        ob_start();
        return Excel::download(new PreventivoExport, 'Preventivo.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preventivo = new Preventivo();
        $unidade = Unidade::pluck('placa','idUnidad');
        $talleres = Tallere::pluck('NombreTaller','idTaller');
        return view('preventivo.create', compact('preventivo','unidade','talleres'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preventivo::$rules);

        $preventivo = Preventivo::create($request->all());

        return redirect()->route('preventivos.index')
            ->with('success', 'Mantenimiento Preventivo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preventivo = Preventivo::find($id);

        return view('preventivo.show', compact('preventivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preventivo = Preventivo::find($id);
        $unidade = Unidade::pluck('placa','idUnidad');
        $talleres = Tallere::pluck('NombreTaller','idTaller');
        return view('preventivo.edit', compact('preventivo','unidade','talleres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preventivo $preventivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preventivo $preventivo)
    {
        request()->validate(Preventivo::$rules);

        $preventivo->update($request->all());

        return redirect()->route('preventivos.index')
            ->with('success', 'Mantenimiento Preventivo editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preventivo = Preventivo::find($id)->delete();

        return redirect()->route('preventivos.index')
            ->with('success', 'Mantenimiento Preventivo eliminado correctamente');
    }
}
