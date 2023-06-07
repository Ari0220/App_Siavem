<?php

namespace App\Http\Controllers;

use App\Models\Correctivo;
use App\Models\Unidade;
use App\Models\Tallere;
use Illuminate\Http\Request;
use PDF;
use App\Exports\CorrectivoExport;
use Maatwebsite\Excel\Facades\Excel;
/**
 * Class CorrectivoController
 * @package App\Http\Controllers
 */
class CorrectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correctivos = Correctivo::paginate(3);

        return view('correctivo.index', compact('correctivos'))
            ->with('i', (request()->input('page', 1) - 1) * $correctivos->perPage());
    }
    public function generarPDF(){
        $info = Correctivo::get();
        $data = [
            'title' => 'Listado de Mantenimiento Correctivos',
            'date' => date('m/d/Y'),
            'info' => $info
        ];    
        $pdf = PDF::loadView('correctivo.PDF', $data);
        return $pdf->download('Listado de Mantenimiento Correctivos.pdf');
    }
    public function generarEXCEL(){
        ob_end_clean();
        ob_start();
        return Excel::download(new CorrectivoExport, 'Correctivo.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $correctivo = new Correctivo();
        $unidade = Unidade::pluck('placa','idUnidad');
        $talleres = Tallere::pluck('NombreTaller','idTaller');
        return view('correctivo.create', compact('correctivo','unidade','talleres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Correctivo::$rules);

        $correctivo = Correctivo::create($request->all());

        return redirect()->route('correctivos.index')
            ->with('success', 'Mantenimiento Correctivo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $correctivo = Correctivo::find($id);

        return view('correctivo.show', compact('correctivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $correctivo = Correctivo::find($id);
        $unidade = Unidade::pluck('placa','idUnidad');
        $talleres = Tallere::pluck('NombreTaller','idTaller');
        return view('correctivo.edit', compact('correctivo','unidade','talleres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Correctivo $correctivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Correctivo $correctivo)
    {
        request()->validate(Correctivo::$rules);

        $correctivo->update($request->all());

        return redirect()->route('correctivos.index')
            ->with('success', 'Mantenimiento Correctivo editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $correctivo = Correctivo::find($id)->delete();

        return redirect()->route('correctivos.index')
            ->with('success', 'Mantenimiento Correctivo eliminado correctamente');
    }
}
